<?php
include('config.php');
include_once __DIR__ . ('/language/translate.php') ;
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $keyword["titulo"]; ?></title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

</head>
<body class="container-fluid">

<header>
    <h2 class="logo">PORTIFÓLIO</h2>

    <nav class="navigation">

        <a href="#inicio">INICIO</a>
        <a href="#sobre">SOBRE</a>
        <a href="#servicos">SERVIÇOS</a>
        <a href="#contato">CONTATO</a>
        <button class="btnIdioma-popup">IDIOMA</button>
    </nav>
</header>
    
    <section class="inicio" id="inicio">

    </section>


</body>

    <script type="javascript;" src="bootstrap/js/bootstrap.js"></script>

</html>