<!DOCTYPE html>
<html>
<head>
  <title>Al</title>
  <?php include ("boostrap.php");?>
  <?php include ("estilo.css");?>
</head>
<body style="font-family:Verdana;">
  <?php include ("opciones.php");?>
  <?php include ("encabezado.php");?>
  <div style="overflow:auto;background-color: #FFFFFF;text-align:center;">
    <div class="menu">
      <div class="menuitem"><h3>Operaciones</h3></div>
      <div class="menuitem"><a href="MulPorEsc/MulPorEsc.php" class="text-dark">Multiplicacion por un escalar</a></div>
      <div class="menuitem"><a href="SOR/SOR.php" class="text-dark">Suma o resta </a></div>
      <div class="menuitem"><a href="Mul/Mul.php" class="text-dark">Multiplicacion</a></div>
      <div class="menuitem"><a href="Det/Det.php" class="text-dark">Determinante</a></div>
      <div class="menuitem"><a href="Trans/Trans.php" class="text-dark">Transpuesta</a></div>
      <div class="menuitem"><a href="Adj/Adj.php" class="text-dark">Adjunta</a></div>
      <div class="menuitem"><a href="Invers/Invers.php" class="text-dark">Inversa por adjunta</a></div>
      <div class="menuitem"><a href="Cramer/Cramer.php" class="text-dark">Metodo de cramer</a></div>
    </div>
    <div class="main">
      <div style="text-align:center;">
        <br>
        <p style="font-size:20px";>Historial de versiones.</p>
        <p>Fecha: 5/02/2020 version 1.1.32 Se estructuro el menu, cambiando nombres de operaciones y organizando de forma alfabetica, tambien se ajustaron pequeños detalles esteticos como las flechas en los ingresos de numeros en las matrices, tipos de letra y tamaño.</p>
        <p>Fecha: 14/01/2020 version 1.1.2 Se agrego la operacion para calcular la transpuesta de una matriz, en este momento se encuntra funcional para las matrices cuadradas hasta 10 por 10.</p>
        <p>Fecha: 08/01/2020 version 1.1.1 Se agrego la operacion de metodo de cramer para calcular los valores de variables en un sistema de igual numero de incognitas y ecuaciones, actualmente funcional para tres ecuaciones con dos incognitas.</p>
        <p>Fecha: 07/01/2020 version 1.1.0 Se agrego la operacion de metodo de cramer para calcular los valores de variables en un sistema de igual numero de incognitas y ecuaciones, actualmente funcional para dos ecuaciones con dos incognitas.</p>
        <p>Fecha: 06/01/2020 version 1.0.9 Se agrego la operacion de calculo de la adjunta, esta funcional para las matrices cuadradas hasta 4x4.</p>
        <p>Fecha: 05/01/2020 version 1.0.8 Las operaciones de multiplicacion por un escalar y suma y resta de matrices estan completamente funcionales, la opercion de calcular el determinante actualmente funciona hasta las matrices cuadradas de 5x5.</p>
        <p>Fecha: 04/01/2020 version 1.0.7 La operacion de multiplicacion por un escalar estan completamente funcional, y se agrego la opercion de calcular el determinante, actualmente funciona hasta las matrices cuadradas de 5x5.</p>
        <p>Fecha: 03/01/2020 version 1.0.6 Solo funciona la operacion multiplicacion por un escalar.</p>
        <p>Fecha: 31/12/2019 version 1.0.5 Con la alteracion de parametros esteticos se han de restructurar algunas funciones al igual que por motivo de la inclusion del sistema responsive, actualmente funcionando solo la opcion de multiplicacion por un escarlar.</p>
        <p>Fecha: 29/12/2019 version 1.0.4 Se han alterado parametros esteticos a la interface dejandola en blanco para luego escoger paleta de colores, no se agregaron nuevas funciones, se soluciono el problema de responsive de la pagina para diferentes tamaños de pantalla.</p>
        <p>Fecha: 28/12/2019 version 1.0.3 No se han alterado parametros esteticos a la interface, se agrego la funcion para calcuar el determinante de una matriz cuadrada,sigue tambien condicionado a no superar el valor de dies (10) para filas y columnas; pero esta en este momento funcional solo para matrises hasta un tamño de 5X5. Aun no se corrige el problema de el desajuste de los elementos en los diferentes tipos de pantallas, aun hay funciones no operativas y se encontro un error en la funcion para volver al inicio desde una funcion completada.</p>
        <p>Fecha: 27/12/2019 version 1.0.2 No se han alterado parametros esteticos a la interface, se completo la funcion suma o resta para operar dos matrices, para todas las matrices de n filas por m columnas,sigue tambien condicionado a no superar el valor de dies (10) para filas y columnas. Aun no se corrige el problema de el desajuste de los elementos en los diferentes tipos de pantallas, aun hay funciones no operativas.</p>
        <p>Fecha: 26/12/2019 version 1.0.1 No se han alterado parametros esteticos a la interface, se agrego la funcion suma o resta para operar dos matrices, pero condicionado por el momento a matrices de igual numero de filas y columnas (cuadradas), tambien condicionado a no superar el valor de dies (10) para filas y columnas. Aun no se corrige el problema de el desajuste de los elementos en los diferentes tipos de pantallas, aun hay funciones no operativas.</p>
        <p>Fecha: 25/12/2019 version 1.0.0 Primera base de la presentacion de la interface visual, sin titulo o nombre oficial, con opciones aun no asignadas o operativas, funcionando solo la opcion de "Multiplicacion por un escalar", funcionando completamente para todo tipo de matriz, con la condicion de no superara el valor de dies (10) para filas y columnas. Aun se pueden considerar cambios para la presentacion de la interface. se presentan errores de ajuste en diferentes tipos de pantallas.</p>
      </div>
    </div>
  </div>
  <?php include ("footer.php");?>
</body>
</html>