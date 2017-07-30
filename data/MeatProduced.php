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
	`animals`.`name`,
	`months`.`name`,
	`produce`.`year`,
	`produce`.`original`
FROM
	`produce`,
	`months`,
	`animals`
WHERE
	`produce`.`month` = `months`.`id`
AND
	`produce`.`animal` = `animals`.`id`
AND
	(`produce`.`year` >= $minYear OR `produce`.`year` <= $maxYear)
SQL;

		$statement = $this->db->prepare($query);
		$statement->execute();

		return $statement->fetchAll();
	}

	public function GetByAll($animal, $minYear, $maxYear, $state)
	{
		$query = <<<SQL
SELECT 
	`animals`.`name` AS `animal`,
	`months`.`id` AS `month_id`,
	`months`.`name` AS `month`,
	`produce`.`year`,
	`produce`.`original`,
	`states`.`name`
FROM
	`produce`,
	`animals`,
	`months`,
	`states`
WHERE
	`produce`.`animal` = `animals`.`id`
		AND `produce`.`month` = `months`.`id`
		AND `produce`.`state` = `states`.`id`
		AND `animals`.`name` = '{$animal}'
		AND `produce`.`year` >= {$minYear}
		AND `produce`.`year` <= {$maxYear}
		AND `states`.`name` = '{$state}'
ORDER BY `produce`.`year`, `months`.`id` ASC
SQL;

		$statement = $this->db->prepare($query);
		$statement->execute();

		return $statement->fetchAll();
	}
}