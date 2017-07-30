<?php

class Years
{
	private $db;

	public function __construct($database)
	{
		$this->db = $database;
	}

	public function GetAll()
	{
		$query = <<<SQL
SELECT DISTINCT
	`year`
FROM
	`produce`
ORDER BY `year` ASC
SQL;

		$statement = $this->db->prepare($query);
		$statement->execute();

		return $statement->fetchAll();
	}
}

