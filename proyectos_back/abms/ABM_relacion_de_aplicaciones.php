<?php
/**
 * ABM de apellidos para http://feriadellibrovasco.com.
 *
 * @author iberlot <@> ivanberlot@gmail.com
 * @since 6/01/2021 - Lenguaje PHP
 *
 * @name abmApellidos.php
 *
 * @version 0.1 - Version de inicio
 *
 * @link classes/class_abm_2.php - Archivo con todos los includes del sistema
 */
/*
 * Querido programador:
 *
 * Cuando escribi este codigo, solo Dios y yo sabiamos como funcionaba.
 * Ahora, Solo Dios lo sabe!!!
 *
 * Asi que, si esta tratando de 'optimizar' esta rutina y fracasa (seguramente),
 * por favor, incremente el siguiente contador como una advertencia para el
 * siguiente colega:
 *
 * totalHorasPerdidasAqui = 8
 *
 */
ob_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/ClassABM/class_abm_2.php';

try {

    Sitios::setDbSever("192.168.0.170");
    Sitios::setDbUser("pruebas_pandora");
    Sitios::setDbPass("GhJvPevfgGD5");
    Sitios::setDbBase("aplics_usal");
    Sitios::setDbCharset("utf8");
    Sitios::setDbTipo("mysql");

    Sitios::setDieOnError(false);
    Sitios::setDebug(false);
    Sitios::setMostrarErrores(false);

    $abm = new class_abm();

    $abm->setTabla("relaXAplic");
    $abm->setRegistros_por_pagina(40);
    $abm->setCampoId("id_relacion_app");

    // $abm->setOrderByPorDefecto ("DESCRIPCION DESC");

    $abm->isCampoIdEsEditable(False);
    $abm->setMostrarNuevo(true);
    $abm->setMostrarBorrar(true);
    $abm->setMostrarEditar(true);
    $abm->setBusquedaTotal(true);

    $abm->crearCampoTipo('numero');
    $abm->getUltimoCampo()->setCampo('id_relacion_app');
    $abm->getUltimoCampo()->setExportar(TRUE);
    $abm->getUltimoCampo()->setTitulo('ID');
    $abm->getUltimoCampo()->setCantidadDecimales(0);
    $abm->getUltimoCampo()->setBuscar(false);
    $abm->getUltimoCampo()->setNoEditar(true);
    $abm->getUltimoCampo()->setFormatear(false);
    $abm->getUltimoCampo()->setNoNuevo(true);
    $abm->getUltimoCampo()->setNoEditar(true);

    $abm->crearCampoTipo('dbCombo');
    $abm->getUltimoCampo()->setCampo('idAplicacionDesde');
    $abm->getUltimoCampo()->setTitulo('Desde');
    $abm->getUltimoCampo()->setCampoValor("IDAPLICACION");
    $abm->getUltimoCampo()->setCampoTexto("DESCRIPCION");
    $abm->getUltimoCampo()->setJoinTable("APLICACION");
    $abm->getUltimoCampo()->setJoinCondition("LEFT");
    $abm->getUltimoCampo()->setMostrarValor(true);
    $abm->getUltimoCampo()->setAliasJoinTable("appDesde");
    $abm->getUltimoCampo()->setValorPredefinido(array_key_exists('idAplicacionDesde', $_REQUEST) ? $_REQUEST['idAplicacionDesde'] : 1);

    $abm->crearCampoTipo('dbCombo');
    $abm->getUltimoCampo()->setCampo('idAplicacionHasta');
    $abm->getUltimoCampo()->setTitulo('Hasta');
    $abm->getUltimoCampo()->setCampoValor("IDAPLICACION");
    $abm->getUltimoCampo()->setCampoTexto("DESCRIPCION");
    $abm->getUltimoCampo()->setJoinTable("APLICACION");
    $abm->getUltimoCampo()->setJoinCondition("LEFT");
    $abm->getUltimoCampo()->setMostrarValor(true);
    $abm->getUltimoCampo()->setAliasJoinTable("appHasta");

    $abm->crearCampoTipo('dbCombo');
    $abm->getUltimoCampo()->setCampo('idRelacion');
    $abm->getUltimoCampo()->setTitulo('Relacion');
    $abm->getUltimoCampo()->setCampoValor("id_relacion");
    $abm->getUltimoCampo()->setCampoTexto("DescripocionCorta");
    $abm->getUltimoCampo()->setJoinTable("aux_RELACIONES");
    $abm->getUltimoCampo()->setJoinCondition("LEFT");
    $abm->getUltimoCampo()->setMostrarValor(true);

    $abm->crearCampoTipo('texto');
    $abm->getUltimoCampo()->setCampo('textoRelacion');
    $abm->getUltimoCampo()->setExportar(TRUE);
    $abm->getUltimoCampo()->setTitulo('Texto');
    $abm->getUltimoCampo()->setBuscar(true);

    $abm->crearCampoTipo('dbCombo');
    $abm->getUltimoCampo()->setCampo('id_ubicacion');
    $abm->getUltimoCampo()->setTitulo('Ubicacion');
    $abm->getUltimoCampo()->setCampoValor("id_ubicacion");
    $abm->getUltimoCampo()->setCampoTexto("descri");
    $abm->getUltimoCampo()->setJoinTable("aux_relaXubicacion");
    $abm->getUltimoCampo()->setJoinCondition("LEFT");
    $abm->getUltimoCampo()->setMostrarValor(true);

    $abm->generarAbm("", "Relaciones");

    if (!isset($_REQUEST['abm_exportar']) and !isset($_REQUEST['abm_editar']) and !isset($_REQUEST['abm_nuevo'])) {

        // include ("/web/html/inc/footer.php");
    }

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