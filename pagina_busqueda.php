<!DOCTYPE html>
<html>
<head>
	<title>Doc</title>

	<style>
		table
		{
			width: 300px;
			margin: auto;
			background-color: #FFC;
			border: 2px solid #F00;
			padding: 5px;
		}

		td
		{
			text-align: center;
		}


	</style>

</head>
<body>

	<form action="busqueda.php" method="get">
	<table><tr><td>
		Seccion:</td><td> <input type="text" name="seccion"></td></tr>
		<tr><td>Pais: </td><td><input type="text" name="p_orig"></td></tr>

		<tr><td colspan="2"><input type="submit" name="enviando" value="Dale!!">
		</td></tr></table>

	</form>


</body>
</html>