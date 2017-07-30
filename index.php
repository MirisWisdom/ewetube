<?php
require_once('components/head.php');
require_once('components/form.php');
require_once('components/dropdown.php');
require_once('data/States.php');
require_once('data/Years.php');
require_once('data/Animals.php');
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
                $animals = new Animals($db);
                $years = new Years($db);

                echo Form::ForStates("data.php", "get", Dropdown::ForStates("state", $states->GetAll()), Dropdown::ForAnimals("animal", $animals->GetAll()), Dropdown::ForYears("year1", $years->GetAll()), Dropdown::ForYears("year2", $years->GetAll()));
                ?>

            </div>
        </div>
    </div>
	<div class="container padding-50">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="text-center">
					<h2>What is EweTube.space?</h2>


					<!-- 16:9 aspect ratio -->
					<div class="embed-responsive embed-responsive-16by9">
					  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NpEaa2P7qZI"></iframe>
					</div>
					
				</div>
			</div>
			</div>
		</div>

	</div>

<?php require_once('components/footer.php') ?>


