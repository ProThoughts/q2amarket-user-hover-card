<?php
/**
 * File:   qa-plugin.php
 * Author: Jatin Soni
 * Date:   30/08/2016
 *
 * (c) Q2A Market <developer@q2amarket.com>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */
/**
 * Plugin Name: User Hover Card
 * Plugin URI: http://store.q2amarket.com/user-hover-card
 * Plugin Description: Display user info on hover the user link or avatar.
 * Plugin Version: 1.0.0-beta
 * Plugin Date: 2016-08-23
 * Plugin Author: Q2A Market
 * Plugin Author URI: http://q2amarket.com
 * Plugin License: GPLv3+
 * Plugin Update Check URI: http://store.q2amarket.com/user-hover-card/update
 * Plugin Minimum Question2Answer Version: 1.7.4
 * Plugin Minimum PHP Version: 5.6
 */

if ( ! defined( 'QA_VERSION' ) ) { // don't allow this page to be requested directly from browser
    header( 'Location: ../../' );
    exit;
}

include_once( 'inc/functions.php' );
qa_register_plugin_layer( 'inc/q2am-user-hover-card-layer.php', 'User Hover Card Layer' );
qa_register_plugin_phrases( 'lang/q2am-user-hover-card-lang-*.php', 'q2am_uhc' );