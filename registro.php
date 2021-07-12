<?php 
include("con_db.php");
if (isset($_POST['ingresar'])){
	if (strlen($_POST['rut']) >=1 && strlen($_POST['contrasena']) >=1){
		$rut=trim($_POST['rut']);
		$contrasena=trim($_POST['contrasena']);
		$consulta="SELECT rut,contrasena FROM usuarios WHERE usuarios.rut='$rut' AND usuarios.contrasena='$contrasena'";
		$resultado=mysqli_query($conex,$consulta);
		$row= mysqli_fetch_assoc($resultado);
		if (is_null($row['rut']) && is_null($row['contrasena'])){
			?>
			<h3 class="bad">UPS! NO ENCONTRAMOS ESAS CREDENCIALES EN LA BASE DE DATOS :{</h3>
			<?php
		}else{
			?>
			<h3 class="ok">¡BIENVENIDO A UCN!</h3>
			<?php 
			
			header("Location: http://localhost/ucn/my.php");
			exit;
		}

	}else{
		?>
		<h3 class="bad">Complete todos los campos!</h3>
		<?php
		}
}
?>