<!DOCTYPE html>
<html>
<head>
	<title>Doc</title>
</head>
<body>
<?php
	
	//$busqueda= $_GET["buscar"];
	$busqueda_sec=$_GET["seccion"];
	$busqueda_pais=$_GET["p_orig"];


	try
	{

	$base=new PDO('mysql:host=localhost; dbname=curso_sql','root','');
	
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$base->exec("SET CHARACTER SET utf8");

	$sql="SELECT NOMBREARTÍCULO,SECCIÓN,PRECIO,PAÍSDEORIGEN FROM PRODUCTOS WHERE SECCIÓN = :SECC AND PAÍSDEORIGEN= :PORIG";

	$resultado=$base->prepare($sql);

	$resultado->execute(array(":SECC"=>$busqueda_sec,":PORIG"=>$busqueda_pais));

	while($registro=$resultado->fetch(PDO::FETCH_ASSOC))
	{

		echo "Nombre Articulo: " . $registro['NOMBREARTÍCULO'] . " Sección: ".$registro['SECCIÓN']." Precio: " . $registro['PRECIO']. " Pais de origen: " . $registro['PAÍSDEORIGEN'] . "<br>";


	}

	$resultado->closeCursor();


	

	}catch(Exception $e)
	{
		die('Error: ' . $e->GetMessage());

		
	}finally{
		$base=null;
	}





?>

<a href="index.php"><button type="button">Regresar</button></a>
</body>
</html>