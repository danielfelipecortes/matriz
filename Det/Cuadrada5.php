<?php
$b = 5;
$c = 5;
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
}
$Det1 =((($Nums[7])*((
    ($Nums[13]*$Nums[19]*$Nums[25])+($Nums[14]*$Nums[20]*$Nums[23])+($Nums[15]*$Nums[18]*$Nums[24])
                     )-(
    ($Nums[15]*$Nums[19]*$Nums[23])+($Nums[14]*$Nums[18]*$Nums[25])+($Nums[13]*$Nums[20]*$Nums[24])
                       )))-(($Nums[8])*((
    ($Nums[12]*$Nums[19]*$Nums[25])+($Nums[14]*$Nums[20]*$Nums[22])+($Nums[15]*$Nums[17]*$Nums[24])
                                        )-(
    ($Nums[15]*$Nums[19]*$Nums[22])+($Nums[14]*$Nums[17]*$Nums[25])+($Nums[12]*$Nums[20]*$Nums[24])
                                          )))+(($Nums[9])*((
    ($Nums[12]*$Nums[18]*$Nums[25])+($Nums[13]*$Nums[20]*$Nums[22])+($Nums[15]*$Nums[17]*$Nums[23])
                                                           )-(
    ($Nums[15]*$Nums[18]*$Nums[22])+($Nums[13]*$Nums[17]*$Nums[25])+($Nums[12]*$Nums[20]*$Nums[23])
                                                             )))-(($Nums[10])*((
    ($Nums[12]*$Nums[18]*$Nums[24])+($Nums[13]*$Nums[19]*$Nums[22])+($Nums[14]*$Nums[17]*$Nums[23])
                                                                               )-(
    ($Nums[14]*$Nums[18]*$Nums[22])+($Nums[13]*$Nums[17]*$Nums[24])+($Nums[12]*$Nums[19]*$Nums[23])
                                                                                 ))));
$Det2 =((($Nums[6])*((
    ($Nums[13]*$Nums[19]*$Nums[25])+($Nums[14]*$Nums[20]*$Nums[23])+($Nums[15]*$Nums[18]*$Nums[24])
                     )-(
    ($Nums[15]*$Nums[19]*$Nums[23])+($Nums[14]*$Nums[18]*$Nums[25])+($Nums[13]*$Nums[20]*$Nums[24])
                       )))-(($Nums[8])*((
    ($Nums[11]*$Nums[19]*$Nums[25])+($Nums[14]*$Nums[20]*$Nums[21])+($Nums[15]*$Nums[16]*$Nums[24])
                                        )-(
    ($Nums[15]*$Nums[19]*$Nums[21])+($Nums[14]*$Nums[16]*$Nums[25])+($Nums[11]*$Nums[20]*$Nums[24])
                                          )))+(($Nums[9])*((
    ($Nums[11]*$Nums[18]*$Nums[25])+($Nums[13]*$Nums[20]*$Nums[21])+($Nums[15]*$Nums[16]*$Nums[23])
                                                           )-(
    ($Nums[15]*$Nums[18]*$Nums[21])+($Nums[13]*$Nums[16]*$Nums[25])+($Nums[11]*$Nums[20]*$Nums[23])
                                                             )))-(($Nums[10])*((
    ($Nums[11]*$Nums[18]*$Nums[24])+($Nums[13]*$Nums[19]*$Nums[21])+($Nums[14]*$Nums[16]*$Nums[23])
                                                                               )-(
    ($Nums[14]*$Nums[18]*$Nums[21])+($Nums[13]*$Nums[16]*$Nums[24])+($Nums[11]*$Nums[19]*$Nums[23])
                                                                                 ))));
$Det3 =((($Nums[6])*((
    ($Nums[12]*$Nums[19]*$Nums[25])+($Nums[14]*$Nums[20]*$Nums[22])+($Nums[15]*$Nums[17]*$Nums[24])
                     )-(
    ($Nums[15]*$Nums[19]*$Nums[22])+($Nums[14]*$Nums[17]*$Nums[25])+($Nums[12]*$Nums[20]*$Nums[24])
                       )))-(($Nums[7])*((
    ($Nums[11]*$Nums[19]*$Nums[25])+($Nums[14]*$Nums[20]*$Nums[21])+($Nums[15]*$Nums[16]*$Nums[24])
                                        )-(
    ($Nums[15]*$Nums[19]*$Nums[21])+($Nums[14]*$Nums[16]*$Nums[25])+($Nums[11]*$Nums[20]*$Nums[24])
                                          )))+(($Nums[9])*((
    ($Nums[11]*$Nums[17]*$Nums[25])+($Nums[12]*$Nums[20]*$Nums[21])+($Nums[15]*$Nums[16]*$Nums[22])
                                                           )-(
    ($Nums[15]*$Nums[17]*$Nums[21])+($Nums[12]*$Nums[16]*$Nums[25])+($Nums[11]*$Nums[20]*$Nums[22])
                                                             )))-(($Nums[10])*((
    ($Nums[11]*$Nums[17]*$Nums[24])+($Nums[12]*$Nums[19]*$Nums[21])+($Nums[14]*$Nums[16]*$Nums[22])
                                                                               )-(
    ($Nums[14]*$Nums[17]*$Nums[21])+($Nums[12]*$Nums[16]*$Nums[24])+($Nums[11]*$Nums[19]*$Nums[22])
                                                                                 ))));
