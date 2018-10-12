<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Insolar | Join our network and expand your business</title>
    <meta name="description" content="Learn the in’s and out’s of our network of solar installers. Don’t waste time on dead leads, get connected with hundreds of customers, ready to install solar energy. Learn how you can expand your business, and decrease your soft cost with Insolar. Get access to hundreds of data points about your market, and learn how to always stay competitive.">
    <meta name="author" content="Jorge Eduardo Ahumada Hernandez">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--    The next ones may be able to be deleted, I'm not sure yet.-->
    <link rel="stylesheet" href="css/philosophy_base.css">
    <link rel="stylesheet" href="css/philosophy_vendor.css">
    <link rel="stylesheet" href="css/philosophy_main.css">
    <!--  ---------------------------------------------------------------    -->
    <link rel="stylesheet" href="css/glint_base.css">
    <link rel="stylesheet" href="css/glint_vendor.css">
    <link rel="stylesheet" href="css/glint_main.css">
    <link rel="stylesheet" href="css/navigation_bar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="css/installers.css">

    <!-- script
    ================================================== -->
    <script src="js/glint_modernizr.js"></script>
    <script src="js/glint_pace.min.js"></script>
    <!--    The next files might not be necessary, so we might be able to delete them-->
    <script src="js/philosophy_modernizr.js"></script>
    <script src="js/philosophy_pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="images/insolar_icon.png" type="image/x-icon">
    <link rel="icon" href="images/insolar_icon.png" type="image/x-icon">

</head>

