<?php
/**
 * @package: PHP5-HTML5-Boilerplate
 * @license: See the LICENSE.md
 * @copyright: PHP5-HTML5-Boilerplate © 2013
 * @link: http://rajibmp.github.com/PHP5-HTML5-Boilerplate/
 *
 * -----------------------------------------------------------------------------
 * | 	Author and Contributor															Date									Version
 *   | ---------------------------------------------------------------------------
 * |@author: Rajib Paudyal <rajib.mp@gmail.com>				06.02.2013, Wednesday				0.1
 * |@task: Created the Index Page
 *   | ---------------------------------------------------------------------------
 * |@author:
 * |@task:
 * -----------------------------------------------------------------------------
 *
 * @page: index.php
 * This is the index file of the main project
 * All the views would be rendered through this page
 * @version: 0.1
 *
 */

// Define the Root Path of the project
define('ROOT', dirname(__FILE__) . '/');

// Include the configuration file
require_once ROOT.'library/config/index.php';

/**
 * @since: 0.1
 * Force to define the project environment if not defined
 * Check the project Environment
 * When Environment = 'development' the error reporting is set to display all errors
 * When Environment = 'production' the error reporting is suppressed
 */

if (!defined('Environment')) {
	exit('Define the Project Environment correctly in library/config/config.php');
} else {
	switch (Environment)
	{
		case 'development':
			error_reporting(E_ALL);
			ini_set('display_errors',1);
			ini_set('display_startup_errors',1);
			break;
	
		case 'production':
			error_reporting(0);
			ini_set('display_errors',0);
			ini_set('display_startup_errors',0);
			break;
	
		default:
			exit('The Project Environment is not set correctly.');
	} //switch
} //if

// Rendering the view page for now to not have empty page. This will be changed once the MVC pattern will be included
require_once 'view/index.php';