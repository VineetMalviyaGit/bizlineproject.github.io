<style>
 .pad80{
    margin-top:-30px;
    margin-bottom:-50px;
 }   
</style>
<!-- Start Features Area -->
<section class="pad60  pad80">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3><?php echo get_field('latest_blog_title');?></h3>
                </div>
            </div>
        </div>
            <div class="row">
            <?php 
                        $args = array('numberposts' => '1' );
                        $recent_posts = wp_get_recent_posts( $args );
                        
                        $query = new WP_Query( $args );
                                if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {
                                        $query->the_post(); 
                                       
                                        foreach( $recent_posts as $p )
                                        { 
                                         
                                           
                                        
                            $posttags = get_the_category(get_the_ID());
												$slug = get_category_link($posttags[0]->term_id);
												if ($posttags) {
												    
												    $listt = "";
                           
												  foreach($posttags as $tag) {
												    $listt .= "<a href='".get_category_link($tag->term_id)."'>".$tag->name . '</a>'; 
                          
                          }
												  
												  $cat_tag= rtrim($listt, ', ');
												}
                                        
                                        ?>
 
            <div class="col-md-4">
                    <div class="feature-6">
                        <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url() ?>" alt="BizLine" style="width:350px; height:200px;">
                        <?php $title=get_the_title() ?>
                        <h4><a href="<?php echo get_permalink() ?>" ><?php echo  substr($title,0,30); ?></a></h4>
                        <?php $short=get_the_excerpt(); ?>
                        <p><?php echo substr($short,0,100); ?></p>
                       
                        <a href="<?php echo get_permalink() ?>">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                
                <?php 
                                          } ?>
                                        	
                                 <?php   }
                                    wp_reset_postdata();
                                } else {
                                    // none were found
                                }

                        ?>         
        
            </div>
        </div>
    </section>
    <!-- End Features Area -->
