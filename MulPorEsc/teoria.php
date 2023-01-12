<!DOCTYPE html>
<html>
  <head>
    <title>Al</title>
    <?php include ("../boostrap.php");?>
    <?php include ("../estilo.css");?>
  </head>
  <body> 
  <div class="grid">
  <div class="header">
  <nav class="navbar navbar-expand-sm bg-light navbar-dark"> 
  <table>
    <tr> 
      <th><a href="index.php" class="text-dark">Inicio</a></th> 
      <th><a href="versiones.php" class="text-dark">Versiones</a></th> 
    </tr>
  </table>
  </nav>
  </div>
  <div class="header">
  <h1>Fundamento teorico</h1>
  </div>
  
    <div class="menu">
    <button class="nav-boton" onclick="accion()"><i class="fas fa-bars fa-1x"></i></button>
    <ul class="nav-enlace desaparece" style=" list-style:none">
      <li><h3>Operaciones</h3></li>
      <li><a href="../Det/Det.php" class="text-dark">Determinante de una matriz</a></li>
      <li><a href="../Adj/Adj.php" class="text-dark">Matriz adjunta</a></li>
      <li><a href="../Invers/Invers.php" class="text-dark">Matriz inversa</a></li>
      <li><a href="MulPorEsc.php" class="text-dark">Matriz por un escalar</a></li>
      <li><a href="../Trans/Trans.php" class="text-dark">Matriz transpuesta</a></li>
      <li><a href="../Mul/Mul.php" class="text-dark">Multiplicacion de matrices</a></li>
      <li><a href="../Cramer/Cramer.php" class="text-dark">Sistemas de ecuaciones</a></li>
      <li><a href="../SOR/SOR.php" class="text-dark">Suma de matrices </a></li>
      </ul>
    </div>
<div class="content">
  <div class="nested-grid">
    <nav>
      <table>
        <tr>
          <td><a role="button" class="btn btn-light" href="MulPorEsc.php">Regresar</a></td>
        </tr>
      </table>
    </nav> 

    <div class="operacion">
      <div style="text-align:center;"><p style="font-size:20px;"><br>Producto de una matriz por un escalar</p></div>
      <div style="text-align:center;"><p>Si multiplicamos una matriz por una escalar, multiplicamos cada elemento de la matriz por ese escalar.</p></div>
      <div style="text-align:center;"><p>Es decir: producto de un número real por una matriz, es la aplicación que asocia a cada par formado por un número real y una matriz, otra matriz cuyos elementos se obtienen multiplicando el número real por todos los elementos de la matriz.</p></div>
      <div style="text-align:center;"><p>ejemplo:</p></div>
      <div style="text-align:center;"><p>Sea D una matriz de dimenciones 2X2 perteneciente a los reales y el escalar 5 perteneciente a los reales.</p></div>
      <table style="margin: 0 auto;">
        <tr>
          <td style="text-align:center;">5</td>
          <td style="text-align:center;">x</td>
          <td style="text-align:center;"><input type="text" style="width : 40px" value="1"/><input type="text" style="width : 40px" value="2"/><br>
              <input type="text" style="width : 40px" value="3"/><input type="text" style="width : 40px" value="4"/></td>
          <td style="text-align:center;">=</td>
          <td style="text-align:center;"><input type="text" style="width : 40px" value="1x(5)"/>
              <input type="text" style="width : 40px" value="2x(5)"/><br>
              <input type="text" style="width : 40px" value="3x(5)"/>
              <input type="text" style="width : 40px" value="4x(5)"/></td>
          <td style="text-align:center;">=</td>
          <td style="text-align:center;"><input type="text" style="width : 40px" value="5"/><input type="text" style="width : 40px" value="10"/><br>
              <input type="text" style="width : 40px" value="15"/><input type="text" style="width : 40px" value="20"/></td>
        </tr>
      </table>
    </div>
   </div> 
</div>  
  <?php include ("../footer.php");?>  
  </div>
      <script>
    function accion(){
        console.log('está funcionando mi boton');
        var ancla = document.getElementsByClassName('nav-enlace');
        for(var i = 0; i < ancla.length; i++){
            ancla[i].classList.toggle('desaparece');
        }
    }
    </script>
</body>
</html> 