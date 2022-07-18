<?php

session_start();

if(!isset($_SESSION['username'])){
	
	header('location:login.php');
}

require('config/database.php');

include('config/app.php');

if(!empty($_GET['report'])) {

	echo Gagal;
} 
else {
	include('index.php');
}

?>