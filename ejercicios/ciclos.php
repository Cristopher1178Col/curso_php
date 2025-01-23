<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de multiplicar</title>
</head>
<body>
    <h1>Generar tablas de multiplicar</h1>

    <form method="POST">
        <label for="numero">Ingresa un número: </label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Generar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numero = $_POST['numero'];
        echo "<ul>";
        echo "<h2>Tabla de multiplicar del $numero</h2>";

        for ($i = 1; $i <= 10; $i++) {
            echo "<li>$numero x $i = " . ($numero * $i) . "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
    
</body>
</html>