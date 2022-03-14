<?php $correcte = (isset($_GET["nom"]) and isset($_GET["cognoms"]) and isset($_GET["nif"]) and isset($_GET["poblacio"]) and isset($_GET["codi_postal"]) and isset($_GET["data_naixament"]) and isset($_GET["email"]) and isset($_GET["telefon"])) ;?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link href="validar.css" rel="stylesheet">

</head>
<body>
(preg_match('/[^a-zA-Z\\s]/', $_GET["nom"])
<?php if (!$correcte) {
    echo '<h2 class="error">Formulari incorrecte</h2>';
} ?>

<form id="index" name="form" method="GET" action="form.php">
    <div>
        <label for="form_nom" <?php if (!isset($_GET["nom"])) {echo 'class="error"';}?>>Nom</label>
        <input type="text" name="nom" id="form_nom" required readonly value="<?php echo $_GET["nom"] ?? '';?>">
    </div>
    <div>
        <label for="form_cognoms" <?php if (!isset($_GET["cognoms"])) {echo 'class="error"';}?>>Cognoms</label>
        <input type="text" name="cognoms" id="form_cognoms" required readonly value="<?php echo $_GET["cognoms"] ?? '';?>">
    </div>
    <div>
        <label for="form_nif" <?php if (!isset($_GET["nif"])) {echo 'class="error"';}?>>NIF</label>
        <input type="text" name="nif" id="form_nif" required readonly value="<?php echo $_GET["nif"] ?? '';?>">
    </div>
    <div>
        <label for="form_poblacio" <?php if (!isset($_GET["poblacio"])) {echo 'class="error"';}?>>Població</label>
        <input type="text" name="poblacio" id="form_poblacio" required readonly value="<?php echo $_GET["poblacio"] ?? '';?>">
    </div>
    <div>
        <label for="form_codi" <?php if (!isset($_GET["codi_postal"])) {echo 'class="error"';}?>>Codi Postal</label>
        <input type="text" name="codi_postal" id="form_codi" required readonly value="<?php echo $_GET["codi_postal"] ?? '';?>">
    </div>
    <div>
        <label for="form_data" <?php if (!isset($_GET["data_naixament"])) {echo 'class="error"';}?>>Data Naixement</label>
        <input type="date" name="data_naixament" id="form_data" required readonly value="<?php echo $_GET["data_naixament"] ?? '';?>">
    </div>
    <div>
        <label for="form_email" <?php if (!isset($_GET["email"])) {echo 'class="error"';}?>>Email</label>
        <input type="email" name="email" id="form_email" required readonly value="<?php echo $_GET["email"] ?? '';?>">
    </div>
    <div>
        <label for="form_telefon" <?php if (!isset($_GET["telefon"])) {echo 'class="error"';}?>>Telèfon</label>
        <input type="text" name="telefon" id="form_telefon" required readonly value="<?php echo $_GET["telefon"] ?? '';?>">
    </div>
    <div>
        <label for="form_sexe" <?php if (!isset($_GET["sexe"])) {echo 'class="error"';}?>>Sexe</label>
        <datalist id="sexe">
            <option>Home</option>
            <option>Dona</option>
        </datalist>
        <input type="text" name="sexe" id="form_sexe" list="sexe" required readonly value="<?php echo $_GET["sexe"] ?? '';?>">
    </div>
    <div>
        <label for="form_civil" <?php if (!isset($_GET["civil"])) {echo 'class="error"';}?>>Estat Civil</label>
        <datalist id="civil">
            <option>Casat</option>
            <option>Solter</option>
            <option>Vidu</option>
            <option>Separat</option>
            <option>Altres</option>
        </datalist>
        <input type="text" name="civil" id="form_civil" list="civil" required readonly value="<?php echo $_GET["civil"] ?? '';?>">
    </div>
    <button type="submit">EDITAR</button>

    <?php if ($correcte) {
        echo '<a href="index.html"><button type="button">OK</button></a>';
    } ?>

</form>

</body>

</html>