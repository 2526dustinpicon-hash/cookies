<?php
// Si venimos del formulario, guardamos los datos en las cookies requeridas
if (isset($_POST['majoredat'])) {
    setcookie('majoredat', $_POST['majoredat'], time() + 60);
    setcookie('idioma', $_POST['idioma'], time() + 60);
    setcookie('moneda', $_POST['moneda'], time() + 60);
    
    // Leemos directamente del $_POST para mostrar el resultado al instante
    $majoredat = $_POST['majoredat'];
    $idioma = $_POST['idioma'];
    $moneda = $_POST['moneda'];
} else {
    // Si la página se recarga, leemos de las cookies existentes
    $majoredat = $_COOKIE['majoredat'];
    $idioma = $_COOKIE['idioma'];
    $moneda = $_COOKIE['moneda'];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Informació Bodega</title>
</head>
<body>

    <h1>Informació de la Botiga</h1>

    <?php if ($majoredat === 'no'): ?>
        
        <!-- Mensaje si es menor de edad -->
        <p>No et podem vendre alcohol si ets menor d'edat.</p>

    <?php else: ?>

        <!-- Si es mayor de edad, mostramos los 2 productos traducidos -->
        <h2>Productes disponibles:</h2>

        <?php if ($idioma === 'catala'): ?>
            
            <!-- Català -->
            <?php if ($moneda === 'euros'): ?>
                <p>T'oferim el vi "Les Terrasses" a un preu de 39 €</p>
                <p>T'oferim el vi "L'Ermita" a un preu de 1200 €</p>
            <?php elseif ($moneda === 'lliures'): ?>
                <p>T'oferim el vi "Les Terrasses" a un preu de 33 £</p>
                <p>T'oferim el vi "L'Ermita" a un preu de 1030 £</p>
            <?php else: ?>
                <p>T'oferim el vi "Les Terrasses" a un preu de 42 $</p>
                <p>T'oferim el vi "L'Ermita" a un preu de 1300 $</p>
            <?php endif; ?>

        <?php elseif ($idioma === 'espanyol'): ?>

            <!-- Espanyol -->
            <?php if ($moneda === 'euros'): ?>
                <p>Te ofrecemos el vino "Les Terrasses" a un precio de 39 €</p>
                <p>Te ofrecemos el vino "L'Ermita" a un precio de 1200 €</p>
            <?php elseif ($moneda === 'lliures'): ?>
                <p>Te ofrecemos el vino "Les Terrasses" a un precio de 33 £</p>
                <p>Te ofrecemos el vino "L'Ermita" a un precio de 1030 £</p>
            <?php else: ?>
                <p>Te ofrecemos el vino "Les Terrasses" a un precio de 42 $</p>
                <p>Te ofrecemos el vino "L'Ermita" a un precio de 1300 $</p>
            <?php endif; ?>

        <?php else: ?>

            <!-- Anglès -->
            <?php if ($moneda === 'euros'): ?>
                <p>We offer you the wine "Les Terrasses" for 39 €</p>
                <p>We offer you the wine "L'Ermita" for 1200 €</p>
            <?php elseif ($moneda === 'lliures'): ?>
                <p>We offer you the wine "Les Terrasses" for 33 £</p>
                <p>We offer you the wine "L'Ermita" for 1030 £</p>
            <?php else: ?>
                <p>We offer you the wine "Les Terrasses" for 42 $</p>
                <p>We offer you the wine "L'Ermita" for 1300 $</p>
            <?php endif; ?>

        <?php endif; ?>

    <?php endif; ?>

    <br>
    <a href="bodega.php">Canviar configuració</a>

</body>
</html>