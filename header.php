<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mladen Local</title>

    <?php wp_head(); ?>
</head>
<body>
<header>
        <?php 
            $args = array(
                'menu_class' => 'nav nav-tabs',        
                'menu' => 'main_menu',
                'container' => 'nav',
            );
            wp_nav_menu( $args ); 
        ?>
</header>