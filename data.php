<?php
require_once('components/head.php');
require_once('components/navbar.php');
require_once('dbconfig.php');

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

	<div class="container padding-50">
		<div class="row text-center">
      <div class="col-md-6 col-md-offset-3">

<?php
if(isset($nosearch))
{
?>

              <div class="card card-outline-info">
                <div class="card-header">
                 
                </div>
                <div id="id_searchfilter" >
                  <div class="card-block">
                    <form action="{$currentfile}" class="form-horizontal" method="GET">
                      <div class="form-body">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="control-label text-right col-md-3">Select Your State</label>
                              <div class="col-md-9">
                                <select name="f_logtype" class="form-control custom-select">
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

    echo '<option name="'.$d_state_abbr.'" >'. $d_state .'</option>';

}



?>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                          </div>
                        </div>
                        <hr>
                        <div class="form-actions">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="row">
                                <div class="col-md-offset-3 col-md-6">
                                  <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                              </div>
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
	</div>

<?php require_once('components/footer.php') ?>