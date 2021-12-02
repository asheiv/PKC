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
}elseif ($_GET['page']=='2017') {
	require_once 'content/2017.php';
}elseif ($_GET['page']=='2018') {
	require_once 'content/2018.php';
}elseif ($_GET['page']=='2019') {
	require_once 'content/2019.php';
}elseif ($_GET['page']=='2020') {
	require_once 'content/2020.php';
}
?>
