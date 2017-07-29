<?php

require_once('components/head.php');

if(isset($_GET['state'])){

	if($_GET['state'] == 'wa'){
		$bom = 'ftp://ftp.bom.gov.au/anon/gen/fwo/IDW13010.xml';
	} else if($_GET['state'] == 'nsw'){
		$bom = 'ftp://ftp.bom.gov.au/anon/gen/fwo/IDN11020.xml';
	} else if($_GET['state'] == 'qld'){
		$bom = 'ftp://ftp.bom.gov.au/anon/gen/fwo/IDQ10606.xml';
	} else if($_GET['state'] == 'vic'){
		$bom = 'ftp://ftp.bom.gov.au/anon/gen/fwo/IDV10750.xml';
	} else if($_GET['state'] == 'tas'){
		$bom = 'ftp://ftp.bom.gov.au/anon/gen/fwo/IDT16000.xml';
	} else if($_GET['state'] == 'sa'){
		$bom = 'ftp://ftp.bom.gov.au/anon/gen/fwo/IDS11071.xml';
	}


	$xml = simplexml_load_file($bom) or die("feed not loading");

	// echo '<pre>';
	// print_r($xml);
	// echo '</pre>';

	$bom_state = $xml->forecast->area[0]['description'];
	$bom_towns = $xml->forecast->area;


	


	$print = '';
	$print .= '<div class="container text-center"><div class="row">';
	$print .= '<h2>Current Weather Forecast For Areas In '.$bom_state.'</h2>';
	$print .= '</div>';
	$print .= '<div class="row">';

	$i = 0;

	foreach ( $bom_towns as $bom_town ){
		if($i > 0){ 
			$name = $bom_town['description'];
			$forecast = $bom_town->{'forecast-period'}[0]->text;

			$print .= '<div class="col-md-6"><div class="well">';
			$print .= '<h4>'.$name.'</h4>';
			$print .= '<p>'.$forecast.'</p>';
			$print .= '</div></div>';

		}
		$i++;
	}

	$print .= '</div></div>';
	echo $print;
	
} else {
	// Do nothing
}


require_once('components/footer.php');

?>

