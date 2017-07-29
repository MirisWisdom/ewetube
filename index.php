<?php 
/* Get all functions */
foreach(glob(dirname(__FILE__) . '/functions/func.*.php') as $function){
	include $function;
}
?>

<!DOCTYPE html>
<?php
require_once('components/head.php');

$indexHead = new Head();
$indexHead->AddStylesheet("index");

echo $indexHead->GetMarkup();
?>
<body>
	<?php require_once('components/navbar.php') ?>

	<div class="container">
		<div class="text-center">
			<h1>ewetube.space</h1>
			<p>Providing local communities with useful, relevant and localised agricultural data</p>
			<a href="/search" class="btn btn-primary">Get Started Now!</a>
		</div>
	</div><!-- /.container -->

	<?php require_once('components/footer.php') ?>
	</body>
</html>