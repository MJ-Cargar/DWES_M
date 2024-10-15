<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  </title>
  </head>

<body>
  <h1>Ejemplo de recogida de datos</h1>

  <form action="form2.php" method="get">
    <table>
      <tr>
        <td>Escriba la altura:</td>
        <td><input type="number" name="altura" min="0" required> cm</td>
      </tr>
      <tr>
        <td>Escriba la longitud de la base:</td>
        <td><input type="number" name="base" min="0" required> cm</td>
      </tr>
    </table>
    <p>
      Tipo de figura:
      <input type="radio" name="figura" value="Triángulo" required> Triángulo
      <input type="radio" name="figura" value="Rectángulo" required> Rectángulo
    </p>


    <p>
      <input type="submit" name="Enviar" value="Enviar">
      <input type="reset" value="Borrar">
    </p>
  </form>

  <footer>
    <p class="ultmod">
      Fin de página.
    </p>
  </footer>
</body>
</html>