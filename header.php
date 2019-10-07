<?php
include_once 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>80mm Inventory</title>
</head>
<body>  
<nav class="navbar navbar-expand-md bg-primary navbar-dark">

  <a class="navbar-brand" href="#">80mm Tracker</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="newCrate.php">New Crate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="viewCrate.php">View Crate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Inventory</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Reports</a>
      </li>
      
    </ul>
  </div>
</nav>