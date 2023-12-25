<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_filter( 'wp_nav_menu_items', 'ajouter_lien_admin_menu', 10, 2 );

function ajouter_lien_admin_menu( $items, $args ) {
    if ( is_user_logged_in() && $args->theme_location == 'primary' ) {
        // Création du lien "Administrateur" avec les classes CSS du menu
        $admin_link = '<li id="menu-item-50" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48">';
        $admin_link .= '<a href="' . admin_url() . '">Administrateur</a>';
        $admin_link .= '</li>';

        // Recherche des positions des balises <li>
        $li_start = strpos($items, '<li');
        $li_end = strpos($items, '</li>', $li_start) + 5;

        // Construction du nouveau contenu du menu avec le lien "Administrateur" inséré
        $new_items = substr($items, 0, $li_end) . $admin_link . substr($items, $li_end);

        return $new_items;
    }

    return $items;
}