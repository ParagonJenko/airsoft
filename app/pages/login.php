<!-- Init -->
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/airsoft/env.php "); ?>
<!-- / Init -->

<!DOCTYPE html>
<html>
<!-- Head -->
<?php
$title = "Login";
require_once($_SERVER['DOCUMENT_ROOT'] . DOCROOT . "includes/head.php");
?>
<!-- / Head -->

<body>
    <!-- Navbar -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . DOCROOT . "includes/navbar.php "); ?>
    <!-- / Navbar -->

    <section class="hero is-fullheight ">
        <div class="hero-body">
            <div class="container">

                <div class="columns is-centered">
                    <div class="column is-half box form-box">
                        <form action="#" method="POST">
                            <div class="field">
                                <label class="label">Email Address</label>
                                <div class="control has-icons-left">
                                    <input class="input"name="email_address" type="email" placeholder="Email Address">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Password</label>
                                <div class="control has-icons-left">
                                    <input class="input"name="password" type="password" placeholder="Password">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="field">
                                <div class="columns">
                                    <div class="column has-text-left">
                                        <small><a href="signup.php">Signup</a></small>
                                        <br>
                                        <small><a href="forgot-password.php">Forgot password?</a></small>
                                    </div>
                                    <div class="column has-text-right">
                                    <button type="submit" class="button is-success">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php
    require_once($_SERVER['DOCUMENT_ROOT'] . DOCROOT . "includes/footer.php");
    ?>
    <!-- / Footer -->

</body>

<!-- Scripts -->
<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DOCROOT . "includes/scripts.php");
?>
<!-- / Scripts -->

</html>