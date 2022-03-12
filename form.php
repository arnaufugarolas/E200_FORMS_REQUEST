<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>

<form id="index" name="form" method="get" action="form.php">
    <div>
        <label for="form_user">Nom</label>
        <input type="text" name="nom" id="form_nom" required readonly value="<?php echo (isset($_GET["nom"]))?$_GET["nom"]:'';?>">
    </div>
    <div>
        <label for="form_cognoms">Cognoms</label>
        <input type="text" name="cognoms" id="form_cognoms" required>
    </div>
    <div>
        <label for="form_nif">NIF</label>
        <input type="text" name="nif" id="form_nif" required>
    </div>
    <div>
        <label for="form_poblacio">Població</label>
        <input type="text" name="poblacio" id="form_poblacio" required>
    </div>
    <div>
        <label for="form_codi">Codi Postal</label>
        <input type="text" name="codi_postal" id="form_codi" required>
    </div>
    <div>
        <label for="form_data">Data Naixement</label>
        <input type="date" name="data_naixament" id="form_data" required>
    </div>
    <div>
        <label for="form_email">Email</label>
        <input type="email" name="email" id="form_email" required>
    </div>
    <div>
        <label for="form_telefon">Telèfon</label>
        <input type="text" name="telefon" id="form_telefon" required>
    </div>
    <div>
        <label for="form_sexe">Sexe</label>
        <input type="text" name="sexe" id="form_sexe" required>
    </div>
    <div>
        <label for="form_civil">Estat Civil</label>
        <input type="text" name="civil" id="form_civil" required>
    </div>
    <button type="submit">Entrar</button>
</form>

</body>


</html>