<?php
require_once('components/head.php');
require_once('config/dbconfig.php');

$stmt_d_meatyear = $db->prepare('
    SELECT DISTINCT
        meat_year
    FROM
        meat_produced
    ORDER BY
        meat_year
    ASC
');
$stmt_d_meatyear -> execute();
$d_meatyearArray = array();
$d_meatyearArray[0] = '- All Years -';
while($d_meatyear = $stmt_d_meatyear -> fetch(PDO::FETCH_COLUMN))
{
    $d_meatyearArray[$d_meatyear] = $d_meatyear;
}

if(isset($_GET['id']))
{
    $meat_id = $_GET['id'];

    $st_meatProduced = $db->prepare('
        SELECT
            *
        FROM
            meat_produced
        WHERE
            meat_id = :meat_id
        AND
            meat_year >= :meat_year1
        AND
            meat_year <= :meat_year2
        AND
            meat_animal = :meat_animal
    ');
    $st_meatProduced -> execute(array(
        ':meat_id'     => $meat_id,
        ':meat_year1'  => '2010',
        ':meat_year2'  => '2011',
        ':meat_animal' => 'Sheep'
    ));
    $meatProduced = $st_meatProduced -> fetch(PDO::FETCH_ASSOC);
}
else
{
    $nosearch = 1;
}

?>

	











<?php
if(isset($nosearch))
{
?>


<div class="row text-center padding-50">
  <div class="col-md-6 col-md-offset-3">
    <form action="data.php" class="form-horizontal" method="GET">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group row">
            <label class="control-label text-right col-md-3">Select Your State</label>
            <div class="col-md-9">
              <select name="state" class="form-control custom-select">
<?php
$stmt_d_state = $db->prepare('
   SELECT DISTINCT
        meat_state
    FROM
        meat_produced
    ORDER BY
        meat_state
    ASC
');

$stmt_d_state -> execute();

$d_stateArray = array();
$d_stateArray[0] = '- Select a State -';
while($d_state = $stmt_d_state -> fetch(PDO::FETCH_COLUMN))
{
    $d_stateArray[$d_state] = $d_state;

    if($d_state == 'Western Australia'){
      $d_state_abbr = 'wa';
    } else if($d_state == 'New South Whales'){
      $d_state_abbr = 'nsw';
    } else if($d_state == 'Queensland'){
      $d_state_abbr = 'qld';
    } else if($d_state == 'Victoria'){
      $d_state_abbr = 'vic';
    } else if($d_state == 'South Australia'){
      $d_state_abbr = 'sa';
    } else if($d_state == 'Northern Territory'){
      $d_state_abbr = 'nt';
    } else if($d_state == 'Tasmania'){
      $d_state_abbr = 'tas';
    } else if($d_state == 'Australian Capital Territory'){
      $d_state_abbr = 'act';
    }

    echo '<option value="'.$d_state_abbr.'" >'. $d_state .'</option>';

}
?>
              </select>
            </div>
          </div>
        </div>

      </div>
    <hr>
    
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-offset-3 col-md-6">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </div>
    </div>
    
    </form>
  </div>
</div>


<?php
}
else
{
  echo '<pre>';
  print_r($meatProduced);
  echo '</pre>';
}
?>












<?php

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

<?php require_once('components/footer.php') ?>