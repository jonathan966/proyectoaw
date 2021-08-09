<!DOCTYPE html>
<html>
 <nav>
            <ul>
               <li><a href="index.html">Inicio<a/></li>
               <li><a href="artículos.html">Articulos<a/></li></li>
               <li> <a href="destacados.html">Destacados<a/></li>
               <li> <a href="Consulta o servicio.html">Consulta o servicio<a/></li></li>
            </ul>
         </nav>
        
    <div class="clearfix"></div>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo1q.css">
</head>

    

<body>

    <h1> Shell Quality Tecno Plus </h1> 
    <div class="clearfix"></div>
    <center>
     <img src="img001/logo.jpg" style="width: 250PX; " id="imagenfoto">
    </center>
        
    <h2> Registro </h2>
    <div class="clearfix"></div>
    <form method="post">
    	<input type="text" name="nombre" placeholder="Nombre completo">
    	<input type="email" name="correo" placeholder="Ingresa tu Email">
        <input type="text" name="apellido" placeholder="Introduce tu apellido">
        <input type="text" name="usuario" placeholder="Introduce tu usuario">
        <input type="text" name="telefono" placeholder="Introduce tu telefono">
        <input type="text" name="domicilio" placeholder="Introduce tu domicilio">
        <input type="text" name="contraseña" placeholder="Introduce tu contraseña">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>

   
    
<footer>
       <h4>(c) 2021 Jonathan Granillo Robledo</h4>
</footer>
</html>