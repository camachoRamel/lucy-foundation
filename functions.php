<?php

if (!defined('ABSPATH')) {
    exit;
}


/* =========================================
   THEME SETUP
========================================= */

function lgfs_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menus([
        'primary' => 'Primary Navigation'
    ]);
}

add_action('after_setup_theme', 'lgfs_setup');


/* =========================================
   LOAD CSS + JAVASCRIPT
========================================= */

function lgfs_assets() {

    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();


    /* Global */

    wp_enqueue_style(
        'lgfs-style',
        get_stylesheet_uri(),
        [],
        filemtime($theme_dir . '/style.css')
    );


    /* Header */

    wp_enqueue_style(
        'lgfs-header',
        $theme_uri . '/assets/css/header.css',
        ['lgfs-style'],
        filemtime(
            $theme_dir . '/assets/css/header.css'
        )
    );


    /* Hero */

    wp_enqueue_style(
        'lgfs-hero',
        $theme_uri . '/assets/css/hero.css',
        ['lgfs-style'],
        filemtime(
            $theme_dir . '/assets/css/hero.css'
        )
    );


    /* Impact */

    wp_enqueue_style(
        'lgfs-impact',
        $theme_uri . '/assets/css/impact.css',
        ['lgfs-style'],
        filemtime(
            $theme_dir . '/assets/css/impact.css'
        )
    );


    /* Mission */

    wp_enqueue_style(
        'lgfs-mission',
        $theme_uri . '/assets/css/mission.css',
        ['lgfs-style'],
        filemtime(
            $theme_dir . '/assets/css/mission.css'
        )
    );


    /* Nationwide */

    wp_enqueue_style(
        'lgfs-nationwide',
        $theme_uri . '/assets/css/nationwide.css',
        ['lgfs-style'],
        filemtime(
            $theme_dir . '/assets/css/nationwide.css'
        )
    );


    /* Pathways */

    wp_enqueue_style(
        'lgfs-pathways',
        $theme_uri . '/assets/css/pathways.css',
        ['lgfs-style'],
        filemtime(
            $theme_dir . '/assets/css/pathways.css'
        )
    );

    
    /* Social Impact */

    wp_enqueue_style(
        'lgfs-social-impact',
        $theme_uri . '/assets/css/social-impact.css',
        ['lgfs-style'],
        filemtime(
            $theme_dir . '/assets/css/social-impact.css'
        )
    );

    
    /* Get Involved */

    wp_enqueue_style(
        'lgfs-get-involved',
        $theme_uri . '/assets/css/get-involved.css',
        ['lgfs-style'],
        filemtime(
            $theme_dir . '/assets/css/get-involved.css'
        )
    );


    /* Final Call to Action */

    wp_enqueue_style(
        'lgfs-final-cta',
        $theme_uri . '/assets/css/final-cta.css',
        ['lgfs-style'],
        filemtime(
            $theme_dir . '/assets/css/final-cta.css'
        )
    );


    // FOR ABOUT US PAGE
    if (is_page('about-us')) {


        // Campus Script
        $about_campus_js =
            $theme_dir .
            '/assets/js/about-campus.js';


        if (file_exists($about_campus_js)) {

            wp_enqueue_script(
                'lgfs-about-campus',
                $theme_uri .
                '/assets/js/about-campus.js',
                [],
                filemtime($about_campus_js),
                true
            );

        }


        // Hero

        wp_enqueue_style(
            'lgfs-about-hero',
            $theme_uri . '/assets/css/about/hero.css',
            ['lgfs-style'],
            filemtime(
                $theme_dir .
                '/assets/css/about/hero.css'
            )
        );


        // Pillars
        
        wp_enqueue_style(
            'lgfs-about-pillars',
            $theme_uri . '/assets/css/about/pillars.css',
            ['lgfs-style'],
            filemtime(
                $theme_dir .
                '/assets/css/about/pillars.css'
            )
        );


        // Campus Intro

        wp_enqueue_style(
            'lgfs-about-campus-intro',
            $theme_uri . '/assets/css/about/campus-intro.css',
            ['lgfs-style'],
            filemtime(
                $theme_dir .
                '/assets/css/about/campus-intro.css'
            )
        );


        // Campus Showcase

        wp_enqueue_style(
            'lgfs-about-campus-showcase',
            $theme_uri .
            '/assets/css/about/campus-showcase.css',
            ['lgfs-style'],
            filemtime(
                $theme_dir .
                '/assets/css/about/campus-showcase.css'
            )
        );


        // Vision Banner

        wp_enqueue_style(
            'lgfs-about-vision-banner',
            $theme_uri .
            '/assets/css/about/vision-banner.css',
            ['lgfs-style'],
            filemtime(
                $theme_dir .
                '/assets/css/about/vision-banner.css'
            )
        );


        // Call to Action

        wp_enqueue_style(
            'lgfs-about-cta',
            $theme_uri .
            '/assets/css/about/cta.css',
            ['lgfs-style'],
            filemtime(
                $theme_dir .
                '/assets/css/about/cta.css'
            )
        );

    }


    // FOR EDUCATION & TRAINING PAGE
    if (is_page('education-training')) {

        
        // Hero

        wp_enqueue_style(
            'lgfs-education-hero',
            $theme_uri . '/assets/css/education/hero.css',
            ['lgfs-style'],
            filemtime(
                $theme_dir .
                '/assets/css/education/hero.css'
            )
        );


        // Pathways

        wp_enqueue_style(
            'lgfs-education-pathways',
            $theme_uri .
            '/assets/css/education/pathways.css',
            ['lgfs-style'],
            filemtime(
                $theme_dir .
                '/assets/css/education/pathways.css'
            )
        );


        // Benefits

        wp_enqueue_style(
            'lgfs-education-benefits',
            $theme_uri .
            '/assets/css/education/benefits.css',
            ['lgfs-style'],
            filemtime(
                $theme_dir .
                '/assets/css/education/benefits.css'
            )
        );


        // Learning for Life

        wp_enqueue_style(
            'lgfs-education-life',
            $theme_uri .
            '/assets/css/education/learning-for-life.css',
            ['lgfs-style'],
            filemtime(
                $theme_dir .
                '/assets/css/education/learning-for-life.css'
            )
        );


        // Foudner Quote

        wp_enqueue_style(
            'lgfs-education-founder-quote',
            $theme_uri .
            '/assets/css/education/founder-quote.css',
            ['lgfs-style'],
            filemtime(
                $theme_dir .
                '/assets/css/education/founder-quote.css'
            )
        );


        // Call to Action

        wp_enqueue_style(
            'lgfs-education-cta',
            $theme_uri .
            '/assets/css/education/cta.css',
            ['lgfs-style'],
            filemtime(
                $theme_dir .
                '/assets/css/education/cta.css'
            )
        );
    }

    // For the Model Page
    if (is_page('the-model')) {

        // Hero

        wp_enqueue_style(
            'lgfs-model-hero',
            $theme_uri .
            '/assets/css/model/hero.css',
            ['lgfs-style'],
            filemtime(
                $theme_dir .
                '/assets/css/model/hero.css'
            )
        );


        // Integrated Pillars 

        wp_enqueue_style(
            'lgfs-model-pillars',
            $theme_uri .
            '/assets/css/model/integrated-pillars.css',
            ['lgfs-style'],
            filemtime(
                $theme_dir .
                '/assets/css/model/integrated-pillars.css'
            )
        );


        // Numbers

        wp_enqueue_style(
            'lgfs-model-numbers',
            $theme_uri .
            '/assets/css/model/numbers.css',
            ['lgfs-style'],
            filemtime(
                $theme_dir .
                '/assets/css/model/numbers.css'
            )
        );


        // Sustainability

        wp_enqueue_style(
            'lgfs-model-sustainability',
            $theme_uri .
            '/assets/css/model/sustainability.css',
            ['lgfs-style'],
            filemtime(
                $theme_dir .
                '/assets/css/model/sustainability.css'
            )
        );


        // Vision Banner

        wp_enqueue_style(
            'lgfs-model-vision-banner',
            $theme_uri .
            '/assets/css/model/vision-banner.css',
            ['lgfs-style'],
            filemtime(
                $theme_dir .
                '/assets/css/model/vision-banner.css'
            )
        );

    }


    // For Enrol / Partner Page
    if (is_page('enrol-partner')) {


        // Hero

        wp_enqueue_style(
            'lgfs-enrol-partner-hero',
            $theme_uri .
            '/assets/css/enrol-partner/hero.css',
            ['lgfs-style'],
            filemtime(
                $theme_dir .
                '/assets/css/enrol-partner/hero.css'
            )
        );


        // Forms

        wp_enqueue_style(
            'lgfs-enrol-partner-forms',
            $theme_uri .
            '/assets/css/enrol-partner/forms.css',
            ['lgfs-style'],
            filemtime(
                $theme_dir .
                '/assets/css/enrol-partner/forms.css'
            )
        );


        // Quote Banner

        wp_enqueue_style(
            'lgfs-enrol-partner-quote',
            $theme_uri .
            '/assets/css/enrol-partner/quote-banner.css',
            ['lgfs-style'],
            filemtime(
                $theme_dir .
                '/assets/css/enrol-partner/quote-banner.css'
            )
        );


        // Script to focus on correct form

        wp_enqueue_script(
            'lgfs-enrol-partner',
            $theme_uri .
            '/assets/js/enrol-partner.js',
            [],
            filemtime(
                $theme_dir .
                '/assets/js/enrol-partner.js'
            ),
            true
        );

    }

    /* Footer */

    wp_enqueue_style(
        'lgfs-footer',
        $theme_uri . '/assets/css/footer.css',
        ['lgfs-style'],
        filemtime(
            $theme_dir .
            '/assets/css/footer.css'
        )
    );


    /* JS */

    $main_js = $theme_dir . '/assets/js/main.js';

    if (file_exists($main_js)) {

        wp_enqueue_script(
            'lgfs-main',
            $theme_uri . '/assets/js/main.js',
            [],
            filemtime($main_js),
            true
        );

    }

}

add_action(
    'wp_enqueue_scripts',
    'lgfs_assets'
);