<!doctype html>
<html lang="en">
<head>
<meta name="viewport" content="width = 1050, user-scalable = no" />
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="extras/jquery.min.1.7.js"></script>
<script type="text/javascript" src="extras/modernizr.2.5.3.min.js"></script>
    <style>
/* Style the header and navbar */

.left-side nav ul{
  list-style: none;
  padding: 0;
  width: 220px;
  text-align: center;
  margin: 0 auto;
}

nav li {
    margin-bottom: 15px;
}

nav a {
  border-radius: 11px;
  border: 1px solid #F3F3F3;
  background: blue;
  text-decoration: none;
  color: #fff !important;
  font-weight: bold;
  padding: 24px 15px;
  display:block;
  cursor: pointer;
  opacity: 0.7;
}
/* Highlight the active link */
nav a.active {
  background-color: blue;
  font-weight: bold;
  padding: 24px 15px;
  display:block;
  cursor: pointer;
  opacity: 1;
}


    </style>
</head>
<body>
	<?php include('left-sidebar.php') ?>