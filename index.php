<?php
require_once('components/head.php');
require_once('config/dbconfig.php');
?>
	<div class="container-fluid rgba-white-0 padding-50" style="background: #222">
		<div class="container">
			<div class="text-center">
				<img src="assets/img/icon.png" alt="EweTube" style="max-width: 300px;" />
				<h1 style="color: #555">Welcome to <span class="rgba-primary-0">EweTube</span>.<span style="color: #3B9ACB">Space</span></h1>
				<p style="color: #AAA">Enter your search queries below to find data in your region</p>
				<!-- <a href="/search" class="btn btn-primary">Get Started Now!</a> -->
				









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
















			</div>
		</div>
	</div>

	<div class="container padding-50">
		<div class="row">
			<div class="col-md-12">
				<div class="well text-center">
					<h2>Here is some data</h2>
					<h4>Western Australia</h4>
					<canvas id="chart-450"></canvas>

					<p>Explain what this graph is, if possible.</p>

					<!-- Array
					(
					   [meat_id] => 450
					   [meat_state] => Western Australia
					   [meat_animal] => Sheep
					   [meat_unit] => Tonnes
					   [meat_datatype] => FLOW
					   [meat_month] => 1
					   [meat_year] => 2010
					   [meat_sc_original] => 2705
					   [meat_sc_seasonallyadjusted] => 2371
					   [meat_sc_trend] => 2544
					) -->

					<script>
						var ctx = document.getElementById('chart-450').getContext('2d');
						var chart = new Chart(ctx, {
						    // The type of chart we want to create
						    type: 'bar',

						    // The data for our dataset
						    data: {
						        labels: ["January", "February", "March", "April", "May", "June", "July"],
						        datasets: [{
						            label: "My First dataset",
						            backgroundColor: 'rgb(255, 99, 132)',
						            borderColor: 'rgb(255, 99, 132)',
						            data: [0, 10, 5, 2, 20, 30, 45],
						        }]
						    },

						    // Configuration options go here
						    options: {}
						});
					</script>
				</div>
			</div>
			</div>
		</div>

	</div>

<?php require_once('components/footer.php') ?>


