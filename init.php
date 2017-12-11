<?php
session_start();
ini_set('memory_limit', '-1');
ini_set('max_execution_time', 30000);

$ini = parse_ini_file('config/application.ini', true);

define('HOST', $ini['database']['host']);
define('DATABASE', $ini['database']['name']);
define('USER', $ini['database']['user']);
define('PASS', $ini['database']['pass']);

function mysql_query_get($query)
{
	$mysqli = new mysqli(HOST, USER, PASS, DATABASE);
	return $mysqli->query($query);
}

function microtime_float()
{
	list($useg, $seg) = explode(" ", microtime());
	return ((float)$useg + (float)$seg);
}
//$result = $mysqli->query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");
//$row = $result->fetch_assoc();
//$conexion = mysql_connect(HOST, USER, PASS) or die(mysql_error());
//mysql_select_db(DATABASE, $conexion);