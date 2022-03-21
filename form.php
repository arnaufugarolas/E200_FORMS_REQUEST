<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
    <title>Index</title>
</head>
<body>

<form class="p-5" id="index" name="form" method="GET" action="validar.php">
    <div class="col-md-6 input-group p-2">
        <label class="form-label input-group p-2" for="form_nom">Nom</label>
        <input class="form-control input-group p-2" type="text" name="nom" id="form_nom" required readonly value="<?php echo $_GET["nom"] ?? '';?>">
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
        <input class="form-control" type="text" name="poblacio" id="form_poblacio" required value="<?php echo $_GET["poblacio"] ?? '';?>">
    </div>
    <div class="col-md-6 input-group p-2">
        <label class="form-label input-group" for="form_codi">Codi Postal</label>
        <input class="form-control" type="text" name="codi_postal" id="form_codi" required value="<?php echo $_GET["codi_postal"] ?? '';?>">
    </div>
    <div class="col-md-6 input-group p-2"> 
        <label class="datepicker input-group" data-date-format="mm/dd/yyyy" for="form_data">Data Naixement</label>
        <input class="form-control" type="date" name="data_naixament" id="form_data" required value="<?php echo $_GET["data_naixament"] ?? '';?>">
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
        <label for="form_sexe input-group">Sexe</label>
        <select class="form-select" aria-label="Default select example"  id="sexe">
            <option>Home</option>
            <option>Dona</option>
        </select>
    </div>
    <div class="col-auto input-group p-2">
        <label class="visually-hidden input-group" for="form_civil">Estat Civil</label>
        <select class="form-select" aria-label="Default select example" id="civil">
            <option>Casat</option>
            <option>Solter</option>
            <option>Vidu</option>
            <option>Separat</option>
            <option>Altres</option>
        </select>      
    </div>
    <button class="btn btn-primary" type="submit">RESUM</button>
</form>

</body>



</html>