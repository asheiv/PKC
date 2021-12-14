<?php 
$page = $_GET['page'];
switch ($page) {
case 'Home':
    require_once('content/home.php');
    break;
case 'Email':
    require_once('content/email.php');
    break;
case 'No-Telp':
    require_once('content/no_telp.php');
    break;
case 'Map':
    require_once('content/map.php');
    break;
case '2017':
    require_once('content/2017.php');
    break;
case '2018':
    require_once('content/2018.php');
    break;
case '2019':
    require_once('content/2019.php');
    break;
case '2020':
    require_once('content/2020.php');
    break;
case 'Konstruksi':
    require_once('content/konstruksi.php');
    break;
case 'Perizinan':
    require_once('content/perizinan.php');
    break;
case 'Manajemen':
    require_once('content/manajemen.php');
    break;	
  default:
    require_once('content/home.php');
}

?>
