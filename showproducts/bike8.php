<?php
session_start();
//Checking if the user is already logged in
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: register.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Cycle</title>
    <!-- LINK  TO STYLESHEET FILE -->
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="../css/products.css" />
    <!-- LINK TO FONT LIBRARY-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <!-- LINK TO ICONS LIBRARY -->
    <script src="https://kit.fontawesome.com/53f3b15eb1.js" crossorigin="anonymous"></script>
    <!-- LINK TO SLIDER -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css" />
</head>

<body>
    <header class="header">
        <div class="header__background">
            <img src="../assets/backgrounds/bg_e-cycle.jpg" class="header__background--image" alt="" />
        </div>
        <div class="header__nav">
            <a href="../home.php">
                <div class="header__nav-logo-box">
                    <h2 class="heading-secondary logo-text">
                        <span class="logo-text--bage">E</span>-Cycle
                    </h2>
                </div>
            </a>
            <nav class="header__nav-links">
                <li class="header__nav-link"><a href="../home.php/#about" class="">About</a></li>
                <li class="header__nav-link"><a href="../home.php/#testimonials" class="">Testimonials</a></li>
                <li class="header__nav-link"><a href="../home.php/#contact" class="">Contact</a></li>
                <li class="header__nav-link" id="header__signup">
                    <a href="../profile.php">
                        <?php if (isset($_SESSION['username'])) : ?>
                            <h3 class="btn btn-grey"><?php echo $_SESSION['username']; ?></h3>
                        <?php endif ?>
                    </a>
                </li>
            </nav>
        </div>
        <!--
        <div class="header__content">
            <div class="heading-wrapper">
                <h1 class="heading-primary heading-primary--white">
                    Cycling just got easier!
                </h1>
            </div>
        </div>
        -->
    </header>

    <main class="section-main">
        <div class="col">
            <div class="shop-content">
                <div class="grid">
                    <div class="product-right">
                        <div class="item">
                            <div class="product-inner">
                                <div class="product-thumb">
                                    <img src="../assets/images/bike01.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-left">
                        <div class="product-left-inner">
                            <h1>Specialized Turbo Vado SL Equipped</h1>
                            <h2>There's no other e-bike out there with ride quality, range, and power like this, at a weight that's light enough to carry. The Turbo Vado SL 5.0 EQ is best for your daily commute, quick errands and getting around town</h2>
                            <h2 style="color: #405e76;">$6,000</h2>
                            <h2 style="color: rgb(33, 146, 33);">In Stock</h2>
                            <button class="btn btn-grey" style="width: 100%;">Buy</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="section-footer">
        <div class="section-footer--wrapper">
            <div class="top u-padding-bottom-small">
                <div class="newsletter">
                    <p class="paragraph newsletter-content u-margin-bottom-medium u-margin-top-small">
                        Join over 50,000 other cyclists in receiving the best newsletter
                        on new e-cycle updates latest news, upgrades, discounts and more
                        offers!
                    </p>
                    <div class="newsletter-form">
                        <input type="email" name="email" id="footer-email" placeholder="Your email" />
                        <button type="button" class="btn btn-bage">Subscribe</button>
                    </div>
                </div>
                <div class="follow-us">
                    <h3 class="footer-heading heading-tertiary u-margin-bottom-small">Follow us</h3>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                </div>
                <div class="footer-nav">
                    <h3 class="footer-heading heading-tertiary u-margin-bottom-small">Navigate</h3>
                    <a href="../products.php" class="link">Shop</a>
                    <a href="../home.php/#about" class="link">About</a>
                    <a href="../home.php/#contact" class="link">Contact</a>
                    <a href="../home.php/#testimonials" class="link">Testimonials</a>
                </div>
            </div>
            <div class="bottom section-footer--copyright u-margin-top-small">
                <h3 class="heading-tertiary">
                    E-Cycle <span class="footer-copyright">&copy; copyright 2021</span>
                </h3>
            </div>
        </div>
    </footer>

    <script src="js/index.js"></script>
</body>

</html>