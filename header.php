<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("title"); ?></title>

    <?php
        // this will execute any scripts, or echo any <links/script> elements
        // that the theme, or wordpress itself, or any installed plugins need to 
        // have present / running to function properly
        wp_head();
    ?>
</head>
<body>
    <h1><?php bloginfo("title"); ?></h1>
    <nav>
        <h2><?php bloginfo( "title" ); ?> Navigation </h2>
        <?php 
            wp_nav_menu (
                array(
                    "theme_location" => "main_menu"
                )
                );
        ?>
    </nav>