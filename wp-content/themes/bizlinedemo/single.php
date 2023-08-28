<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package corporate
 */

get_header();
?>

<style>
    .wp-block-search .wp-block-search__label {
    width: auto;
}
.blog-full-cover .entry-header h1{
	color: #000;
}
.cat-links a{
	color: #000;
}
.nav-previous a{
	color: #000;
}
.nav-previous span{
	color: #000;
}
.nav-previous .nav-title{
	color: #000;
}
.nav-next  i{
	color: #000;
}
.nav-next span{
	color: #000;
}
.single-blog-page .entry-meta span a{
	color: #000;
}
.breadcrumb-area-bg {
  background-size: cover;
  background-position: center center;
  position: relative;
  z-index: 1;
}
.breadcrumb-area-bg:after {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #000000;
  opacity: 0.3;
  z-index: -1;
  content: "";
}

.breadcrumb-page-title {
  font-size: 2.5rem;
  font-weight: 700;
  color: #ffffff;
  margin-bottom: 0;
}
@media (max-width: 1200px) {
  .breadcrumb-page-title {
    font-size: calc(1.375rem + 1.5vw);
  }
}
.breadcrumb-page-title--style2 {
  margin-bottom: 100px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .breadcrumb-page-title--style2 {
    margin-bottom: 50px;
  }
}
@media only screen and (max-width: 767px) {
  .breadcrumb-page-title--style2 {
    margin-bottom: 30px;
  }
}
@media only screen and (max-width: 479px) {
  .breadcrumb-page-title--style2 {
    margin-bottom: 15px;
    font-size: 2.1875rem;
  }
}
@media only screen and (max-width: 479px) and (max-width: 1200px) {
  .breadcrumb-page-title--style2 {
    font-size: calc(1.34375rem + 1.125vw);
  }
}

.breadcrumb-page-list {
  text-align: right;
}
@media only screen and (max-width: 575px) {
  .breadcrumb-page-list {
    text-align: left;
    margin-top: 10px;
  }
}
.breadcrumb-page-list li {
  display: inline-block;
  color: #ffffff;
  font-size: 0.8125rem;
  line-height: 1.2;
  font-weight: 700;
}
.breadcrumb-page-list li.has-children {
  position: relative;
  padding-right: 25px;
}
.breadcrumb-page-list li.has-children a {
  color: #ffffff;
  position: relative;
  letter-spacing: 0.5px;
  padding: 2px 0;
}
.breadcrumb-page-list li.has-children a:after {
  -webkit-transition: 0.6s cubic-bezier(0.25, 0.8, 0.25, 1) 0s;
  transition: 0.6s cubic-bezier(0.25, 0.8, 0.25, 1) 0s;
  content: "";
  width: 0;
  height: 1px;
  bottom: 0;
  position: absolute;
  left: auto;
  right: 0;
  z-index: 1;
  background-color: transparent;
}

.breadcrumb-page-list li.has-children:hover a:after {
  background-color: #ffffff;
  width: 100%;
  left: 0;
  right: auto;
}
.breadcrumb-page-list--style2 {
  text-align: left;
}
.h4, .h5, .h6, h4, h5, h6 {
    margin-top: 100px;
    margin-bottom: 10px;
}
b, strong {
    font-weight: 300;
    
}
h1, h2, h3, h4, h5, h6 {
  text-transform:lowercase !important;
    margin:0;
    padding: 0;
    font-weight: 600 !important;
    font-size: 15px !important;
    color: #333;
    
    margin-top: 15px !important;
}
.page-title h1 {
    font-size: 35px !important;
    letter-spacing: 1.5px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    margin: 0;
    color: #fff !important;
}
</style>
 <!-- Start Breadcrumb Area -->
 <style>
    @media only screen and (max-width: 600px) {
        .breadcrumb-section {
   margin-top:80px;
  }
 
}
a:visited {
    color: black;
}
a {
    color: black;
   
}
h5{
  margin-top: 12px;
}
</style>
<section class="breadcrumb-section parallax page-breadcrumb"  style=" padding-top:<?= get_field('padding_top') ?>px; padding-bottom:<?= get_field('padding_bottom') ?>px;">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <div class="page-title">
                    <h1>Blog</h1>
                </div>
            </div>
            <div class="col-md-7 col-sm-7">
                <div class="breadcrumb">
				<ul><li><a><?= get_breadcrumb();?></a></li> </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Breadcrumb Area -->





<main id="primary" class="site-main" style="padding-top: 70px;">
		<div class="blog-full-cover single-blog-page">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">

						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', get_post_type() );

							the_post_navigation(
								array(
									'prev_text' => '<span class="nav-subtitle" ><i class="fa fa-angle-left"></i>' . esc_html__( '', 'screening-buckets' ) . '</span> <span class="nav-title" style="margin-right: 10px;">%title</span>',
									'next_text' => '<span class="nav-subtitle">' . '' . '</span> <span class="nav-title" style="margin-right: 10px;">%title</span><i class="fa fa-angle-right"></i>'.esc_html__( '', 'screening-buckets' ),
								)
							);
							

						endwhile; // End of the loop.
						?>

					</div>
					<div class="col-lg-4"><?php get_sidebar(); ?></div>
					
				</div>
			</div>
		</div>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();