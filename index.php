<!DOCTYPE html>
<html lang="en">

<?php include("include/header.php") ?>
<?php include("functions.php") ?>

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
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="orders.php">Online ordering</a></li>
                    <li><a href="contacts.php">Contacts</a></li>
                </ul>
            </div>

            <div class="inner cover">
                <h1 class="cover-heading">Home page.</h1>

                <p class="lead"><? getContent("HomePageDescription"); ?></p>

                <p class="lead">
                    <a href="#" class="btn btn-lg btn-default">Learn more</a>
                </p>
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