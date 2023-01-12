<!DOCTYPE html>
<html>
  <head>
    <title>Al</title>
    <?php include ("../boostrap.php");?>
    <?php include ("../estilo.css");?>
  </head>
  <body style="font-family:Verdana;">
    <?php include ("opciones.php");?>
    <?php include ("../encabezado.php");?>  
  <div style="overflow:auto;background-color: #FEFEFE;">
    <?php include ("submenu.php");?>
    <?php include ("menu.php");?>  
    <div class="main">
      <div style="text-align:center;"><p>Transpuesta de una matriz</p></div>
      <div style="text-align:center;"><p>La matriz transpuesta (o traspuesta) de la matiz A se denota por AT y es la matriz que tiene por filas a las columnas de A.</p></div>
      <div style="text-align:center;"><p>Si la matriz  A es de dimensión mxn, entonces la dimensión de  AT  es nxm.</p></div>
      <div style="text-align:center;"><p>ejemplos:</p></div>
      <div style="text-align:center;"><p>Sea D una matriz de dimenciones 2X2 perteneciente a los reales.</p></div>
      <table style="margin: 0 auto;">
        <tr>
          <td><input type="text" style="width : 40px" value="1"/>
              <input type="text" style="width : 40px" value="2"/><br>
              <input type="text" style="width : 40px" value="3"/>
              <input type="text" style="width : 40px" value="4"/>
          </td>
          <td>=</td>
          <td><input type="text" style="width : 40px" value="1"/>
              <input type="text" style="width : 40px" value="3"/><br>
              <input type="text" style="width : 40px" value="2"/>
              <input type="text" style="width : 40px" value="4"/></td>
        </tr>
      </table>
      <br>
      <div style="text-align:center;"><p>Sea E una matriz de dimenciones 3X2 perteneciente a los reales.</p></div>
      <table style="margin: 0 auto;">
        <tr>
          <td><input type="text" style="width : 40px" value="1"/>
              <input type="text" style="width : 40px" value="2"/><br>
              <input type="text" style="width : 40px" value="3"/>
              <input type="text" style="width : 40px" value="4"/><br>
              <input type="text" style="width : 40px" value="5"/>
              <input type="text" style="width : 40px" value="6"/>
          </td>
          <td>=</td>
          <td><input type="text" style="width : 40px" value="1"/>
              <input type="text" style="width : 40px" value="3"/>
              <input type="text" style="width : 40px" value="5"/><br>
              <input type="text" style="width : 40px" value="2"/>
              <input type="text" style="width : 40px" value="4"/>
              <input type="text" style="width : 40px" value="6"/></td>
        </tr>
      </table>
    </div>
  </div>
    <?php include ("../footer.php");?>    
  </body>
</html> 