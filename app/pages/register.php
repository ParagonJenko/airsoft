<!-- Init -->
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/airsoft/env.php "); ?>
<!-- / Init -->

<!DOCTYPE html>
<html>
<!-- Head -->
<?php
$title = "Signup";
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
                            <div class="field is-horizontal">
                                <div class="field-body">
                                    <div class="field">
                                        <label class="label">Forename</label>
                                        <div class="control">
                                            <input class="input" name="forename" type="text" placeholder="Forename">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="label">Surname</label>
                                        <div class="control">
                                            <input class="input" name="surname" type="text" placeholder="Surname">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Email Address</label>
                                <div class="control">
                                    <input class="input" name="email_address" type="email" placeholder="Email Address">

                                </div>
                            </div>
                            <div class="field is-horizontal">
                                <div class="field-body">
                                    <div class="field">
                                        <label class="label">Password</label>
                                        <div class="control">
                                            <input class="input" name="password" type="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="label">Confirm Password</label>
                                        <div class="control">
                                            <input class="input" name="confirm_password" type="password" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label class="checkbox signup">
                                <input type="checkbox">
                                I agree to the <a href="#">terms and conditions</a>
                            </label>
                            <!-- TO DO: ADD NEWLSETTER CHECKBOX -->
                            <div class="field">
                                <div class="columns">
                                    <div class="column has-text-left">
                                        <small><a href="login.php">Login</a></small>
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