<?php include 'inc/config.php'; ?>

<?php
// Include the necessary files and instantiate the Portfolio class
require_once 'partials/nav.php';

$Portfolio = new Portfolio();

// Retrieve the portfolio data
$portfolio = $Portfolio->get_portfolio();
?>

<!-- HTML structure -->
<div id="login-registration">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Portfolio section -->
                <div class="title">
                    <h2 class="wow bounce">Prihlásenie a registrácia</h2>
                    <p class="wow fadeIn" data-wow-delay="0.6s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                </div>
                

                <!-- Registration and login section -->
                <div class="row">
                    <div class="col-md-12">
                        <form action="#" method="post" class="wow fadeInUp" data-wow-delay="0.9s">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-3">
                                    <input name="username" type="text" class="form-control" id="username" placeholder="Používateľské meno">
                                </div>
                                <div class="col-md-3">
                                    <input name="password" type="password" class="form-control" id="password" placeholder="Heslo">
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-3">
                                    <input name="login" type="submit" class="form-control" id="login" value="Prihlásiť sa">
                                </div>
                                <div class="col-md-3">
                                    <input name="register" type="submit" class="form-control" id="register" value="Registrovať sa">
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>
