<?php
/**
 * Created by PhpStorm.
 * User: e_ahu
 * Date: 10/12/2018
 * Time: 10:36 AM
 */
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Solar Proposal | Insolar</title>
    <meta name="description" content="Your customized solar proposal. This proposal was created using our cutting edge AI technology, specifically to fulfill your energy needs. Our technology has chosen the best solar panels, components and installers, for you. By doing this, we bring you the most savings of any solar company, and the shortest payback rate of any solar installation.">
    <meta name="author" content="Jorge Eduardo Ahumada Hernandez">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Work+Sans:600" rel="stylesheet">
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
    <link rel="stylesheet" href="css/proposal.css">

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

<!-- benefits
================================================== -->
    <section class="s-benefits">
        <div>
            <div class="row">
                <div class="col-md-4 s-benefits__banner">
                    <img src="images/insolar_dark_logo.svg" alt="The Insolar logo. Insolar is a leading solar system provider using cutting edge technology to increase the national solar adoption rate.">
                    <h1 class="display-2">Your Solar Solution</h1>
                </div>
                <div class="col-md-7 offset-md-1 s-benefits__content">
                    <div class="row top-divider">
                        <div class="col-md-4">
                            <h3 class="display-2 display-2--pink align-middle">3 Year</h3>
                            <p>Break Even Period</p>
                        </div>
                        <div class="col-md-4">
                            <h3 class="display-2 display-2--pink">$12,946</h3>
                            <p>On Savings</p>
                        </div>
                        <div class="col-md-4">
                            <h3 class="display-2 display-2--pink">100%</h3>
                            <p>Return on Investment</p>
                        </div>
                    </div>
                    <div class="row bottom-divider">
                        <div class="col-md-4">
                            <h3 class="display-2 display-2--pink">$46.06</h3>
                            <p>Monthly Loan Payment</p>
                        </div>
                        <div class="col-md-4">
                            <h3 class="display-2 display-2--pink">53.9%</h3>
                            <p>Monthly Savings</p>
                        </div>
                        <div class="col-md-4">
                            <h3 class="display-2 display-2--pink">+$19,800</h3>
                            <p>Home Appreciation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- s-benefits -->

<!-- Current Energy Consumption
================================================== -->
    <section class="s-consumption">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-6">
                    <h2>Current Energy Consumption</h2>
                    <div class="details container">
                        <h4 class="address">514 California Ave. #200, Irvine, CA 92617, United States</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <p>Estimated<br>Monthly Usage</p>
                                <h4>445kWh</h4>
                            </div>
                            <div class="col-md-6">
                                <p>Estimated<br>Annual Usage</p>
                                <h4>5,340kWh</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map-wrap" id="map-wrap">
                        <div id="map-container"></div>
                        <div id="map-zoom-in"></div>
                        <div id="map-zoom-out"></div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- consumption -->

