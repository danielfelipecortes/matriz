<?php
$b = 4;
$c = 5;
$i=1;
$x=1;
$y=1;
$dm=0;
$dx=0;
$dy=0;
for($i;$i<=($b*$c);$i++){
    $Nums[$i] = 0;
}
$i=1;
$Esc=0;
if(isset($_POST["Calcular"])){
    $i=1;
    for($i;$i<=($b*$c);$i++){
     $Nums[$i] = (int) $_POST["N$i"];
    } 
}
$dm= ($Nums[1]*((($Nums[7]*$Nums[13]*$Nums[19])+($Nums[8]*$Nums[14]*$Nums[17])+($Nums[9]*$Nums[12]*$Nums[18]))-(($Nums[9]*
      $Nums[13]*$Nums[17])+($Nums[8]*$Nums[12]*$Nums[19])+($Nums[7]*$Nums[14]*$Nums[18]))))
     -($Nums[2]*((($Nums[6]*$Nums[13]*$Nums[19])+($Nums[8]*$Nums[14]*$Nums[16])+($Nums[9]*$Nums[11]*$Nums[18]))-(($Nums[9]*
      $Nums[13]*$Nums[16])+($Nums[8]*$Nums[11]*$Nums[19])+($Nums[6]*$Nums[14]*$Nums[18]))))
     +($Nums[3]*((($Nums[6]*$Nums[12]*$Nums[19])+($Nums[7]*$Nums[14]*$Nums[16])+($Nums[9]*$Nums[11]*$Nums[17]))-(($Nums[9]*
      $Nums[12]*$Nums[16])+($Nums[7]*$Nums[11]*$Nums[19])+($Nums[6]*$Nums[14]*$Nums[17]))))
     -($Nums[4]*((($Nums[6]*$Nums[12]*$Nums[18])+($Nums[7]*$Nums[13]*$Nums[16])+($Nums[8]*$Nums[11]*$Nums[17]))-(($Nums[8]*
      $Nums[12]*$Nums[16])+($Nums[7]*$Nums[11]*$Nums[18])+($Nums[6]*$Nums[13]*$Nums[17]))));

$dx= ($Nums[5]*((($Nums[7]*$Nums[13]*$Nums[19])+($Nums[8]*$Nums[14]*$Nums[17])+($Nums[9]*$Nums[12]*$Nums[18]))-(($Nums[9]*
     $Nums[13]*$Nums[17])+($Nums[8]*$Nums[12]*$Nums[19])+($Nums[7]*$Nums[14]*$Nums[18]))))
    -($Nums[2]*((($Nums[10]*$Nums[13]*$Nums[19])+($Nums[8]*$Nums[14]*$Nums[20])+($Nums[9]*$Nums[15]*$Nums[18]))-(($Nums[9]*
      $Nums[13]*$Nums[20])+($Nums[8]*$Nums[15]*$Nums[19])+($Nums[10]*$Nums[14]*$Nums[18]))))
    +($Nums[3]*((($Nums[10]*$Nums[12]*$Nums[19])+($Nums[7]*$Nums[14]*$Nums[20])+($Nums[9]*$Nums[15]*$Nums[17]))-(($Nums[9]*
      $Nums[12]*$Nums[20])+($Nums[7]*$Nums[15]*$Nums[19])+($Nums[10]*$Nums[14]*$Nums[17]))))
    -($Nums[4]*((($Nums[10]*$Nums[12]*$Nums[18])+($Nums[7]*$Nums[13]*$Nums[20])+($Nums[8]*$Nums[15]*$Nums[17]))-(($Nums[8]*$Nums[12]*$Nums[20])+($Nums[7]*$Nums[15]*$Nums[18])+($Nums[10]*$Nums[13]*$Nums[17]))));

