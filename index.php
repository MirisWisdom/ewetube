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
			<div class="starter-template">
				<h1>B̶o̶o̶t̶s̶t̶r̶a̶p̶ Ewetube starter template</h1>
				<p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
			</div>
		</div><!-- /.container -->

	<?php require_once('components/footer.php') ?>
	</body>
</html>