<?php

/* define package */
const PKG_NAME = 'mspRobokassa';
define('PKG_NAME_LOWER', strtolower(PKG_NAME));

const PKG_VERSION = '2.0.0';
const PKG_RELEASE = 'pl1';
const PKG_AUTO_INSTALL = true;

/* define paths */
/* define paths */
if (isset($_SERVER['MODX_BASE_PATH'])) {
    define('MODX_BASE_PATH', $_SERVER['MODX_BASE_PATH']);
} elseif (file_exists(dirname(__FILE__, 3) . '/core')) {
    define('MODX_BASE_PATH', dirname(__FILE__, 3) . '/');
} else {
    define('MODX_BASE_PATH', dirname(__FILE__, 4) . '/');
}
const MODX_CORE_PATH = MODX_BASE_PATH . 'core/';
const MODX_MANAGER_PATH = MODX_BASE_PATH . 'manager/';
const MODX_CONNECTORS_PATH = MODX_BASE_PATH . 'connectors/';
const MODX_ASSETS_PATH = MODX_BASE_PATH . 'assets/';

/* define urls */
const MODX_BASE_URL = '/';
const MODX_CORE_URL = MODX_BASE_URL . 'core/';
const MODX_MANAGER_URL = MODX_BASE_URL . 'manager/';
const MODX_CONNECTORS_URL = MODX_BASE_URL . 'connectors/';
const MODX_ASSETS_URL = MODX_BASE_URL . 'assets/';

/* define build options */
//define('BUILD_MENU_UPDATE', false);
//define('BUILD_ACTION_UPDATE', false);
const BUILD_SETTING_UPDATE = false;
//define('BUILD_CHUNK_UPDATE', false);

//define('BUILD_SNIPPET_UPDATE', true);
//define('BUILD_PLUGIN_UPDATE', true);
//define('BUILD_EVENT_UPDATE', true);
//define('BUILD_POLICY_UPDATE', true);
//define('BUILD_POLICY_TEMPLATE_UPDATE', true);
//define('BUILD_PERMISSION_UPDATE', true);

//define('BUILD_CHUNK_STATIC', false);
//define('BUILD_SNIPPET_STATIC', false);
//define('BUILD_PLUGIN_STATIC', false);
