<?php session_start(); 
  $basename =basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
  if ($basename != "login.php"  && $basename != "signup.php") {
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true) {
        header("location: login.php?error=login");
    }
  }

?>
<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="resources/css/nav_bar.css">
<!-- <link href="resources/css/mdb.min.css" rel="stylesheet"> -->
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#">GreenBooks</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) { ?>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Search</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="books.php">Books</a>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link nav-dropdown " href="books.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Books
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Science</a>
          <a class="dropdown-item" href="#">Arts</a>
        </div>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="addItem.php">Sell an Item <i class="fas fa-comment-dollar"></i></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0 mr-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <ul class="navbar-nav navbar-right">
      <li class="nav-item">
        <span class="nav-link"><?php echo $_SESSION["name"]; ?></span>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Log Out</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-shopping-cart"></i> 
        </a>       
      </li>
    </ul>
  <?php } else { ?>
    <!-- To Do: Condiciones de si estas logged in -->
    <ul class="navbar-nav navbar-right">
      <li class="nav-item">
        <a class="nav-link" href="login.php">Log In</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php">Sign Up</a>
      </li>
      
    </ul>
  <?php } ?>
  </div>
</nav>