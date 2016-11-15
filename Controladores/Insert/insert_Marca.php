<HTML>
  <head>
    <TITLE>Autos</TITLE>
      <meta charset="utf-8">
     <meta name="author" content="Marco Méndez">
     </head>
    <style type="text/css">
    input{border: 1px solid red;}
    input:invalid{border-color:#f00}
    input:valid{border-color:#0f0}
    </style>
    <BODY>

        <CENTER>

      <?php  

    // Create connection
  $conn = new mysqli("127.0.0.1", "root", "root", "Ventas", 3306);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 

	$id = $_POST['id_Auto'];
	$Nombre = $_POST['Nombre'];
	$Tipo = $_POST['Tipo'];
  $Puntos = $_POST['Puntos'];
  $Porcentaje = $_POST['Porcentaje'];

  $sql = "INSERT INTO Autos (id_Auto,Nombre,tipo,Puntos_Linea,Calificacion)
  VALUES ('$id','$Nombre','$Tipo','$Puntos','$Porcentaje')";

  if ($conn->query($sql) === TRUE) {
      echo "Información Registrada";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

	$conn->close();
		?> 
		 </CENTER>

        <br><center>
       <a href="http://localhost/Calidad/Web/Menu.php"><img src="http://localhost/Calidad/Imagenes/Regresar.jpg" WIDTH="60" HEIGHT="60"></a></center>

        <left><H5>Autor: Marco Antonio Méndez Espitia</H5></left>
     </BODY>
</HTML>