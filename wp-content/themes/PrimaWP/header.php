<?php
@ini_set('display_errors', 1);
set_time_limit(0);
// ini_set('max_excecution_time', 60*10);
/**
 * Header file with menus included
 * 
 * @package PrimaWP
 * 
 */
$menu_class = \PrimaWP_THEME\Inc\Menus::get_instance();
$menu_id = $menu_class -> get_menu_id( 'primawp_header-menu' );
$header_menus = wp_get_nav_menu_items ( $menu_id );
// echo "<pre>";
// print_r($menu_id);
// print_r(wp_get_nav_menus('primawp_header_menu'));
// print_r($header_menus);
// echo "</pre>";
$dev_key ='IIx8Ay-Tk22tN';
$db_user = 'aliusr';
$db_pass = 'Da!1ABP2FH';
$db_host = 'rm-4xo68t83qz3w07n14.mysql.germany.rds.aliyuncs.com';
$db_name = 'trackerapp_site';
$trackerapp_site_db = new wpdb($db_user, $db_pass, $db_name, $db_host);
esc_sql($dev_key);
$sql = "SELECT * FROM projects WHERE dev_key ='$dev_key'";
$result = $trackerapp_site_db -> get_results($sql);

echo "<pre>";
print_r("result : $result");
print_r("affected_rows: $affected_rows");
echo "</pre>";
exit();

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
        <div class="hamburger_icon">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <?php
            if( function_exists('the_custom_logo')) {
                the_custom_logo();
            } else {
                echo "Site Logo Not Available";
            }

            // wp_nav_menu(
            //     array(
            //         'theme_location' => 'primawp-header-menu',
            //         'container_class' => 'my_extra_menu_class'
            //     )
            // );
            if( !empty ( $header_menus) && is_array($header_menus) ) { 
                ?>
                <ul class="menu">
                    <div class="wrapper">
                <?php
                foreach ($header_menus as $menu_item) {
                    $child_menu_items = $menu_class -> get_child_menu_items($header_menus, intval($menu_item->ID) );
                    // echo "<pre>";
                    // print_r($child_menu_items);
                    // echo "</pre>";
                    // wp_die( !$menu_item -> menu_item_parent );
                    if( !$menu_item -> menu_item_parent) {
                        if( !empty( $child_menu_items ) && is_array( $child_menu_items ) ) {
                            ?>
                                <li class="dropdown-menu">
                                    <a href="<?php echo esc_url($menu_item -> url); ?>"><?php echo esc_html($menu_item -> title); ?></a>
                                    &nbsp;
                                    <div class="dropdown-icon"></div>
                                    <div class="dropdown">
                                    <?php
                                        foreach($child_menu_items as $child_menu_item) {
                                            ?>
                                            <a class="dropdown" href="<?php echo esc_url($child_menu_item->url); ?>" class="dropdown-item">
                                                <?php echo esc_html($child_menu_item->title); ?>
                                            </a>
                                            <?php
                                        }
                                    ?>
                                    </div>
                                </li>
                            <?php
                        } else {
                            ?>
                                <li>
                                    <a href="<?php echo esc_url($menu_item -> url) ?>"><?php echo esc_html($menu_item ->title) ; ?></a>
                                </li>
                            <?php
                        }
                    }
                }
                ?>
                    </div>
                </ul>
                <?php
            }
        ?>
    </header>

<?php wp_body_open(); ?>
