<?php
/**
 * @license: See the LICENSE.md
 * @copyright: PHP5-HTML5-Boilerplate © 2013
 *
 * -----------------------------------------------------------------------------
 * | 	Author and Contributor															Date									Version
 *   | ---------------------------------------------------------------------------
 * |@author: Rajib Paudyal <rajib.mp@gmail.com>				06.02.2013, Wednesday				0.1
 * |@task: Created the Requires Page
 *   | ---------------------------------------------------------------------------
 * |@author:
 * |@task:
 * -----------------------------------------------------------------------------
 *
 * @page: library/config/requires.php
 * This file includes the necessary project files
 * @version: 0.1
 *
 */

// Calling all the constants from the config file
require_once 'config.php';

// Include the index page of helper folder
require_once 'library/helper/index.php';

// Including all index.php files from sub-folders under library folder
foreach (glob("library/*/index.php") as $filename)
{
	require_once $filename;
} //foreach