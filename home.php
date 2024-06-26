<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jersey+10&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="homepage.css">
  <style>
    body{
      font-family: "Outfit", sans-serif;
    }
    .landing-page {
    background-image: url('images/background.png');
    background-size: cover; 
    background-repeat: no-repeat;
    background-attachment: fixed; 
    color: white;
    text-align: left; 
    padding: 20% 5%; 
    height: 100vh;
  }

  .container{
        }
        #cart-button{
            font-size: 30px;
        }
        .navbar{
            background-color: rgb(45, 27, 84);
            color: #ffffff;
            position: sticky;
            top: 0;
            z-index: 3;
        }
        .brandname{
            float: right;
            font-size: 30px;
            margin-left: 10px;
            margin-top: 3px;
            color: #ffffff;
        }
        #cart-button{
            font-size: 40px;
        }
        #cart{
            margin-left: 10px;
            font-size: 40px;
        }
        #glasses{
            margin-left: 10px;
            font-size: 40px;
        }
        #home{
          margin-left: 10px;
          font-size: 40px;
        }
        #logout{
            margin-left: 10px;
            margin-right: 10px;
            font-size: 40px;
        }
        #about{
            margin-left: 10px;
            margin-right: 10px;
            font-size: 40px;
        }
        .bi {
            margin-left: 10px; 
            margin-right: 10px; 
        }
        .navbar-brand {
            margin-left: 20px; 
        }
        .brandname{
            float: right;
            font-size: 30px;
            margin-left: 10px;
            margin-top: 3px;
            color: #ffffff;
        }

        .footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            bottom: 0; 
            width: 100%; 
        }
        .footer-content {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .footer-content p {
            margin: 0;
        }
        .social-icons {
            margin-left: 10px;
        }
        .social-icons a {
            color: white;
            margin-right: 10px;
        }
        
  
  </style>

</head>
<body>
<nav class="navbar navbar-light">
    <a class="navbar-brand" href="#">
        <img src="assets/logo.png" width="50" height="50">
        <h1 class="brandname">ShopHear</h1>
    </a>
    <div class="ml-auto">
    <a href="home.php?user_id=<?php if(isset($_GET['user_id'])) { echo $_GET['user_id']; } ?>" id="home">
            <i class="bi bi-house-fill"></i>
        </a>
        <a href="product.php?user_id=<?php if(isset($_GET['user_id'])) { echo $_GET['user_id']; } ?>" id="glasses">
            <i class="bi bi-emoji-sunglasses-fill" id="glasses-button"></i>
        </a>
        <a href="cart.php?user_id=<?php if(isset($_GET['user_id'])) { echo $_GET['user_id']; } ?>" id="cart">
            <i class="bi bi-bag-fill" id="cart-button"></i>
        </a> 
        <a href="about.php?user_id=<?php if(isset($_GET['user_id'])) { echo $_GET['user_id']; } ?>" id="about">
            <i class="bi bi-info-square-fill" id="about-button"></i>
        </a>
        <a href="logout.php">
            <i class="bi bi-box-arrow-left" id="logout"></i>
        </a>
    </div>
</nav>

<div class="wrapper">
        <div class="containertwo">
            <h1 class="title">Welcome to SHOPHEAR</h1>
            <p class="description">we are HEAR for you</p>
            <a href="#purpleSection" class="btn btn-info">more info</a> 
        </div>
    </div>
    <div class="purple-section" id="purpleSection"> 
        <div class="container">
            <div class="row align-items-center please">
              <div class="col-md-6">
                <img src="images/model.gif" alt="Image Description" class="img-fluid smaller-image">
              </div>
              <div class="col-md-6">
                <div class="rounded p-4 yellow-text-bg">
                  <div class="yellow-text">
                  <p>Step into our world of carefully chosen products designed to enhance your hearing and sight. Our collection is all about making sure you hear every sound clearly and see everything with sharpness and clarity, making your daily experiences more enjoyable.</p>
                  <p>Our team is dedicated to providing personalized support that's just right for you. We understand that everyone's journey to better hearing and vision is unique, so we're here to guide you every step of the way. You'll find our friendly guide to make your experience smooth and hassle-free.</p>
                  <p>Together, let's embark on a journey towards improved sensory experiences. Discover how our products can make a difference in your daily life, bringing you closer to a world filled with clear sights and sounds that uplift your spirit and enrich your days.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // JavaScript to scroll to the purple section when the button is clicked
        document.querySelector('.btn-info').addEventListener('click', function() {
            document.querySelector('.purple-section').scrollIntoView({ behavior: 'smooth' });
        });
    </script>
</body>

<footer class="footer">
    <div class="container footer-content">
      <p>&copy; 2024 ShopHear</p>
      <div class="social-icons">
        <a href="https://www.facebook.com/mills.abadinas/"><i class="fab fa-facebook"></i></a>
        <a href="https://twitter.com/home"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/mriamils_/"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </footer>

</html>
