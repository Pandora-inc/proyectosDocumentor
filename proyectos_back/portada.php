<?php
ob_start ();
require_once ("classes/class_abm_2.php");

    if (empty (Sitios::getDb ()))
    {
        
        Sitios::setDbSever ("192.168.0.170");
        Sitios::setDbUser ("pruebas_pandora");
        Sitios::setDbPass ("GhJvPevfgGD5");
        Sitios::setDbBase ("aplics_usal");
        Sitios::setDbCharset ("utf8");
        Sitios::setDbTipo ("mysql");
        
        Sitios::setDieOnError (false);
        Sitios::setDebug (false);
        Sitios::setMostrarErrores (false);
    }
    
    $db = Sitios::openConnection ();
    
    $consulta = "SELECT * FROM proyectos WHERE id_proyecto = :id";
    
    $parametros = array ();
    $parametros [] = $_REQUEST['id_proyecto'];
    
    $result = $db->query ($consulta, true, $parametros);
    
    $filas = $db->fetch_array ($result);
        
    
    ?>
        <div>
            <p class="c10 c14"><span class="c12"></span></p>
        </div>
        <p class="c10 c14 c65"><span class="c12"></span></p>
        <p class="c10 c14"><span class="c12"></span></p>
        <p class="c14 c83"><span class="c86"></span></p>
        <p class="c51 c14"><span class="c35"></span></p>
        <p class="c14 c51"><span class="c35"></span></p>
        <p class="c51"><span class="c94">Especificaci&oacute;n de Requerimientos del Software</span></p>
        <p class="c51"><span class="c35">Proyecto: <?php echo $filas['nombre']; ?></span></p>
        <p class="c51 c14"><span class="c26"></span></p>
        <p class="c51"><span class="c47">Versi&oacute;n: <?php echo $filas['version_actual']; ?></span></p
        <p class="separador"></p>
        <p class="separador"></p>
       
        <p class="separador"></p>