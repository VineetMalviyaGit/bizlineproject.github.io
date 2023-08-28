<style>
    .pad-t60 {
    padding-top: 60px;
    padding-bottom: 0px !important;
    margin-bottom: 30px !important;
}


</style>
<!-- Start Feature Area -->
<section class="pad-t60 pad-b30">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeInUp">
                <div class="section-title text-center">
                    <h3><?= get_field('about_title');?></h3>
                </div>
            </div>
        </div>
        <div class="row">
        <?php foreach(get_field('about') as $val){
         ?>    
        <div class="col-md-4 wow fadeInLeft">
                <div class="feature-9 text-center">
                <?= $val['icon'];?>
                    <h4><?= $val['about_title'];?></h4>
                    <?php if( $val['about_heading'] !='') { ?>  
                    <p><?= $val['about_heading'];?></p>
                    <?php }?>
                </div>
            </div>
           
          <?php } ?> 
            
        
        </div>
    </div>
</section>
<!-- End Feature Area -->

