<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bodega</title>
</head>
<body>

    <h1>Bodega - Configuració</h1>

    <form action="informacio.php" method="POST">
        <!-- Mayoría de edad -->
        <p>Ets major d'edat?</p>
        <input type="radio" name="majoredat" value="si" id="si" required>
        <label for="si">Sí</label>
        <input type="radio" name="majoredat" value="no" id="no">
        <label for="no">No</label>

        <!-- Idioma -->
        <p>Idioma:</p>
        <select name="idioma">
            <option value="catala">Català</option>
            <option value="espanyol">Espanyol</option>
            <option value="angles">Anglès</option>
        </select>

        <!-- Moneda -->
        <p>Moneda:</p>
        <select name="moneda">
            <option value="euros">Euros (€)</option>
            <option value="lliures">Lliures (£)</option>
            <option value="dolars">Dòlars ($)</option>
        </select>

        <br><br>
        <button type="submit">Enviar</button>
    </form>

</body>
</html>