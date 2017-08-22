<?php

/**
 * Created by PhpStorm.
 * User: Sam
 * Date: 22/08/2017
 * Time: 4:50 PM
 */
class AuthorizationHandler
{
	public $user;

	public function login($username, $password)
	{
		$connection = mysqli_connect('host', 'username', 'password', 'database');
		$username   = mysqli_real_escape_string($connection, $username);
		$password   = mysqli_real_escape_string($connection, $password);

		$query = mysqli_query($connection,
			'SELECT * FROM users WHERE username=' . $username . ' AND password=' . $password);
		if (mysqli_num_rows($query) === 1) {
			$this->user = mysqli_fetch_array($query, MYSQLI_ASSOC);

			return true;
		}

		return false;
	}

}