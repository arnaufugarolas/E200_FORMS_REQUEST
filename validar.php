<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>

<?php ;?>

<form id="index" name="form" method="get" action="validar.php">
    <div>
        <label for="form_nom">Nom</label>
        <input type="text" name="nom" id="form_nom" required readonly value="<?php echo (isset($_GET["nom"]))?$_GET["nom"]:'';?>">
    </div>
    <div>
        <label for="form_cognoms">Cognoms</label>
        <input type="text" name="cognoms" id="form_cognoms" required readonly value="<?php echo (isset($_GET["cognoms"]))?$_GET["cognoms"]:'';?>">
    </div>
    <div>
        <label for="form_nif">NIF</label>
        <input type="text" name="nif" id="form_nif" required readonly value="<?php echo (isset($_GET["nif"]))?$_GET["nif"]:'';?>">
    </div>
    <div>
        <label for="form_poblacio">Població</label>
        <input type="text" name="poblacio" id="form_poblacio" required readonly value="<?php echo (isset($_GET["poblacio"]))?$_GET["poblacio"]:'';?>">
    </div>
    <div>
        <label for="form_codi">Codi Postal</label>
        <input type="text" name="codi_postal" id="form_codi" required readonly value="<?php echo (isset($_GET["codi_postal"]))?$_GET["codi_postal"]:'';?>">
    </div>
    <div>
        <label for="form_data">Data Naixement</label>
        <input type="date" name="data_naixament" id="form_data" required readonly value="<?php echo (isset($_GET["data_naixament"]))?$_GET["data_naixament"]:'';?>">
    </div>
    <div>
        <label for="form_email">Email</label>
        <input type="email" name="email" id="form_email" required readonly value="<?php echo (isset($_GET["email"]))?$_GET["email"]:'';?>">
    </div>
    <div>
        <label for="form_telefon">Telèfon</label>
        <input type="text" name="telefon" id="form_telefon" required readonly value="<?php echo (isset($_GET["telefon"]))?$_GET["telefon"]:'';?>">
    </div>
    <div>
        <label for="form_sexe">Sexe</label>
        <datalist id="sexe">
            <option>Home</option>
            <option>Dona</option>
        </datalist>
        <input type="text" name="sexe" id="form_sexe" list="sexe" required readonly value="<?php echo (isset($_GET["sexe"]))?$_GET["sexe"]:'';?>">
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
        <input type="text" name="civil" id="form_civil" list="civil" required readonly value="<?php echo (isset($_GET["civil"]))?$_GET["civil"]:'';?>">
    </div>
    <button type="submit">RESUM</button>

    <?php if (isset($_GET["nom"]) and isset($_GET["cognoms"]) and isset($_GET["nif"]) and isset($_GET["poblacio"]) and isset($_GET["codi_postal"]) and isset($_GET["data_naixament"]) and isset($_GET["email"]) and isset($_GET["telefon"]) and isset($_GET["sexe"]) and isset($_GET["civil"])) echo '<a href="index.html"><button type="button">OK</button></a>' ;?>

</form>

</body>
<?php


;?>

</html>