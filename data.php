<?php
require_once('components/head.php');
require_once('components/form.php');
require_once('components/dropdown.php');
require_once('config/dbconfig.php');
require_once('data/search.php'); //This is where I'm storing the $_GET variables eg. $get_state
require_once('data/Classes.php');


require_once('data/MeatProduced.php');

$states = new States($db);
$animals = new Animals($db);
$years = new Years($db);

$MeatProduced = new MeatProduced($db);

?>



<div class="container-fluid rgba-white-0 padding-50" style="background: url('assets/img/bg.jpg')">
  <div class="container">
    <div class="text-center">
      <h2>Your Search Query:</h2>
      <?php
      echo '<h4>'.$get_animal.' data recorded in '.$get_state.' between Jan '.$get_year1.' and Dec '.$get_year2.'</h4>';
      ?>
      <a href="index.php" class="btn btn-sm btn-danger">Start a new search</a>
    </div>
  </div>
</div>


<?php 

echo '<pre>';
print_r($MeatProduced);
echo '</pre>';

?>



<div class="container padding-50">
  <div class="row">
    <div class="col-md-12">
      <div class="well text-center" id="chart-450-wrap">
        <h2>Amount of Sheep meat produced monthly from 2010 to 2011 (tonnes)</h2>
        <h4>Western Australia</h4>
        <canvas id="chart-450"></canvas>

        <script>
          var ctx = document.getElementById('chart-450').getContext('2d');
          var chart = new Chart(ctx, {
          // The type of chart we want to create
          type: 'bar',

          // The data for our dataset
          data: {
            labels: ["January 2010", "February 2010", "March 2010", "April 2010", "May 2010", "June 2010", "July 2010", "August 2010", "September 2010", "October 2010", "November 2010", "December 2010", "January 2011"],
            datasets: [{
            label: "Sheep Meat Produced (tonnes)",
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [2705,2723,2355,1855,1880,773,873,3172,4263,3845,3991,2530,2365],
            }]
          },

          // Configuration options go here
          options: {
            animation:{
              onComplete: function(){
                genPng();
              }
            }
          }
          });

          var genPng = function(){
             genPng = function(){}; // kill it as soon as it was called

              var canvas = document.getElementById("chart-450");
              var canvasWrapper = jQuery("#chart-450-wrap");
              var img    = canvas.toDataURL("image/png");

              canvasWrapper.append('<img src="'+img+'" style="max-width: 300px;"/><br/>');
          };

          
        </script>
      </div>
    </div>
  </div>
</div>



<div class="container padding-50">
  <div class="row">
    <div class="col-md-12 text-center">

      <a href="request/slide.php" class="btn btn-lg btn-primary">Save Results to Google Slide Presentation <span class="glyphicon glyphicon-new-window"></span></a>

    </div>
  </div>
</div>




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

        $print .= '<div class="col-md-6"><div class="well matchheight rgba-black-0">';
        $print .= '<h3>'.$name.'</h3>';
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

?>

<div class="container text-center" style="padding-top:30px; margin-bottom:-30px;">
<h2>New Search</h2>
</div>

<?php 
echo Form::ForStates("data.php", "get", Dropdown::ForStates("state", $states->GetAll()), Dropdown::ForAnimals("animal", $animals->GetAll()), Dropdown::ForYears("year1", $years->GetAll()), Dropdown::ForYears("year2", $years->GetAll()));
?>


<?php 

require_once('components/footer.php');

?>
