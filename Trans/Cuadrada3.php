<?php
$b = 3;
$c = 3;
$i=1;$x=1;$y=1;
for($i;$i<=($b*$c);$i++){
    $Nums[$i] = 0;
}
$i=1;$x=1;$y=1;
for($i;$i<=($b*$c);$i++){
    $Numsb[$i] = 0;
}
if(isset($_POST["Calcular"])){
    $i=1;
    for($i;$i<=($b*$c);$i++){
     $Nums[$i] = (int) $_POST["N$i"];
    }
    include ("../boostrap.php");
    include ("../estilo.css");
    include ("opciones.php");
    include ("../encabezado.php");    
}
$Numsb[1]= $Nums[1];
$Numsb[2]= $Nums[4];
$Numsb[3]= $Nums[7];
$Numsb[4]= $Nums[2];
$Numsb[5]= $Nums[5];
$Numsb[6]= $Nums[8];
$Numsb[7]= $Nums[3];
$Numsb[8]= $Nums[6];
$Numsb[9]= $Nums[9];
?>
<?php if(isset($_POST["Calcular"])){
  ?><div style="overflow:auto;background-color: #FEFEFE;"><?php
  include ("submenu.php");
  include ("menu.php");
  ?><div class="main"><?php
}?>
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
                           ?><input type="number" style="width : 40px" placeholder="0" name="N<?=$i?>" id="N<?=$i?>" value="<?=$Nums[$i]?>"/><?php
                           $i = $i+1;
                        }
                        ?><br><?php
              }?>
        </td>
        <td><==></td>
        <td style="text-align:center;"><div class="panel-heading">Matriz Transpuesta</div>
            <?php 
            $i=1;
            $x=1;
            $y=1;
            for($y;$y<=$b;$y++){
                        $x=1;
                        for($x;$x<=$c;$x++){
                           ?><input type="number" style="width : 40px" placeholder="0" value="<?=$Numsb[$i]?>"/><?php
                           $i = $i+1;
                        }
                        ?><br><?php
              }?>
        </td>           
      </tr>
    </table>   
  </form>
</div>
<?php if(isset($_POST["Calcular"])){
?></div>
</div><?php
}?>
<?php 
if(isset($_POST["Calcular"])){
        include ("../footer.php");
  }
?>  