<?php
include_once("config.php");
$movies_id=$_GET['movie_id'];
$selectedMovies=$conn->prepare("SELECT * FROM movies WHERE id=$movie_id");

$selectedMovies->execute();

?>

<html>
<head>
    <title> Dashboard </title>
   <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Welcome to dashboard</a>
    <button class="navbar-toggler position-absolute d-mb-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggler-icon4"></span></button>
    <input type="text" class="form-control form-control-dark w-50" placeholder="Search" aria-lable="Search">

    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a href="logout.php" class="nav-link px-3">Logout</a>
        </div>
    </div>
</header>

<div class="album py-5 bg-light">
    <div class="container">
         <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php foreach($movie_data as $movie){?>
            <div class="col">
            <div class="card shadow-sm">

            <img src="http://www.blackmancustoms.com/axium.htm" height="250">
             <div class="card-body">
                <h4 class="card-text"><?php echo $movie_data['emri_filmit'] ?></h4>
                <form action="book.php" method="post">
                    <div class="form-floating">
                        <input type="hidden" id="notickets" placeholder="Number of tickets" name="notickets">
                        <label for="notickets">Number of tickets</label>
                    </div>

                      <div class="form-floating">
                        <input type="text" id="data" placeholder="Date" name="data">
                        <label for="notickets">Number of tickets</label>
                    </div>

                      <div class="form-floating">
                        <input type="number" id="notickets" placeholder="Number of tickets" name="notickets">
                        <label for="notickets">Number of tickets</label>
                    </div>

                </form>
             </div>


                
            </div>
            </div>
  <?php } ?>
         </div>
         </div>
    </div>
</div>

</html>


