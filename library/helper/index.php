<?php
/**
 * @license: See the LICENSE.md
 * @copyright: PHP5-HTML5-Boilerplate © 2013
 *
* ---------------------------------------------------------------------------
 * | 	Author and Contributor				Date	    Version
 * | ------------------------------------------------------------------------
 * |@author: Rajib Paudyal <rajib.mp@gmail.com>		06.02.2013   0.1
 * |@task: Created the Index Page
 * | ------------------------------------------------------------------------
 * |@author:
 * |@task:
 * --------------------------------------------------------------------------
 *
 * @page: library/helper/index.php
 * This is the index file of the helper library
 * All the helper files would be included via this index file
 * @version: 0.1
 *
 */

// Including all the files from helper folder
foreach (glob("library/helper/*.php") as $filename)
{
	require_once $filename;
} //foreach

// Making the helper path as HELPER_PATH constant
new Path_Constant(array(basename(__DIR__) => dirname(__FILE__)));


 /**
  * @since: 0.1
  * If anybody tries to access this page via URI
  * Redirect them to main index page with 403 Forbidden error
  */
/*if (defined(ROOT)) {
	$errors->unauthorized_access();
}//if
*/
