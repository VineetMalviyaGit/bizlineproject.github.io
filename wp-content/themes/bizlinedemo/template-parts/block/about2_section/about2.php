 <style>
    h1{
        font-size:30px;
        margin-bottom:30px;
    }
   
  
@media screen and (min-width: 480px) {
    .pad-t80 {
    padding-top: 20px !important;
}
}


 </style>
 <!-- End Breadcrumb Area -->
 <section class="pad-t80 pad-b30 about">
        <div class="container" style="margin-top:<?= get_field('padding_top')?>px; margin-bottom:<?= get_field('padding_bottom') ?>px;">
                    <div class="row" >
                    <div class="col-md-12 wow fadeInUp">
                        <div class=" text-center">
                            <h1><?= get_field('about2_title');?></h1>
                        </div>
                    </div>
                </div>
                        <!-- Start Single Service Area -->
                        

    <div class="col-sm-12 col-md-6 <?php if(get_field('reverse')){echo "col-md-push-6 col-sm-push-12";}?>">
                        <div class="single-blog-post">
                            <div class="blog-img">
                            <?php if( get_field('about2_img')!='') { ?>    
                            <img decoding="async" src="<?= get_field('about2_img');?>" class="img-responsive" alt="Blog Image">
                           <?php } ?>
                        </div>
                        </div>
                    </div>

                <div class="col-sm-12 col-md-6 <?php if(get_field('reverse')){echo "col-md-pull-6 col-sm-pull-12";}?>">
                        <div class="post-content">
                            <div class="right-part">
                                
                                <div class="post-text">
                                    <blockquote class="primary">
                                        
                                        <p><?= get_field('about_heading');?></p>
                                    </blockquote>
                                    <?php if( get_field('about_discription')!='') { ?>  
                                    <p><?= get_field('about_discription');?></p>
                                    <?php }?>
                                   
                                </div>
                            </div>
                        </div>
                 </div>


        </div>


             
</section>

                <!-- End Single Service Area -->
           