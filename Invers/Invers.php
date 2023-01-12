<!DOCTYPE html>
<html>
  <head>
	  <title>Al</title>
	  <?php include ("../boostrap.php");?>
    <?php include ("../estilo.css");?>
  </head>
  <body style="font-family:Verdana;"> 
    <?php include ("opciones.php");?>
    <?php include ("encabezado.php");?>
  <div style="overflow:auto;background-color: #FFFFFF;text-align:center;">
    <div class="menu">
      <div class="menuitem"><h3>Operaciones</h3></div>
      <div class="menuitem"><a href="../Det/Det.php" class="text-dark">Determinante de una matriz</a></div>
      <div class="menuitem"><a href="../Adj/Adj.php" class="text-dark">Matriz adjunta</a></div>
      <div class="menuitem"><a href="Invers.php" class="text-dark">Matriz inversa</a></div>
      <div class="menuitem"><a href="../MulPorEsc/MulPorEsc.php" class="text-dark">Matriz por un escalar</a></div>
      <div class="menuitem"><a href="../Trans/Trans.php" class="text-dark">Matriz transpuesta</a></div>
      <div class="menuitem"><a href="../Mul/Mul.php" class="text-dark">Multiplicacion de matrices</a></div>
      <div class="menuitem"><a href="../Cramer/Cramer.php" class="text-dark">Sistemas de ecuaciones</a></div>
      <div class="menuitem"><a href="../SOR/SOR.php" class="text-dark">Suma de matrices </a></div> 
    </div> 

    <nav class="navbar navbar-expand-sm bg-light navbar-dark" style="padding: 0.1%;">
      <table>
        <tr>
          <td><a role="button" class="btn btn-light" href="Det.php">Reiniciar</a></td>
          <td><div class="dropdown">
                <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Matriz</button>
                <div class="dropdown-menu">
                  <form method="POST" action="MulPorEsc.php" class="dropdown-item">
                      <!--<a role="button" class="btn btn-light" href="Cuadrada1.php">1x1</a><br>
                      <a role="button" class="btn btn-light" href="Cuadrada2.php">2x2</a><br>
                      <a role="button" class="btn btn-light" href="Cuadrada3.php">3x3</a><br>
                      <a role="button" class="btn btn-light" href="Cuadrada4.php">4x4</a><br>
                      <a role="button" class="btn btn-light" href="Cuadrada5.php">5x5</a><br>
                      <a role="button" class="btn btn-light" href="Cuadrada6.php">6x6</a><br>
                      <a role="button" class="btn btn-light" href="Cuadrada7.php">7x7</a><br>
                      <a role="button" class="btn btn-light" href="Cuadrada8.php">8x8</a><br>
                      <a role="button" class="btn btn-light" href="Cuadrada9.php">9x9</a><br>
                      <a role="button" class="btn btn-light" href="Cuadrada10.php">10x10</a>-->
                  </form> 
                </div>
              </div>
          </td>
          <td><a role="button" class="btn btn-light" href="teoria.php">Teoria</a></td>
        </tr>
      </table>
    </nav> 
    
    <div class="main">
      <div style="text-align:center;">
         <p style="font-size:20px;"><br>Esta operacion aun se encuentra en desarrollo</p>
      </div>
    </div>
  </div>
    <?php include ("../footer.php");?>    
  </body>
</html> 