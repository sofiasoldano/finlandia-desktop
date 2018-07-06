<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Finlandia</title>
    
    <link href="css/above.css" rel="stylesheet">
        <link href="css/vendors/flexslider.css" rel="stylesheet">
    </head>

    <body class="<?php echo $page_name; ?>">
        <header>
            <a href="index.php">
                <?php if ($page_name=="home"){ ?>
                <img src="img/logo-blue.png" width="215" alt="Logo Finlandia" class="logo-default">
                <?php } else { ?>
                <div  class="logo-default logo-white">Logo Finlandia</div>
                <?php }; ?>
                <div  class="logo-active logo-white hidden">Logo Finlandia</div>
            </a>
            <div class="menu-header">
                <ul>
                    <li><a href="#" onclick="submenu('#menu-productos', 1);">Productos</a></li>
                    <li>•</li>
                    <li><a href="#" onclick="submenu('#menu-recetas', 3);">Recetas</a></li>
                    <li>•</li>
                    <li><a href="desayunos.php">Desayuno</a></li>
                    <li>
                        <div class="menu-icon">
                            <div class="menu-line"></div>
                            <div class="menu-line"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </header>