<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>

<?php wp_body_open(); ?>


<header class="site-header">

    <div class="site-header__inner">


        <!-- =================================
             BRAND
        ================================== -->

        <a
            class="site-brand"
            href="<?php echo esc_url(home_url('/')); ?>"
        >

            <img
                class="site-brand__logo"
                src="<?php echo esc_url(
                    get_template_directory_uri() .
                    '/assets/images/logo.png'
                ); ?>"
                alt="Lucy Gwatidzo Foundation Schools"
            >


            <div class="site-brand__text">

                <span class="site-brand__name">
                    Lucy Gwatidzo<br>
                    Foundation Schools
                </span>

                <span class="site-brand__tagline">
                    Inspire<span>:</span>Ignite<span>:</span>Impact
                </span>

            </div>

        </a>


        <!-- =================================
             NAVIGATION
        ================================== -->

        <nav
            class="site-navigation"
            id="primary-navigation"
            aria-label="Primary Navigation"
        >

            <a href="about-us">
                About Us
            </a>

            <a href="education-training">
                Educatoion & Training
            </a>

            <a href="the-model">
                Partners & Investors
            </a>

            <a href="enrol-partner">
                Contact Us
            </a>


            <!-- Mobile CTA -->

            <a
                href="enrol-partner"
                class="mobile-menu-cta"
            >
                Register Interest
                <span aria-hidden="true">→</span>
            </a>

        </nav>


        <!-- =================================
             DESKTOP / TABLET CTA
        ================================== -->

        <a
            href="enrol-partner"
            class="header-cta"
        >
            Register Interest

            <span aria-hidden="true">
                →
            </span>
        </a>


        <!-- =================================
             MOBILE MENU BUTTON
        ================================== -->

        <button
            class="menu-toggle"
            type="button"
            aria-expanded="false"
            aria-controls="primary-navigation"
            aria-label="Open menu"
        >

            <span></span>
            <span></span>
            <span></span>

        </button>


    </div>

</header>


<main>