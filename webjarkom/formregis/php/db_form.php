<?php
	
	$host = "localhost";
	$user = "root";
	$pass = "";
	
	$database = "websederhana";
	
	mysql_connect($host, $user, $pass) or die("Koneksi gagal !");
	mysql_select_db($database);
