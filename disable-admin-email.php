<?php

/**
 * Plugin Name: Disable Admin Email
 * Description: Turns off the notification sent to the admin email when a new user account is registered.
 * Version: 1.0.0
 * Author: Ashyzan
 * Author URI: https://www.studiocreativo69.it
 * License: GNU General Public License version 3 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
 * 
 */

function dae_disable_new_user_admin_email() {

	remove_action( 'register_new_user', 'wp_send_new_user_notifications' );
	add_action( 'register_new_user', 'dae_notsend_new_user_admin_notifications' );
	
    function dae_notsend_new_user_admin_notifications( $user_id, $notify = 'user' ) {
            wp_send_new_user_notifications( $user_id, $notify );
        }
    }

add_action( 'init', 'dae_disable_new_user_admin_email' );