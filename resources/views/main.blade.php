<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mr Cake</title>

    <!--Font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <!--Scroll reveal CDN-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <header>
        <div class="container">
            <nav class="nav">
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
                <a href="#" class="logo"><img src="images/cake.logo.png" alt=""></a>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#Gallery" class="nav-link">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="#Speciallies" class="nav-link">Menu</a>
                    </li>
                    <!-- <li class="nav-item">
                <a href="#Types" class="nav-link">Types</a>
                </li> -->
                    <li class="nav-item">
                        <a href="#Team" class="nav-link">Team</a>
                    </li>
                    <li class="nav-item">
                        <a href="#Contact" class="nav-link">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero" id="hero">
        <div class="container">
            <h2 class="sub-headline">
                <span class="first-letter">W</span>elcome
            </h2>
            <h1 class="headline">Mr Cake</h1>
            <div class="headline-description">
                <div class="separator">
                    <div class="line line-left"></div>
                    <div class="asterisk"><i class="fas fa-asterisk"></i> </div>
                    <div class="line line-right"></div>
                </div>
                <div class="single-animation">
                    <h5>Ready to be opened</h5>
                </div>
            </div>
        </div>
    </section>
    <!--Hero ends-->
    <section class="discover-our-story">
        <div class="container">
            <div class="restaurant-info" id="Gallery">
                <div class="restaurant-description padding-right animate-left">
                    <div class="global-headline">
                        <h2 class="sub-headline">
                            <span class="first-letter">G</span>allery
                        </h2>
                        <h1 class="headline headline-dark">Our hot picked cakes</h1>
                        <div class="asterisk"><i class="fas fa-asterisk"></i> </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, alias adipisci. Minus, ratione!
                        Tenetur vero distinctio suscipit provident nam vel. Nulla culpa deleniti consequatur dolores
                        amet labore corrupti veritatis. Facilis?
                        Minima tenetur architecto rem repudiandae suscipit deserunt similique non totam ratione aperiam
                        at itaque molestias debitis eligendi eius, expedita sunt nobis maxime omnis ipsa sapiente
                        reprehenderit voluptate quo. Quas, quis?
                        Et architecto in eum necessitatibus doloribus quae nam voluptatem exercitationem non quos
                        perspiciatis voluptatibus facilis placeat consequuntur optio deserunt ea fugit, quod illo saepe
                        aliquam impedit! Consequuntur quasi nobis numquam!
                    </p>
                </div>
                <div class="restaurant-info-img animate-right">
                    <img class="animate-top"  src="images/cake11.jpg" alt="cake">
                    <img class="animate-right" src="images/cake12.jpg" alt="cake">
                    <img class="animate-bottom" src="images/cake15.jpg" alt="cake">
                </div>
            </div>
        </div>
    </section>
    <a href="{{ route('contact') }}" class="contact-style">Contact us</a>
    <br>
    <a href="{{ route('about') }}" class="about-style">About</a>

    <script src="../cake-stie/script.js"></script>


</body>

</html>