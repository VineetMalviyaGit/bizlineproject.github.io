<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package corporate
 */
?>
 <style>
 .right-post-inside h6 a{
	 color: #000;
	 font-size:15px;
	 
 }
 .sidebar-title h3 a{
	color: #000;
 }
 .follow-sidebar ul li{
	margin-top:5px;
	margin-bottom:5px;
	background-color:#e84c3d;
    border-radius: 20px;
    padding: 6px;
	font-size: 17px
 }
 
 
 
 .icon{
	 color:white;
	}
	.align-items-start{
		margin-left:-50px;
		
	}
	.sidebar-title{
		margin-bottom:20px;
		margin-top: 20px;
	}
	#icone{
		margin-left:20px;
		margin-right:5px;
		color:white;
	}
	#color{
      color:white !important;
	}
	.blog-left{
		margin-bottom:0px;
		margin-top:10px;
	}
	@media only screen and (max-width: 600px) {
		.align-items-start{
		margin-top:-130px;
		margin-left:125px;
	}
	.blog-left{
		margin-bottom:78px;
	}
}
h1, h2, h3, h4, h5, h6 {
	text-transform:lowercase !important;
    margin: 0;
    padding: 0;
    font-weight: 600 !important;
    font-size: 15px !important;
    color: #333;
    margin-top:10px !important;
}
</style>
<aside id="secondary" class="widget-area custom-sidebar">
 <?php dynamic_sidebar( 'sidebar-1' ); ?>

 <div class="follow-sidebar mb-4">
	 <h3 class="sidebar-title">Follow Us</h3>
	 <ul style="margin-left:-10px;">
	
	 <li ><a  id="color" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>"><i class="fa fa-facebook" id="icone"></i> Facebook</a></li>
	 <li><a id="color"target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo get_permalink(); ?>"><i class="fa fa-twitter" id="icone"></i>Twitter</a></li>
	 <li><a id="color" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>"><i class="fa fa-linkedin" id="icone"></i>Linkedin</a></li>
	 <li><a id="color" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>"><i class="fa fa-youtube" id="icone"></i>Youtube</a></li>
	 <li><a id="color" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>"><i class=" fa fa-instagram " id="icone"></i>Instagram</a></li>


	 
		 
	 </ul>
 </div>

 <div class="recent-blogss "  >
	 <h3 class="sidebar-title">TOP POSTS</h3>
	 
	 <?php 
	 $args = array( 
		 'post_type'   => 'post',
		 'posts_per_page' => 4,
		 'orderby' => 'date',
		 'order'   => 'DESC',
	 );
	 $scheduled = new WP_Query( $args );

	 if ( $scheduled->have_posts() ) : 
	 ?>

 <div class="inside" style="margin-top:10px;">
	 <div class="row">
		 <?php while( $scheduled->have_posts() ) : $scheduled->the_post() ?>

			 <div class="col-md-12">
				 <div class="row">
			 <div class="col-md-6 mb-4">
				 <div class="blog-left">
					 <a href="<?php echo get_permalink(); ?>">
						 <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" style="height:100px; width:100px; margin-bottom:-50px;">
				  </a>
				 </div>
			 </div>
			  <div class="col-md-6 d-flex align-items-start  pl-0" >

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
					 <?php $title = get_the_title(); ?>
					 <h6><a href="<?php echo get_permalink(); ?>"><?php echo substr($title,0,40)?></a></h6>
					 <p class="date-published"><small><?php echo get_the_date(); ?></small></p>
					 
				 </div>
				 </div>
			 </div>
		 </div>
			 

		 <?php endwhile ?>
		 </div>
 </div>

	 <?php else : ?>
		 No Post Found...
	 <?php endif ?>
 </div>

</aside>