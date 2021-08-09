<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1) { 
	    $nombre=trim($_POST['nombre']);
	    $correo = trim($_POST['correo']);
        $apellido=$_POST['apellido'];
        $usuario=$_POST['usuario'];
        $telefono=$_POST['telefono'];
        $domicilio=$_POST['domicilio'];
        $contraseña=$_POST['contraseña'];
	    $consulta = "INSERT INTO usuarios(id_usuario,nombre,apellido,usuario,correo,telefono,domicilio,contraseña)VALUES (NULL,'$nombre','$apellido','$usuario','$correo','$telefono','$domicilio','$contraseña')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡ se ha enviado la información correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>