<?php
ob_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/ClassABM/class_abm_2.php';
// header ('Content-Type => application/json'); // cabecera json
// $request = json_decode(file_get_contents('php://input'));
$_REQUEST['proyecto'] = 2;

try {
    if (empty(Sitios::getDb())) {

        Sitios::setDbSever("192.168.0.170");
        Sitios::setDbUser("pruebas_pandora");
        Sitios::setDbPass("GhJvPevfgGD5");
        Sitios::setDbBase("aplics_usal");
        Sitios::setDbCharset("utf8");
        Sitios::setDbTipo("mysql");

        Sitios::setDieOnError(false);
        Sitios::setDebug(false);
        Sitios::setMostrarErrores(false);
    }

    $db = Sitios::openConnection();

    $proyecto = getProyecto($_REQUEST['proyecto']);

    $consulta_prioridades = "SELECT nombre FROM prioridades";

    $rest_prioridades = $db->query($consulta_prioridades);

    $prioridades = array();

    while ($filas_prioridades = $db->fetch_array($rest_prioridades)) {
        array_push($prioridades, $filas_prioridades['nombre']);
    }

    $consulta_cu = "SELECT id_caso, nombre, descripcion, precondicion, flujo_normal, flujo_alterno, post_condicion, puntos_extencion, requ_especiales, reque_rela
FROM casos_de_uso WHERE id_proyecto = " . $_REQUEST['proyecto'];

    $rest_cu = $db->query($consulta_cu);

    $cu = array();

    while ($filas_cu = $db->fetch_array($rest_cu)) {

        $consulta_cu_alterno = "SELECT
			    cu_flujo_alterno.orden AS orden,
			    actores.nombre AS actor,
			    cu_flujo_alterno.accion_autor AS accion_autor,
			    cu_flujo_alterno.accion_sistema AS accion_sistema
			FROM
			    cu_flujo_alterno
			INNER JOIN actores ON actores.id_actor = cu_flujo_alterno.id_autor
			WHERE
			    id_cu = " . $filas_cu['id_caso'];

        $rest_cu_alterno = $db->query($consulta_cu_alterno);
        $cu_alterno = array();
        while ($filas_cu_alterno = $db->fetch_array($rest_cu_alterno)) {
            array_push($cu_alterno[$filas_cu_alterno['orden']], array(
                "actor" => $filas_cu_alterno['actor'],
                "accion_autor" => $filas_cu_alterno['accion_autor'],
                "accion_sistema" => $filas_cu_alterno['accion_sistema']
            ));
        }

        $consulta_cu_normal = "SELECT
			    cu_flujo_normal.orden AS orden,
			    actores.nombre AS actor,
			    cu_flujo_normal.accion_autor AS accion_autor,
			    cu_flujo_normal.accion_sistema AS accion_sistema
			FROM
			    cu_flujo_normal
			INNER JOIN actores ON actores.id_actor = cu_flujo_normal.id_autor
			WHERE
			    id_cu = " . $filas_cu['id_caso'];

        $rest_cu_normal = $db->query($consulta_cu_normal);
        $cu_normal = array();
        while ($filas_cu_normal = $db->fetch_array($rest_cu_normal)) {
            array_push($cu_normal[$filas_cu_normal['orden']], array(
                "actor" => $filas_cu_normal['actor'],
                "accion_autor" => $filas_cu_normal['accion_autor'],
                "accion_sistema" => $filas_cu_normal['accion_sistema']
            ));
        }

        array_push($cu, array(
            codigo => $filas_cu['id_caso'],
            nombre => $filas_cu['nombre'],
            descripcion => $filas_cu['descripcion'],
            requerimiento => $filas_cu['reque_rela'],
            precondicion => $filas_cu['precondicion'],
            flujoNormal => $filas_cu['flujo_normal'],
            fnActorSistema => $cu_normal,
            flujoAlterno => $filas_cu['flujo_alterno'],
            faActorSistema => $cu_alterno,
            Poscondicion => $filas_cu['post_condicion'],
            rEspeciales => $filas_cu['requ_especiales'],
            pExtension => $filas_cu['puntos_extencion']
        ));
    }

    $consulta_docsRelacionados = "SELECT * FROM docs_x_proyecto WHERE id_proyecto = " . $_REQUEST['proyecto'];
    $rest_docsRelacionados = $db->query($consulta_docsRelacionados);
    $docsRelacionados = array();

    while ($filas_docsRelacionados = $db->fetch_array($rest_docsRelacionados)) {
        array_push($docsRelacionados, array(
            "titulo" => $filas_docsRelacionados['nombre'],
            "fecha" => $filas_docsRelacionados['fecha'],
            "organizacion" => $filas_docsRelacionados['organizacion'],
            "id" => $filas_docsRelacionados['id_documento']
        ));
    }

    $req_no_f = getRequerimientosNoF($_REQUEST['proyecto']);
    $req_no_f['Propiedad Intelectual'] = array();

    $array = array(
        "nombreProyecto" => $proyecto['nombre'],
        "versionProyecto" => $proyecto['version_actual'],
        "versionesProyecto" => getVersiones($_REQUEST['proyecto']),
        "alcance" => $proyecto['descripcion'],
        "definiciones" => getDefiniciones($_REQUEST['proyecto']),
        "requerimientos" => getRequerimietosF($_REQUEST['proyecto']),
        "prioridadesReques" => $prioridades,
        "usabilidad" => $req_no_f['Usabilidad'],
        "confiabilidad" => $req_no_f['Confiabilidad'],
        "seguridad" => $req_no_f['Seguridad'],
        "eficiencia" => $req_no_f['Eficiencia'],
        "mantenimientoYActualizacion" => $req_no_f['Mantenimiento y Actualizaci�n'],
        "operabilidad" => $req_no_f['Soportabilidad y Operabilidad'],
        "restriccionDeDiseno" => $req_no_f['Restricci�n de Dise�o'],
        "documentacionYAyuda" => $req_no_f['Documentaci�n y Ayuda'],
        "interUsuario" => $req_no_f['Interfaces de Usuario'],
        "interSoftware" => $req_no_f['Interfaces de Software'],
        "interHardware" => $req_no_f['Interfaces de Hardware'],
        "interComunicaciones" => $req_no_f['Interfaces de Comunicaciones'],
        "politicas" => $req_no_f['Pol�ticas de la Organizaci�n'],
        "oontratosOtrasOrg" => $req_no_f['Contratos con Otras Organizaci'],
        "propInt" => $req_no_f['Propiedad Intelectual'],
        "estandares" => $req_no_f['Est�ndares Aplicables'],
        "Actores" => getActores($_REQUEST['proyecto']),
        "cuResumen" => $cu_normal,
        "cuEspecificaciones" => $cu,
        "docsRelacionados" => $docsRelacionados
    );

    echo json_encode($array);

    ob_end_flush();
} catch (Exception $e) {
    if (Sitios::isDebug() == true) {
        echo __LINE__ . " - " . __FILE__ . " - " . $e->getMessage();
    } else {
        echo $e->getMessage();
    }

    if (Sitios::isDieOnError() == true) {
        exit();
    }
}

