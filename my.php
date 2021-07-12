<!DOCTYPE html>
<html>
<head>
	<title> REPORTE DE HORAS</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo1.css">
<?php 
$inc=include("con_db.php");
//$rut=$_POST['rut'];
if ($inc){
	$consulta="SELECT usuarios.rut,usuarios.nombre,ramos_usuarios.id_ramo,ramos.nombre_ramo from ramos_usuarios INNER JOIN ramos ON ramos_usuarios.id_ramo=ramos.id_ramo INNER JOIN usuarios ON usuarios.rut=ramos_usuarios.rut WHERE usuarios.rut='201527066'";
	$resultado=mysqli_query($conex,$consulta);
	if ($resultado){
		while($row=mysqli_fetch_Array($resultado)){
			$nombre_ramo=$row['nombre_ramo'];
			$id_ramo=$row['id_ramo'];
			?>
			<div class="reportaa" method="post" action="my.php">  
				<table class="tabla" >
					<tbody>
						<div class="bloque1">
							<tr>
								<th class="nombre_ramo"><?php echo $nombre_ramo; ?></th>
								<th class="horas_sema">Horas Semanales</th>	
								<th class="horas_sema">Tuvo algún problema en este ramo?</th>				
							</tr>
							<tr >
								<td class="rect1">CATEDRA</td>
								<td><input type="number" class="input-0" step="0.1"></td>
								<td>
									<input type="text">
								</td>


							</tr>
							<tr>
								<td class="rect1">AYUDANTÍAS</td>
								<td><input type="number" class="input-0" step="0.1"></td>
							</tr>
							<tr>
								<td class="rect1">PRUEBAS</td>
								<td><input type="number" class="input-0" step="0.1"></td>
							</tr>
							<tr>
								<td class="rect1">LABORATORIOS</td>
								<td><input type="number" class="input-0" step="0.1"></td>
							</tr>
							<tr>
								<td class="rect1">PROYECTO</td>
								<td><input type="number" class="input-0" step="0.1"></td>
							</tr>
							<tr>
								<td class="rect1">ESTUDIO/VIDEOS</td>
								<td><input type="number" class="input-0" step="0.1"></td>
							</tr>
						</div>			
					</tbody>
				</table>
			</div>
			<?php 
		}?> <div>
			<input type="submit" name="envia_datos" placeholder="ENVIAR">
		</div>
		<?php
	}
}

?>
</body>
</html>
