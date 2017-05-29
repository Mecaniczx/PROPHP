<!DOCTYPE html>
<html>
<head>
	<title>Doc</title>
</head>
<body>
<?php
	
	$busqueda_cart=$_POST["c_art"];


	try
	{

	$base=new PDO('mysql:host=localhost; dbname=curso_sql','root','');
	
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$base->exec("SET CHARACTER SET utf8");

	/*$sql="SELECT NOMBREARTÍCULO,SECCIÓN,PRECIO,PAÍSDEORIGEN FROM PRODUCTOS WHERE SECCIÓN = :SECC AND PAÍSDEORIGEN= :PORIG";*/

	/*$sql="INSERT INTO PRODUCTOS(CÓDIGOARTÍCULO,SECCIÓN,NOMBREARTÍCULO,PRECIO,FECHA,IMPORTADO,PAÍSDEORIGEN)VALUES(:c_art,:seccion,:n_art,:precio,:fecha,:importado,:p_orig)";*/

	$sql="DELETE FROM PRODUCTOS WHERE CÓDIGOARTÍCULO=:c_art";

	$resultado=$base->prepare($sql);

	//$resultado->execute(array(":SECC"=>$busqueda_sec,":PORIG"=>$busqueda_pais));

	$resultado->execute(array(":c_art"=>$busqueda_cart));

	/*while($registro=$resultado->fetch(PDO::FETCH_ASSOC))
	{

		echo "Nombre Articulo: " . $registro['NOMBREARTÍCULO'] . " Sección: ".$registro['SECCIÓN']." Precio: " . $registro['PRECIO']. " Pais de origen: " . $registro['PAÍSDEORIGEN'] . "<br>";


	}*/

	echo "Eliminado";

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