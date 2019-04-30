<?php include 'portal-config.php';?>
<!DOCTYPE html>

<html lang="en">
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/7fe7ce171e.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/forms.css" />
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
<header>
  <h1><i class="logo fa <?=$logo?>"<?=$logo_color?>></i> Sally's SCC WEB120 Portal Website</h1>
  <nav>
    <ul class="topnav" id="myTopnav">
    <?=makeLinks($nav1)?>
<!--
      <li><a href="index.php" class="selected">Home</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Sally</a></li>
-->
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
    <section>
    <h2 class="pageID"><?=$PageID?></h2></section>