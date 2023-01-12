<?php
$b = 1;
$c = 1;
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
$Esc=$Nums[1];
?>
<?php include ("../boostrap.php");
      include ("../estilo.css");
      include ("opciones.php");
      include ("../encabezado.php");
?>
      <div style="overflow:auto;background-color: #FEFEFE;">
<?php
      include ("submenu.php");
      include ("menu.php");
?>

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