$Det4 =((($Nums[6])*((
    ($Nums[12]*$Nums[18]*$Nums[25])+($Nums[13]*$Nums[20]*$Nums[22])+($Nums[15]*$Nums[17]*$Nums[23])
                     )-(
    ($Nums[15]*$Nums[18]*$Nums[22])+($Nums[13]*$Nums[17]*$Nums[25])+($Nums[12]*$Nums[20]*$Nums[23])
                       )))-(($Nums[7])*((
    ($Nums[11]*$Nums[18]*$Nums[25])+($Nums[13]*$Nums[20]*$Nums[21])+($Nums[15]*$Nums[16]*$Nums[23])
                                        )-(
    ($Nums[15]*$Nums[18]*$Nums[21])+($Nums[13]*$Nums[16]*$Nums[25])+($Nums[11]*$Nums[20]*$Nums[23])
                                          )))+(($Nums[8])*((
    ($Nums[11]*$Nums[17]*$Nums[25])+($Nums[12]*$Nums[20]*$Nums[21])+($Nums[15]*$Nums[16]*$Nums[22])
                                                           )-(
    ($Nums[15]*$Nums[17]*$Nums[21])+($Nums[12]*$Nums[16]*$Nums[25])+($Nums[11]*$Nums[20]*$Nums[22])
                                                             )))-(($Nums[10])*((
    ($Nums[11]*$Nums[17]*$Nums[23])+($Nums[12]*$Nums[18]*$Nums[21])+($Nums[13]*$Nums[16]*$Nums[22])
                                                                               )-(
    ($Nums[13]*$Nums[17]*$Nums[21])+($Nums[12]*$Nums[16]*$Nums[23])+($Nums[11]*$Nums[18]*$Nums[22])
                                                                                 ))));
$Det5 =((($Nums[6])*((
    ($Nums[12]*$Nums[18]*$Nums[24])+($Nums[13]*$Nums[19]*$Nums[22])+($Nums[14]*$Nums[17]*$Nums[23])
                     )-(
    ($Nums[14]*$Nums[18]*$Nums[22])+($Nums[13]*$Nums[17]*$Nums[24])+($Nums[12]*$Nums[19]*$Nums[23])
                       )))-(($Nums[7])*((
    ($Nums[11]*$Nums[18]*$Nums[24])+($Nums[13]*$Nums[19]*$Nums[21])+($Nums[14]*$Nums[16]*$Nums[23])
                                        )-(
    ($Nums[14]*$Nums[18]*$Nums[21])+($Nums[13]*$Nums[16]*$Nums[24])+($Nums[11]*$Nums[19]*$Nums[23])
                                          )))+(($Nums[8])*((
    ($Nums[11]*$Nums[17]*$Nums[24])+($Nums[12]*$Nums[19]*$Nums[21])+($Nums[14]*$Nums[16]*$Nums[22])
                                                           )-(
    ($Nums[14]*$Nums[17]*$Nums[21])+($Nums[12]*$Nums[16]*$Nums[24])+($Nums[11]*$Nums[19]*$Nums[22])
                                                             )))-(($Nums[9])*((
    ($Nums[11]*$Nums[17]*$Nums[23])+($Nums[12]*$Nums[18]*$Nums[21])+($Nums[13]*$Nums[16]*$Nums[22])
                                                                               )-(
    ($Nums[13]*$Nums[17]*$Nums[21])+($Nums[12]*$Nums[16]*$Nums[23])+($Nums[11]*$Nums[18]*$Nums[22])
                                                                                 ))));
$Esc=($Nums[1]*$Det1)-($Nums[2]*$Det2)+($Nums[3]*$Det3)-($Nums[4]*$Det4)+($Nums[5]*$Det5);
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
        <td style="text-align:center;"><div class="panel-heading"><strong>Determinante</strong></div>
            <input type="number" style="width : 40px" placeholder="0" name="Esc" id="Esc" value="<?=$Esc?>"/></td>
      </tr>
    </table>   
  </form>
</div>
</div>
</div>
<?php include ("../footer.php");?>  