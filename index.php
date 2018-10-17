
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Insolar | Making Solar Easy</title>
    <meta name="description" content="Get to know the Insolar difference, the easiest way to go solar at home. In a few simple steps, the exclusive Insolar AI technology will help you find the best installers and products in your area. The Insolar Artificial Intelligence makes getting solar panels in your home easy, and affordable. Start saving now!">
    <meta name="author" content="Jorge Eduardo Ahumada Hernandez">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/glint_base.css">
    <link rel="stylesheet" href="css/glint_vendor.css">
    <link rel="stylesheet" href="css/glint_main.css">
    <link rel="stylesheet" href="css/navigation_bar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/preloader.css">

    <!-- script
    ================================================== -->
    <script src="js/glint_modernizr.js"></script>
    <script src="js/glint_pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="images/insolar_icon.png"">
    <link rel="icon" href="images/insolar_icon.png" type="">

</head>

<body id="top">

    <!-- header
    ================================================== -->
        <?php
            include 'navigation_bar.php';
        ?>

    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" >

        <video autoplay loop muted class="banner__video">
                <source src="media/3452381-preview.mp4" type="video/mp4">
        </video>


        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                 <div class="col-md-8" id="hero_banner">

                    <h3>Welcome to Insolar</h3>

                    <h1>
                        We Make Going Solar, Easy.
                    </h1>

    <!--                This section is not needed right now-->
    <!--               <div class="home-content__buttons">-->
    <!--                    <a href="#contact" class="smoothscroll btn btn--stroke">-->
    <!--                        Start a Project-->
    <!--                    </a>-->
    <!--                    <a href="#about" class="smoothscroll btn btn--stroke">-->
    <!--                        More About Us-->
    <!--                    </a>-->
    <!--                </div>-->
                </div>
                <div class="col-md-4 contact-content" id="call-to-action-form">
                    <h3 class="h6">Get a quote</h3>

                    <form name="contactForm" id="contactForm" method="post" action="" novalidate="novalidate">
                        <fieldset>

                            <div class="form-field">
                                <input name="contactName" type="text" id="contactName" placeholder="Your Name" value="" minlength="2" required="" aria-required="true" class="full-width">
                            </div>
                            <div class="form-field">
                                <input name="contactEmail" type="email" id="contactEmail" placeholder="Your Email" value="" required="" aria-required="true" class="full-width">
                            </div>
                            <div class="form-field">
                                <input name="contactAddress" type="text" id="contactAddress" placeholder="Your Address" value="" class="full-width">
                            </div>
                            <div class="form-field">
                                <input name="contactMonthlyBill" type="text" id="contactMonthlyBill" placeholder=" Your Monthly Electric Bill" value="" class="full-width">
                            </div>
                            <div class="form-field" id="form-submit">
                                <button class="full-width btn--primary">Submit</button>
                            </div>

                        </fieldset>
                    </form>
                </div>

            </div>

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    <span>Scroll Down</span>
                </a>
            </div>

            <div class="home-content__line"></div>

        </div> <!-- end home-content -->


<!--            This section is not needed right now
                <ul class="home-social">-->
