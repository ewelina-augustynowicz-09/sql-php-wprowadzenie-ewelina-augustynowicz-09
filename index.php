<?php

$servername = "mysql-ewelina09.alwaysdata.net";
$username = "ewelina09";
$password = "Ewelina@123456";
$dbname = "ewelina09_09";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>

<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>Strona główna</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
   <div class="item colorBlue">menu boczne
  <ul>
<div class="button"><a href="https://github.com/ewelina-augustynowicz-09/sql-php-wprowadzenie">github</a></div>
  <br>
    <br>
<a class="nav_link" href="index.php"> Strona głowna</a>
  <br>
    <br>
<a class="nav_link" href="pracownicy.php"> Pracownicy </a>
    <br>
    <br>
<a class="nav_link" href="pracownicyiorganizacja.php"> Pracownicy i organizacja </a>
    <br>
    <br>
<a class="nav_link" href="funkcjeAgregujace.php"> Funkcje agregujące </a>
    <br>
    <br>
<a class="nav_link" href="dataiczas.php"> Data i czas</a>
    <br>
    <br>
<a class="nav_link" href="formularz.html">Formularz</a>
    <br>
    <br>
<a class="nav_link" href="insert.php">Insert</a>
    <br>
    <br>
<a class="nav_link" href="daneDoBazy.php">Dane do bazy</a>
    <br>
    <br>
<a class="nav_link" href="petla.php">Pętla</a>
    <br>
    <br>
<a class="nav_link" href="delete.php">Delete</a> 
    <br>
    <br>
<a class="nav_link" href="ksiazki.php">Książki</a>
  </ul>
  </div>
</div>

<div class="item colorGreen">
<h2>Ewelina Augustynowicz<br>klasa 2Ti grupa 2<br>numer 1</h2>
    <h1><b>Strona główna</b></h1>
</div>

</html>
