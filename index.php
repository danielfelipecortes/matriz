<!DOCTYPE html>
<html>
<head>
  <title>Al</title>
  <?php include ("boostrap.php");?>
  <?php include ("estilo.css");?>
</head>
<body>
<div class="grid">
  <div class="superior">
  <nav> 
  <table>
    <tr> 
      <th><a href="index.php" class="text-dark">Inicio</a></th> 
      <th><a href="versiones.php" class="text-dark">Versiones</a></th> 
    </tr>
  </table>
  </nav>
  </div>
  <div class="header">
  <h1>Calculadora de matrices</h1>
  </div>
 
    <div class="menu">
      <button class="nav-boton" onclick="accion()"><i class="fas fa-bars fa-1x"></i></button>
      <ul class="nav-enlace desaparece" style=" list-style:none">
        <div class="subtitulo"><h3>Operaciones</h3></div>
        <li><a href="Det/Det.php" class="text-dark">Determinante de una matriz</a></li>
        <li><a href="Adj/Adj.php" class="text-dark">Matriz adjunta</a></li>
        <li><a href="Invers/Invers.php" class="text-dark">Matriz inversa</a></li>
        <li><a href="MulPorEsc/MulPorEsc.php" class="text-dark">Matriz por un escalar</a></li>
        <li><a href="Trans/Trans.php" class="text-dark">Matriz transpuesta</a></li>
        <li><a href="Mul/Mul.php" class="text-dark">Multiplicacion de matrices</a></li>
        <li><a href="Cramer/Cramer.php" class="text-dark">Sistemas de ecuaciones</a></li>
        <li><a href="SOR/SOR.php" class="text-dark">Suma de matrices </a></li>
      </ul>
    </div>
  
  <div class="content">
        <p style="font-size:20px;">Proposito</p>
        <p>La siguiente herramienta se creo con el objetivo de unificar varios procedimientos de calculo de matrices,<br> esto para generar soluciones a ejercicios que se ralizan con estos conceptos numericos.<br><br>
        Se plantea la realizacion de ocho procedimientos para el manejo de matrices,<br> su operacion y la obtencion de resultados validos y fiables, los temas son:</p>
        <p>Multiplicacion de una matriz m x n por un escalar entero.<br>
        Suma o resta de dos matrices de igual m x n para la obtencion de una tercera.<br>
        Multiplicacion de dos matrices cuyas dimenciones sean n x m y m x p.<br>
        Calculo del determinande de matrices cuadradas.<br>
        Reacomodacion de las entredas de una matriz n x m para crear su transpuesta m x n.<br>
        Calculo de una matriz adjunta cuadrada.<br>
        Calculo de la matriz inversa a otra, para matrices cuadradas.<br>
        Sistemas de ecuaciones cuadrados.</p>
  </div>
  
  <div class="footer">
     <p>Creado por: Daniel Felipe Cortes Muñoz</p>
  </div>
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