<!--            <li>-->
<!--                <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="#0"><i class="fa fa-behance" aria-hidden="true"></i><span>Behance</span></a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="#0"><i class="fa fa-dribbble" aria-hidden="true"></i><span>Dribbble</span></a>-->
<!--            </li>-->
<!--        </ul> -->
        <!-- end home-social -->

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id='about' class="s-about">

        <div class="row section-header has-bottom-sep" >
            <div class="col-full">

                <h3 class="display-1 ">Go Solar in three easy steps</h3>
            </div>
        </div> <!-- end section-header -->

       <!-- <div class="row about-desc" data-aos="fade-up">
            <div class="col-full">
                <p>

                </p>
            </div>
        </div> <!-- end about-desc -->

        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <div class="service-steps">
                    <i class="fa fa-keyboard-o"></i>
                    </div>


                    <p class ="service-text"> Tell us about your home </p>
                </div>
                <div class="col-md-4">
                    <div class="service-steps">
                        <i class="fa fa-clock-o"></i>

                    </div>
                    <div class="service-text">

                    </div>
                    <p> Get your best quotes in seconds </p>

                </div>
                <div class="col-md-4">
                    <div class="service-steps">
                        <i class="fa fa-sun-o"></i>

                    </div>
                    <div class="service-text">

                    </div>
                    <p> Enjoy your hassle free solar energy </p>

                </div>
            </div>
        </div>

        <!--<div class="row services-list block-1-2 block-tab-full">

        <div class="col-block service-item" >
            <div class="service-icon">
                <i class="fa fa-keyboard-o"></i>
            </div>
            <div class="service-text">
                <h3 class="h2">Step 1</h3>
                <p> Tell us about your home </p>
            </div>
        </div>

        <div class="col-block service-item" >
            <div class="service-icon">
                <i class="fa fa-clock-o"></i>
            </div>
            <div class="service-text">
                <h3 class="h2">Step 2</h3>
                <p> Get your best quotes in seconds </p>
            </div>
        </div>

            <div class="col-block service-item">
                <div class="service-icon">
                    <i class="fa fa-sun-o"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Step 3</h3>
                    <p> Enjoy your hassle free solar energy </p>
                </div>
            </div>
        </div>

        <!--<div class="row about-stats stats block-1-4 block-m-1-2 block-mob-full" data-aos="fade-up">
                
            <div class="col-block stats__col ">
                <div class="stats__count">127</div>
                <h5>Trees Saved</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">1505</div>
                <h5>Home Energy use for one year</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">109</div>
                <h5>Pounds of coal burned</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">102</div>
                <h5>Tree seedlings grown for one year</h5>
            </div>

        </div> <!-- end about-stats -->

        <div class="about__line"></div>

    </section> <!-- end s-about -->


    <!-- Services
    ================================================== -->
    <section id='services' class="s-services">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">The Insolar difference</h3>
                <h1 class="display-2">The most effective way to go solar</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row services-list block-1-2 block-tab-full">

            <div class="col-block" data-aos="fade-up">
                <div class="logo">
                    <img src="images/insolar_dark_logo.png" alt="The Insolar logo for the solar company">
                </div>
                <ul class="list-unstyled">
                    <li class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="service-text">
                            <h4 >Powered by AI</h4>
                        </div>
                    </li>
                    <li class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="service-text">
                            <h4 >1,2,3 Sales Process</h4>
                        </div>
                    </li>
                    <li class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="service-text">
                            <h4 >Most Affordable Prices</h4>
                        </div>
                    </li>
                    <li class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="service-text">
                            <h4 >100% Transparent System</h4>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-block" data-aos="fade-up">
                <div class="logo">
                    <h4 class="h1">Others</h4>
                </div>
                <ul class="list-unstyled">
                    <li class="service-item">
                        <div class="service-negative-icon">
                            <i class="fa fa-times-circle-o"></i>
                        </div>
                        <div class="service-text">
                            <h4 >Antiquated, and inefficient market places</h4>
                        </div>
                    </li>
                    <li class="service-item">
                        <div class="service-negative-icon">
                            <i class="fa fa-times-circle-o"></i>
                        </div>
                        <div class="service-text">
                            <h4 >Long, time consuming sales processes</h4>
                        </div>
                    </li>
                    <li class="service-item">
                        <div class="service-negative-icon">
                            <i class="fa fa-times-circle-o"></i>
                        </div>
                        <div class="service-text">
                            <h4 >Steep profit margins</h4>
                        </div>
                    </li>
                    <li class="service-item">
                        <div class="service-negative-icon">
                            <i class="fa fa-times-circle-o"></i>
                        </div>
                        <div class="service-text">
                            <h4 >Rely on annoying phone calls and meetings</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div> <!-- end services-list -->

    </section> <!-- end s-services -->


    <!-- works
    ================================================== -->
    <section id='works' class="s-works">

        <div class="intro-wrap">
                
            <div class="row section-header has-bottom-sep light-sep">
                <div class="col-full">
                    <h3 class="display-1 ">Learn more</h3>
                    <!-- <h1 class="display-2 display-2--light">We love what we do, check out some of our latest works</h1> -->
                </div>
            </div> <!-- end section-header -->

        </div> <!-- end intro-wrap -->

        <div class="row works-content">
            <div class="col-full masonry-wrap">
                <div class="masonry">
    
                    <div class="masonry__brick">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="#0" title="Solar101" data-size="1050x700">
                                    <img src="images/how_solar_works.jpg" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Solar101
                                </h3>
                                <p class="item-folio__cat">
                                    Our Solar 101 beginners guide is the ideal starting point for anyone considering a solar power system who needs advice and information.
                                </p>
                            </div>
    
                            <!--<a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a> -->
    
                           <!-- <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div> -->
    
                        </div>
                    </div> <!-- end masonry__brick -->

                    <div class="masonry__brick">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="#0" title="Recycle"  data-size="1050x700">
                                    <img src="images/SolarPanelRecycling.png" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    How to recycle solar panel?
                                </h3>
                                <p class="item-folio__cat">
                                    Recycling solar panels is a relatively complex task because they contain many different types of materials.
                                </p>
                            </div>
    
                           <!-- <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>-->
    
                           <!-- <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>-->
    
                        </div>
                     <!-- end masonry__brick -->

                </div> <!-- end masonry -->
            </div> <!-- end col-full -->
        </div> <!-- end works-content -->

    </section> <!-- end s-works -->


    <!-- call-to-action-banner
    ================================================== -->
    <section id="call-to-action-banner" class="s-call-to-action-banners">


        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-6" >
                    <h3 class="display-2 display-2--light">Ready to start your solar project?</h3>
                    <h2 class="h3">Get your instant quote </h2>
                </div>
                <div class="col-md-3 vertical-align-component" >
                    <a href=#0" type="button" class="btn btn--primary">Get Quote</a>

                </div>
                <div class="col-md-3 vertical-align-component">
                    <a href="#0" type="button" class="btn btn--primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="call-to-action__line"></div>
    </section> <!-- end s-clients -->


    <!-- clients
    ================================================== -->
    <section id="clients" class="s-clients">

        <div class="clients__line"></div>

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Our Clients</h3>
                <h3 class="display-2 ">Some of the great people working with us</h3>
            </div>
        </div> <!-- end section-header -->

        <div class="row clients-outer" data-aos="fade-up">
            <div class="col-full">
                <div class="clients">
                    <a href="https://enphase.com/en-us" title="Enphase Software Solutions" class="clients__slide vertical-align-component"><img class="logo logo__partner" src="images/emphase_logo.svg" alt="Logo for Enphase, the leading company on solar monitoring systems"/></a>
                    <a href="https://www.dividendfinance.com/solar-financing" title="Dividend Financing" class="clients__slide vertical-align-component"><img class="logo logo__partner" src="images/divident_logo.png" alt="Logo for Divident a National Financing agency" /></a>
                    <a href="https://www.cleanfund.com/our-financing/solarpace/" title="CleanFund Financing" class="clients__slide vertical-align-component"><img class="logo logo__partner" src="images/cleanfund_logo.png" alt="Logo for Cleanfund a National Financing agency specialized on clean energy solutions"/></a>
                    <a href="http://pegasussolar.com/" title="Pegasus Solar Mounting Systems" class="clients__slide vertical-align-component"><img class="logo logo__partner" src="images/pegasus_logo.png" alt="Logo for Pegasus Solar, manufacturer of cutting edge mounting systems for solar panels"/></a>
                    <a href="https://www.wundercapital.com/" title="Wunder Financing" class="clients__slide vertical-align-component vertical-align-component"><img class="logo logo__partner" src="images/wunder_logo.png" alt="Logo for Wunder a National Financing agency"/></a>
                    <a href="https://us.sunpower.com/home-solar/solar-cell-technology-solutions/" title="Sunpower Solar Panel Manufacturer" class="clients__slide vertical-align-component"><img class="logo logo__partner" src="images/sunpower_logo.svg" alt="Logo for Sunpower the leading national manufacturer of solar panel technologies"/></a>
                </div> <!-- end clients -->
            </div> <!-- end col-full -->
        </div> <!-- end clients-outer -->
    </section> <!-- end s-clients -->

    <!-- footer
    ================================================== -->
    <?php
        include 'footer.php';
    ?>


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


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


</body>

</html>