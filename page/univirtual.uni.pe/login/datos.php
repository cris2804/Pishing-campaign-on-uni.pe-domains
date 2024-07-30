<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso de Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Datos del Usuario</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        echo "<div class='alert alert-success'><strong>Nombre de usuario:</strong> $username</div>";
        echo "<div class='alert alert-success'><strong>Contraseña:</strong> $password</div>";
        echo "<div class='alert alert-info'>Estos datos no se han enviado a ningún servidor. Son solo para propósitos educativos.</div>";
    } else {
        echo "<div class='alert alert-danger'>Método de solicitud no válido.</div>";
    }
    ?>
    <a href="index.html" class="btn btn-primary mt-3">Volver</a>
</div>
</body>
</html>
