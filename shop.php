<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: login.html");
    exit();}
?>


<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Goods||Shop With Chiran</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container">
           <div class="navbar-brand py-0">
                <h1 id="T1" class="mb-0 fs-3">🏪Fresh Goods</h1>
                <small id="T1">Good Quality|Good Price|Good Service.</small>
           </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <form class="d-flex ms-auto me-" id="searchForm">
                    <input class="form-control me-2 search-input" type="search" placeholder="Find your Item..." aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto ">
            <li class="nav-item"><a class="nav-link border  rounded px-3" href="index.php">Home</a></li>
            

           <li class="nav-item ms-2">
    <a class="nav-link border  rounded px-2" href="#" data-bs-toggle="modal" data-bs-target="#profileModal">
        👤 Profile
    </a>
</li>
            
            
        </ul>
        </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg category-bar sticky-top">
    

    <div class="navbar-nav d-flex flex-row overflow-auto ms-auto" >
      <a class="nav-link px-3" href="#BabyP">Baby Products</a>
      <a class="nav-link px-3" href="#DairyP">Dairy</a>
      <a class="nav-link px-3" href="#BeverageP">Beverages</a>
      <a class="nav-link px-3" href="#houseHold">Household</a>
    </div>
  </div>
</nav>


 <section class="py-2" id="content2">
    <div class="container" >
        <div class="row align-items-center" >
            
                <div id="freshGoodsCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#freshGoodsCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
                        <button type="button" data-bs-target="#freshGoodsCarousel" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#freshGoodsCarousel" data-bs-slide-to="2"></button>
                    </div>

                    <div class="carousel-inner rounded shadow">
                        <div class="carousel-item active">
                            <img src="banners/01.jpg" class="d-block w-100" alt="Fresh Produce">
                            
                        </div>
                        <div class="carousel-item">
                            <img src="banners/2.jpg" class="d-block w-100" alt="Groceries">
                            
                        </div>
                        <div class="carousel-item">
                            <img src="banners/6.jpg" class="d-block w-100" alt="Fast Delivery">
                            
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
    </div>

   
</section>



<div class="container my-4 position-relative">

    <button class="scroll-btn left" onclick="scrollBanners(-1)">
        &#10094;
    </button>

     <button class="scroll-btn right" onclick="scrollBanners(1)">
        &#10095;
    </button>



    <div class="row flex-nowrap overflow-auto banner-row" id="bannerRow">

        <div class="col-3">
            <div class="banner-card">
                <img src="banners/3.jpg" class="img-fluid">
            </div>
        </div>

        <div class="col-3">
            <div class="banner-card">
                <img src="banners/4.jpg" class="img-fluid">
            </div>
        </div>

        <div class="col-3">
            <div class="banner-card">
                <img src="banners/8.jpg" class="img-fluid">
            </div>
        </div>

        <div class="col-3">
            <div class="banner-card">
                <img src="banners/9.jpg" class="img-fluid">
            </div>
        </div>

        <div class="col-3">
            <div class="banner-card">
                <img src="banners/7.jpg" class="img-fluid">
            </div>
        </div>

        <div class="col-3">
            <div class="banner-card">
                <img src="banners/01.jpg" class="img-fluid">
            </div>
        </div>
        
    </div>
</div>

