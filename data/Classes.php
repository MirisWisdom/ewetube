<?php

class States
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
	meat_state
FROM
	meat_produced
ORDER BY
	meat_state
ASC
SQL;

		$statement = $this->db->prepare($query);
		$statement->execute();

		return $statement->fetchAll();
	}
}




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
SELECT DISTINCT
	meat_animal
FROM
	meat_produced
ORDER BY
	meat_animal
ASC
SQL;

		$statement = $this->db->prepare($query);
		$statement->execute();

		return $statement->fetchAll();
	}
}


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
	meat_year
FROM
	meat_produced
ORDER BY
	meat_year
ASC
SQL;

		$statement = $this->db->prepare($query);
		$statement->execute();

		return $statement->fetchAll();
	}
}

