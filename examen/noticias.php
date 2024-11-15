<?php

include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Noticias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <!-- Barra de búsqueda -->
            <form class="search-bar" method="GET" action="noticias.php">
                <input type="text" name="search" placeholder="Buscar...">
            </form>

            <!-- Logo -->
            <a href="noticias.php">
                <div class="logo">
                    <img src="logo.png" alt="Logo">
                </div>
            </a>

            <!-- Iconos -->
            <div class="icons">
                <div class="icon">
                    <img src="icon1.png" alt="Icono 1">
                </div>
                <div class="icon">
                    <img src="icon2.png" alt="Icono 2">
                </div>
                <div class="icon">
                    <img src="icon3.png" alt="Icono 3">
                </div>
                <div class="icon">
                    <img src="icon4.png" alt="Icono 4">
                </div>
            </div>
        </div>
    </header>

    <?php
    if ($result->num_rows > 0) {
        // Mostrar cada fila de resultados
        while($row = $result->fetch_assoc()) {
            echo "<div class='noticia'>";
            echo "<div class='titulo'>" . htmlspecialchars($row['Titulo']) . "</div>";
            echo "<div class='categoria'>Categoría: " . htmlspecialchars($row['categoria']) . "</div>";
            echo "</div>";
        }
    } else {
        echo "<p>No se encontraron noticias.</p>";
    }

    $conn->close();
    ?>
</body>
</html>