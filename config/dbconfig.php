<?php
/* PHP Variables */
error_reporting(E_ALL);
ini_set('display_errors', 'On');
date_default_timezone_set('Australia/Perth');

/* Database */
define( 'DB_NAME',     'db_ewetube' );
define( 'DB_USERNAME', 'usr_ewetube' );
define( 'DB_PASSWORD', 'CqdpcnlafNUPbukU' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8' );

$db_DB_HOST     = DB_HOST;
$db_DB_NAME     = DB_NAME;
$db_DB_USERNAME = DB_USERNAME;
$db_DB_PASSWORD = DB_PASSWORD;
$db_DB_CHARSET  = DB_CHARSET;

/* Create database connection */
try
{
    $db = new PDO("mysql:host={$db_DB_HOST};dbname={$db_DB_NAME};charset=$db_DB_CHARSET", $db_DB_USERNAME, $db_DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}	

/* Check the connection */
catch (PDOException $PDOe)
{
    echo 'Conenction failed: ' . $PDOe->getMessage();
    die;
}