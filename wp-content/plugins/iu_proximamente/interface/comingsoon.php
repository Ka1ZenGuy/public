<?php
/**
 * Plantilla para la página "Proximamente" que veran los usuarios que no sean el administrador
 * @package iu_proximamente
 * @license GPL2
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Paaji+2&display=swap">
    <link rel="stylesheet" href="<?php echo plugins_url('assets/css/comingsoon.css', dirname(__FILE__));?>">
    <script type="text/javascript" src=<?php echo plugins_url('assets/js/comingsoon.js', dirname(__FILE__)); ?> ></script>
    
    <title>Proximamente | <?php bloginfo('name')?></title>
</head>
<body>
    <header>
        <div class="hero">
            <p> <?php bloginfo('name') ?> está en construcción / mantenimiento</p>
            <h1>Proximamente</h1>
            <hr>
            <p id="launch"></p>
        </div>
    </header>
    
</body>
</html>