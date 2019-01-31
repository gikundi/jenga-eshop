<?php

/**
 * Created by PhpStorm.
 * User: denis
 * Date: 11/19/18
 * Time: 2:38 PM
 */

// Add custom admin menu
add_action( 'admin_menu', 'jenga_pgw_menu' );
add_action( 'admin_menu', 'jpgw_settings_pref', 103);

function jenga_pgw_menu()
{
    //create custom top-level menu
    add_menu_page(
        'JPGW Payment',
        'Jenga JPGW',
        'manage_options',
        'jpgw',
        'jpgw_transactions_menu_about',
        'dashicons-money',
        58
    );


}

//Add  custom sub menu admin settings for Jenga Payment Gateway
function jpgw_settings_pref ()
{
    add_submenu_page(
        'jpgw',
        'JPGW Preferences',
        'Settings',
        'manage_options',
        'jpgw_preferences',
        'jpgw_transactions_menu_pref'
    );

}
// Function to populate content for Jenga Payment Gateway Admin about menu
function jpgw_transactions_menu_about()
{ ?>
    <div class="wrap">
        <h1>About Jenga PGW for WooCommerce</h1>

        <h3>The Plugin</h3>
        <article>
            <p>This plugin builds on the work of <a href="https://github.com/moshthepitt/woocommerce-lipa-na-mmpesa">Denis Gikundi</a>, the <a href="https://osen.co.ke">GIkundi Concepts </a> developers and others to provide a simple plug-n-play implementation for integrating Jenga PGW Payments into online stores built with WooCommerce and WordPress.</p>
        </article>

        <h3>Integration(Going Live)</h3>
        <article>
            <p>
                While we have made all efforts to ensure this plugin works out of the box - with minimum configuration required - the service provider requires that the user go through a certain ardous process to migrate from sandbox(test) environment to production. We have a team ready on call to assist you in this are, at a fiat fee of KSh 2000 one-off.
            </p>
        </article>

        <h3>Development</h3>
        <article>
            <p>To help improve and support our effort to make such solutions as this one, you can start by contributing here:</p>
            <li><a href="https://github.com/osenco/osen-wc-mpesa">This Plugin's Github Repo</a></li>
            <li><a href="https://github.com/osenco/osen-mpesa-php">JPGW PHP SDK</a></li>
<!--            <li><a href="https://github.com/osenco/osen-laravel-mpesa">MPesa For Laravel</a></li>-->
<!--            <li><a href="https://github.com/osenco/osen-oc-mpesa">MPesa For Open Cart</a></li>-->
<!--            <li><a href="https://github.com/osenco/osen-presta-mpesa">MPesa For PrestaShop</a></li>-->
        </article>

        <h3>Contact</h3>
        <h4>Get in touch with me ( <a href="https://mauko.co.ke/">Denis Gikundi</a> ) either via email ( <a href="mail-to:hi@mauko.co.ke">denisgikundi05@gmail.com</a> ) or via phone( <a href="tel:+254204404993">+254764718721</a> )</h4>
    </div><?php
}

// Function to redirect user to Jenga Payment Gateway woocomerce setings
function jpgw_transactions_menu_pref()
{
    wp_redirect( admin_url( 'admin.php?page=wc-settings&tab=checkout&section=jpgw' ) );
}


