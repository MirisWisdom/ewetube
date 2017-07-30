<?php

class MeatProduced
{
	private $db;

	public function __construct($database)
	{
		$this->db = $database;
	}

	public function GetByYears($minYear, $maxYear)
	{
		$query = <<<SQL
SELECT
	meat_animal,
	meat_month,
	meat_year
	meat_sc_original
FROM
	meat_produced
WHERE meat_year >= {$minYear} AND meat_year <= {$maxYear}
ORDER BY
	meat_year
ASC
SQL;

		$statement = $this->db->prepare($query);
		$statement->execute();

		return $statement->fetchAll();
	}

	public function GetByAll($animal, $minYear, $maxYear, $state)
	{
		$query = <<<SQL
SELECT
	meat_animal,
	meat_month,
	meat_year,
	meat_sc_original,
	meat_state
FROM
	meat_produced
WHERE meat_year >= {$minYear}
	AND meat_year <= {$maxYear}
	AND meat_animal = "$animal"
	AND meat_state = "$state"
ORDER BY
	meat_year
ASC
SQL;

		echo '<pre>';
		echo "$query";
		echo '</pre>';

		$statement = $this->db->prepare($query);
		$statement->execute();

		return $statement->fetchAll();
	}
}