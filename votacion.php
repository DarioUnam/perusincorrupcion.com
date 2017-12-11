<?php
require_once 'init.php';

if(isset($_GET['pantalla']))
{
	$pantalla = isset($_GET['pantalla']) ? $_GET['pantalla'] : '';
	echo '<img  src="CAJERO-'.$pantalla.'.jpg" width="100%" height="100%"/>';	
}



if(isset($_GET['escala']))
{
	$funcionario = isset($_POST['funcionario']) ? $_POST['funcionario'] : '';
	$escala = $_GET['escala'];
	


	$array = array(1,2,3,4,5);
}