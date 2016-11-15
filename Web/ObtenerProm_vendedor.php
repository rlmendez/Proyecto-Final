<HTML>
  <head>
    <TITLE>Consulta</TITLE>
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

      <form name="FormularioEmp" type="submit" action="http://localhost/Calidad/Controladores/Busqueda/Vendedor.php" method="post">
      <div align="center"><u><H1><FONT COLOR="#FF0000">Consulta de Ventas Individuales</FONT></H1></u></div>
        
        </Td>
        </tr>

        <tr>
        <Td width="1500"> 
        
        <div align="center"><u><H3><FONT COLOR="#000000" FACE="Arial">Informaci&oacuten del Vendedor</FONT></H3></u></div>

        <br><center><TABLE BORDER="2">
             <TR>
                <TD BGCOLOR="#FFFFFF"><div align="center"><i><H4><FONT COLOR="#000000" FACE="Arial">ID del Vendedor</FONT></H4></i></div></TD>
                <TD BGCOLOR="#FFFFFF"><input type="number" size="15" maxlength="15" value="id_Vendedor" name="id_Vendedor" min=1></TD>
             </TR>
      </TABLE></center></br>

       <br><center><input type="image" src="http://localhost/Calidad/Imagenes/Busqueda.jpg" WIDTH="60" HEIGHT="60"></form>
       <a href="http://localhost/Calidad/Web/Menu.php"><img src="http://localhost/Calidad/Imagenes/Regresar.jpg" WIDTH="60" HEIGHT="60"></a></center>

        </Td>
        </tr>
        </CENTER>
    </table>
        
        <left><H5>Autor: Marco Antonio Méndez Espitia</H5></left>
     </BODY>
</HTML>