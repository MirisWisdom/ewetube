<?php
require_once('components/head.php');
require_once('components/form.php');
require_once('components/dropdown.php');
require_once('data/States.php');
require_once('config/dbconfig.php');
?>
	<div class="container-fluid rgba-white-0 padding-50" style="background: url('assets/img/bg.jpg')">
		<div class="container">
			<div class="text-center">
				<img src="assets/img/icon.png" alt="EweTube" style="max-width: 300px;" />
				<h1 style="color: #555">Welcome to <span class="rgba-primary-0">EweTube</span>.<span style="color: #3B9ACB">Space</span></h1>
				<p style="color: #AAA">Providing local communities with useful, relevant and localised agricultural data.</p>

                <?php
                $states = new States($db);
                echo Form::ForStates("data.php", "get", Dropdown::ForStates("state", $states->GetAll()));
                ?>

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


