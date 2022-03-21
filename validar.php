<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php $correcte = (isset($_GET["nom"]) and isset($_GET["cognoms"]) and isset($_GET["nif"]) and isset($_GET["poblacio"]) and isset($_GET["codi_postal"]) and isset($_GET["data_naixament"]) and isset($_GET["email"]) and isset($_GET["telefon"])) ;?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link href="validar.css" rel="stylesheet">

</head>
<body>
<?php if (!$correcte) {
    echo '<h2 class="error">Formulari incorrecte</h2>';
} ?>

<form id="index" name="form" method="GET" action="form.php">
    <div class="card">
        <div class="card-body" >
            <?php echo $_GET["nom"] ?? '';?>
        </div>
    </div>

    <div class="card">
        <div class="card-body" >
            <?php echo $_GET["cognoms"] ?? '';?>
        </div>
    </div>
    
    <div class="card">
        <div class="card-body" >
            <?php echo $_GET["nif"] ?? '';?>
        </div>
    </div>

    <div class="card">
        <div class="card-body" >
            <?php echo $_GET["poblacio"] ?? '';?>
        </div>
    </div>
    
    <div class="card">
        <div class="card-body" >
            <?php echo $_GET["codi_postal"] ?? '';?>
        </div>
    </div>

    <div class="card">
        <div class="card-body" >
            <?php echo $_GET["codi_postal"] ?? '';?>
        </div>
    </div>

    <div class="card">
        <div class="card-body" >
            <?php echo $_GET["data_naixament"] ?? '';?>
        </div>
    </div>
    
    <div class="card">
        <div class="card-body" >
            <?php echo $_GET["email"] ?? '';?>
        </div>
    </div>

    <div class="card">
        <div class="card-body" >
            <?php echo $_GET["telefon"] ?? '';?>
        </div>
    </div>

    <div class="card">
        <div class="card-body" >
            <?php echo $_GET["sexe"] ?? '';?>
        </div>
    </div>
    
    <div class="card">
        <div class="card-body" >
            <?php echo $_GET["civil"] ?? '';?>
        </div>
    </div>
    
    <button type="submit">EDITAR</button>

    <?php if ($correcte) {
        echo '<a href="index.html"><button type="button">OK</button></a>';
    } ?>

</form>

</body>

</html>