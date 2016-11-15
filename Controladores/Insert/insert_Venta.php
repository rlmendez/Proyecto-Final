<HTML>
  <head>
    <TITLE>Ventas</TITLE>
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

	$id = $_POST['id_Vendedor'];
	$Marca = $_POST['Auto'];

  $sql = "SELECT id_Auto as id, Puntos_Linea as PL, Calificacion as Cal FROM Autos WHERE id_Auto='$Marca'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $Puntaje = ($row["PL"]*$row["Cal"])/100;
    }
  } else {
    echo "0 results";
  }

  $sql = "INSERT INTO venta (id_Vendedor,Marca,Puntaje)
  VALUES ('$id','$Marca','$Puntaje')";

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