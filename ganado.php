<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ahorcado</title>
     <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Juego del Ahorcado</h1>
    <p>¡Enhorabuena! Has ganado :) La palabra era: <?php echo $_SESSION['palabra']; ?></p>
    <a href="index.php">Jugar de nuevo</a>
    
</body>
</html>