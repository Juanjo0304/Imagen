<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Quienes Somos</title>
	<link rel="icon" type = "image/x-icon" href="Imagenes/IEicon.ico">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
   <div class="col-md-8 col-md-offset-2">
     <h1> Quienes somos</h1>
	 <br>
	 <br>
	 
	 <div class="somos">
	        <h4>Somos Imagen Eléctrica, somos una empresa comercializadora de productos eléctricos.</h4>
			<br>
			<h4>En esta página puedes encontrar precios acerca de los marcas que ofrecemos y buscar el producto deseado dentro de las listas de precios.</h4>
            <br>
            <h4>Para mayor información, ya sea sobre los prodeuctos o acerca de la empresa en general puedes contactarnos a nuestro correo o nuestro teléfono respectivamente a continuación:
            </h4>	
			<br>
			<h4>imagenelectrica@gmail.com </h4><br><h4>633230 (Bucaramanga)</h4>       
        <br>
		<br>
		
		<h4>Puedes dejarnos tus datos y nosotros te contactaremos:</h4>
		
	    <br>
	 </div>

    <FORM method="POST" action="formulario.php">
       <div class="form-group">
         <label>Nombre:</label>
         <input type="text" name ="nombre" class="form-control" placeholder="Escriba su nombre"> <br>
       </div>
       <div class="form-group">
         <label>Correo:</label>
         <input type="text" name ="email" class="form-control" placeholder="Escriba su correo"> <br>
       </div> 
       <div class="form-group">
         <label>telefono:</label>
         <input type="telefono" name ="tel" class="form-control" placeholder="Escriba su contraseña"> <br>
       </div>
      <div class="form-group">
         <input type="submit" name = "insert" class="btn btn-warning" value="Agregar usuario"> <br>
       </div>    
       
     </FORM>
   </div>
   <br /> <br /><br />
   
   <?php  

		if(isset($_POST['insert'])){
			include("connection_sys.php");
			$tel = $_POST['tel'];
			$nombre = $_POST['nombre'];
			$email = $_POST['email'];
			$insertar = "INSERT INTO new_cust(tel,Nombre, Email) values('$tel',$nombre','$email')";			
			
			$query =  mysqli_query($conn,$insertar);
			$nr = mysqli_affected_rows($conn);
			
			if($nr)
			{
				echo "<script> alert('Usuario creado correctamente');</script>";
			}
			else 
			{
				echo "<script> alert('Error al crear el usuario'); </script>";		
			}	
		}
   ?>
  </body>
</html>