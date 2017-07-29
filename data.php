<?php
require_once('components/head.php');
require_once('components/navbar.php');
require_once('dbconfig.php');

$stmt_d_meatyear = $mysqlConn->prepare('
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

	<div class="container">
		<div class="text-center">

<?php
if(isset($nosearch))
{
?>

              <div class="card card-outline-info">
                <div class="card-header">
                  <h4 class="m-b-0"><a href="#id_searchfilter" data-toggle="collapse" class="text-white">Filter Options</a></h4>
                </div>
                <div id="id_searchfilter" class="collapse">
                  <div class="card-block">
                    <form action="{$currentfile}" class="form-horizontal" method="GET">
                      <div class="form-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="control-label text-right col-md-3">Log Type</label>
                              <div class="col-md-9">
                                <select name="f_logtype" class="form-control custom-select">
<?php
//populate drop down with $d_meatyearArray
?>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                          </div>
                        </div>
                        <hr>
                        <div class="form-actions">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                  <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                              </div>
                            </div>
                          <div class="col-md-6">
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
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

		</div>
	</div>

<?php require_once('components/footer.php') ?>