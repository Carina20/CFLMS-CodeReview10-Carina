
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" author="Carina" content= "Welcome to our library">
	<meta name="viewport" content ="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title>Welcome to our Big Library</title>
	<link rel="stylesheet" type="text/css" href="../styles/style_CR10.css">
</head>

<body>
<header>

		<div class="header_hero">
			<div class="hero_text"> Welcome to our Big Library</div>
		</div>
	<nav class="navbar navbar-expand">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" id="home" href="index_CR10.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" id="insert" href="insert-form_CR10.html">Insert new item</a>
      </li>
    </ul>
  </div>
</nav>

	</header>

<div id="book_banner">
  <img src="../img/BookBanner.jpg" width=100% height="340px">
</div>
	
<h1> Media items </h1>

<section class="data_lists">

<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "cr10_carina_biglibrary";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
   die("Connection failed: " . mysqli_connect_error() . "\n");
}

$sql = "SELECT title, type, content_description, author_id, fk_publisher_id,isbn FROM media_item";
$result = mysqli_query($conn, $sql);


 while ($row = mysqli_fetch_assoc($result)) {
        printf("<b><i> '%s' </i> (%s) %s </b><br> author id %s | publisher id %s | ISBN %s <a href='update_CR10.php?isbn=" .$row['isbn']."'><button type='button'>Update</button></a><a href='delete_CR10.php?isbn=" .$row['isbn']."'><button type='button'>Delete</button></a><br>", 
                     $row["title"], $row["type"],$row["content_description"], $row["author_id"], $row["fk_publisher_id"], $row["isbn"]);
 }



?>
</section>




<h1> Author list </h1>

<section class="data_lists">
<?php


$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "cr10_carina_biglibrary";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
   die("Connection failed: " . mysqli_connect_error() . "\n");
}

$sql = "SELECT author_id, name, surname FROM author";
$result = mysqli_query($conn, $sql);


 while ($row = mysqli_fetch_assoc($result)) {
        printf("(author_id %s) - %s %s <br>",
                     $row["author_id"], $row["name"],$row["surname"]);
 } 



?>
</section>

<h1> Publisher list </h1>

<section class="data_lists">
<?php


$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "cr10_carina_biglibrary";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
   die("Connection failed: " . mysqli_connect_error() . "\n");
}

$sql = "SELECT name, publisher_id, size, address FROM publisher";
$result = mysqli_query($conn, $sql);


 while ($row = mysqli_fetch_assoc($result)) {
        printf("<b> %s </b>| id %s | size: %s | address: %s <br>",
                     $row["name"], $row["publisher_id"],$row["size"],$row["address"]);
 } 



?>
</section>


 <footer>

  <div id="footer_div1">
  </div>

  <div id="footer_div2">
    <div class="footer_logo">Big Library</div>
  </div>

  </footer>

</body>
</html>