$dy= ($Nums[1]*((($Nums[10]*$Nums[13]*$Nums[19])+($Nums[8]*$Nums[14]*$Nums[20])+($Nums[9]*$Nums[15]*$Nums[18]))-(($Nums[9]*
    $Nums[13]*$Nums[20])+($Nums[8]*$Nums[15]*$Nums[19])+($Nums[10]*$Nums[14]*$Nums[18]))))
    -($Nums[5]*((($Nums[6]*$Nums[13]*$Nums[19])+($Nums[8]*$Nums[14]*$Nums[16])+($Nums[9]*$Nums[11]*$Nums[18]))-(($Nums[9]*
      $Nums[13]*$Nums[16])+($Nums[8]*$Nums[11]*$Nums[19])+($Nums[6]*$Nums[14]*$Nums[18]))))
    +($Nums[3]*((($Nums[6]*$Nums[15]*$Nums[19])+($Nums[10]*$Nums[14]*$Nums[16])+($Nums[9]*$Nums[11]*$Nums[20]))-(($Nums[9]*
      $Nums[15]*$Nums[16])+($Nums[10]*$Nums[11]*$Nums[19])+($Nums[6]*$Nums[14]*$Nums[20]))))
    -($Nums[4]*((($Nums[6]*$Nums[15]*$Nums[18])+($Nums[10]*$Nums[13]*$Nums[16])+($Nums[8]*$Nums[11]*$Nums[20]))-(($Nums[8]*
      $Nums[15]*$Nums[16])+($Nums[10]*$Nums[11]*$Nums[18])+($Nums[6]*$Nums[13]*$Nums[20]))));

$dz= ($Nums[1]*((($Nums[7]*$Nums[15]*$Nums[19])+($Nums[10]*$Nums[14]*$Nums[17])+($Nums[9]*$Nums[12]*$Nums[20]))-(($Nums[9]*
      $Nums[15]*$Nums[17])+($Nums[10]*$Nums[12]*$Nums[19])+($Nums[7]*$Nums[14]*$Nums[20]))))
    -($Nums[2]*((($Nums[6]*$Nums[15]*$Nums[19])+($Nums[10]*$Nums[14]*$Nums[16])+($Nums[9]*$Nums[11]*$Nums[20]))-(($Nums[9]*
      $Nums[15]*$Nums[16])+($Nums[10]*$Nums[11]*$Nums[19])+($Nums[6]*$Nums[14]*$Nums[20]))))
    +($Nums[5]*((($Nums[6]*$Nums[12]*$Nums[19])+($Nums[7]*$Nums[14]*$Nums[16])+($Nums[9]*$Nums[11]*$Nums[17]))-(($Nums[9]*
      $Nums[12]*$Nums[16])+($Nums[7]*$Nums[11]*$Nums[19])+($Nums[6]*$Nums[14]*$Nums[17]))))
    -($Nums[4]*((($Nums[6]*$Nums[12]*$Nums[20])+($Nums[7]*$Nums[15]*$Nums[16])+($Nums[10]*$Nums[11]*$Nums[17]))-(($Nums[10]*
      $Nums[12]*$Nums[16])+($Nums[7]*$Nums[11]*$Nums[20])+($Nums[6]*$Nums[15]*$Nums[17]))));

$dw= ($Nums[1]*((($Nums[7]*$Nums[13]*$Nums[20])+($Nums[8]*$Nums[15]*$Nums[17])+($Nums[10]*$Nums[12]*$Nums[18]))-(($Nums[10]*
     $Nums[13]*$Nums[17])+($Nums[8]*$Nums[12]*$Nums[20])+($Nums[7]*$Nums[15]*$Nums[18]))))
    -($Nums[2]*((($Nums[6]*$Nums[13]*$Nums[20])+($Nums[8]*$Nums[15]*$Nums[16])+($Nums[10]*$Nums[11]*$Nums[18]))-(($Nums[10]*
      $Nums[13]*$Nums[16])+($Nums[8]*$Nums[11]*$Nums[20])+($Nums[6]*$Nums[15]*$Nums[18]))))
    +($Nums[3]*((($Nums[6]*$Nums[12]*$Nums[20])+($Nums[7]*$Nums[15]*$Nums[16])+($Nums[10]*$Nums[11]*$Nums[17]))-(($Nums[10]*
      $Nums[12]*$Nums[16])+($Nums[7]*$Nums[11]*$Nums[20])+($Nums[6]*$Nums[15]*$Nums[17]))))
    -($Nums[5]*((($Nums[6]*$Nums[12]*$Nums[18])+($Nums[7]*$Nums[13]*$Nums[16])+($Nums[8]*$Nums[11]*$Nums[17]))-(($Nums[8]*
      $Nums[12]*$Nums[16])+($Nums[7]*$Nums[11]*$Nums[18])+($Nums[6]*$Nums[13]*$Nums[17]))));

