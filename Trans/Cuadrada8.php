<?php
$b = 8;
$c = 8;
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
$i=1;$j=1;
for($i;$i<=($b*$c);$i++){
    $Numsb[$i] = $Nums[$j];
    $j = $j+8;
    if($i==8){
      $j=2;
    }else if($i==16){
      $j=3;
    }else if($i==24){
      $j=4;
    }else if($i==32){
      $j=5;
    }else if($i==40){
      $j=6;
    }else if($i==48){
      $j=7;
    }else if($i==56){
      $j=8;
    }else{}
}
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