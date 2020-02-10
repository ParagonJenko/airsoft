<!-- Init -->
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/airsoft/env.php "); ?>
<!-- / Init -->

<!DOCTYPE html>
<html>
<!-- Head -->
<?php
$title = "Index";
require_once($_SERVER['DOCUMENT_ROOT'] . DOCROOT . "includes/head.php");
?>
<!-- / Head -->

<body>
    <!-- Navbar -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . DOCROOT . "includes/navbar.php "); ?>
    <!-- / Navbar -->

    <section class="section">

        <div class="columns">
            <div class="column">
                <figure class="image is-16by9">
                    <img src="https://source.unsplash.com/collection/190727/1920x1080">
                </figure>
            </div>
            <div class="column">
                <figure class="image is-16by9">
                    <img src="https://source.unsplash.com/collection/261936/1920x1080">
                </figure>
            </div>
            <div class="column">
                <figure class="image is-16by9">
                    <img src="https://source.unsplash.com/collection/151560/1920x1080">
                </figure>
            </div>
        </div>

        <figure class="image is-16by9">
            <img src="https://source.unsplash.com/collection/765594/1920x1080">
        </figure>

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