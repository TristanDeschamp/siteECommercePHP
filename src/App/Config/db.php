<?php

class Database
{
	private static $instance = null;
	private $connection;

	private function __construct()
	{
		$host = $_ENV["DB_HOST"];
		$dbname = $_ENV["DB_NAME"];
		$username = $_ENV["DB_USER"];
		$password = $_ENV["DB_PASSWORD"];

		try {
			$this->connection = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			die("Erreur de connexion : " . $e->getMessage());
		}
	}

	public static function getInstance()
	{
		if (self::$instance === null)
		{
			self::$instance = new self();
		}
		return self::$instance->connection;
	}
}