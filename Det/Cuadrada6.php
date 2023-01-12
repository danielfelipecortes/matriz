<?php
$b = 6;
$c = 6;
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
$Det1 
=($Nums[8]*(($Nums[15]*((($Nums[22]*$Nums[29]*$Nums[36])+($Nums[23]*$Nums[30]*$Nums[34])+($Nums[24]*$Nums[28]*$Nums[35]))
                       -(($Nums[24]*$Nums[29]*$Nums[34])+($Nums[23]*$Nums[28]*$Nums[36])+($Nums[22]*$Nums[30]*$Nums[35]))))
           -($Nums[16]*((($Nums[21]*$Nums[29]*$Nums[36])+($Nums[23]*$Nums[30]*$Nums[33])+($Nums[24]*$Nums[27]*$Nums[35]))
                       -(($Nums[24]*$Nums[29]*$Nums[33])+($Nums[23]*$Nums[27]*$Nums[36])+($Nums[21]*$Nums[30]*$Nums[35]))))
           +($Nums[17]*((($Nums[21]*$Nums[28]*$Nums[36])+($Nums[22]*$Nums[30]*$Nums[33])+($Nums[24]*$Nums[27]*$Nums[34]))
                       -(($Nums[24]*$Nums[28]*$Nums[33])+($Nums[22]*$Nums[27]*$Nums[36])+($Nums[21]*$Nums[30]*$Nums[34]))))
           -($Nums[18]*((($Nums[21]*$Nums[28]*$Nums[35])+($Nums[22]*$Nums[29]*$Nums[33])+($Nums[23]*$Nums[27]*$Nums[34]))
                       -(($Nums[23]*$Nums[28]*$Nums[33])+($Nums[22]*$Nums[27]*$Nums[35])+($Nums[21]*$Nums[29]*$Nums[34]))))))
-($Nums[9]*(($Nums[14]*((($Nums[22]*$Nums[29]*$Nums[36])+($Nums[23]*$Nums[30]*$Nums[34])+($Nums[24]*$Nums[28]*$Nums[35]))
                       -(($Nums[24]*$Nums[29]*$Nums[34])+($Nums[23]*$Nums[28]*$Nums[36])+($Nums[22]*$Nums[30]*$Nums[35]))))
           -($Nums[16]*((($Nums[20]*$Nums[29]*$Nums[36])+($Nums[23]*$Nums[30]*$Nums[32])+($Nums[24]*$Nums[26]*$Nums[35]))
                       -(($Nums[24]*$Nums[29]*$Nums[32])+($Nums[23]*$Nums[26]*$Nums[36])+($Nums[20]*$Nums[30]*$Nums[35]))))
           +($Nums[17]*((($Nums[20]*$Nums[28]*$Nums[36])+($Nums[22]*$Nums[30]*$Nums[32])+($Nums[24]*$Nums[26]*$Nums[34]))
                       -(($Nums[24]*$Nums[28]*$Nums[32])+($Nums[22]*$Nums[26]*$Nums[36])+($Nums[20]*$Nums[30]*$Nums[34]))))
           -($Nums[18]*((($Nums[20]*$Nums[28]*$Nums[35])+($Nums[22]*$Nums[29]*$Nums[32])+($Nums[23]*$Nums[26]*$Nums[34]))
                       -(($Nums[23]*$Nums[28]*$Nums[32])+($Nums[22]*$Nums[26]*$Nums[35])+($Nums[20]*$Nums[29]*$Nums[34]))))))
+($Nums[10]*(($Nums[14]*((($Nums[21]*$Nums[29]*$Nums[36])+($Nums[23]*$Nums[30]*$Nums[33])+($Nums[24]*$Nums[27]*$Nums[35]))
                        -(($Nums[24]*$Nums[29]*$Nums[33])+($Nums[23]*$Nums[27]*$Nums[36])+($Nums[21]*$Nums[30]*$Nums[35]))))
            -($Nums[15]*((($Nums[20]*$Nums[29]*$Nums[36])+($Nums[23]*$Nums[30]*$Nums[32])+($Nums[24]*$Nums[26]*$Nums[35]))
                        -(($Nums[24]*$Nums[29]*$Nums[32])+($Nums[23]*$Nums[26]*$Nums[36])+($Nums[20]*$Nums[30]*$Nums[35]))))
            +($Nums[17]*((($Nums[20]*$Nums[27]*$Nums[36])+($Nums[21]*$Nums[30]*$Nums[32])+($Nums[24]*$Nums[26]*$Nums[33]))
                        -(($Nums[24]*$Nums[27]*$Nums[32])+($Nums[21]*$Nums[26]*$Nums[36])+($Nums[20]*$Nums[30]*$Nums[33]))))
            -($Nums[18]*((($Nums[20]*$Nums[27]*$Nums[35])+($Nums[21]*$Nums[29]*$Nums[32])+($Nums[23]*$Nums[26]*$Nums[33]))
                      -(($Nums[23]*$Nums[27]*$Nums[32])+($Nums[21]*$Nums[26]*$Nums[35])+($Nums[20]*$Nums[29]*$Nums[33]))))))
-($Nums[11]*(($Nums[14]*(1))
           -($Nums[15]*(1))
           +($Nums[16]*(1))
           -($Nums[18]*(1))))
+($Nums[12]*(($Nums[14]*(1))
           -($Nums[15]*(1))
           +($Nums[16]*(1))
           -($Nums[17]*(1))));
$Det2 =1;
$Det3 =1;
$Det4 =1;
$Det5 =1;
$Det6 =1;
$Esc=($Nums[1]*$Det1)-($Nums[2]*$Det2)+($Nums[3]*$Det3)-($Nums[4]*$Det4)+($Nums[5]*$Det5)-($Nums[6]*$Det6);
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
        <td><div class="panel-heading">Matriz Original</div>
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
        <td><div class="panel-heading">Determinante</div>
            <input type="number" style="width : 40px" placeholder="0" name="Esc" id="Esc" value="<?=$Esc?>"/></td>
      </tr>
    </table>   
  </form>
</div>
</div>
</div>
<?php include ("../footer.php");?>   