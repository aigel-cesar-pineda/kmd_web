<?php
// Load CakePHP environment
if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}
if (!defined('ROOT')) {
    define('ROOT', dirname(dirname(__FILE__)));
}
if (!defined('APP_DIR')) {
    define('APP_DIR', 'app');
}
if (!defined('WEBROOT_DIR')) {
    define('WEBROOT_DIR', 'webroot');
}
if (!defined('WWW_ROOT')) {
    define('WWW_ROOT', ROOT . DS . APP_DIR . DS . WEBROOT_DIR . DS);
}

require ROOT . DS . APP_DIR . DS . 'Config' . DS . 'bootstrap.php';
require ROOT . DS . 'lib' . DS . 'Cake' . DS . 'bootstrap.php';

App::uses('ConnectionManager', 'Model');
$db = ConnectionManager::getDataSource('default');

try {
    $db->execute("ALTER TABLE productos ADD COLUMN IF NOT EXISTS nombre_web_provisional VARCHAR(255) DEFAULT NULL;");
    $db->execute("ALTER TABLE productos ADD COLUMN IF NOT EXISTS marca_web_provisional VARCHAR(255) DEFAULT NULL;");
    $db->execute("ALTER TABLE productos ADD COLUMN IF NOT EXISTS categoria_kosher_provisional VARCHAR(255) DEFAULT NULL;");
    $db->execute("ALTER TABLE productos ADD COLUMN IF NOT EXISTS producto_visible_provisional TINYINT(1) DEFAULT NULL;");
    echo "Columns added successfully or already exist.\n";
} catch (Exception $e) {
    echo "Error adding columns: " . $e->getMessage() . "\n";
}
