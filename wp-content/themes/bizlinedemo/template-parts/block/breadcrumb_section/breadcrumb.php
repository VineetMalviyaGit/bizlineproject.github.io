<!-- Start Breadcrumb Area -->
<style>
    @media only screen and (max-width: 600px) {
        .breadcrumb-section {
   margin-top:80px;
  }
}


</style>
<section class="breadcrumb-section parallax page-breadcrumb"  style="background-image: url(<?= get_field('breadcrumb_img')?>); padding-top:<?= get_field('padding_top') ?>px; padding-bottom:<?= get_field('padding_bottom') ?>px;">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <div class="page-title">
                    <h1><?= get_field('breadcrumb_title');?></h1>
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



