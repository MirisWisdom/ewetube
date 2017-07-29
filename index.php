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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>