<?php

/* Activate Nav Menu Option */
function folio_register_nav_menu()
{
    register_nav_menu('primary', 'Sidebar Menu');
}
add_action('after_setup_theme', 'folio_register_nav_menu');
