<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  
  </title>*/
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <form action="form2.php" method="get">
    <p>Nombre: <input type="text" name="nombre"></p>

    <p>
      Curso:
      <input type="radio" name="curso" value="Primero" required> 1º
      <input type="radio" name="curso" value="Segundo" required> 2º
    </p>

    <p>
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </p>
  </form>
</body>
</html>