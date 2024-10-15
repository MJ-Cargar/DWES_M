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
        <td>Escriba su nombre:</td>
        <td><input type="text" name="nombre" size="30" maxlength="20"></td>
      </tr>
      <tr>
        <td>Apellidos:</td>
        <td> <input type="text" name="apellidos" size="30" maxlength="60"></p>
      </tr>
      <tr>
        <td>Escriba su edad:</td>
        <td><input type="number" name="edad" min="1" max="120"> años</td>
      </tr>
    </table>

    <p>
      <input type="submit" value="Enviar">
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
