<?php
/**
 * Plugin Name: WooCommerce Subscriptions - Delete Payment Method Confirmation
 * Plugin URI: https://github.com/Prospress/woocommerce-subscriptions-cancel-subscription-confirmation
 * Description: Adds a confirmation dialog when deleting a payment method.
 * Author: Prospress Inc.
 * Author URI: http://prospress.com/
 * Version: 1.0
 * License: GPLv3
 *
 * GitHub Plugin URI: Prospress/woocommerce-subscriptions-cancel-subscription-confirmation
 * GitHub Branch: master
 *
 * Copyright 2017 Prospress, Inc.  (email : freedoms@prospress.com)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package		WooCommerce Subscriptions
 * @author		Prospress Inc.
 * @since		1.0
 */

 function wcs_cancel_subscription_confirmation() {
   if (is_account_page()) {
     wp_enqueue_script( 'wcs-cancel-subscription-confirmation-script', plugin_dir_url( __FILE__ ) . 'wcs-cancel-subscription-confirmation.js', array( 'jquery' ), '1.0.0', true  );
   }
 }
 add_action( 'wp_enqueue_scripts', 'wcs_cancel_subscription_confirmation' );
