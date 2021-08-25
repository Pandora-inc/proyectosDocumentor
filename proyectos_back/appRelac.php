<?php
require_once ("classes/class_abm_2.php");
// require_once ("../classes/class_sitio.php");

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

$entidades = "";
$entidades .= "@startuml";
$entidades .= "\n";
$entidades .= "!include <archimate/Archimate>";
$entidades .= "\n";

$consulta = "SELECT
    APLICACION.DESCRIPCION AS descAplic,
    APLICACION.nombreCorto AS nombreAplic,
    aux_LENGUAJE.DESCRIPCION AS lenguaje,
    aux_ENTIDADES.entidad AS entidad
FROM
    `APLICACION`
INNER JOIN aux_ENTIDADES ON APLICACION.id_entidad = aux_ENTIDADES.id_entidad
INNER JOIN aux_LENGUAJE ON APLICACION.IDAPLICACION = aux_LENGUAJE.IDLENGUAJE
WHERE ACTIVA = 1";

$rest = $db->query ($consulta);

while ($filass = $db->fetch_array ($rest))
{
	$entidades .= $filass ['entidad'] . "(" . $filass ['nombreAplic'] . ', "' . $filass ['descAplic'] . ' \n ' . $filass ['lenguaje'] . '")';
	$entidades .= "\n";
}

$consulta = "SELECT
			aux_RELACIONES.relacion,
			aplDesde.nombreCorto AS desde,
			aplHasta.nombreCorto AS hasta,
			relaXAplic.textoRelacion
FROM `relaXAplic`
INNER JOIN APLICACION AS aplDesde ON aplDesde.IDAPLICACION = relaXAplic.idAplicacionDesde
INNER JOIN APLICACION AS aplHasta ON aplHasta.IDAPLICACION = relaXAplic.idAplicacionHasta
INNER JOIN aux_RELACIONES ON aux_RELACIONES.id_relacion = relaXAplic.idRelacion
";

$rest = $db->query ($consulta);

$entidades .= "\n";

while ($filas = $db->fetch_array ($rest))
{
	$entidades .= "Rel_" . ucfirst ($filas ['relacion']) . "(" . $filas ['desde'] . ', ' . $filas ['hasta'] . ', "' . $filass ['textoRelacion'] . '")';
	$entidades .= "\n";
}

$entidades .= "@enduml";

$encode = encodep ($entidades);
echo "<img src='http://www.plantuml.com/plantuml/png/{$encode}'>";

function encodep($text)
{
	$data = utf8_encode ($text);
	$compressed = gzdeflate ($data, 9);
	return encode64 ($compressed);
}

function encode6bit($b)
{
	if ($b < 10)
	{
		return chr (48 + $b);
	}
	$b -= 10;
	if ($b < 26)
	{
		return chr (65 + $b);
	}
	$b -= 26;
	if ($b < 26)
	{
		return chr (97 + $b);
	}
	$b -= 26;
	if ($b == 0)
	{
		return '-';
	}
	if ($b == 1)
	{
		return '_';
	}
	return '?';
}

function append3bytes($b1, $b2, $b3)
{
	$c1 = $b1 >> 2;
	$c2 = (($b1 & 0x3) << 4) | ($b2 >> 4);
	$c3 = (($b2 & 0xF) << 2) | ($b3 >> 6);
	$c4 = $b3 & 0x3F;
	$r = "";
	$r .= encode6bit ($c1 & 0x3F);
	$r .= encode6bit ($c2 & 0x3F);
	$r .= encode6bit ($c3 & 0x3F);
	$r .= encode6bit ($c4 & 0x3F);
	return $r;
}

function encode64($c)
{
	$str = "";
	$len = strlen ($c);

	for($i = 0; $i < $len; $i += 3)
	{
		if ($i + 2 == $len)
		{
			$str .= append3bytes (ord (substr ($c, $i, 1)), ord (substr ($c, $i + 1, 1)), 0);
		}
		else if ($i + 1 == $len)
		{
			$str .= append3bytes (ord (substr ($c, $i, 1)), 0, 0);
		}
		else
		{
			$str .= append3bytes (ord (substr ($c, $i, 1)), ord (substr ($c, $i + 1, 1)), ord (substr ($c, $i + 2, 1)));
		}
	}
	return $str;
}