if($dm==0){
$vx=0;
$vy=0;
$vz=0;
$vw=0;
}else{
$vx=$dx/$dm;
$vy=$dy/$dm;
$vz=$dz/$dm;
$vw=$dw/$dm;
};
?>
<?php include ("../boostrap.php");
      include ("../estilo.css");
      include ("opciones.php");
      include ("../encabezado.php");
      ?><div style="overflow:auto;background-color: #FEFEFE;"><?php
      include ("submenu.php");
      include ("menu.php");?>

<div class="main">
<br>
<div style="text-align:center;">
  <form method="POST" action="Cuadrada<?=$b?>.php">
    <table style="margin: 0 auto;">
      <tr>
        <td><input type="Submit" value="Calcular" name="Calcular" id="Calcular"></td>
      </tr>
    </table>
    <br>
    <table style="margin: 0 auto;">
      <tr>
        <td style="text-align:center;"><div class="panel-heading">Matriz Original</div>
            <?php 
            $i=1;
            for($y;$y<=$b;$y++){
                        $x=1;
                        for($x;$x<=$c;$x++){
                           if($x == 5 || $x == 10  || $x == 15 || $x == 20){
                            ?><a>=</a><?php
                           };
                           ?><input type="number" style="width : 40px" placeholder="0" name="N<?=$i?>" id="N<?=$i?>" value="<?=$Nums[$i]?>"/><?php
                           $i = $i+1;
                           if($x == 2 || $x == 7 || $x == 12 || $x == 17){
                            ?><a>Y</a><?php
                           };
                           if($x == 1 || $x == 6 || $x == 11 || $x == 16){
                            ?><a>X</a><?php
                           };
                           if($x == 3 || $x == 8 || $x == 13 || $x == 18){
                            ?><a>Z</a><?php
                           };
                           if($x == 4 || $x == 9 || $x == 14 || $x == 19){
                            ?><a>W</a><?php
                           };
                        }
                        ?><br><?php
              }?>
        </td>
      </tr>
    </table>
    <table style="margin: 0 auto;">
      <tr>
        <td style="text-align:center;">
          <div class="panel-heading">Determinante Matriz</div>
          <input type="number" style="width : 40px" placeholder="0" value="<?=$dm?>"/>
        </td>
        <td style="text-align:center;">
          <div class="panel-heading">Determinante X</div>
          <input type="number" style="width : 40px" placeholder="0" value="<?=$dx?>"/>
        </td>
        <td style="text-align:center;">
          <div class="panel-heading">Determinante Y</div>
          <input type="number" style="width : 40px" placeholder="0" value="<?=$dy?>"/>
        </td>
        <td style="text-align:center;">
          <div class="panel-heading">Determinante Z</div>
          <input type="number" style="width : 40px" placeholder="0" value="<?=$dz?>"/>
        </td>
        <td style="text-align:center;">
          <div class="panel-heading">Determinante W</div>
          <input type="number" style="width : 40px" placeholder="0" value="<?=$dw?>"/>
        </td>
      </tr>
    </table> 
    <table style="margin: 0 auto;">
      <tr>
        <td style="text-align:center;">
          <div class="panel-heading">Valor de X</div>
          <input type="number" style="width : 40px" placeholder="0" value="<?=$vx?>"/>
        </td>
        <td style="text-align:center;">
          <div class="panel-heading">Valor de Y</div>
          <input type="number" style="width : 40px" placeholder="0" value="<?=$vy?>"/>
        </td>
        <td style="text-align:center;">
          <div class="panel-heading">Valor de Z</div>
          <input type="number" style="width : 40px" placeholder="0" value="<?=$vz?>"/>
        </td>
        <td style="text-align:center;">
          <div class="panel-heading">Valor de W</div>
          <input type="number" style="width : 40px" placeholder="0" value="<?=$vw?>"/>
        </td>
      </tr>
    </table>   
  </form>
</div>
</div>
</div>
<?php include ("../footer.php");?>   