function getProyecto(int $id_proyecto): array
{
    $db = Sitios::openConnection();

    $consulta = "SELECT * FROM proyectos WHERE id_proyecto = :id";

    $parametros = array();
    $parametros[] = $id_proyecto;

    $result = $db->query($consulta, true, $parametros);

    $filas = $db->fetch_array($result);

    return $filas;
}

function getVersiones(int $id_proyecto): array
{
    $db = Sitios::openConnection();

    $consulta = "SELECT * FROM versiones_proyecto WHERE id_proyecto = :id";

    $parametros = array();
    $parametros[] = $id_proyecto;

    $result = $db->query($consulta, true, $parametros);

    $array = array();

    while ($filas = $db->fetch_array($result)) {
        array_push($array, array(
            "version" => $filas['version'],
            "fecha" => $filas['fecha'],
            "nombre" => $filas['autor'],
            "descripcion" => $filas['descripcion']
        ));
    }

    return $array;
}

function getDefiniciones(int $id_proyecto): array
{
    $db = Sitios::openConnection();

    $consulta = "SELECT * FROM definiciones_x_proyecto INNER JOIN definiciones ON definiciones.id_definicion = definiciones_x_proyecto.id_definicion WHERE definiciones_x_proyecto.id_proyecto = :id";

    $parametros = array();
    $parametros[] = $id_proyecto;

    $result = $db->query($consulta, true, $parametros);

    $array = array();

    while ($filas = $db->fetch_array($result)) {
        array_push($array, array(
            "abreviatura" => $filas['abreviatura'],
            "palabra" => $filas['concepto'],
            "definicion" => $filas['descripcion']
        ));
    }

    return $array;
}

