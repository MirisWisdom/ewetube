<?php

require_once('data/Month.php');

class Chart
{
	public static function GetData($meatArray)
	{
		$animal = $meatArray[0]["animal"];

		$dates = null;
		$values = null;

		foreach ($meatArray as $result) {
			$month = $result["month"];
			$year = $result["year"];
			$dates .= "'$month $year',";

			$values .= $result["original"] . ",";
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