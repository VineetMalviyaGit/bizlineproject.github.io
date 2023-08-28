<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bizlinedemo
 */

get_header();
?>

<!-- Start Breadcrumb Area -->
<section class="breadcrumb-section parallax page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <div class="page-title">
                        <h1>404 Page</h1>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7">
                    <div class="breadcrumb">
                        <ul>
                            <li>You Are Here :</li>
                            <li><a href="home-1.html">Home</a></li>
                            <li>404 Page</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Breadcrumb Area -->
    <!-- Start 404 Page Area -->
    <section class="pad-t60 pad-b80">
        <div class="error-page">
            <h1 class="dark-color">404</h1>
            <h3 class="dark-color">Page Not Found</h3>
            <p class="dark-color">Please try one of the following Pages</p>
            <a href="<?= site_url('');?>" class="btn btn-primary">Home Page</a>
        </div>
    </section>
    <!-- End 404 Page Area -->

<?php
get_footer();
