<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicas Artur - <?= $ruta ?></title>
    <link rel="stylesheet" href="./assets/css/main.css?v=<?php echo date('YmdHis')?>">
</head>

<body>

    <?= '<script>
  const ruta = "'.$ruta.'";
</script>'; ?>

    <nav class="menu">
        <a class="btn-menu" href=""><i class="fa fa-bars"></i></a>
        <ul class="menu-list">
            <li class="active">
                <a href="./principal">Principal</a>
            </li>
            <li>
                <a href="./contacto">Contacto</a>
            </li>
            <li>
                <a href="./acercade">Acerca de</a>
            </li>
            <li>
                <a href="./confidencialidad">Confidencialidad</a>
            </li>
        </ul>
    </nav>