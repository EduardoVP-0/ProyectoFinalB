<?php
session_start();
// Verificar si hay sesión activa
if(!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Menú Principal</title>
</head>
<body>
    <h2>Bienvenido: <?php echo $_SESSION['usuario']; ?></h2>
    
    <!-- Resto de tu contenido HTML -->
    
    <a href="controlador/cerrar_sesion.php">Cerrar Sesión</a>
</body>
</html>