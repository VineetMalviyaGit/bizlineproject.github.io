<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package corporate
 */

get_header();
?>

<style>
	.right-post-inside h1 a{
		color:#000;
	}
	.blog-2-2-post h2 a{
		color:#000;
	}
	.right-post-inside h6 a{
		color: #000;
	}
	.right-post-inside .share-btnn a{
		color: #ef2e23;
	}
	.right-post-inside .share-btnn a:hover{
		color: #000;
	}
	.view-post-and-social .share-btnn a{
		color: #000;
		font-size: 15px;
	}
	.view-post-and-social .share-btnn a i{
		font-size: 20px;
		color: #ef2e23;
	}
	.view-post-and-social .share-btnn a i:hover{
		font-size: 20px;
		color: #000;
	}
	.view-post-and-social .share-btnn a:hover{
		color: #dfa01f;
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
.share-btnn{
	margin-left:135px;
	margin-top:-35px;
	margin-bottom:25px;
}
a:visited {
    color: black;
}
a {
    color: black;
   
}
</style>



  <!-- Start Breadcrumb Area -->
<style>
    @media only screen and (max-width: 600px) {
        .breadcrumb-section {
   margin-top:80px;
  }
}
#color{
	padding-right:5px;
}
.view-post-and-social .share-btnn a i {
    font-size: 20px;
    color: #ef2e23;
    padding:7px;
}
#margin{
	margin-top:10px;
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
<section class="breadcrumb-section parallax page-breadcrumb"  style=" padding-top:<?= get_field('padding_top') ?>px; padding-bottom:<?= get_field('padding_bottom') ?>px;">
    <div class="container">
        <div class="row" >
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



<main id="primary blog" class="site-main blog-section" style="padding-top: 70px; margin-bottom:20px;">
		<div class="blog-full-cover">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mb-13">
						<div class="row" style="margin-bottom:20px;">
							
							<?php 
							$args = array( 
								'post_type'   => 'post',
								'posts_per_page' => -1,
								'orderby' => 'date',
				                'order'   => 'DESC',
							);
							$scheduled = new WP_Query( $args );

							if ( $scheduled->have_posts() ) : 
							?>
								<?php $count = 1; 
								while( $scheduled->have_posts() ) : $scheduled->the_post() ?>

								<?php if($count <= 1){ ?>
									<div class="col-lg-6">
										<div class="blog-left-image">
											<a href="<?php echo get_permalink(); ?>">
											<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" style="height:350px; width:600px;"> </a>
										</div>
									</div>
									<div class="col-lg-6">

					<div class="right-post-inside">
											<div class="tags-posts">
											 <?php
												$posttags = get_the_category(get_the_ID());
												$slug = get_category_link($posttags[0]->term_id);
												if ($posttags) {
												    
												    $listt = "";
												  foreach($posttags as $tag) {
												    $listt .= "<a href='#'>".$tag->name . '</a>'; 
												  }
												  
												  echo rtrim($listt, ', ');
												}
												?>
											</div>
											
											<h1><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>
											<p class="date-published"><small><?php echo get_the_date(); ?></small></p>
											<div class="the_excerpt_post-blog">
												<?php echo the_excerpt(); ?>
											</div>
											
											<div class="view-post-and-social">
										<div class="btn-view">
											<a class="btn" style="padding:0;" href="<?php echo get_permalink(); ?>"><button class="btn btn-danger" type="button" style="font-size: 16px;">View Post</button></a>
										</div>
								
											<div class="share-btnn">
												<!-- AddToAny BEGIN -->
												<a  id="color" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>"> <i class="fa fa-facebook"></i></a>
												<a  id="color" target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo get_permalink(); ?>"><i class="fa fa-twitter"></i></a>
												<a   id="color" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>"><i class="fa fa-linkedin"></i></a>
												<a  id="color" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>"><i class="fa fa-youtube"></i></a>
												<a  id="color" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>"><i class="fa fa-instagram"></i></a>


												
												<!-- AddToAny END -->
											
									
										</div>
									</div>
										</div>
									</div>
									<?php } ?>

								<?php $count++; endwhile ?>
							<?php else : ?>
								No Post Found...
							<?php endif ?>


						</div>
					</div>

					<!-- bottom blog here  -->
					
					<div class="col-lg-8 " id="margin">

						<div class="row">
						<?php if ( $scheduled->have_posts() ) : ?>
						<?php $count_new = 1; while( $scheduled->have_posts() ) : $scheduled->the_post() ?>
							
							<?php if($count_new > 1){ ?>
							<div class="col-lg-6">
								<div class="blog-2-2-post">
									
									<div class="blog-left-image">
										<a href="<?php echo get_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" style="height:200px; width:600px;"> 
										</a>
									</div>

									<div class="tags-posts smalll" style="font-size:16px;padding-top:10px;display:flex;justify-content:space-between;">
										<?php
												$posttags = get_the_category(get_the_ID());
												$slug = get_category_link($posttags[0]->term_id);
												if ($posttags) {
												    
												    $listt = "";
												  foreach($posttags as $tag) {
												    $listt .= "<a href='#'>".$tag->name . '</a>'; 
												  }
												  
												  echo rtrim($listt, ', ');
												}
												?>

											<p class="date-published"><small><?php echo get_the_date(); ?></small></p>
									</div>
									<?php $title=get_the_title(); ?>   
									<h2><a href="<?php echo get_permalink(); ?>"><?= substr($title,0,25)?></a></h2>

									
									<div class="the_excerpt_post-blog ">
										
										<?php echo get_the_excerpt() ; ?>...
									</div>

									<div class="view-post-and-social">
										<div class="btn-view">
											<a class="btn" style="padding:0;" href="<?php echo get_permalink(); ?>"><button type="button" class="btn btn-danger" style="font-size: 16px;">View Post</button></a>
										</div>
								
											<div class="share-btnn">
												<!-- AddToAny BEGIN -->
												<a  id="color" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>"> <i class="fa fa-facebook" ></i></a>
												<a  id="color" target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo get_permalink(); ?>"><i class="fa fa-twitter"></i></a>
												<a  id="color" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>"><i class="fa fa-linkedin"></i></a>
												<a  id="color" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>"><i class="fa fa-youtube"></i></a>
												<a  id="color" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>"><i class="fa fa-instagram"></i></a>


												
												<!-- AddToAny END -->
											
									
										</div>
									</div>

								</div>

							</div>
							<?php } ?>
						<?php $count_new++; endwhile ?>
						
						<?php endif ?>

						
						</div>
						<?php // echo wp_pagenavi();?>
						
						
					</div>
				
					<div class="col-lg-4">
							<?php get_sidebar(); ?>
					</div>

				</div> <!-- row -->

			</div>
		</div>
	</main><!-- #main -->
<?php
// get_sidebar();
get_footer();