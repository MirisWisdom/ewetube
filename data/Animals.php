<?php

class Animals
{
	private $db;

	public function __construct($database)
	{
		$this->db = $database;
	}

	public function GetAll()
	{
		$query = <<<SQL
SELECT
	`name`
FROM
	`animals`
ORDER BY
	`name`
ASC
SQL;

		$statement = $this->db->prepare($query);
		$statement->execute();

		return $statement->fetchAll();
	}
}