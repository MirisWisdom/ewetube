<?php 

$get_animal = $_GET['animal'];
$get_year1 = $_GET['year1'];
$get_year2 = $_GET['year2'];
$get_state = $_GET['state'];
switch ($get_state) {
    case "wa":
        $get_state = "Western Australia";
        break;
    case "qld":
        $get_state = "Queensland";
        break;
    case "vic":
        $get_state = "Victoria";
        break;
    case "sa":
        $get_state = "South Australia";
        break;
    case "nt":
        $get_state = "Northern Territory";
        break;
    case "tas":
        $get_state = "Tasmania";
        break;
    case "act":
        $get_state = "Australian Capital Territory";
        break;
    case "nsw":
        $get_state = "New South Whales";
        break;
}