<body id="top">

    <!-- header
    ================================================== -->
    <?php
        include 'navigation_bar.php';
    ?>

    <!-- call-to-action
    ================================================== -->
    <section class="s-banner">
        <div class="banner jumbotron">
            <h1 class="display-1 display-1--light">Join our network</h1>
            <div class="wrapper">
                <a class="btn btn--primary" href="#0">Sign Up</a>
            </div>
        </div>
    </section> <!-- s-banner -->

    <!-- why insolar
    ================================================== -->
    <section class="s-timeline">
        <div class="timeline">
            <div class="timeline-container timeline-container__left">
                <div class="content">
                    <h3 class="subhead">No more dead leads, get right to business.</h3>
                    <p>
                        By joining our Insolar platform you get immediate
                        access to our hundreds of daily customers. We eliminate
                        the need to follow hundreds of dead leads, by delivering
                        only customers, ready to buy.
                    </p>
                </div>
            </div>
            <div class="timeline-container timeline-container__right">
                <div class="content">
                    <h3 class="subhead">
                        With our AI system we match our customers,
                        with the best installer in their area, led that be you.
                    </h3>
                    <p>
                        As part of our network you get access to hundreds of
                        data points about your market. Our tools allow you to
                        stay competitive, and grow your business. By cutting
                        most of the soft cost related to operations, you will
                        be able to focus on delivering a one of a kind customer
                        experience, increasing your Insolar ranking and your customer flow.
                    </p>
                </div>
            </div>
            <div class="timeline-container timeline-container__left">
                <div class="content">
                    <h3 class="subhead">Enjoy our trouble free partner experience.</h3>
                    <p>
                        At the core, we are a software company with a focus on user
                        experience, and that translates to our partners. Enjoy our easy
                        to use web interface wherever you are. Easily accept or decline
                        offers. Manage all of your current customers, from appointments
                        to the installation process, all in one page. Explore your local
                        market and discover new ways to stay on top of the competition.
                        All from our expertly design interface.
                    </p>
                </div>
            </div>
        </div> <!-- timeline -->
    </section> <!-- why insolar -->

    <!-- 3 easy steps
    ================================================== -->
    <section class="s-steps">
        <div class="row">
            <div class="wrapper">
                <h3 class="display-2 display-2--pink">Insolar is as simple as 1, 2, 3</h3>
            </div>
            <div class="container">
                <div class="row s-steps">
                    <div class="col-md-4 step-content ">
                        <div class="wrapper">
                            <h4 class="display-1">1</h4>
                        </div>
                        <div class="wrapper">
                            <p>A customer accepts our solar quote and makes an initial deposit.</p>
                        </div>
                    </div>
                    <div class="col-md-4 step-content step-content--middle">
                        <div class="wrapper">
                            <h4 class="display-1">2</h4>
                        </div>
                        <div class="wrapper">
                            <p>Our top installers gets a notification to either accept or denied our quote.</p>
                        </div>
                    </div>
                    <div class="col-md-4 step-content">
                        <div class="wrapper">
                            <h4 class="display-1">3</h4>
                        </div>
                        <div class="wrapper">
                            <p>The installer meets with the customer and starts working.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- 3 easy steps -->

    <!-- sign up
    ================================================== -->
    <section class="s-signup">

        <div class="container installer-sign-up">
            <div class="wrapper" data-aos="fade-up">
                    <h3 class="subhead">Ready to join us?</h3>
            </div>

            <div class="row contact-content contact-content__dark" data-aos="fade-up">

                <div class="contact-primary">
                    <form name="contactForm" id="contactForm" method="post" action="" novalidate="novalidate">
                        <fieldset>

                            <div class="form-field">
                                <input name="contactCompanyName" type="text" id="contactCompanyName" placeholder="Company Name" value="" class="full-width">
                            </div>
                            <div class="form-field">
                                <input name="contactName" type="text" id="contactName" placeholder="Your Name" value="" minlength="2" required="" aria-required="true" class="full-width">
                            </div>
                            <div>
                                <input name="contactJobTitle" type="text" id="contactJobTitle" placeholder="Job Title" value="" required="" aria-required="true" class="full-width">
                            </div>
                            <div class="form-field">
                                <input name="contactPhone" type="tel" id="contactPhone" placeholder="Phone Number" value="" minlength="10" required="" aria-required="true" class="full-width"
                            </div>
                            <div class="form-field">
                                <input name="contactEmail" type="email" id="contactEmail" placeholder="Your Email" value="" required="5" aria-required="true" class="full-width">
                            </div>
                            <div class="form-field">
                                <button class="full-width btn--primary">Sign Up</button>
                                <div class="submit-loader">
                                    <div class="text-loader">Sending...</div>
                                    <div class="s-loader">
                                        <div class="bounce1"></div>
                                        <div class="bounce2"></div>
                                        <div class="bounce3"></div>
                                    </div>
                                </div>
                            </div>

                        </fieldset>
                    </form>

                    <!-- contact-warning -->
                    <div class="message-warning">
                        Something went wrong. Please try again.
                    </div>

                    <!-- contact-success -->
                    <div class="message-success">
                        Your message was sent, thank you!<br>
                    </div>

                </div> <!-- end contact-primary -->

                <div class="contact-secondary">
                    <div class="contact-info hide-on-fullwidth">

                        <h3 class="subhead hide-on-fullwidth">Sign Up and enjoy<br> Our benefits</h3>

                        <ul>
                            <li>
                                <p>Wide network of clients</p>
                            </li>
                            <li>
                                <p>No Fees</p>
                            </li>
                            <li>
                                <p>Market Insights</p>
                            </li>
                            <li>
                                <p>Secure Leads</p>
                            </li>
                        </ul>
                    </div> <!-- end contact-info -->
                </div> <!-- end contact-secondary -->

            </div> <!-- end contact-content -->
        </div> <!-- installer-sign-up -->
    </section>

    <!-- questions
    ================================================== -->
    <section class="s-questions">
        <div class="jumbotron">
            <div class="row">
                <h2 class="display-2">Any Questions?</h2>
            </div>
            <div class="row">
                <p>Please contact us and we'll help you decide whether Insolar is right for you.</p>
            </div>
            <div class="row">
                <a class="btn btn--primary" href="contact.php">Contact Us</a>
            </div>
        </div>
    </section>
    <!-- s-footer
    ================================================== -->
    <?php
        include 'footer.php';
    ?>
    <!-- preloader
    ================================================== -->
    <?php
        include 'preloader.php';
    ?>
    <!-- Java Script
    ================================================== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/glint_plugins.js"></script>
    <script src="js/glint_main.js"></script>
    <!--The next files might not be necessary so we might be able to delete them -->
    <script src="js/philosophy_plugins.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/philosophy_main.js"></script>

</body>

</html>