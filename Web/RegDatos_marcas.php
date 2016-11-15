<HTML>
  <head>
    <TITLE>Marcas</TITLE>
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

      <form name="FormularioEmp" type="submit" action="http://localhost/Calidad/Controladores/Insert/insert_Marca.php" method="post">
      <div align="center"><u><H1><FONT COLOR="#FF0000">Registro de Marcas de los Autos</FONT></H1></u></div>
        
        </Td>
        </tr>

        <tr>
        <Td width="1500"> 
        
        <div align="center"><u><H3><FONT COLOR="#000000" FACE="Arial">Informaci&oacuten de los Autos</FONT></H3></u></div>

        <br><center><TABLE BORDER="2">
             <TR>
                <TD BGCOLOR="#FFFFFF"><div align="center"><i><H4><FONT COLOR="#000000" FACE="Arial">ID del Auto</FONT></H4></i></div></TD>
                <TD BGCOLOR="#FFFFFF"><input type="text" size="6" maxlength="5" id="id_Auto" name="id_Auto" min=1></TD>
             </TR>
             <TR>
                <TD BGCOLOR="#FFFFFF"><div align="center"><i><H4><FONT COLOR="#000000" FACE="Arial">Modelo (Nombre):</FONT></H4></i></div></TD>
                <TD BGCOLOR="#FFFFFF"><input type="text" size="25" maxlength="24" id="Nombre" name="Nombre"></TD>
             </TR>
             <TR>
                <TD BGCOLOR="#FFFFFF"><div align="center"><i><H4><FONT COLOR="#000000" FACE="Arial">Marca</FONT></H4></i></div></TD>
                <TD BGCOLOR="#FFFFFF">
                <select name="Tipo">
                <option value="Volvo">Volvo</option>
                <option value="Ferrari">Ferrari</option>
                <option value="Audi">Audi</option>
                <option value="Mercedez">Mercedez</option>
                </select>
                </TD>
             </TR>
             <TR>
                <TD BGCOLOR="#FFFFFF"><div align="center"><i><H4><FONT COLOR="#000000" FACE="Arial">Puntos:</FONT></H4></i></div></TD>
                <TD BGCOLOR="#FFFFFF"><input type="number" name="Puntos" type="number" min=2 max=5 step=1></TD>
             </TR>
             <TR>
                <TD BGCOLOR="#FFFFFF"><div align="center"><i><H4><FONT COLOR="#000000" FACE="Arial">Calificación %:</FONT></H4></i></div></TD>
                <TD BGCOLOR="#FFFFFF"><input name="Porcentaje" type="number" min=10 max=100 step=10></TD>
             </TR>
      </TABLE></center></br>

        <br><center><input type="image" src="http://localhost/Calidad/Imagenes/Guardar.jpg" WIDTH="60" HEIGHT="60" alt="Guardar" value="Guardar"></form>
       <a href="http://localhost/Calidad/Web/Menu.php"><img src="http://localhost/Calidad/Imagenes/Regresar.jpg" WIDTH="60" HEIGHT="60"></a></center>

        </Td>
        </tr>
        </CENTER>
    </table>
        
        <left><H5>Autor: Marco Antonio Méndez Espitia</H5></left>
     </BODY>
</HTML>