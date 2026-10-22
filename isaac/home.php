<?php
session_start();

// Si no hay sesión iniciada, regresarlo al login
if (!isset($_SESSION['user_email'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h1>¡Bienvenido, <?php echo htmlspecialchars($_SESSION['user_nombre']); ?>!</h1>
    <p>Tu correo es: <?php echo htmlspecialchars($_SESSION['user_email']); ?></p>
    
    <!-- Opcional: Mostrar la foto de perfil de Google -->
    <img src="<?php echo htmlspecialchars($_SESSION['user_foto']); ?>" alt="Foto de perfil" width="80" style="border-radius: 50%;">

    <br><br>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>