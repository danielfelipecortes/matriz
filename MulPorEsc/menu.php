    <nav class="navbar navbar-expand-sm bg-light navbar-dark" style="padding: 0.1%;">
      <table style="font-family:Verdana;">
        <tr>
          <td><a role="button" class="btn btn-light" href="MulPorEsc.php">Reiniciar</a></td>
          <td><div class="dropdown">
                <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Matriz</button>
                <div class="dropdown-menu">
                  <form method="POST" action="MulPorEsc.php" class="dropdown-item">
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