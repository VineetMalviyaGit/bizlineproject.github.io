<style>
   
    @media only screen and (max-width: 600px) {
        .carousel{
        margin-top:80px;
    }
}
.carousel{
        margin-bottom:-50px;
    }
</style>
<!-- Start Home Slider Area -->
<section id="main-slide" class="carousel slide" data-ride="carousel">
    <!-- Start Slider Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#main-slide" data-slide-to="0" class="active"></li>
        <li data-target="#main-slide" data-slide-to="1"></li>
        <li data-target="#main-slide" data-slide-to="2"></li>
    </ol>
    <!-- End Slider Indicators -->
    <!-- Start Slider Inner -->
   
    <div class="carousel-inner">
        <!-- Start Slide #1 -->
        <?php $i=1;
       foreach(get_field('banner_section') as $val){
         ?>
        <div class="item <?=( $i==1)?'active':''?>">
      
            <img class="img-responsive" src="<?php echo $val['banner_img'];?>" alt="BizLine">
            <div class="slider-content hidden-sm hidden-xs">
                <div class="col-md-12 text-center">
                    <h1 class="animated1">
                        <span><?php echo $val['banner_text'];?><strong><?php echo $val['banner_text2'];?></strong></span>
                    </h1>
                    
                    <?php if( $val['banner_heading']!='') { ?>
                    <p class="animated2"><?php echo $val['banner_heading'];?><br><?php echo $val['banner_heading2'];?></p>
                    <?php }?>
                   
                    <?php if($val['btn_text']!='') { ?>
                    <a href="<?php echo $val['btn_link'];?>" class="btn btn-primary animated3"><?php echo $val['btn_text'];?></a>
                    <?php }?>
                
                </div>
            </div>
        
        </div>
        <?php $i++; } ?>
        <!-- End Slide #1 -->
        </div>
       
    <!-- End Slider Inner -->
    <!-- Start Slider Controls -->
    <a class="left carousel-control" href="#main-slide" data-slide="prev">
        <span><i class="fa fa-angle-left"></i></span>
    </a>
    <a class="right carousel-control" href="#main-slide" data-slide="next">
        <span><i class="fa fa-angle-right"></i></span>
    </a>
    <!-- End Slider Controls -->
</section>
<!-- End Home Slider Area -->  

