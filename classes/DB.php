<?php

require_once('Config.php');

class DB {

	private static $instance = null;

	private function __construct() {

	}

	public function getInstance() {

		if (!self::$instance) {
			self::$instance = new PDO('mysql:dbname=blog;host=' . Config::config["host"], Config::config["user"], Config::config["password"]);
		}

		return self::$instance;

	}

}