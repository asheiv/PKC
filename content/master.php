<?php 
if(empty($_GET['page'])) {
	require_once 'content/home.php';
}elseif ($_GET['page']=='home') {
	require_once 'content/home.php';
}elseif ($_GET['page']=='email') {
	require_once 'content/email.php';
}elseif ($_GET['page']=='kontak') {
	require_once 'content/kontak.php';
}elseif ($_GET['page']=='map') {
	require_once 'content/map.php';
}elseif ($_GET['page']=='portofolio') {
	require_once 'content/portofolio.php';
}
?>
