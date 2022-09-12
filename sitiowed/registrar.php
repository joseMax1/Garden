<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email'])  >= 1 && strlen($_POST['Direccion']) >= 1 && strlen($_POST['Telefono']) >= 1 && strlen	($_POST['Ciudad'])  >= 1 && strlen($_POST['pais'] ) >= 1) {


	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $Direccion = trim($_POST['Direccion']);
	    $Telefono = trim($_POST['Telefono']);
	    $Ciudad = trim($_POST['Ciudad']);
	    $pais = trim($_POST['pais']);
	   
		
	    //$fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos2(nombre, email, Direccion,Telefono,Ciudad,pais) VALUES ('$name','$email','$Direccion',' $Telefono',' $Ciudad','$pais')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Gracias por utilizar nuestro  Servicio  pronto  seras contactado  con un asesor!</h3>
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