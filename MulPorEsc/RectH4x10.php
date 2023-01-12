<?php
$b = 4;
$c = 10;
$i=1;
$x=1;
$y=1;
for($i;$i<=($b*$c);$i++){
    $Nums[$i] = 0;
}
$Esc=0;
if(isset($_POST["Calcular"])){
    $i=1;
    for($i;$i<=($b*$c);$i++){
     $Nums[$i] = (int) $_POST["N$i"];
    }
    $Esc = (int) $_POST["Esc"];
    include ("../boostrap.php");
    include ("../estilo.css");?>
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
       <h1>Calculadora de matrices por un escalar</h1>
    </div>
    <?php      
}
?>
<?php if(isset($_POST["Calcular"])){
  ?>
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
          <td><a role="button" class="btn btn-light" href="MulPorEsc.php">Reiniciar</a></td>
          <td><div>
                <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Matriz</button>
                <div class="dropdown-menu">
                  <form method="POST" action="MulPorEsc.php" class="dropdown-item">
                      <label for="Num1">Filas:</label><input type="number" placeholder="Max 10" name="Num1" id="Num1"/>
                      <br>
                      <label for="Num2">Columnas:</label><input type="number" placeholder="Max 10" name="Num2" id="Num2"/>
                      <br>
                      <input type="Submit" value="Generar" name="Crear" id="Crear">
                  </form> 
                </div>
              </div>
          </td>
          <td><a role="button" class="btn btn-light" href="teoria.php">Teoria</a></td>
        </tr>
      </table>
    </nav> 
  <div class="operacion">
<?php
}?>


  <form method="POST" action="RectH<?=$b?>x<?=$c?>.php">
    <table style="margin: 0 auto;">
      <tr>
        <td><input type="Submit" value="Calcular" name="Calcular" id="Calcular"></td>
      </tr>
    </table>
    <br>
    <table style="margin: 0 auto;">
      <tr>
        <td style="text-align:center;"><div class="panel-heading"><strong>Matriz</strong></div>
            <?php 
            $i=1;
            for($y;$y<=$b;$y++){
                        $x=1;
                        for($x;$x<=$c;$x++){
                           ?><input type="number" style="width : 40px" placeholder="0" name="N<?=$i?>" id="N<?=$i?>" value="<?=$Nums[$i]?>"/><?php
                           $i = $i+1;
                        }
                        ?><br><?php
              }?>
        </td>
        <td style="text-align:center;"><div class="panel-heading"><strong>Escalar</strong></div>
            <input type="number" style="width : 40px" placeholder="0" name="Esc" id="Esc" value="<?=$Esc?>"/></td>
        <td style="text-align:center;"><div class="panel-heading"><strong>Resultado</strong></div>
            <?php 
            $i=1;
            $x=1;
            $y=1;
            for($y;$y<=$b;$y++){
                        $x=1;
                        for($x;$x<=$c;$x++){
                           ?><input type="number" style="width : 40px" placeholder="0" name="R<?=$i?>" id="R<?=$i?>" 
                           value="<?=$Nums[$i]*$Esc?>"/><?php
                           $i = $i+1;
                        }
                        ?><br><?php
              }?>
        </td>
      </tr>
    </table>   
  </form>


<?php if(isset($_POST["Calcular"])){
?></div>
</div>
</div>
<?php
}?>
<?php 

if(isset($_POST["Calcular"])){
        include ("../footer.php");
     ?></div> 
           <script>
    function accion(){
        console.log('está funcionando mi boton');
        var ancla = document.getElementsByClassName('nav-enlace');
        for(var i = 0; i < ancla.length; i++){
            ancla[i].classList.toggle('desaparece');
        }
    }
    </script>
    <?php
  }
?>  