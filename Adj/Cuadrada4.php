<?php
$b = 4;
$c = 4;
$i=1;
$x=1;
$y=1;
for($i;$i<=($b*$c);$i++){
    $Nums[$i] = 0;
}
$i=1;
for($i;$i<=($b*$c);$i++){
    $Numsa[$i] = 0;
}
$Esc=0;
if(isset($_POST["Calcular"])){
    $i=1;
    for($i;$i<=($b*$c);$i++){
     $Nums[$i] = (int) $_POST["N$i"];
    } 
}
$Numsa[1]=(($Nums[6]*$Nums[11]*$Nums[16])+($Nums[7]*$Nums[12]*$Nums[14])+($Nums[8]*$Nums[10]*$Nums[15]))
         -(($Nums[8]*$Nums[11]*$Nums[14])+($Nums[7]*$Nums[10]*$Nums[16])+($Nums[6]*$Nums[12]*$Nums[15]));
$Numsa[2]=(($Nums[5]*$Nums[11]*$Nums[16])+($Nums[7]*$Nums[12]*$Nums[13])+($Nums[8]*$Nums[9]*$Nums[15]))
         -(($Nums[8]*$Nums[11]*$Nums[13])+($Nums[7]*$Nums[9]*$Nums[16])+($Nums[5]*$Nums[12]*$Nums[15]));
$Numsa[3]=(($Nums[5]*$Nums[10]*$Nums[16])+($Nums[6]*$Nums[12]*$Nums[13])+($Nums[8]*$Nums[9]*$Nums[14]))
         -(($Nums[8]*$Nums[10]*$Nums[13])+($Nums[6]*$Nums[9]*$Nums[16])+($Nums[5]*$Nums[12]*$Nums[14]));
$Numsa[4]=(($Nums[5]*$Nums[10]*$Nums[15])+($Nums[6]*$Nums[11]*$Nums[13])+($Nums[7]*$Nums[9]*$Nums[14]))
         -(($Nums[7]*$Nums[10]*$Nums[13])+($Nums[6]*$Nums[9]*$Nums[15])+($Nums[5]*$Nums[11]*$Nums[14]));          
$Numsa[5]=(($Nums[2]*$Nums[11]*$Nums[16])+($Nums[3]*$Nums[12]*$Nums[14])+($Nums[4]*$Nums[10]*$Nums[15]))
         -(($Nums[4]*$Nums[11]*$Nums[14])+($Nums[3]*$Nums[10]*$Nums[16])+($Nums[2]*$Nums[12]*$Nums[15]));           
$Numsa[6]=(($Nums[1]*$Nums[11]*$Nums[16])+($Nums[3]*$Nums[12]*$Nums[13])+($Nums[4]*$Nums[9]*$Nums[15]))
         -(($Nums[4]*$Nums[11]*$Nums[13])+($Nums[3]*$Nums[9]*$Nums[16])+($Nums[1]*$Nums[12]*$Nums[15]));
$Numsa[7]=(($Nums[1]*$Nums[10]*$Nums[16])+($Nums[2]*$Nums[12]*$Nums[13])+($Nums[4]*$Nums[9]*$Nums[14]))
         -(($Nums[4]*$Nums[10]*$Nums[13])+($Nums[2]*$Nums[9]*$Nums[16])+($Nums[1]*$Nums[12]*$Nums[14]));
$Numsa[8]=(($Nums[1]*$Nums[10]*$Nums[15])+($Nums[2]*$Nums[11]*$Nums[13])+($Nums[3]*$Nums[9]*$Nums[14]))
         -(($Nums[3]*$Nums[10]*$Nums[13])+($Nums[2]*$Nums[9]*$Nums[15])+($Nums[1]*$Nums[11]*$Nums[14]));
$Numsa[9]=(($Nums[2]*$Nums[7]*$Nums[16])+($Nums[3]*$Nums[8]*$Nums[14])+($Nums[4]*$Nums[6]*$Nums[15]))
         -(($Nums[4]*$Nums[7]*$Nums[14])+($Nums[3]*$Nums[6]*$Nums[16])+($Nums[2]*$Nums[8]*$Nums[15]));
$Numsa[10]=(($Nums[1]*$Nums[7]*$Nums[16])+($Nums[3]*$Nums[8]*$Nums[13])+($Nums[4]*$Nums[5]*$Nums[15]))
          -(($Nums[4]*$Nums[7]*$Nums[13])+($Nums[3]*$Nums[5]*$Nums[16])+($Nums[1]*$Nums[8]*$Nums[15]));
$Numsa[11]=(($Nums[1]*$Nums[6]*$Nums[16])+($Nums[2]*$Nums[8]*$Nums[13])+($Nums[4]*$Nums[5]*$Nums[14]))
          -(($Nums[4]*$Nums[6]*$Nums[13])+($Nums[2]*$Nums[5]*$Nums[16])+($Nums[1]*$Nums[8]*$Nums[14]));
$Numsa[12]=(($Nums[1]*$Nums[6]*$Nums[15])+($Nums[2]*$Nums[7]*$Nums[13])+($Nums[3]*$Nums[5]*$Nums[14]))
          -(($Nums[3]*$Nums[6]*$Nums[13])+($Nums[2]*$Nums[5]*$Nums[15])+($Nums[1]*$Nums[7]*$Nums[14]));
$Numsa[13]=(($Nums[2]*$Nums[7]*$Nums[12])+($Nums[3]*$Nums[8]*$Nums[10])+($Nums[4]*$Nums[6]*$Nums[11]))
          -(($Nums[4]*$Nums[7]*$Nums[10])+($Nums[3]*$Nums[6]*$Nums[12])+($Nums[2]*$Nums[8]*$Nums[11]));
$Numsa[14]=(($Nums[1]*$Nums[7]*$Nums[12])+($Nums[3]*$Nums[8]*$Nums[9])+($Nums[4]*$Nums[5]*$Nums[11]))
          -(($Nums[4]*$Nums[7]*$Nums[9])+($Nums[3]*$Nums[5]*$Nums[12])+($Nums[1]*$Nums[8]*$Nums[11]));
$Numsa[15]=(($Nums[1]*$Nums[6]*$Nums[12])+($Nums[2]*$Nums[8]*$Nums[9])+($Nums[4]*$Nums[5]*$Nums[10]))
          -(($Nums[4]*$Nums[6]*$Nums[9])+($Nums[2]*$Nums[5]*$Nums[12])+($Nums[1]*$Nums[8]*$Nums[10]));
$Numsa[16]=(($Nums[1]*$Nums[6]*$Nums[11])+($Nums[2]*$Nums[7]*$Nums[9])+($Nums[3]*$Nums[5]*$Nums[10]))
          -(($Nums[3]*$Nums[6]*$Nums[9])+($Nums[2]*$Nums[5]*$Nums[11])+($Nums[1]*$Nums[7]*$Nums[10]));
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
        <td style="text-align:center;"><div class="panel-heading"><strong>Matriz Original</strong></div>
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
        <td style="text-align:center;"><div class="panel-heading"><strong>Matriz adjunta</strong></div>
            <?php 
            $i=1;
            $y=1;
            for($y;$y<=$b;$y++){
                        $x=1;
                        for($x;$x<=$c;$x++){
                           ?><input type="number" style="width : 40px" placeholder="0" value="<?=$Numsa[$i]?>"/><?php
                           $i = $i+1;
                        }
                        ?><br><?php
              }?>
        </td>
      </tr>
    </table>   
  </form>
</div>
</div>
</div>
<?php include ("../footer.php");?>    