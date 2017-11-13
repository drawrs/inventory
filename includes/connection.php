<?php
$hostName	= "localhost";
$username	= "root";
$password	= "";
$dbName		= "inventory_req";

$connect = mysqli_connect($hostName,$username,$password,$dbName);
$conn = new Mysqli($hostName,$username,$password,$dbName);
// noted error tambahan
// ngga bisa nyimpen data customer
?>