<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="margin: 2%">
<form id="index" name="form" method="GET" action="form.php">
    <input type="text" name="nom" id="form_nom" hidden readonly value="<?php echo $_GET["nom"] ?? '';?>">
    <input type="text" name="cognoms" id="form_cognoms" hidden readonly value="<?php echo $_GET["cognoms"] ?? '';?>">
    <input type="text" name="nif" id="form_nif" hidden readonly value="<?php echo $_GET["nif"] ?? '';?>">
    <input type="text" name="poblacio" id="form_poblacio" hidden readonly value="<?php echo $_GET["poblacio"] ?? '';?>">
    <input type="text" name="codi_postal" id="form_codi" hidden readonly value="<?php echo $_GET["codi_postal"] ?? '';?>">
    <input type="date" name="data_naixement" id="form_data" hidden readonly value="<?php echo $_GET["data_naixement"] ?? '';?>">
    <input type="email" name="email" id="form_email" hidden readonly value="<?php echo $_GET["email"] ?? '';?>">
    <input type="text" name="telefon" id="form_telefon" hidden readonly value="<?php echo $_GET["telefon"] ?? '';?>">
    <input type="text" name="sexe" id="form_sexe" hidden readonly value="<?php echo $_GET["sexe"] ?? '';?>">
    <input type="text" name="civil" id="form_civil" hidden readonly value="<?php echo $_GET["civil"] ?? '';?>">

    <?php $correcte = true ;?>

    <div class="card">
        <label class="form-label input-group" for="form_nom">Nom</label>
        <?php
        $check = $_GET["nom"] ?? '';

        if ((($check === '') || (preg_match('/[^a-zA-Z]/', $check)))) {
            echo '<div class="card-body alert alert-danger">';
            $correcte = false;
        }
        else { echo '<div class="card-body alert alert-success">'; }

        if ($check === '') { echo 'Falta el nom'; }
        else { echo $check; }

        echo '</div>'
        ?>
    </div>

    <div class="card">
        <label class="form-label input-group" for="form_cognoms">Cognoms</label>
        <?php
        $check = $_GET["cognoms"] ?? '';

        if ((($check === '') || (!preg_match('/^[a-zA-Z]+(?:\s[a-zA-Z]+)?$/', $check)))) {
            echo '<div class="card-body alert alert-danger">';
            $correcte = false;
        }
        else { echo '<div class="card-body alert alert-success" >'; }

        if ($check === '') { echo 'Falten els cognoms'; }
        else { echo $check; }

        echo '</div>'
        ?>
    </div>

    <div class="card">
        <label class="form-label input-group" for="form_nif">NIF</label>
        <?php
        $check = $_GET["nif"] ?? '';

        if ((($check === '') || (!preg_match('/^[\d]{8}[a-zA-Z]$/', $check)))) {
            echo '<div class="card-body alert alert-danger">';
            $correcte = false;
        }
        else { echo '<div class="card-body alert alert-success">'; }

        if ($check === '') { echo 'Falta el NIF'; }
        else { echo $check; }
        echo '</div>'
        ?>
    </div>

    <div class="card">
        <label class="form-label input-group" for="form_poblacio">Població</label>
        <?php
        $check = $_GET["poblacio"] ?? '';

        if ($check === '') { echo '<div class="card-body alert alert-warning">Falta la població</div>'; }
        else { echo '<div class="card-body alert alert-info">'.$check.'</div>'; }
        ?>
    </div>

    <div class="card">
        <label class="form-label input-group" for="form_codi">Codi Postal</label>
        <?php
        $check = $_GET["codi_postal"] ?? '';

        if ($check === '') { echo '<div class="card-body alert alert-warning">Falta el codi postal</div>'; }
        else { echo '<div class="card-body alert alert-info">'.$check.'</div>'; }
        ?>
    </div>

    <div class="card">
        <label class="form-label input-group" for="form_data">Data Naixement</label>
        <?php
        $check = $_GET["data_naixement"] ?? '';

        if ($check === '') { echo '<div class="card-body alert alert-warning">Falta la data de naixement</div>'; }
        else { echo '<div class="card-body alert alert-info">'.$check.'</div>'; }
        ?>
    </div>

    <div class="card">
        <label class="form-label input-group" for="form_email">Email</label>
        <?php
        $check = $_GET["email"] ?? '';

        if ((($check === '') || (!preg_match('/^[a-zA-Z\d+_.-]+@[a-zA-Z\d.-]+$/', $check)))) {
            echo '<div class="card-body alert alert-danger">';
            $correcte = false;
        }
        else { echo '<div class="card-body alert alert-success">'; }

        if ($check === '') { echo 'Falta l\'email'; }
        else { echo $check; }
        echo '</div>'
        ?>
    </div>

    <div class="card">
        <label class="form-label input-group" for="form_telefon">Telèfon</label>
        <?php
        $check = $_GET["telefon"] ?? '';

        if ((($check === '') || (!preg_match('/^[+]?[(]?[\d]{3}[)]?[-\s.]?[\d]{3}[-\s.]?[\d]{3,6}$/', $check)))) {
            echo '<div class="card-body alert alert-danger">';
            $correcte = false;
        }
        else { echo '<div class="card-body alert alert-success">'; }

        if ($check === '') { echo 'Falta el telèfon'; }
        else { echo $check; }
        echo '</div>'
        ?>
    </div>

    <div class="card">
        <label for="form_sexe" class="form-label input-group">Sexe</label>
        <?php
        $check = $_GET["sexe"] ?? '';

        if ($check === '') { echo '<div class="card-body alert alert-warning">Falta el sexe</div>'; }
        else { echo '<div class="card-body alert alert-info">'.$check.'</div>'; }
        ?>
    </div>

    <div class="card">
        <label class="form-label input-group" for="form_civil">Estat Civil</label>
        <?php
        $check = $_GET["civil"] ?? '';

        if ($check === '') { echo '<div class="card-body alert alert-warning">Falta l\'estat civil</div>'; }
        else { echo '<div class="card-body alert alert-info">'.$check.'</div>'; }
        ?>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">EDITAR</button>

    <?php
    if ($correcte) {
        echo '<a href="index.html"><button class="btn btn-primary" type="button">OK</button></a>';
    } else {
        echo '<br><br><h2 class="alert alert-danger">Formulari incorrecte</h2>';
    }
    ?>

</form>

</body>

</html>