<!-- system
================================================== -->
    <section class="s-system">
        <h2>System Overview</h2>
        <div class="row">
            <div class="components-list col-md-5">
                <ul class="list-unstyled">
                    <li class="component-details">
                        <div class="component">
                            <h4>Solar Panel</h4>
                            <p>Trina Solar TSM-300PA14</p>
                        </div>
                        <h3 class="display-2">/12</h3>
                    </li>
                    <li class="component-details">
                        <div class="component">
                            <h4>Inverter</h4>
                            <p>Enphase IQ6-60-US Micro Inverter</p>
                        </div>
                        <h3 class="display-2">/12</h3>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li class="component-details">
                        <div class="component">
                            <h4>Combiner Box</h4>
                            <p>Enphase AC Combiner Box</p>
                        </div>
                        <h3 class="display-2">/1</h3>
                    </li>
                    <li class="component-details">
                        <div class="component">
                            <h4>Skirts</h4>
                            <p>Pegasus Black Landscape Skirt</p>
                        </div>
                        <h3 class="display-2">/1</h3>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li class="component-details">
                        <div class="component">
                            <h4>Mounting</h4>
                            <p>Pegasus Lightspeed Mounting</p>
                        </div>
                        <h3 class="display-2">/1</h3>
                    </li>
                    <li class="component-details">
                        <div class="component">
                            <h4>Monitoring</h4>
                            <p>Envoy Monitoring System</p>
                        </div>
                        <h3 class="display-2">/1</h3>
                    </li>
                </ul>
            </div>
            <div class="banners col-md-7">
                <div class="row">
                    <div class="banner banner__1 col-md-7">
                        <h2 class="display-2 display-2--light">25 Year</h2>
                        <p>Warranty for all system components</p>
                    </div>
                </div>
                <div class="row">
                    <div class="banner banner__2 col-md-11 offset-md-1">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <h2 class="h2 banner__2_left">Service</h2>
                                <h2 class="h2 banner__2_center">+</h2>
                                <h2 class="h2 banner__2_right">Repairs</h2>
                            </div>
                            <div class="col-md-8">
                                <p>Local, trouble free, service and repairs by system installer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="banner banner__3 col-md-6 offset-md-2">
                        <h2 class="display-2 display-2--light">20 Year</h2>
                        <p>System production guarantee</p>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- system -->

    <!-- finances
    ================================================== -->
    <section class="s-finance">
        <div class="s-finance__price-summary"> <!-- Pricing Summary -->
            <h2 class="h3">Pricing Summary</h2>
            <ul class="list-unstyled">
                <li class="row">
                    <div class="col col-md-4">
                        <p>System Install</p>
                    </div>
                    <div class="line__dotted col col-md-5"></div>
                    <div class="col col-md-3">
                        <h4>$ 4,816</h4>
                    </div>
                </li>
                <li class="row">
                    <div class="col col-md-4">
                        <p>System Cost</p>
                    </div>
                    <div class="line__dotted col col-md-5"></div>
                    <div class="col col-md-3">
                        <h4>$ 3,996</h4>
                    </div>
                </li>
                <li class="row">
                    <div class="col col-md-6">
                        <p>Gross System Cost</p>
                    </div>
                    <div class="line__dotted col col-md-2"></div>
                    <div class="col col-md-4">
                        <h4>$ 8,781.90</h4>
                    </div>
                </li>
                <li class="container">
                    <p class="first__p">Credit Details</p>
                    <p class="second__p">US Federal Tax Credit (30%)</p>
                    <div class="row">
                        <div class="line__dotted col col-md-5 offset-md-2"></div>
                        <div class="col col-md-5">
                            <h4>$ 2,643.57</h4>
                        </div>
                    </div>
                </li>
            </ul>
            <h3>Net Total</h3>
            <div class="row">
                <div class="line__dotted col col-md-6"></div>
                <div class="col col-md-6">
                    <h3 class="h1">$ 6,147,33</h3>
                </div>
            </div>
        </div> <!-- Pricing Summary -->

        <div class="s-finance__financial-overview"> <!-- Financing Overview -->
            <h2>Financial Overview</h2>
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-unstyled">
                        <li class="d-flex">
                            <div class="d-inline">
                                <h5 class="h4 simple_header">Down Payment</h5>
                            </div>
                            <div class="d-inline line__dotted line__dotted-dark"></div>
                            <div class="d-inline">
                                <h5 class="h4">$ 0</h5>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="d-inline">
                                <h5 class="h4 simple_header">Interest Rate</h5>
                            </div>
                            <div class="d-inline line__dotted line__dotted-dark"></div>
                            <div class="d-inline">
                                <h5 class="h4">4.99%</h5>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="d-inline">
                                <h5 class="h4 simple_header">Loan Period</h5>
                            </div>
                            <div class="d-inline line__dotted line__dotted-dark"></div>
                            <div class="d-inline">
                                <h5 class="h4">20 Years</h5>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="d-inline">
                                <h5 class="h4 simple_header">Loan Ammount</h5>
                            </div>
                            <div class="d-inline line__dotted line__dotted-dark"></div>
                            <div class="d-inline">
                                <h5 class="h4">$ 9,979</h5>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="d-inline">
                                <h5 class="h4 simple_header">Credits/Rebates</h5>
                            </div>
                            <div class="d-inline line__dotted line__dotted-dark"></div>
                            <div class="d-inline">
                                <h5 class="h4">$ 2,994</h5>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="stand__outs list-unstyled">
                        <li>
                            <h3 class="display-2 display-2--pink">$ 46.06</h3>
                            <p>Estimated<br>Monthly Payment</p>
                        </li>
                        <li>
                            <h3 class="display-2 display-2--pink">$ 12,946</h3>
                            <p>Estimated Savings<br>on Loan Period</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div> <!-- Financing Overview -->
        <div class="s-finance__buttons"> <!--Buttons -->
            <div class="d-flex justify-content-end">
                <div class="d-inline">
                    <button type="button" class="btn-outline--primary">Save to PDF</button>
                </div>
                <div class="d-inline">
                    <button class="btn--primary">Next</button>
                </div>
            </div>
        </div> <!-- Buttons -->
        <div class="s-finance__provided"> <!-- Provided -->
            <div class="d-flex justify-content-end">
                <div class="d-inline justify-content-center">
                    <div class="info_container">
                        <h3>Quote Provided For:</h3>
                        <div class="p_info">
                            <p class="info">Pedro Pina Naranjo</p>
                            <p class="info">1121 E. La Palma Ave.<br>
                                Anaheim, CA 92807, <br>
                                United States</p>
                            <p class="info">emailaddress@hotmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="d-inline">
                    <div class="info_container">
                        <h3>Quote Provided For:</h3>
                        <div class="p_info">
                            <img  class="info" src="images/insolar_dark_logo.svg" alt="The Insolar Logo">
                            <p class="info">1121 E. La Palma Ave. #200,<br>
                                Anaheim, CA 92807,<br>
                                United States</p>
                            <p class="info">emailaddress@hotmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Provided -->
        <div class="s-finance__small-print"> <!--small print -->
            <p>
                This sales proposal was prepared by and presented to you by In Solar.
                The data provided in this sales proposal is a preliminary estimate and
                does not represent a binding agreement or obligation. A solar power
                system is customized for your home, so pricing and savings vary based
                on location, system size, government rebates and local utility rates.
                Savings on your total electricity costs is not guaranteed. Financing
                terms vary by location and are not available in all areas. This proposal
                is a not an approval for a finance product, and the interest rate provided
                in this sales proposal is subject to credit approval by the lender.
            </p>
        </div> <!-- small print -->
    </section> <!-- finance -->

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
