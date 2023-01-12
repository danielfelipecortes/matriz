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
  <div style="overflow:auto;background-color: #FEFEFE;text-align:center;">
    <div class="menu">
      <div class="menuitem"><h3>Operaciones</h3></div>
      <div class="menuitem"><a href="../Det/Det.php" class="text-dark">Determinante de una matriz</a></div>
      <div class="menuitem"><a href="../Adj/Adj.php" class="text-dark">Matriz adjunta</a></div>
      <div class="menuitem"><a href="../Invers/Invers.php" class="text-dark">Matriz inversa</a></div>
      <div class="menuitem"><a href="../MulPorEsc/MulPorEsc.php" class="text-dark">Matriz por un escalar</a></div>
      <div class="menuitem"><a href="Trans.php" class="text-dark">Matriz transpuesta</a></div>
      <div class="menuitem"><a href="../Mul/Mul.php" class="text-dark">Multiplicacion de matrices</a></div>
      <div class="menuitem"><a href="../Cramer/Cramer.php" class="text-dark">Sistemas de ecuaciones</a></div>
      <div class="menuitem"><a href="../SOR/SOR.php" class="text-dark">Suma de matrices </a></div> 
    </div>

    <nav class="navbar navbar-expand-sm bg-light navbar-dark" style="padding: 0.1%;">
      <table>
        <tr>
          <td><a role="button" class="btn btn-light" href="Trans.php">Reiniciar</a></td>
          <td><div class="dropdown">
                <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Matriz</button>
                <div class="dropdown-menu">
                  <form method="POST" action="Trans.php" class="dropdown-item">
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

    <div class="main">
      <div style="text-align:center;">
      <?php
        $Num1 = 0;$Num2 = 0;
        if(isset($_POST["Crear"])){
          $Num1 = (int) $_POST["Num1"];$Num2 = (int) $_POST["Num2"];
        }
        if($Num1 == $Num2){
            if($Num1 == 0){
                ?><div style="text-align:center;"><p style="font-size:20px;"><br>Cree una matriz nxn<br>Solo funcional para matrices cuadradas</p></div><?php
            }else{
                if($Num1 == 1){
                   include ("Cuadrada1.php");
                }else if($Num1 == 2){
                   include ("Cuadrada2.php");
                }else if($Num1 == 3){
                   include ("Cuadrada3.php");
                }else if($Num1 == 4){
                   include ("Cuadrada4.php");
                }else if($Num1 == 5){
                   include ("Cuadrada5.php");
                }else if($Num1 == 6){
                   include ("Cuadrada6.php");
                }else if($Num1 == 7){
                   include ("Cuadrada7.php");
                }else if($Num1 == 8){
                   include ("Cuadrada8.php");
                }else if($Num1 == 9){
                   include ("Cuadrada9.php");
                }else if($Num1 == 10){
                   include ("Cuadrada10.php");
                }else{
                   ?><div style="text-align:center;"><p style="font-size:20px;"><br>No se puede crear la matriz de <?=$Num1?> x <?=$Num2?></p></div><?php
                }
            }
        }else if($Num1>$Num2){
            if($Num1==2&&$Num2==1){
                include ("RectV2x1.php");
            }else if($Num1==3&&$Num2==1){
                include ("RectV3x1.php");
            }else if($Num1==3&&$Num2==2){
                include ("RectV3x2.php");
            }else if($Num1==4&&$Num2==1){
                include ("RectV4x1.php");
            }else if($Num1==4&&$Num2==2){
                include ("RectV4x2.php");
            }else if($Num1==4&&$Num2==3){
                include ("RectV4x3.php");
            }else if($Num1==5&&$Num2==1){
                include ("RectV5x1.php");
            }else if($Num1==5&&$Num2==2){
                include ("RectV5x2.php");
            }else if($Num1==5&&$Num2==3){
                include ("RectV5x3.php");
            }else if($Num1==5&&$Num2==4){
                include ("RectV5x4.php");
            }else if($Num1==6&&$Num2==1){
                include ("RectV6x1.php");
            }else if($Num1==6&&$Num2==2){
                include ("RectV6x2.php");
            }else if($Num1==6&&$Num2==3){
                include ("RectV6x3.php");
            }else if($Num1==6&&$Num2==4){
                include ("RectV6x4.php");
            }else if($Num1==6&&$Num2==5){
                include ("RectV6x5.php");
            }else if($Num1==7&&$Num2==1){
                include ("RectV7x1.php");
            }else if($Num1==7&&$Num2==2){
                include ("RectV7x2.php");
            }else if($Num1==7&&$Num2==3){
                include ("RectV7x3.php");
            }else if($Num1==7&&$Num2==4){
                include ("RectV7x4.php");
            }else if($Num1==7&&$Num2==5){
                include ("RectV7x5.php");
            }else if($Num1==7&&$Num2==6){
                include ("RectV7x6.php");
            }else if($Num1==8&&$Num2==1){
                include ("RectV8x1.php");
            }else if($Num1==8&&$Num2==2){
                include ("RectV8x2.php");
            }else if($Num1==8&&$Num2==3){
                include ("RectV8x3.php");
            }else if($Num1==8&&$Num2==4){
                include ("RectV8x4.php");
            }else if($Num1==8&&$Num2==5){
                include ("RectV8x5.php");
            }else if($Num1==8&&$Num2==6){
                include ("RectV8x6.php");
            }else if($Num1==8&&$Num2==7){
                include ("RectV8x7.php");
            }else if($Num1==9&&$Num2==1){
                include ("RectV9x1.php");
            }else if($Num1==9&&$Num2==2){
                include ("RectV9x2.php");
            }else if($Num1==9&&$Num2==3){
                include ("RectV9x3.php");
            }else if($Num1==9&&$Num2==4){
                include ("RectV9x4.php");
            }else if($Num1==9&&$Num2==5){
                include ("RectV9x5.php");
            }else if($Num1==9&&$Num2==6){
                include ("RectV9x6.php");
            }else if($Num1==9&&$Num2==7){
                include ("RectV9x7.php");
            }else if($Num1==9&&$Num2==8){
                include ("RectV9x8.php");
            }else if($Num1==10&&$Num2==1){
                include ("RectV10x1.php");
            }else if($Num1==10&&$Num2==2){
                include ("RectV10x2.php");
            }else if($Num1==10&&$Num2==3){
                include ("RectV10x3.php");
            }else if($Num1==10&&$Num2==4){
                include ("RectV10x4.php");
            }else if($Num1==10&&$Num2==5){
                include ("RectV10x5.php");
            }else if($Num1==10&&$Num2==6){
                include ("RectV10x6.php");
            }else if($Num1==10&&$Num2==7){
                include ("RectV10x7.php");
            }else if($Num1==10&&$Num2==8){
                include ("RectV10x8.php");
            }else if($Num1==10&&$Num2==9){
                include ("RectV10x9.php");
            }else{
                ?><div style="text-align:center;"><p style="font-size:20px;"><br>No se puede crear la matriz de <?=$Num1?> x <?=$Num2?></p></div><?php
            }
        }else{
            if($Num1 == 1 && $Num2 == 2){
                include ("RectH1x2.php");
            }else if($Num1==1&&$Num2==3){
                include ("RectH1x3.php");
            }else if($Num1==2&&$Num2==3){
                include ("RectH2x3.php");
            }else if($Num1==1&&$Num2==4){
                include ("RectH1x4.php");
            }else if($Num1==2&&$Num2==4){
                include ("RectH2x4.php");
            }else if($Num1==3&&$Num2==4){
                include ("RectH3x4.php");
            }else if($Num1==1&&$Num2==5){
                include ("RectH1x5.php");
            }else if($Num1==2&&$Num2==5){
                include ("RectH2x5.php");
            }else if($Num1==3&&$Num2==5){
                include ("RectH3x5.php");
            }else if($Num1==4&&$Num2==5){
                include ("RectH4x5.php");
            }else if($Num1==1&&$Num2==6){
                include ("RectH1x6.php");
            }else if($Num1==2&&$Num2==6){
                include ("RectH2x6.php");
            }else if($Num1==3&&$Num2==6){
                include ("RectH3x6.php");
            }else if($Num1==4&&$Num2==6){
                include ("RectH4x6.php");
            }else if($Num1==5&&$Num2==6){
                include ("RectH5x6.php");
            }else if($Num1==1&&$Num2==7){
                include ("RectH1x7.php");
            }else if($Num1==2&&$Num2==7){
                include ("RectH2x7.php");
            }else if($Num1==3&&$Num2==7){
                include ("RectH3x7.php");
            }else if($Num1==4&&$Num2==7){
                include ("RectH4x7.php");
            }else if($Num1==5&&$Num2==7){
                include ("RectH5x7.php");
            }else if($Num1==6&&$Num2==7){
                include ("RectH6x7.php");
            }else if($Num1==1&&$Num2==8){
                include ("RectH1x8.php");
            }else if($Num1==2&&$Num2==8){
                include ("RectH2x8.php");
            }else if($Num1==3&&$Num2==8){
                include ("RectH3x8.php");
            }else if($Num1==4&&$Num2==8){
                include ("RectH4x8.php");
            }else if($Num1==5&&$Num2==8){
                include ("RectH5x8.php");
            }else if($Num1==6&&$Num2==8){
                include ("RectH6x8.php");
            }else if($Num1==7&&$Num2==8){
                include ("RectH7x8.php");
            }else if($Num1==1&&$Num2==9){
                include ("RectH1x9.php");
            }else if($Num1==2&&$Num2==9){
                include ("RectH2x9.php");
            }else if($Num1==3&&$Num2==9){
                include ("RectH3x9.php");
            }else if($Num1==4&&$Num2==9){
                include ("RectH4x9.php");
            }else if($Num1==5&&$Num2==9){
                include ("RectH5x9.php");
            }else if($Num1==6&&$Num2==9){
                include ("RectH6x9.php");
            }else if($Num1==7&&$Num2==9){
                include ("RectH7x9.php");
            }else if($Num1==8&&$Num2==9){
                include ("RectH8x9.php");
            }else if($Num1==1&&$Num2==10){
                include ("RectH1x10.php");
            }else if($Num1==2&&$Num2==10){
                include ("RectH2x10.php");
            }else if($Num1==3&&$Num2==10){
                include ("RectH3x10.php");
            }else if($Num1==4&&$Num2==10){
                include ("RectH4x10.php");
            }else if($Num1==5&&$Num2==10){
                include ("RectH5x10.php");
            }else if($Num1==6&&$Num2==10){
                include ("RectH6x10.php");
            }else if($Num1==7&&$Num2==10){
                include ("RectH7x10.php");
            }else if($Num1==8&&$Num2==10){
                include ("RectH8x10.php");
            }else if($Num1==9&&$Num2==10){
                include ("RectH9x10.php");
            }else{
                ?><div style="text-align:center;"><p style="font-size:20px;"><br>No se puede crear la matriz de <?=$Num1?> x <?=$Num2?></p></div><?php
            }
        }
      ?>
      </div>
    </div>
  </div>

  <?php include ("../footer.php");?>  

</body>
</html> 