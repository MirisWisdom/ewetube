<?php

require_once('data/Month.php');

class Chart
{
	public static function GetData($meatArray)
	{
		$animal = $meatArray[0]["meat_animal"];

		$dates = null;
		$values = null;

		foreach ($meatArray as $key => $value) {
			$month = Month::GetName($value["meat_month"]);
			$year = $value["meat_year"];

			$dates .= "'$month $year',";
			$values .= $value["meat_sc_original"] . ",";
		}

		return <<<JS
		data: {
		labels: [$dates],
		datasets: [{
			label: "$animal Meat Produced (tonnes)",
			backgroundColor: 'rgb(255, 99, 132)',
			borderColor: 'rgb(255, 99, 132)',
			data: [$values],
		}]
		},
JS;
	}
}