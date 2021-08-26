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

require_once $_SERVER['DOCUMENT_ROOT'] . '/ClassABM/class_abm.php';

try {

    Sitios::setDbSever("192.168.0.170");
    Sitios::setDbUser("pruebas_pandora");
    Sitios::setDbPass("GhJvPevfgGD5");
    Sitios::setDbBase("aplics_usal");
    Sitios::setDbCharset("utf8");
    Sitios::setDbTipo("mysql");

    Sitios::setDieOnError(true);
    Sitios::setDebug(true);
    Sitios::setMostrarErrores(true);

    $abm = new class_abm();

    $abm->setTabla("APLICACION");
    $abm->setRegistros_por_pagina(40);
    $abm->setCampoId("IDAPLICACION");

    $abm->setOrderByPorDefecto("DESCRIPCION DESC");

    $abm->isCampoIdEsEditable(False);
    $abm->setMostrarNuevo(true);
    $abm->setMostrarBorrar(true);
    $abm->setMostrarEditar(true);
    $abm->setBusquedaTotal(true);

    $abm->crearCampoTipo('numero');
    $abm->getUltimoCampo()->setCampo('IDAPLICACION');
    $abm->getUltimoCampo()->setExportar(TRUE);
    $abm->getUltimoCampo()->setTitulo('ID');
    $abm->getUltimoCampo()->setCantidadDecimales(0);
    $abm->getUltimoCampo()->setBuscar(false);
    $abm->getUltimoCampo()->setNoEditar(true);
    $abm->getUltimoCampo()->setFormatear(false);
    $abm->getUltimoCampo()->setNoNuevo(true);
    $abm->getUltimoCampo()->setNoEditar(true);

    $abm->crearCampoTipo('texto');
    $abm->getUltimoCampo()->setCampo('DESCRIPCION');
    $abm->getUltimoCampo()->setExportar(TRUE);
    $abm->getUltimoCampo()->setTitulo('DESCRIPCION');
    $abm->getUltimoCampo()->setBuscar(true);

    $abm->crearCampoTipo('dbCombo');
    $abm->getUltimoCampo()->setCampo('IDLENGUAJE');
    $abm->getUltimoCampo()->setTitulo('Lenguaje');
    $abm->getUltimoCampo()->setCampoValor("IDLENGUAJE");
    $abm->getUltimoCampo()->setCampoTexto("DESCRIPCION");
    $abm->getUltimoCampo()->setJoinTable("aux_LENGUAJE");
    $abm->getUltimoCampo()->setJoinCondition("LEFT");
    $abm->getUltimoCampo()->setMostrarValor(true);
    $abm->getUltimoCampo()->setValorPredefinido(array_key_exists('IDLENGUAJE', $_REQUEST) ? $_REQUEST['IDLENGUAJE'] : 1);

    $abm->crearCampoTipo('bit');
    $abm->getUltimoCampo()->setCampo('ACTIVA');
    $abm->getUltimoCampo()->setExportar(TRUE);
    $abm->getUltimoCampo()->setTitulo('ACTIVA');
    $abm->getUltimoCampo()->setBuscar(true);

    $abm->crearCampoTipo('fecha');
    $abm->getUltimoCampo()->setCampo('FECHAALTA');
    $abm->getUltimoCampo()->setExportar(TRUE);
    $abm->getUltimoCampo()->setTitulo('FECHAALTA');
    $abm->getUltimoCampo()->setBuscar(true);

    $abm->crearCampoTipo('dbCombo');
    $abm->getUltimoCampo()->setCampo('id_entidad');
    $abm->getUltimoCampo()->setTitulo('Entidad');
    $abm->getUltimoCampo()->setCampoValor("id_entidad");
    $abm->getUltimoCampo()->setCampoTexto("DescripocionCorta");
    $abm->getUltimoCampo()->setJoinTable("aux_ENTIDADES");
    $abm->getUltimoCampo()->setJoinCondition("LEFT");
    $abm->getUltimoCampo()->setMostrarValor(true);

    $abm->crearCampoTipo('texto');
    $abm->getUltimoCampo()->setCampo('nombreCorto');
    $abm->getUltimoCampo()->setExportar(TRUE);
    $abm->getUltimoCampo()->setTitulo('nombreCorto');
    $abm->getUltimoCampo()->setBuscar(true);

    $abm->generarAbm("", "Aplicaciones");

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