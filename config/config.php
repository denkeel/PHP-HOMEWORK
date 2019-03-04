<?php
    
define('SITE_DIR', __DIR__ . '/../');
define('CONFIG_DIR', SITE_DIR . 'config/');
define('DATA_DIR', SITE_DIR . 'data/');
define('ENGINE_DIR', SITE_DIR . 'engine/');
define('CLIENT_DIR', SITE_DIR . 'public/');
define('TEMPLATES_DIR', SITE_DIR . 'templates/');

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'denkeel_4_mar');

require_once ENGINE_DIR . 'render.php';
require_once ENGINE_DIR . 'db_funcs.php';