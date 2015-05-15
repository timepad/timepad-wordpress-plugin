<?php
if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! class_exists( 'TimepadEvents_Admin_Menu' ) ) :
    
    class TimepadEvents_Admin_Menu extends TimepadEvents_Admin_Base {
    
        public function __construct() {
            parent::__construct();
        }
        
        public function init() {
            if ( is_admin() ) {
                add_action( 'admin_menu', array( $this, 'admin_menu_add' ) );
            }
        }
        
        public function admin_menu_add() {
            add_submenu_page( 'edit.php?post_type=' . parent::$post_type, __( 'TimePad Settings', 'timepad' ), __( 'Settings', 'timepad' ), 'activate_plugins', 'timepad-events-options', array( $this, 'timepadevents_settings_page' ) );
        }

        public function timepadevents_settings_page() {
            TimepadEvents_Admin_Settings::getInstance()->display();
        }
        
    }
endif;