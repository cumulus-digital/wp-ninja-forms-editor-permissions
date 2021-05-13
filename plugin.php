<?php
namespace CUMULUS\Wordpress\Hacks;
/**
 * Plugin Name: Ninja Forms Editor Permissions
 * Plugin URI: https://github.com/cumulus-digital/wp-ninja-forms-editor-permissions/
 * Description: Allow editors to manage Ninja Forms.
 * Version: 0.1
 * Author: vena
 * License: UNLICENSED
 * GitHub Plugin URI: cumulus-digital/wp-ninja-forms-editor-permissions
 */
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;


function nf_subs_capabilities( $cap ) {
	return 'edit_posts';
}
\add_filter( 'ninja_forms_admin_parent_menu_capabilities', __NAMESPACE__ . '\\nf_subs_capabilities' ); // Parent Menu
\add_filter( 'ninja_forms_admin_all_forms_capabilities', __NAMESPACE__ . '\\nf_subs_capabilities' ); // Forms Submenu
\add_filter( 'ninja_forms_admin_submissions_capabilities', __NAMESPACE__ . '\\nf_subs_capabilities' ); // Submissions Submenu