function getRequerimietosF(int $id_proyecto): array
{
    $db = Sitios::openConnection();

    $consulta = "SELECT requerimientos_funcionales.nombre AS nombre,
						requerimientos_funcionales.identificador AS identificador,
						requerimientos_funcionales.descripcion AS descripcion,
						prioridades.nombre AS prioridad,
				        reque_rela.identificador AS rela_identif,
				        reque_rela.nombre AS rela_nombre
				FROM requerimientos_funcionales
				INNER JOIN prioridades ON prioridades.id_prioridad = requerimientos_funcionales.id_prioridad
				LEFT JOIN(SELECT * FROM requerimientos_funcionales) reque_rela ON reque_rela.id_requerimiento = requerimientos_funcionales.reque_relacionado
				WHERE
					requerimientos_funcionales.id_prioridad = 1
				    AND requerimientos_funcionales.id_proyecto = :id";

    $parametros = array();
    $parametros[] = $id_proyecto;

    $result = $db->query($consulta, true, $parametros);

    $array = array();

    while ($filas = $db->fetch_array($result)) {
        array_push($array, array(
            "nombre" => $filas['nombre'],
            "identificador" => $filas['identificador'],
            "descripcion" => $filas['descripcion'],
            "prioridad" => $filas['prioridad'],
            "relacionado" => $filas['rela_identif'] . " - " . $filas['rela_nombre']
        ));
    }

    return $array;
}

function getRequerimientosNoF(int $id_proyecto): array
{
    $db = Sitios::openConnection();

    $consulta = "SELECT reque_no_func.nombre AS nombre, reque_no_func.descripcion AS descripcion,
tipos_reque_no_funcionales.nombre AS tipo FROM reque_no_func INNER JOIN tipos_reque_no_funcionales
ON tipos_reque_no_funcionales.id_tipos_reques = reque_no_func.id_tipo WHERE id_proyecto = :id";

    $parametros = array();
    $parametros[] = $id_proyecto;

    $result = $db->query($consulta, true, $parametros);

    $array = array();

    while ($filas = $db->fetch_array($result)) {
        $array[$filas['tipo']] = array();

        array_push($array[$filas['tipo']], array(
            $filas['nombre'] => $filas['descripcion']
        ));
    }

    return $array;
}

function getActores(int $id_proyecto): array
{
    $db = Sitios::openConnection();

    $consulta = "SELECT actores.nombre AS nombre, actores.descripcion AS descripcion, aux_tipo_actor.nombre FROM actores INNER JOIN aux_tipo_actor ON aux_tipo_actor.id_tipo_actor = actores.tipo WHERE id_proyecto = :id";

    $parametros = array();
    $parametros[] = $id_proyecto;

    $result = $db->query($consulta, true, $parametros);

    $array = array();

    while ($filas = $db->fetch_array($result)) {
        array_push($array, array(
            "nombre" => $filas['nombre'],
            "descripcion" => $filas['descripcion']
        ));
    }

    return $array;
}
?>