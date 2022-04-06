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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form</title>
</head>
<body style="margin-top: -2%">
<form class="p-5" id="index" name="form" method="GET" action="validar.php">
    <div class="col-md-6 input-group p-2">
        <label class="form-label input-group" for="form_nom">Nom</label>
        <input class="form-control input-group" type="text" name="nom" id="form_nom" required readonly value="<?php echo $_GET["nom"] ?? '';?>">
    </div>
    <div class="col-md-6 input-group p-2">
        <label class="form-label input-group" for="form_cognoms">Cognoms</label>
        <input class="form-control" type="text" name="cognoms" id="form_cognoms" required value="<?php echo $_GET["cognoms"] ?? '';?>">
    </div>
    <div class="col-md-6 input-group p-2">
        <label class="form-label input-group" for="form_nif">NIF</label>
        <input class="form-control" type="text" name="nif" id="form_nif" required value="<?php echo $_GET["nif"] ?? '';?>">
    </div>
    <div class="col-md-6 input-group p-2">
        <label class="form-label input-group" for="form_poblacio">Població</label>
        <input class="form-control" type="text" name="poblacio" id="form_poblacio" value="<?php echo $_GET["poblacio"] ?? '';?>">
    </div>
    <div class="col-md-6 input-group p-2">
        <label class="form-label input-group" for="form_codi">Codi Postal</label>
        <input class="form-control" type="text" name="codi_postal" id="form_codi" value="<?php echo $_GET["codi_postal"] ?? '';?>">
    </div>
    <div class="col-md-6 input-group p-2">
        <label class="datepicker input-group" for="form_data">Data Naixement</label>
        <input class="form-control" type="date" name="data_naixement" id="form_data" value="<?php echo $_GET["data_naixement"] ?? '';?>">
    </div>
    <div class="col-md-6 input-group p-2">
        <label class="form-label input-group" for="form_email">Email</label>
        <input class="form-control" type="email" name="email" id="form_email" required value="<?php echo $_GET["email"] ?? '';?>">
    </div>
    <div class="col-md-6 input-group p-2">
        <label class="form-label input-group" for="form_telefon">Telèfon</label>
        <input class="form-control" type="text" name="telefon" id="form_telefon" required value="<?php echo $_GET["telefon"] ?? '';?>">
    </div>
    <div class="col-md-6 input-group p-2">
        <label for="form_sexe" class="form-label input-group">Sexe</label>
        <select class="form-select" id="form_sexe" name="sexe">
            <?php
            if ($_GET["sexe"] ?? '' === 'Dona') {
                echo '<option>Home</option> <option selected hidden>Dona</option>';
            }
            else {
                echo '<option selected>Home</option> <option>Dona</option>';
            }
            ?>
        </select>
    </div>
    <div class="col-auto input-group p-2">
        <label class="input-group" for="form_civil">Estat Civil</label>
        <select class="form-select" id="form_civil" name="civil">
            <?php
            $civil = $_GET["civil"] ?? '';
            if ($civil === 'Solter') {
                echo '<option>Casat</option><option selected>Solter</option><option>Vidu</option><option>Separat</option><option>Altres</option>';
            }
            elseif ($civil === 'Vidu') {
                echo '<option>Casat</option><option>Solter</option><option selected>Vidu</option><option>Separat</option><option>Altres</option>';
            }
            elseif ($civil === 'Separat') {
                echo '<option>Casat</option><option>Solter</option><option>Vidu</option><option selected>Separat</option><option>Altres</option>';
            }
            elseif ($civil === 'Altres') {
                echo '<option>Casat</option><option>Solter</option><option>Vidu</option><option>Separat</option><option selected>Altres</option>';
            }
            else {
                echo '<option selected>Casat</option><option>Solter</option><option>Vidu</option><option>Separat</option><option>Altres</option>';
            }
            ?>
        </select>
    </div>
    <button class="btn btn-primary" type="submit">RESUM</button>
</form>

</body>



</html>