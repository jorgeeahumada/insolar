<?php
/**
 * Created by PhpStorm.
 * User: e_ahu
 * Date: 10/8/2018
 * Time: 2:27 PM
 */
?>

<!-- header
    ================================================== -->

<header class="s-header">
    <div class="header-logo">
        <a class="site-logo" href="index.php">
            <img src="images/insolar_blue_logo.svg" alt="The Insolar logo, a leading solar energy company">
        </a>
    </div>

    <nav class="header-nav">

        <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

        <div class="header-nav__content">
            <h3>Navigation</h3>

            <ul class="header-nav__list">
                <li class="current">
                    <a class="smoothscroll"  href="index.html" title="home">Home</a>
                </li>
                <li>
                    <a class="smoothscroll"  href="#about" title="insolar experience">Insolar Experience</a>
                </li>
                <li>
                    <a class="smoothscroll"  href="#services" title="savings calculator">Savings Calculator</a>
                </li>
                <li class=" dropdown-container">
                    <div class=" dropdown">
                        <div>
                            <a href="#about" class="dropbtn">Resources</a>
                            <i class="fa fa-caret-down"></i>
                        </div>
                        <div id="myDropdown" class="dropdown-content">
                            <a class="smoothscroll" href="#home">Articles</a>
                            <a class="smoothscroll" href="#services">News</a>
                            <a class="smoothscroll" href="#clients">FAQ</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="smoothscroll"  href="#clients" title="login">Log In</a>
                </li>
                <li>
                    <a href="contact.php" title="contact">Contact</a>
                </li>
            </ul>

            <!--                This secition is not needed at the moment
                                <p>Perspiciatis hic praesentium nesciunt. Et neque a dolorum <a href='#0'>voluptatem</a> porro iusto sequi veritatis libero enim. Iusto id suscipit veritatis neque reprehenderit.</p>-->

            <ul class="header-nav__social">
                <li>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                </li>
            </ul>

        </div> <!-- end header-nav__content -->

    </nav>  <!-- end header-nav -->

    <a class="header-menu-toggle opaque" href="#0">
        <span class="header-menu-text">Menu</span>
        <span class="header-menu-icon"></span>
    </a>
</header> <!-- end s-header -->
