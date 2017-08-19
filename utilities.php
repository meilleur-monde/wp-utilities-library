<?php
namespace BetterWorld;

if(!defined('ABSPATH')) exit;

/*
Plugin Name: Better World Utilities Library
Plugin URI: https://wordpress.org/plugins/better-world-utilities-library
Description: add some utilities functions
Version: 1.0
Author: François Chastanet
Author URI: https://github.com/meilleur-monde
License: GNU GENERAL PUBLIC LICENSE Version 3, 29 June 2007
*/

class Utilities {
    /**
     * @return bool true if we are on frontend page so not prefixed with wp-admin
     */
    public static function isFrontEnd() {
        // Replace the site base URL with the absolute path to its installation directory.
        $adminPath = get_admin_url();

        return (
            isset($_SERVER['REQUEST_URI'])
            && !(strncmp(get_bloginfo('url') . $_SERVER['REQUEST_URI'], $adminPath, strlen($adminPath)) === 0)
        );
    }

    /**
     * @return bool true if Theme customization is enabled
     */
    public static function isAdminCustomizationEnabled() {
        global $wp_customize;
        return isset($wp_customize);
    }
}