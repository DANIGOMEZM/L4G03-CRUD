
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
	<form>
	<table border="1" >
		<tr>
			<td>id</td>
			<td>nombre</td>
			<td>email</td>
		</tr>

		<?php 
		$conexion=mysqli_connect('localhost','root','12345678','personas');
		$sql="SELECT * from personas";
		$res=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($res)){
		 ?>
		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['email'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>
	</form>
	<a href="crear.php">inicio</a>
</body>
</html>