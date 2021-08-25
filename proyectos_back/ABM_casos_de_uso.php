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
ob_start ();

require_once ("classes/class_abm_2.php");

try
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
	
	$abm = new class_abm ();
	
	$abm->setTabla ("casos_de_uso");
	$abm->setRegistros_por_pagina (40);
	$abm->setCampoId ("id_caso");
	
	$abm->setOrderByPorDefecto ("DESCRIPCION DESC");
	
	$abm->isCampoIdEsEditable (False);
	$abm->setMostrarNuevo (true);
	$abm->setMostrarBorrar (true);
	$abm->setMostrarEditar (true);
	$abm->setBusquedaTotal (true);
	
	$abm->crearCampoTipo ('numero');
	$abm->getUltimoCampo ()->setCampo ('id_caso');
	$abm->getUltimoCampo ()->setExportar (TRUE);
	$abm->getUltimoCampo ()->setTitulo ('ID');
	$abm->getUltimoCampo ()->setCantidadDecimales (0);
	$abm->getUltimoCampo ()->setBuscar (false);
	$abm->getUltimoCampo ()->setNoEditar (true);
	$abm->getUltimoCampo ()->setFormatear (false);
	$abm->getUltimoCampo ()->setNoNuevo (true);
	$abm->getUltimoCampo ()->setNoEditar (true);
	
	$abm->crearCampoTipo ('dbCombo');
	$abm->getUltimoCampo ()->setCampo ('id_proyecto');
	$abm->getUltimoCampo ()->setTitulo ('id_proyecto');
	$abm->getUltimoCampo ()->setCampoValor ("id_proyecto");
	$abm->getUltimoCampo ()->setCampoTexto ("nombre");
	$abm->getUltimoCampo ()->setJoinTable ("proyectos");
	$abm->getUltimoCampo ()->setJoinCondition ("INNER");
	$abm->getUltimoCampo ()->setMostrarValor (true);
	
	$abm->crearCampoTipo ('texto');
	$abm->getUltimoCampo ()->setCampo ('nombre');
	$abm->getUltimoCampo ()->setExportar (TRUE);
	$abm->getUltimoCampo ()->setTitulo ('NOMBRE');
	$abm->getUltimoCampo ()->setBuscar (true);
	
	$abm->crearCampoTipo ('texto');
	$abm->getUltimoCampo ()->setCampo ('descripcion');
	$abm->getUltimoCampo ()->setExportar (TRUE);
	$abm->getUltimoCampo ()->setTitulo ('DESCRIPCION');
	$abm->getUltimoCampo ()->setBuscar (true);
	
	$abm->crearCampoTipo ('texto');
	$abm->getUltimoCampo ()->setCampo ('precondicion');
	$abm->getUltimoCampo ()->setExportar (TRUE);
	$abm->getUltimoCampo ()->setTitulo ('precondicion');
	$abm->getUltimoCampo ()->setBuscar (true);
	
	$abm->crearCampoTipo ('texto');
	$abm->getUltimoCampo ()->setCampo ('flujo_normal');
	$abm->getUltimoCampo ()->setExportar (TRUE);
	$abm->getUltimoCampo ()->setTitulo ('flujo_normal');
	$abm->getUltimoCampo ()->setBuscar (true);
	
	$abm->crearCampoTipo ('texto');
	$abm->getUltimoCampo ()->setCampo ('flujo_alterno');
	$abm->getUltimoCampo ()->setExportar (TRUE);
	$abm->getUltimoCampo ()->setTitulo ('flujo_alterno');
	$abm->getUltimoCampo ()->setBuscar (true);
	
	$abm->crearCampoTipo ('texto');
	$abm->getUltimoCampo ()->setCampo ('post_condicion');
	$abm->getUltimoCampo ()->setExportar (TRUE);
	$abm->getUltimoCampo ()->setTitulo ('post_condicion');
	$abm->getUltimoCampo ()->setBuscar (true);
	
	$abm->crearCampoTipo ('texto');
	$abm->getUltimoCampo ()->setCampo ('puntos_extencion');
	$abm->getUltimoCampo ()->setExportar (TRUE);
	$abm->getUltimoCampo ()->setTitulo ('puntos_extencion');
	$abm->getUltimoCampo ()->setBuscar (true);
	
	$abm->crearCampoTipo ('texto');
	$abm->getUltimoCampo ()->setCampo ('requ_especiales');
	$abm->getUltimoCampo ()->setExportar (TRUE);
	$abm->getUltimoCampo ()->setTitulo ('requ_especiales');
	$abm->getUltimoCampo ()->setBuscar (true);
	
	$abm->crearCampoTipo ('dbCombo');
	$abm->getUltimoCampo ()->setCampo ('id_prioridad');
	$abm->getUltimoCampo ()->setTitulo ('prioridad');
	$abm->getUltimoCampo ()->setCampoValor ("id_prioridad");
	$abm->getUltimoCampo ()->setCampoTexto ("nombre");
	$abm->getUltimoCampo ()->setJoinTable ("prioridades");
	$abm->getUltimoCampo ()->setAliasJoinTable ("prioridad");
	$abm->getUltimoCampo ()->setJoinCondition ("LEFT");
	$abm->getUltimoCampo ()->setMostrarValor (true);
	
	$abm->crearCampoTipo ('dbCombo');
	$abm->getUltimoCampo ()->setCampo ('id_frecuencia');
	$abm->getUltimoCampo ()->setTitulo ('id_frecuencia');
	$abm->getUltimoCampo ()->setCampoValor ("id_prioridad");
	$abm->getUltimoCampo ()->setCampoTexto ("nombre");
	$abm->getUltimoCampo ()->setJoinTable ("prioridades");
	$abm->getUltimoCampo ()->setAliasJoinTable ("frecuencia");
	$abm->getUltimoCampo ()->setJoinCondition ("LEFT");
	$abm->getUltimoCampo ()->setMostrarValor (true);
	
	$abm->crearCampoTipo ('dbCombo');
	$abm->getUltimoCampo ()->setCampo ('id_dificultad');
	$abm->getUltimoCampo ()->setTitulo ('id_dificultad');
	$abm->getUltimoCampo ()->setCampoValor ("id_prioridad");
	$abm->getUltimoCampo ()->setCampoTexto ("nombre");
	$abm->getUltimoCampo ()->setJoinTable ("prioridades");
	$abm->getUltimoCampo ()->setAliasJoinTable ("dificultad");
	$abm->getUltimoCampo ()->setJoinCondition ("LEFT");
	$abm->getUltimoCampo ()->setMostrarValor (true);
	
	
	$abm->crearCampoTipo ('dbCombo');
	$abm->getUltimoCampo ()->setCampo ('reque_rela');
	$abm->getUltimoCampo ()->setTitulo ('reque_rela');
	$abm->getUltimoCampo ()->setCampoValor ("id_requerimiento");
	$abm->getUltimoCampo ()->setCampoTexto ("nombre");
	$abm->getUltimoCampo ()->setJoinTable ("requerimientos_funcionales");
	$abm->getUltimoCampo ()->setJoinCondition ("LEFT");
	$abm->getUltimoCampo ()->setMostrarValor (true);
	
	$abm->generarAbm ("", "Casos de uso");
	
	if (!isset ($_REQUEST ['abm_exportar']) and !isset ($_REQUEST ['abm_editar']) and !isset ($_REQUEST ['abm_nuevo']))
	{
		
		// include ("/web/html/inc/footer.php");
	}
	
	ob_end_flush ();
}
catch (Exception $e)
{
	if (Sitios::isDebug () == true)
	{
		echo __LINE__ . " - " . __FILE__ . " - " . $e->getMessage ();
	}
	else
	{
		echo $e->getMessage ();
	}
	
	if (Sitios::isDieOnError () == true)
	{
		exit ();
	}
}