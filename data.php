<?php
require_once('components/head.php');
require_once('components/form.php');
require_once('components/dropdown.php');
require_once('config/dbconfig.php');
require_once('data/MeatProduced.php');
require_once('data/States.php');

$states = new States($db);
echo Form::ForStates("bom.php", "get", Dropdown::ForStates("state", $states->GetAll()));

if(isset($_GET['state'])){

  if($_GET['state'] != 'nt'){

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
    $print .= '<div class="container-fluid padding-50 rgba-white-0" style="background: #222"><div class="container text-center"><div class="row">';
    $print .= '<h2>Current Weather Forecast For Areas In '.$bom_state.'</h2>';
    $print .= '<h5><em>Data collected from the Bureau of Meteorology</em></h5><br/>';
    $print .= '</div>';
    $print .= '<div class="row">';

    $i = 0;

    foreach ( $bom_towns as $bom_town ){
      if($i > 0){ 
        $name = $bom_town['description'];
        $forecast = $bom_town->{'forecast-period'}[0]->text;

        $print .= '<div class="col-md-6"><div class="well rgba-black-0">';
        $print .= '<h4>'.$name.'</h4>';
        $print .= '<p>'.$forecast.'</p>';
        $print .= '</div></div>';

      }
      $i++;
    }

    $print .= '</div></div></div>';
    echo $print;
    
  } else {
    $print = '';
    $print .= '<div class="container-fluid padding-50 rgba-white-0" style="background: #222"><div class="container text-center"><div class="row">';
    $print .= '<img src="assets/img/icon-2.png" alt="Wool-d you look at that!" style="max-width:300px;"/>';
    $print .= '<h2>Bureau of Meteorology weather forecasts currently unavailable for this state.</h2>';
    $print .= '</div></div></div>';

    echo $print;
  }

}

require_once('components/footer.php');

?>
