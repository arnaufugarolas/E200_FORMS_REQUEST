<?php
if ((!isset($_GET["nom"]) or ($_GET["nom"] === '') or (preg_match('/[^a-zA-Z]/', $_GET["nom"])))) {
    header('Location: index.html');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>

<form id="index" name="form" method="GET" action="validar.php">
    <div>
        <label for="form_nom">Nom</label>
        <input type="text" name="nom" id="form_nom" required readonly value="<?php echo $_GET["nom"] ?? '';?>">
    </div>
    <div>
        <label for="form_cognoms">Cognoms</label>
        <input type="text" name="cognoms" id="form_cognoms" required value="<?php echo $_GET["cognoms"] ?? '';?>">
    </div>
    <div>
        <label for="form_nif">NIF</label>
        <input type="text" name="nif" id="form_nif" required value="<?php echo $_GET["nif"] ?? '';?>">
    </div>
    <div>
        <label for="form_poblacio">Població</label>
        <input type="text" name="poblacio" id="form_poblacio" required value="<?php echo $_GET["poblacio"] ?? '';?>">
    </div>
    <div>
        <label for="form_codi">Codi Postal</label>
        <input type="text" name="codi_postal" id="form_codi" required value="<?php echo $_GET["codi_postal"] ?? '';?>">
    </div>
    <div>
        <label for="form_data">Data Naixement</label>
        <input type="date" name="data_naixament" id="form_data" required value="<?php echo $_GET["data_naixament"] ?? '';?>">
    </div>
    <div>
        <label for="form_email">Email</label>
        <input type="email" name="email" id="form_email" required value="<?php echo $_GET["email"] ?? '';?>">
    </div>
    <div>
        <label for="form_telefon">Telèfon</label>
        <input type="text" name="telefon" id="form_telefon" required value="<?php echo $_GET["telefon"] ?? '';?>">
    </div>
    <div>
        <label for="form_sexe">Sexe</label>
        <datalist id="sexe">
            <option>Home</option>
            <option>Dona</option>
        </datalist>
        <input type="text" name="sexe" id="form_sexe" list="sexe" required value="<?php echo $_GET["sexe"] ?? '';?>">
    </div>
    <div>
        <label for="form_civil">Estat Civil</label>
        <datalist id="civil">
            <option>Casat</option>
            <option>Solter</option>
            <option>Vidu</option>
            <option>Separat</option>
            <option>Altres</option>
        </datalist>
        <input type="text" name="civil" id="form_civil" list="civil" required value="<?php echo $_GET["civil"] ?? '';?>">
    </div>
    <button type="submit">RESUM</button>
</form>

</body>



</html>