<?
include('config.php');
if ($user->signed) {
    header('Location: admin.php');
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?include ("head.php")?>
    </head>
    <body>
    <div class="container">
        <form class="form-signin" method="post" action="loginProcessor.php">
            <h2 class="form-signin-heading">Please sign in</h2>
            <input type="text" name="username" class="input-block-level" placeholder="Email address">
            <input type="password" name="password" class="input-block-level" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox" name="auto" value="remember-me"> Remember me
            </label>
            <button class="btn btn-large btn-primary" type="submit">Sign in</button>
        </form>
    </div>
    </body>

    </html>
    <?php include("../include/bootstrap.php") ?>
<? } ?>