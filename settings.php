<?php

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = __DIR__ . '/services.yml';

$settings['hash_salt'] = 'dunno';

/**
 * Include the Pantheon-specific settings file.
 *
 * n.b. The settings.pantheon.php file makes some changes
 *      that affect all environments that this site
 *      exists in.  Always include this file, even in
 *      a local development environment, to ensure that
 *      the site settings remain consistent.
 */
include __DIR__ . "/settings.pantheon.php";

/**
 * Skipping permissions hardening will make scaffolding
 * work better, but will also raise a warning when you
 * install Drupal.
 *
 * https://www.drupal.org/project/drupal/issues/3091285
 */
// $settings['skip_permissions_hardening'] = TRUE;

/**
 * If there is a local settings file, then include it
 */
$local_settings = __DIR__ . "/settings.local.php";
if (file_exists($local_settings)) {
  include $local_settings;
}

/**
 * Appended by drupal-project to settings.php provided by the pantheon scaffold.
 */

// Specify the location of our config sync directory.
$settings['config_sync_directory'] = '../config/sync';

// Make sure that only the live environment can send out emails.
if (!isset($_ENV['PANTHEON_ENVIRONMENT']) || $_ENV['PANTHEON_ENVIRONMENT'] !== 'live') {
  $conf['mail_system'] = array(
    'default-system' => 'DevelMailLog',
  );
}

/**
 * WARNING: ADDITIONS OR CHANGES TO THIS FILE WILL BE OVERWRITTEN BY COMPOSER.
 *
 * Before making custom changes, remove "[web-root]/sites/default/settings.php" from the "file-mapping" array in composer.json.
 */
