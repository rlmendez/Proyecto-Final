<HTML>
  <head>
    <TITLE>Vendores</TITLE>
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

echo "<h3><I>";
echo "Resultados Búsqueda Grupal";
echo "</h3></I>";


     $conn = new mysqli("127.0.0.1", "root", "root", "Ventas", 3306);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 

    $sql = "SELECT `Vendedor`.`id_Vendedor` as Ven1, `Vendedor`.`Nombres` as Nom, `Vendedor`.`Apellidos` as Ape,
    `venta`.`id_Vendedor` as Ven2, avg(`venta`.`Puntaje`) as prom
    FROM Vendedor, venta
    WHERE `Vendedor`.`id_Vendedor`=`venta`.`id_Vendedor`
    GROUP by `Vendedor`.`id_Vendedor`";
    $result = $conn->query($sql);

    echo "<center>";
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["Ven1"]. " - Vendedor: " . $row["Nom"]. " " . $row["Ape"]." - Promedio: " . number_format($row["prom"], 2, ",", ".")."<br>"; 
        }
    } else {
        echo "0 results";
    }
    echo "</center>";
    $conn->close();
?>  
     </CENTER>
      <br><center>
       <a href="http://localhost/Calidad/Web/Menu.php"><img src="http://localhost/Calidad/Imagenes/Regresar.jpg" WIDTH="60" HEIGHT="60"></a></center>

        <left><H5>Autor: Marco Antonio Méndez Espitia</H5></left>
     
     </BODY>
</HTML>