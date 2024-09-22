<?php
/**
 * Header file
 * 
 * @package PrimaWP
 * 
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<? bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        wp_head();
    ?>
</head>
<body>
    <body>
    <header>
        <?php
            if( function_exists('the_custom_logo')) {
                the_custom_logo();
            } else {
                echo "Site Logo";
            }

            wp_nav_menu(
                array(
                    'theme_location' => 'primawp-header-menu',
                    'container_class' => 'my_extra_menu_class'
                )
            );
        ?>

        Header
    </header>

<?php wp_body_open(); ?>
