<?php
$b = 2;
$c = 3;
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
$dm=($Nums[1]*$Nums[5])-($Nums[2]*$Nums[4]);
$dx=($Nums[3]*$Nums[5])-($Nums[2]*$Nums[6]);
$dy=($Nums[1]*$Nums[6])-($Nums[3]*$Nums[4]);
if($dm==0){
$vx=0;
$vy=0;
}else{
$vx=$dx/$dm;
$vy=$dy/$dm;
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

                           if($x == 3 || $x == 6){
                            ?><a>=</a><?php
                           };
                           ?><input type="number" style="width : 40px" placeholder="0" name="N<?=$i?>" id="N<?=$i?>" value="<?=$Nums[$i]?>"/><?php
                           $i = $i+1;
                          if($x == 2 || $x == 5){
                            ?><a>Y</a><?php
                           };
                           if($x == 1 || $x == 4){
                            ?><a>X</a><?php
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
      </tr>
    </table>   
  </form>
</div>
</div>
</div>
<?php include ("../footer.php");?>   