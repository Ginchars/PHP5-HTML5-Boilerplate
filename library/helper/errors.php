<?php
/**
 * @license: See the LICENSE.md
 * @copyright: PHP5-HTML5-Boilerplate © 2013
 *
 * ---------------------------------------------------------------------------
 * | 	Author and Contributor				Date	    Version
 * | ------------------------------------------------------------------------
 * |@author: Rajib Paudyal <rajib.mp@gmail.com>		06.02.2013   0.1
 * |@task: Created the Errors Page
 * | ------------------------------------------------------------------------
 * |@author:
 * |@task:
 * --------------------------------------------------------------------------
 *
 * @page: library/helper/errors.php
 * This class checks the type of error being sent
 * and calls the respective error pages to display friendly custom errors
 * @version: 0.1
 *
 */

class Errors {
	
	/*private $uri;
	
	public function __construct() {
		$this->uri = $uri;
	}
	*/
	
	/**
	 * @since: 0.1
	 * Direct access to unauthorized pages are redirected to 403 error page
  * @todo: redirect the 403 unauthorized error page while trying to access it directly.
	 */
	public function unauthorized_access() {
		//Code here for Redirection to 403 error page
	}
	
	/**
	 * @since: 0.1
	 * File not found errors are redirected to custom 404 error page
	 * @todo: redirection code
	 */
	public function not_found() {
		//Code here for Redirection to 404 error page
	}
}
$errors = new Errors();
