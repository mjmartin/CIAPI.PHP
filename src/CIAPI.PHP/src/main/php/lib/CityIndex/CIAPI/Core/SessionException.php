<?php

namespace CityIndex\CIAPI\Core;

/**
 * Exception used by City Index Trading API (CIAPI) clients.
 */
class SessionException extends \RuntimeException {
	const USER_NAME_LENGTH_VIOLATION = 'User name length violation'; // @todo: details
	const PASSWORD_LENGTH_VIOLATION = 'Password length violation'; // @todo: details

	/**
	 * @param string $message
	 * @param integer $code (optional)
	 * @param Exception $previous (optional)
	 */
	public function __construct($message, $code = 0, Exception $previous = null) {
		parent::__construct($message, $code, $previous);
	}
}
