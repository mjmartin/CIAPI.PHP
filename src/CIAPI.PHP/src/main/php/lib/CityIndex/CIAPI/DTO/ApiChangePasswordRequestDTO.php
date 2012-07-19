<?php

namespace CityIndex\CIAPI\DTO;

/**
 * Request to create a session (log in).
 */
class ApiChangePasswordRequestDTO {
	private $userName;
	private $password;

	/**
	 * Initalize the class attribute info.
	 *  
	 * @param string $userName
	 * @param string $password
	 */
	public function __construct($userName, $password) {
		$this->userName = $userName;
		$this->password = $password;
	}

	public function getUserName() {
		return $this->userName;
	}

	public function getPassword() {
		return $this->password;
	}
}