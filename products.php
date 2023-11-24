<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

<section id="adpage">
    <nav id="navbar" class="navbar">
        <div class="container-fluid" id="navbar">
          <a class="navbar-brand text-light" href="#">
            <h4>Electro Nacer</h4>
          </a>
          <img src="img/user-286.png" alt="Avatar Logo" style="width:40px" class="rounded-pill">  
        </div>
    </nav>



 
    <div class="d-flex justify-content-center m-5 gap-5">


<a href="products.php">
    <button type="button" id="btn"  class="btn btn-secondary">All products</button>
</a>

<a href="storage-category.php">  
    <button type="button" id="btn" class="btn btn-secondary">storage</button>
</a>


<div class="dropdown text-center">
  <a class="btn btn-secondary dropdown-toggle" id="btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    filter
  </a>

  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">filter by min stock</a></li>
    <li><a class="dropdown-item" href="#">filter product by quantity</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div> 



<a href="arduino-category.php">
    <button type="button" id="btn" class="btn btn-secondary">arduino</button>
</a>
<a href="motherbord-c.php">
    <button type="button" id="btn"  class="btn btn-secondary">Motherboard</button>
</a>

</div>


<div class="container me-5">
<div class="row">
  
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="col-md-4 mb-5">
            <div id="cardi" class="cols-sm-4 card rounded-3" style="width: 18rem;">
                <h5 class="card-title text-white text-center mb-4 p-2"><?php echo $row['label']; ?></h5>
                <img src="<?php echo $row['img']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-text text-danger fw-bold" id="price"><?php echo $row['price']; ?></h2>
                    <h4 class="card-text text-white text-end" id="amount"><?php echo $row['stock_quantity']; ?></h4>
                </div>
            </div>
        </div>

    <?php } ?>
</div>
</div>



</section>


<section class="">
<footer class="text-center text-white" style="background-color: #0a4275;">
<div class="container p-4 pb-0">
<section class="">
<p class="d-flex justify-content-center align-items-center">
  <span class="me-3">Register for free</span>
  <button type="button" class="btn btn-outline-light btn-rounded">
    Sign up!
  </button>
</p>
</section>
</div>

<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
© 2023 Copyright:
<a class="text-white" href="index.php">ELECTRONACER.com</a>
</div>
</footer>


  



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>