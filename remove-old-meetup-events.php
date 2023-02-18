<?php
/*
 * Plugin Name:       Delete old Meetup Events
 * Description:       Deletes old Events imported using the Import Meetup Events plug-in
 * Author:            Juan Carlos Ospina Gonzalez
 * Version:           0.0.0
 * Text Domain:       remove-old-meetup-events
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('ABSPATH')) {
    // exit;
}

if (!class_exists('Remove_Old_Meetup_Events')):

    class Remove_Old_Meetup_Events {

        /** Singleton *************************************************************/
        private static $instance;

        public static function instance() {
            if (!isset(self::$instance) && !(self::$instance instanceof Remove_Old_Meetup_Events)) {
                self::$instance = new Remove_Old_Meetup_Events;
            }
            
            self::$instance->setup_constants();
            self::$instance->includes();

            return self::$instance;
        }

        /** Magic Methods *********************************************************/
        private function __construct() {
            /* Do nothing here */
        }

        private function setup_constants() {
            // Plugin folder Path.
            if (!defined('ROME_PLUGIN_DIR')) {
                define('ROME_PLUGIN_DIR', plugin_dir_path(__FILE__));
            }
        }

        /**
         * Include required files.
         *
         * @access private
         * @since 1.0.0
         * @return void
         */
        private function includes() {
            require_once ROME_PLUGIN_DIR . 'activation-deactivation.php';
            require_once ROME_PLUGIN_DIR . 'uninstall.php';
        }
    }
    
endif; // End If class exists check.

Remove_Old_Meetup_Events::instance();
?>