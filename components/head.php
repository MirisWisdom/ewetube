
<?php 
/* Get all functions */
foreach(glob(dirname(__FILE__) . '/functions/func.*.php') as $function){
	include $function;
}

$indexHead = new Head();
$indexHead->AddStylesheet("main");
$indexHead->AddStylesheet("index");
$indexHead->AddStylesheet("color");

echo $indexHead->GetMarkup();

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

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="">

	<title>Welcome! | Ewetube</title>

	<link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js" ></script>

	<!-- Added by Michael -->
	


	{$stylesheetLinks}

	
</head>
<body>
<div class="main-content">
HTML;
	}
}