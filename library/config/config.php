<?php
/**
 * @license: See the LICENSE.md
 * @copyright: PHP5-HTML5-Boilerplate © 2013
 *
 * ---------------------------------------------------------------------------
 * |   Author and Contributor				Date	    Version
 * | ------------------------------------------------------------------------
 * |@author: Rajib Paudyal <rajib.mp@gmail.com>		06.02.2013   0.1
 * |@task: Created the Config Page
 * | ------------------------------------------------------------------------
 * |@author:
 * |@task:
 * --------------------------------------------------------------------------
 *
 * @page: library/config/config.php
 * This is the main configuration file of the project
 * All the project configuration is done here
 * @version: 0.1
 *
 */

/**
 * @since: 0.1
 * Defining Project Environment constant
 * There are only two options 'development' and 'production'
 * Set the environment according to the project phase
 */
define('Environment', 'development');


/**
 * @since: 0.1
 * Making database connection parameters as constants
*/
define('HOST',      'localhost'); // host name
define('DRIVER',	  'mysql'); // pdo driver
define('USER',      'root'); // database username
define('PASSWORD',  ''); // database password
define('DATABASE',  'boilerplate'); // database name
