<?php

class Head
{
	private $stylesheets = array();

	public function AddStylesheet($name)
	{
		array_push($this->stylesheets, $name);
	}

	public function GetMarkup()
	{
		$stylesheetLinks = null;

		foreach ($this->stylesheets as $name) {
			$stylesheetLinks = $stylesheetLinks . "<link href='assets/css/$name.css' rel='stylesheet'>\n\t";
		}

		return <<<HTML
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="">

	<title>Welcome! | Ewetube</title>

	<link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
	{$stylesheetLinks}

	<script src="./assets/js/chart.bundle.min.js"></script>
</head>
HTML;
	}
}