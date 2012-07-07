<?php

namespace app\extensions\helper;

class Site extends \lithium\template\Helper {

	/**
	 * Classes used by this helper.
	 *
	 * @var array Key/value pair of classes.
	 */
	protected $_classes = array('session' => '\lithium\storage\Session');

	/**
	 * Session flash message.
	 *
	 * @param string $key Key of flash message. Defaults to 'message' if not set.
	 * @return string Flash message, or null if not set.
	 */
	public function baseurl() {
            $protocol =  "http";
  return $protocol . "://" . $_SERVER['HTTP_HOST'];
		
		
	}

	/**
	 * Read a value from the session.
	 *
	 * @param string $key The key to be fetched.
	 * @return string The value stored in the session, or null if it does not exist.
	 */
	public function read($key = null) {
		$class = $this->_classes['session'];
		return $class::read($key);
	}
}

?>