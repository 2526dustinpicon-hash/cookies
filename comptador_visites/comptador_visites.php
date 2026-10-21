<?php
// Comprobamos si la cookie de visitas ya existe
if (!isset($_COOKIE['visites'])) {
    $visites = 1;
} else {
    // Incrementamos el valor de la cookie anterior
    $visites = (int)$_COOKIE['visites'] + 1;
}

setcookie('visites', $visites, time() + 60);

// Comprobamos si ya realizó una compra previa
$compra_feta = isset($_COOKIE['compra_realitzada']);

$missatge_descompte = "";

// Lógica de los descuentos según las visitas
if (!$compra_feta) {
    if ($visites >= 10) {
        $missatge_descompte = "Oferta exclusiva sols per a tu! Utilitza el codi BOTIGA50 per obtenir un 50% de descompte en les teves primeres compres a la botiga";
    } elseif ($visites >= 5) {
        $missatge_descompte = "Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte en les teves primeres compres a la botiga";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Comptador de Visites</title>
</head>
<body>
    <h1>Botiga Online</h1>
    
    <!-- Contador de visitas -->
    <p>Nombre de visites: <?php echo $visites; ?></p>

    <!-- Mensaje de descuento si corresponde -->
    <?php if (!empty($missatge_descompte)): ?>
        <p><strong><?php echo $missatge_descompte; ?></strong></p>
    <?php endif; ?>

    <!-- Formulario básico -->
    <form action="compra_realitzada.php" method="POST">
        <label for="codi">Codi de descompte:</label>
        <input type="text" id="codi" name="codi" required>
        <br><br>
        <button type="submit">Comprar</button>
    </form>

</body>
</html>