<div class="container my-4 position-relative" id="BabyP" style="scroll-margin-top: 150px;">
    <div class="d-flex justify-content-between align-items-center mb-3 ">
        <h3 class="fw-bold " >Baby Products</h3>

    </div>
    <div class="row text-center" >

        
        <div class="col-6 col-md-3 col-lg-2 mb-4">
            <div class="category-item">
                <img src="baby img/milk tin .jpg" alt="">
                <p>Baby Milk Powder</p>
                <p>$24.50</p>
            </div>
        </div>

        <div class="col-6 col-md-3 col-lg-2 mb-4">
            <div class="category-item">
                <img src="baby img/dipers.jpg" alt="">
                <p>Eco-Friendly Diapers</p>
                <p>$18.99</p>
            </div>
        </div>

        <div class="col-6 col-md-3 col-lg-2 mb-4">
            <div class="category-item">
                <img src="baby img/food jar.jpg" alt="">
                <p>Organic Baby Food Puree</p>
                <p>$2.50</p>
            </div>
        </div>

        <div class="col-6 col-md-3 col-lg-2 mb-4">
            <div class="category-item">
                <img src="baby img/lotion.jpg" alt="">
                <p>Baby Moisterizing Lotion</p>
                <p>$7.15</p>
            </div>
        </div>

        <div class="col-6 col-md-3 col-lg-2 mb-4">
            <div class="category-item">
                <img src="baby img/shampo.jpg" alt="">
                <p>Gentle Baby Shampoo</p>
                <p>$6.80</p>
            </div>
        </div>

        <div class="col-6 col-md-3 col-lg-2 mb-4">
            <div class="category-item">
                <img src="baby img/wipe pack.jpg" alt="">
                <p>Sensitive Baby Wipes</p>
                <p>$4.20</p>
            </div>
        </div>

        >


    </div>
</div>



<div class="container my-4 position-relative" id="DairyP" style="scroll-margin-top: 150px;">
    <div class="d-flex justify-content-between align-items-center mb-3 ">
        <h3 class="fw-bold " >Dairy Products</h3>

    </div>
    <div class="row text-center" >

        
        <div class="col-6 col-md-3 col-lg-2 mb-4">
            <div class="category-item">
                <img src="dairy img/butter.jpg" alt="">
                <p>Salted Butter Block</p>
                <p>$3.80</p>
            </div>
        </div>

        <div class="col-6 col-md-3 col-lg-2 mb-4">
            <div class="category-item">
                <img src="dairy img/chees chedar.jpg" alt="">
                <p>Cheddar Cheese Block</p>
                <p>$5.90</p>
            </div>
        </div>

        <div class="col-6 col-md-3 col-lg-2 mb-4">
            <div class="category-item">
                <img src="dairy img/cheese tub.jpg" alt="">
                <p>Low-Fat Cottage Cheese</p>
                <p>$3.75</p>
            </div>
        </div>

        <div class="col-6 col-md-3 col-lg-2 mb-4">
            <div class="category-item">
                <img src="dairy img/cream.jpg" alt="">
                <p>Fresh Whipping Cream</p>
                <p>$4.10</p>
            </div>
        </div>

        <div class="col-6 col-md-3 col-lg-2 mb-4">
            <div class="category-item">
                <img src="dairy img/milk.jpg" alt="">
                <p>Fresh Whole Milk (1L)</p>
                <p>$3.20</p>
            </div>
        </div>

        <div class="col-6 col-md-3 col-lg-2 mb-4">
            <div class="category-item">
                <img src="dairy img/youghet.jpg" alt="">
                <p>Organic Greek Yogurt</p>
                <p>$4.50</p>
            </div>
        </div>

     
    </div>
</div>


        <div class="container my-4 position-relative" id="BeverageP" style="scroll-margin-top: 150px;">
    <div class="d-flex justify-content-between align-items-center mb-3 ">
        <h3 class="fw-bold " >Beverages Products</h3>

    </div>
    <div class="row text-center" >

        
        <div class="col-6 col-md-3 col-lg-2 mb-4">
            <div class="category-item">
                <img src="beverages/armond.jpg" alt="">
                <p>Almond Milk</p>
                <p>$3.95</p>
            </div>
        </div>

        <div class="col-6 col-md-3 col-lg-2 mb-4">
            <div class="category-item">
                <img src="beverages/coffe.jpg" alt="">
                <p>Roasted Coffee Beans (250g)</p>
                <p>$8.99</p>
            </div>
        </div>

        <div class="col-6 col-md-3 col-lg-2 mb-4">
            <div class="category-item">
                <img src="beverages/orange bottel.jpg" alt="">
                <p>Organic Orange Juice (1L)</p>
                <p>$4.50</p>
            </div>
        </div>

        <div class="col-6 col-md-3 col-lg-2 mb-4">
            <div class="category-item">
                <img src="beverages/soda.jpg" alt="">
                <p>Classic Cola Can</p>
                <p>$1.25</p>
            </div>
        </div>

        <div class="col-6 col-md-3 col-lg-2 mb-4">
            <div class="category-item">
                <img src="beverages/tea.jpg" alt="">
                <p>Premium Green Tea Bags</p>
                <p>$3.50</p>
            </div>
        </div>

        <div class="col-6 col-md-3 col-lg-2 mb-4">
            <div class="category-item">
                <img src="beverages/water.jpg" alt="">
                <p>Sparkling Mineral Water</p>
                <p>$1.80</p>
            </div>
        </div>

       


    </div>
