<?php
/**
* Plugin Name: Airtable
* Plugin URI: https://www.yourwebsiteurl.com/
* Description: This is the very first plugin I ever created.
* Version: 1.0
* Author: Your Name Here
* Author URI: http://yourwebsiteurl.com/
**/
function admin_menu_airtable(){
    add_menu_page('Form', 'Menu name airtable', 'manage_options', 'admin-menu-airtable', 'admin_menu_airtable_main', 'dashicons-cart', 4);
    add_submenu_page('admin-menu-airtable', 'Archived Submissions', 'Archive', 'manage_options', 'admin-menu-airtable-sub-archive', 'admin_menu_airtable_main_sub_archive');
}

add_action('admin_menu', 'admin_menu_airtable');

function admin_menu_airtable_main(){
    echo '<h1>Home pages</h1>';
}

function admin_menu_airtable_main_sub_archive(){

}

?>