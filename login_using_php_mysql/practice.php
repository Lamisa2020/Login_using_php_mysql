<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="practice.css">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />


</head>

<body>
    <?php require 'navbar.php'; ?>
    <div class="bgimg">
        <div class="container text-center text-white hearderset">
            <h2>Welcome To Our Studio</h2>
            <h1>IT'S NICE TO MEET YOU</h1>
            <button class="btn btn-warning text-white btn-lg ">SUBSCRIBE</button>
        </div>
    </div>
    <section class="container ourservices text-center ">
        <h1>SERVICES</h1>
        <p>Lorem ipsum dolor sit amet, consectetur.</p>
        <div class="row rowsetting">
            <div class="col-lg-4 col-md-4 col-sm-12 d-block m-auto">
                <div class="imgsetting d-block m-auto bg-warning text-white">
                    <i class="fas fa-shopping-cart fa-3x "></i>
                </div>
                <h2>E-Commerce</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim perspiciatis consectetur quia aspernatur dolorem sit neque, saepe dolores eligendi atque!</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 d-block m-auto">
                <div class="imgsetting d-block m-auto bg-warning text-white">
                    <i class="fas fa-desktop fa-3x"></i>
                </div>
                <h2>Responsive Design</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim perspiciatis consectetur quia aspernatur dolorem sit neque, saepe dolores eligendi atque!</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 d-block m-auto">
                <div class="imgsetting d-block m-auto bg-warning text-white">
                    <i class="fas fa-lock fa-3x"></i>
                </div>
                <h2>Web Security</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim perspiciatis consectetur quia aspernatur dolorem sit neque, saepe dolores eligendi atque!</p>
            </div>
        </div>
    </section>

    <section class="portfolio bg-light text-center">
        <div class="container">
            <h1>PORTFOLIO</h1>
            <p>Lorem ipsum dolor sit amet, consectetur.</p>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
                    <div class="card">
                        <img src="creative-office-workers-illustration_33099-2336.jpg" alt="" class="card-img img-fluid">
                        <div class="card-body">
                            <h2 class="card-title">Threads</h2>
                            <p class="card-text">Illustration</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
                    <div class="card">
                        <img src="explore.jpg" alt="" class="card-img img-fluid">
                        <div class="card-body">
                            <h2 class="card-title">Explore</h2>
                            <p class="card-text">Graphic Design</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
                    <div class="card">
                        <img src="finish.jpg" alt="" class="card-img img-fluid">
                        <div class="card-body">
                            <h2 class="card-title">Finish</h2>
                            <p class="card-text">Identy</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
                    <div class="card">
                        <img src="Brand.jpg" alt="" class="card-img img-fluid">
                        <div class="card-body">
                            <h2 class="card-title">Lines</h2>
                            <p class="card-text">Branding</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
                    <div class="card">
                        <img src="webdesing.jpg" alt="" class="card-img img-fluid">
                        <div class="card-body">
                            <h2 class="card-title">Southwest</h2>
                            <p class="card-text">Website Design</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
                    <div class="card">
                        <img src="photography.jpg" alt="" class="card-img img-fluid">
                        <div class="card-body">
                            <h2 class="card-title">Window</h2>
                            <p class="card-text">Photography</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ourteam">
        <div class="container text-center">
            <h1>OUR AMAZING TEAM</h1>
            <p>Lorem ipsum dolor sit amet, consectetur.</p>
            <div class="row teamsetting">
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 d-block m-auto">
                    <figure class="figure">
                        <img src="wb1.jpg" class="figure-img img-fluid rounded-circle" alt="">
                        <figcaption>
                            <h4>Azman Jaka</h4>
                            <p class="figure-caption">Web developer</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 d-block m-auto">
                    <figure class="figure">
                        <img src="wb2.jpg" class="figure-img img-fluid rounded-circle" alt="">
                        <figcaption>
                            <h4>Akemi (明美)</h4>
                            <p class="figure-caption">Web Developer</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 d-block m-auto">
                    <figure class="figure">
                        <img src="graphic designer.jpg" class="figure-img img-fluid rounded-circle" alt="">
                        <figcaption>
                            <h4>Himari (陽葵) </h4>
                            <p class="figure-caption">Graphic Designer</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <h6 class="text-center">Copyright © 2020, Design by Lamisa Tahsin Taha</h6>
    </footer>
    <?php
    echo '<script language="javascript">';
    echo 'alert("You are welcome to our Company")';
    echo '</script>';
    ?>
</body>

</html>