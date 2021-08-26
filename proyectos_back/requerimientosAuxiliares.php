<!DOCTYPE html>
<html lang="es">
<head>
<meta charaset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="css/estilosReques.css">
<!-- <script data-ad-client="ca-pub-3577918067888586" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->
</head>
<body class="c32">

<?php
ob_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/ClassABM/class_abm_2.php';

try {
    if (empty(Sitios::getDb())) {

        Sitios::setDbSever("192.168.0.170");
        Sitios::setDbUser("pruebas_pandora");
        Sitios::setDbPass("GhJvPevfgGD5");
        Sitios::setDbBase("aplics_usal");
        Sitios::setDbCharset("utf8");
        Sitios::setDbTipo("mysql");

        Sitios::setDieOnError(true);
        Sitios::setDebug(true);
        Sitios::setMostrarErrores(true);
    }

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
					requerimientos_funcionales.id_prioridad > 1
				    AND requerimientos_funcionales.id_proyecto = :id ORDER BY requerimientos_funcionales.id_requerimiento";

    $parametros = array();
    $parametros[] = $_REQUEST['id_proyecto'];

    $result = $db->query($consulta, true, $parametros);

    $array = array();

    while ($filas = $db->fetch_array($result)) {
        $html .= "<div><p class='c4'></p>
		<table class='c68'>
		<tbody>
		<tr class='c6'>
		<td class='c64' colspan='1' rowspan='1'>
		<p class='c10'><span class='c0'><b>Nombre del Requerimiento:</b></span></p>
		<p class='c8'><span class='c7'></span></p>
		</td>
		<td class='c96' colspan='1' rowspan='1'>
		<p class='c9'><span class='c7'>" . $filas['nombre'] . "</span></p>
		</td>
		</tr>
		<tr class='c6'>
		<td class='c88' colspan='1' rowspan='1'>
		<p class='c10'><span class='c0'><b>Identificaci&oacute;n del requerimiento:</b></span></p>
		<p class='c8'><span class='c7'></span></p>
		</td>
		<td class='c85' colspan='1' rowspan='1'>
		<p class='c9'><span class='c7'>" . $filas['identificador'] . "</span></p>
		</td>
		</tr>
		<tr class='c6'>
		<td class='c70' colspan='2' rowspan='1'>
		<p class='c9'><span class='c7'>" . $filas['descripcion'] . "</span></p>
		</td>
		</tr>
		<tr class='c6'>
		<td class='c70' colspan='2' rowspan='1'>
		<p class='c9'>
		<p class='c9'><span class='c7'><b>Prioridad: </b>" . $filas['prioridad'] . "</span></p>
		</td>
		</tr>
		<tr class='c6'>
		<td class='c64' colspan='1' rowspan='1'>
		<p class='c10'><span class='c0'><b>Requerimiento relacionado:</b></span></p>
		<p class='c8'><span class='c7'></span></p></td>
		<td class='c96' colspan='1' rowspan='1'><p class='c9'><span class='c7'>" . ($filas['rela_identif'] ? $filas['rela_identif'] : " - ") . "</span></p></td>
		</tr></tbody></table></div>";
    }
    include_once 'portada.php';

    echo $html . ".<Br /><Br />";

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

?>
</body>