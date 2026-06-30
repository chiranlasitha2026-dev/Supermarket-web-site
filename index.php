<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: login.html");
    exit();}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Goods||Shop With Chiran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="mainone">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
           <div class="navbar-brand py-0">
                <h1 id="T1" class="mb-0 fs-3">🏪Fresh Goods</h1>
                <small id="T1">Good Quality|Good Price|Good Service.</small>
           </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="ms-2"><a href="index.php">Home</a></li>
            <li class="ms-2"><a href="shop.php">Shop</a></li>
            <li class="ms-2"><a href="login.html">Sign in</a></li>
            <li class="nav-item ms-2">
    <a class="nav-link border border-danger rounded px-2" href="#" data-bs-toggle="modal" data-bs-target="#profileModal">
        👤 Profile
    </a>
</li>
            
            
        </ul>
        </div>
        </div>
    </nav>

  <section class="py-5" id="contentone">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div id="freshGoodsCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#freshGoodsCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
                        <button type="button" data-bs-target="#freshGoodsCarousel" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#freshGoodsCarousel" data-bs-slide-to="2"></button>
                    </div>

                    <div class="carousel-inner rounded shadow">
                        <div class="carousel-item active">
                            <img src="images/img4.jpg" class="d-block w-100" alt="Fresh Produce">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 id="sectext">Fresh Organic Vegetables</h5>
                                <p id="sectext">Straight from the farm to your door.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/img2.jpg" class="d-block w-100" alt="Groceries">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 id="thirtext">Best Quality Groceries</h5>
                                <p id="thirtext">We never compromise on quality.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/img3.jpg" class="d-block w-100" alt="Fast Delivery">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 id="sectext">Super Fast Delivery</h5>
                                <p id="sectext">Get your goods within 24 hours.</p>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#freshGoodsCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#freshGoodsCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-md-6 ps-md-5 mt-4 mt-md-0">
                <h2 class="display-5 fw-bold">Welcome to Fresh Goods</h2>
                <p class="lead">Your one-stop shop for the freshest ingredients and daily essentials.</p>
                <ul class="list-unstyled">
                    <li>✅ 100% Organic Products</li>
                    <li>✅ Free Delivery on Orders over $50</li>
                    <li>✅ 24/7 Customer Support</li>
                </ul>
                <a href="shop.php" class="btn btn-dark btn-lg px-4 me-md-2">Start Shopping</a>
            </div>
        </div>
    </div>
</section>

<footer class="footer-section bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="fs-4 fw-bold">OUR CONTACT NO</h2>
                <p  class="loc">+94 0112 554 877</p>
            </div>

            <div class="col-md-6 text-md-end">
                <h2 class="fs-4 fw-bold">LOCATION</h2>
                <p class="loc">
                    123 Shop Lane, Colombo,<br>Sri Lanka
                </p>
            </div>
        </div>
        
        <div class="row mt-4 border-top border-secondary pt-3">
            <div class="col text-center">
                <small class="text-secondary">&copy; 2026 Fresh Goods. All rights reserved.</small>
            </div>
        </div>
    </div>
</footer>



<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="profileModalLabel">User Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <div class="mb-3">
          <span style="font-size: 50px;">👤</span>
        </div>
        <h4><?php echo $_SESSION['fullName'];?></h4>
        <p class="text-muted">Customer</p>
        <hr>
        <p><strong>Email:</strong><?php echo $_SESSION['email'];?> </p>
        <p><strong>Status:</strong> Active</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Edit Profile</button>
      </div>
    </div>
  </div>
</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

