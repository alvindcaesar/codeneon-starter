<?php
/**
 * Admin Page
 */

 function codeneon_starter_admin_page() {
   add_menu_page( 'Codeneon Theme Options', 'Codeneon', 'manage_options', 'codeneon-starter', 'codeneon_theme_create_page' );

 }

 function codeneon_starter_create_page() {
   
 }