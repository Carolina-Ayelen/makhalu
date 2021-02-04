<?php
include_once("includes/idioma.php");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Basic -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Site Metas -->
    <title>Makhalu-AC Agencia</title>
    <meta name="keywords" content="">
    <meta name="description" content="Agencia de Marketing Digital">
    <meta name="author" content="Carolina Ayelen Calviño">

     <!-- Site Icons -->
     <link rel="shortcut icon" href="imagenes/logo.ico" type="image/x-icon" />
     <link rel="apple-touch-icon" href="imagenes/logo.ico">  
    <!-- All core CSS -->
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- Otras -->
    <script src="js/smooth-scroll.min.js"></script>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/ihover.css">
    <!-- recaptcha-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.php">
            <img class="logo" src="imagenes/logo.svg" alt="Makhalu Ac">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php"><?php echo $lang["quienes-somos-menu"]; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="servicios.php"><?php echo $lang["servicios-menu"]; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php"><?php echo $lang["contacto-menu"]; ?></a>
                </li>

            </ul>
             <!--Cambiar Idioma-->
             <form class="form-inline" method="POST">
                <label class="mr-sm-2 label-idioma" for="inlineFormCustomSelectPref"><?php echo $lang["cambiar_idioma"]; ?></label>
                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="lang">
                    <option selected> <?php echo $lang["opcion_1"]; ?></option>
                    <option value="es"><?php echo $lang["opcion_2"]; ?></option>
                    <option value="en"><?php echo $lang["opcion_3"]; ?></option>
                </select>
                <button type="submit" class="btn btn-primary"><?php echo $lang["cambiar"]; ?></button>
            </form>
            

        </div>
    </nav>
 
  <section class="privacidad-mensaje">
    <div class="row">
      <div class="col-md-12">
        <h2><?php echo $lang["politica-privacidad"]; ?></h2>
        <div class="divider-trans"></div>
      </div>
      <div class="col-md-12">  
        <p><?php echo $lang["politicas-p"]; ?>
        </p>     
        <div class="divider-trans"></div>   
        <h4><?php echo $lang["politicas-h4"]; ?></h4>
        <p><?php echo $lang["politicas-p-2"]; ?></p>
        <div class="divider-trans"></div>
        <h4><?php echo $lang["politicas-h4-2"]; ?></h4>
        <p><?php echo $lang["politicas-p-3"]; ?></p>
        <p><?php echo $lang["politicas-p-4"]; ?></p>
      </div>
    </div>
  </section>


<?php
include_once("includes/footer.php");
?>