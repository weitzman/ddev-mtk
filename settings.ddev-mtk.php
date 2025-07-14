#ddev-generated
<?php

/**
 * This file is part of the DDEV MKT add-on.
 * It should be required at end of settings.php (after settings.ddev.php).
 * See the example code below. Adjust paths as needed.
 *
 * // Settings file from the DDEV MTK add-on.
 * if (getenv('IS_DDEV_PROJECT') == 'true') {
 *   $file_mtk = getenv('DDEV_COMPOSER_ROOT') . '/.ddev/settings.ddev-mtk.php';
 *   if (file_exists($file_mtk)) {
 *     include $file_mtk;
 *   }
 * }
 */
$databases['default']['default']['database'] = getenv('MTK_DATABASE');
$databases['default']['default']['username'] = getenv('MTK_USERNAME');
$databases['default']['default']['password'] = getenv('MTK_PASSWORD');
$databases['default']['default']['host'] = getenv('MTK_HOSTNAME');
$databases['default']['default']['port'] = 3306;
$databases['default']['default']['driver'] = 'mysql';
