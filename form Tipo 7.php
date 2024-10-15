<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  </title>
  </head>

<body>
  <h1>Ejemplo de recogida de datos</h1>

  <form action="form2.php" method="get">
    <p>Nombre: <input type="text" name="nombre" placeholder="Introduzca su nombre"></p>
    <p>Apellidos: <input type="text" name="apellidos" placeholder="Introduzca sus apellidos"></p>
    <p>Introduzca su consulta: <br><textarea rows="4" cols="40" name="area1" maxlength="140"placeholder="Max.: 140 caracteres"></textarea>
    <p><input type="submit" value="Enviar"> <input type="reset" value="Borrar"></p>
  </form>
  <footer>
    <p class="ultmod">
      Fin de página.
    </p>
  </footer>
</body>
</html>