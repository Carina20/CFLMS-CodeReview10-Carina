<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8" author="Carina" content= "Welcome to our library">
	<meta name="viewport" content ="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title>Delete media items</title>
	<link rel="stylesheet" type="text/css" href="../styles/style_CR10.css">
</head>
<body>
<header>
		<div class="header_hero">
			<div class="hero_text"> Delete media items </div>
		</div>
	<nav class="navbar navbar-expand navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" id="home" href="index_CR10.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Database actions
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="insert-form_CR10.html">Insert</a>
          <a class="dropdown-item" href="update-form_CR10.html">Update</a>
          <a class="dropdown-item" href="delete-form_CR10.html">Delete</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

	</header>


  <form action="delete_CR10.php" method ="post">

    <p>
       <label for= "isbn">ISBN</label>
       <input  type="number" name= "isbn" id="input_isbn">
   </p>

    <p>
       <label for= "title">Title</label>
       <input  type="text" name= "title" id="input_title">
   </p>

  <input type= "submit" value="Delete">

  </form>



  <footer>

    <div id="space">
    </div>

  <div id="footer_div1">
  </div>

  <div id="footer_div2">
    <div class="footer_logo">Big Library</div>
  </div>

  </footer>


</body>
</html>