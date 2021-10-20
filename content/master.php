<?php 
  error_reporting(0);
  $page =$_GET['p'];
  switch($page)
  {
   default:
    include 'home.php';
    break;
    case "home";
      include 'home.php';
    break;
    case "email";
      include 'email.php';
    break;
	case "no_hp";
      include 'no_hp.php';
    break;
	case "map";
      include 'map.php';
    break;
	case "portofolio";
      include 'portofolio.php';
    break;
  }
?>