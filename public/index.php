<?php
/**
 * ZF3 book Zend Framework Center Example Application
 *
 * @author     Ralf Eggert <ralf@travello.de>
 * @link       https://github.com/zf3buch/zendframework-center
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

use Zend\Mvc\Application;

// define application root for better file path definitions
define('PROJECT_ROOT', realpath(__DIR__ . '/..'));

// define application environment, needs to be set within virtual host
// but could be chosen by any other identifier
define(
'APPLICATION_ENV', (getenv('APPLICATION_ENV')
    ? getenv('APPLICATION_ENV')
    : 'production')
);

// setup autoloading from composer
require_once PROJECT_ROOT . '/vendor/autoload.php';

// change working dir
chdir(dirname(__DIR__));

// define configuration file based on application environment
$configFile = PROJECT_ROOT . '/config/' . APPLICATION_ENV . '.config.php';

// run the application
Application::init(include $configFile)->run();
