<HTML>
  <head>
    <TITLE>Vendedores</TITLE>
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
        <TABLE>
        <tr>
        <Td BGCOLOR="#FFFFFF" width="1500">  

      <form name="FormularioEmp" type="submit" action="http://localhost/Calidad/Controladores/Insert/insert_Venta.php" method="post">
      <div align="center"><u><H1><FONT COLOR="#FF0000">Registro de Ventas</FONT></H1></u></div>
        
        </Td>
        </tr>

        <tr>
        <Td width="1500"> 
        
        <div align="center"><u><H3><FONT COLOR="#000000" FACE="Arial">Informaci&oacuten del Venta</FONT></H3></u></div>

        <br><center><TABLE BORDER="2">
             <TR>
                <TD BGCOLOR="#FFFFFF"><div align="center"><i><H4><FONT COLOR="#000000" FACE="Arial">ID del Vendedor:</FONT></H4></i></div></TD>
                <TD BGCOLOR="#FFFFFF"><input type="number" size="15" maxlength="15" name="id_Vendedor" id="id_Vendedor" min=1></TD>
             </TR>
             <TR>
                <TD BGCOLOR="#FFFFFF"><div align="center"><i><H4><FONT COLOR="#000000" FACE="Arial">Auto:</FONT></H4></i></div></TD>
                <TD BGCOLOR="#FFFFFF"><input type="text" size="10" maxlength="9" name="Auto" id="Auto" ></TD>
             </TR>
      </TABLE></center></br>

      <?php

           // Create connection
    $conn = new mysqli("127.0.0.1", "root", "root", "Ventas", 3306);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "SELECT id_Auto, Nombre, tipo FROM Autos";
    $result = $conn->query($sql);

    echo "<center>";
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Auto: " . $row["id_Auto"]. " - Nombre: " . $row["Nombre"]. " - Linea: " . $row["tipo"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    echo "</center>";
    $conn->close();
      ?> 

       <br><center><input type="image" src="http://localhost/Calidad/Imagenes/Guardar.jpg" WIDTH="60" HEIGHT="60" alt="Guardar" value="Guardar"></form>
       <a href="http://localhost/Calidad/Web/Menu.php"><img src="http://localhost/Calidad/Imagenes/Regresar.jpg" WIDTH="60" HEIGHT="60"></a></center>

        </Td>
        </tr>
        </CENTER>
    </table>
        
        <left><H5>Autor: Marco Antonio Méndez Espitia</H5></left>
     </BODY>
</HTML>