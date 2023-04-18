<?php

namespace App;

use App\Core\WP;
use App\Core\WPDisableComments;

/*
|--------------------------------------------------------------------------
| APP Class
|--------------------------------------------------------------------------
|
| This class contains app logic which will run at app inital level
|
*/

class App
{
  /**
   * Initialize all app level functions
   *
   * @return void
   */
  public static function init()
  {
    $instance = new static();

    /**
     * Check if ACF is active or not if ACF is not active
     * Show error message with instructions to activate "Advanced Custom Fields" plugin
     */
    if (!function_exists('get_field') && !is_admin() && !((defined('WP_CLI') && WP_CLI))) {
      return $instance::showMessageToActivateACF();
    }

    // require_once 'helper-functions.php';

    // Disable WP comment functionality totally (uncomment this line if comment functionality is required)
    WPDisableComments::init();

    // Initialize WP default customizations and configurations
    WP::init();
  }

  /**
   * Show error message with instructions to activate "Advanced Custom Fields" plugin
   */
  public static function showMessageToActivateACF()
  {
    $link_to_admin_plugin_page = admin_url('plugins.php');

    // Show error message HTML
    echo <<<HTML
      <div class="error-page">
        <h1>Activate ACF ("Advanced Custom Fields") plugin to continue.</h1>
        <p>Activate Advanced custom fields plugin to add and view content.</p>
        <p>Activate using <a href="https://wp-cli.org/" target="_blank">wp-cli</a> by running the following command in the project root directory. <br /><code>wp plugin activate advanced-custom-fields-pro</code>.</p>
        <p style="display: flex; flex-flow: row wrap; align-items:center; gap: 4px;">
          <strong>Or Activate the plugin manually from the admin:</strong> <a href="${link_to_admin_plugin_page}" class="button">Go to plugins</a>
        </p>
      </div>
    HTML;

    // Kill further code execution to codevent fatal errors
    wp_die();
  }
}