</div>


<div class="container my-4 position-relative" id="houseHold" style="scroll-margin-top: 150px;">
    <div class="d-flex justify-content-between align-items-center mb-3 ">
        <h3 class="fw-bold " >Household Products</h3>

    </div>
    <div class="row text-center" >

        
        

        <div class="col-6 col-md-3 col-lg-2 mb-4">
            <div class="category-item">
                <img src="household/cleaning wipe.jpg" alt="">
                <p>Multi-Surface Cleaning Wipes</p>
                <p>$3.85</p>
            </div>
        </div>

        <div class="col-6 col-md-3 col-lg-2 mb-4">
            <div class="category-item">
                <img src="household/dish soap.jpg" alt="">
                <p>Eco Dishwashing Liquid</p>
                <p>$2.95</p>
            </div>
        </div>

        <div class="col-6 col-md-3 col-lg-2 mb-4">
            <div class="category-item">
                <img src="household/laundry.jpg" alt="">
                <p>Liquid Laundry Detergent</p>
                <p>$12.40</p>
            </div>
        </div>

        <div class="col-6 col-md-3 col-lg-2 mb-4">
            <div class="category-item">
                <img src="household/paper towel.jpg" alt="">
                <p>Recycled Paper Towels (2-Pack)</p>
                <p>$2.50</p>
            </div>
        </div>

        <div class="col-6 col-md-3 col-lg-2 mb-4">
            <div class="category-item">
                <img src="household/sparay bottle.jpg" alt="">
                <p>All-Purpose Surface Cleaner</p>
                <p>$4.20</p>
            </div>
        </div>

        <div class="col-6 col-md-3 col-lg-2 mb-4">
            <div class="category-item">
                <img src="household/trash  bag.jpg" alt="">
                <p>Biodegradable Trash Bags</p>
                <p>$5.10</p>
            </div>
        </div>


    </div>
</div>

<footer class=" bg-dark text-light py-5" id="second-footer">
    <div class="container" id="shopfoot">
        <div class="row">
            <div class="col-md-3">
                <h4 class="footer-text">Please note that there will be taxes for your purchese.</h4>
                <br><p class="text-light">Thank you for visiting our website.See you next time.😊</p>


            </div>

            <div class="col-md-3">
                <h4 class="footer-text">OUR CONTACT NUMBER 👇</h4><br>
                <p class="text-important">+94 0112 455 789</p>
            </div>

            <div class="col-md-3">
                <h4 class="footer-text">OUR LOCATION📍👇</h4>
                <p>NO 123,Shop Lane,Colombo,Sri lanka.</p>
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



<button id="topBtn" onclick="goToTop()">
    <i class="bi bi-arrow-up"></i>
</button>




<script>
// Show button when scrolling
window.onscroll = function() {
    let btn = document.getElementById("topBtn");

    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        btn.style.display = "block";
    } else {
        btn.style.display = "none";
    }
};

// Scroll to top
function goToTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
}
</script>

<script>
    function scrollBanners(direction) {
        const container = document.getElementById("bannerRow");
    
        container.scrollBy({
            left: direction * 300,
            behavior: 'smooth'
        });
    }

</script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>