<?php
require_once('components/head.php');
require_once('components/navbar.php');
require_once('dbconfig.php');

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

?>

	<div class="container">
		<div class="text-center">

<?php
	echo '<pre>';
	print_r($meatProduced);
	echo '</pre>';
?>

		</div>
	</div>

<?php require_once('components/footer.php') ?>