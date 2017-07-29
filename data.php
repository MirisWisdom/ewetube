<?php
require_once('components/head.php');
require_once('components/form.php');
require_once('components/dropdown.php');
require_once('config/dbconfig.php');
require_once('data/MeatProduced.php');
require_once('data/States.php');

$states = new States($db);
echo Form::ForStates("bom.php", "get", Dropdown::ForStates("state", $states->GetAll()));

require_once('components/footer.php');