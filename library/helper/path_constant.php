<?php
/**
 * @license: See the LICENSE.md
 * @copyright: PHP5-HTML5-Boilerplate © 2013
 *
 * -----------------------------------------------------------------------------
 * | 	Author and Contributor															Date									Version
 *   | ---------------------------------------------------------------------------
 * |@author: Rajib Paudyal <rajib.mp@gmail.com>				06.02.2013, Wednesday				0.1
 * |@task: Created the Path_Constant Page
 *   | ---------------------------------------------------------------------------
 * |@author:
 * |@task:
 * -----------------------------------------------------------------------------
 *
 * @page: library/helper/path_constant.php
 * This class receives an array
 * and makes the array(key) as constant and array(value) as the constant's value.
 * @version: 0.1
 *
 */

class Path_Constant {
	
	/**
	 * @since: 0.1
	 * Constructs a constant for received array keys and values
	 * @param array $params
	 */
	public function __construct($params) {
		foreach ($params as $key => $val){
			$key = $this->namePathConstant($key);
			$this->setPathConstant(array($key => $val));
		} // foreach
	} // function
	
	/**
	 * @since: 0.1
	 * Receives folder name as string and adds _PATH to it
	 * @param string $params
	 * @return string
	 */
	private function namePathConstant($params) {
		$params = strtoupper($params);
		$params .= '_PATH';
		return $params;
	} // function
	
	/**
	 * @since: 0.1
	 * Defines the Constants if it is not defined.
	 * @param array $params
	 */
	private function setPathConstant($params) {
		foreach ($params as $key => $val) {
			defined($key)	?	null	:	define($key, $val.'/');
		} // foreach
	} // function
} // class