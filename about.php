<!DOCTYPE html>
<html lang="en">

<?php include("include/header.php") ?>

<body>

<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="cover-container">

            <div class="masthead">
                <div class="masthead-brand">
                    <a href="index.php">
                        <img src="images/logo.png" alt="">
                    </a>
                </div>
                <ul class="nav nav-justified">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="about.php">About us</a></li>
                    <li><a href="orders.php">Online ordering</a></li>
                    <li><a href="contacts.php">Contacts</a></li>
                </ul>
            </div>

            <div class="inner cover">

                <!-- Carousel
================================================== -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                                <div class="carousel-caption">
                                    <h1>Commercial waste, 100&pound;</h1>
                                    <p>Commercial waste consists of waste from premises used wholly or mainly for the purposes of a trade or business or for the purpose of sport, recreation, education or entertainment but not including household; agricultural or industrial waste</p>
                                    <p><a class="btn btn-lg btn-primary" href="learnMore.php" role="button">Learn more</a></p>
                                </div>

                        </div>
                        <div class="item">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>Domestic, 60&pound;</h1>
                                    <p>The term domestic waste refers to waste that is produced in the day to day operations of a household. It can comprise of everything from lawn clippings to burned out light bulbs.</p>
                                    <p><a class="btn btn-lg btn-primary" href="learnMore.php" role="button">Learn more</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>Office,70&pound;</h1>
                                    <p>Recycling your office waste will stop toxins entering our environment, facilitate the reuse of elaborate components (ie printer cartridges and toners), reduce the amount of land dedicated to landfill and move us toward a closed loop where all waste is recycled.</p>
                                    <p><a class="btn btn-lg btn-primary" href="learnMore.php" role="button">Learn more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                </div><!-- /.carousel -->

            </div>

            <div class="mastfoot">
                <div class="inner">
                   
                </div>
            </div>

        </div>

    </div>

</div>

<?php include("include/bootstrap.php") ?>

</body>
</html>