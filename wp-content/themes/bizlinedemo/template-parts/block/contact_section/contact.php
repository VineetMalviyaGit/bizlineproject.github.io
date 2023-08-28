<style>
    @media only screen and (max-width: 600px) {
		#form{
            margin-left:5px;
            margin-right:5px;
        }
        h3{
            margin-left:25px !important; 
        }
}

.section-title h3:after {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    width: 300px !important;
    height: 1px;
    margin: -20px auto;
    content: '';
    opacity: 1;
    background: #333;
}
#form1{
    margin-bottom:-50px;
    /* margin-top:-50px; */
}
#map{
    margin-bottom:-50px;
}
.pad-t80{
   
}
.feature-9 {
    margin-bottom: 13px !important;
    margin-top: 30px !important;
}
.row {
    margin-right: 0px;
    margin-left: 0px;
    margin-bottom: -20px;
}
</style>

    
<!-- Start Faq's Page Area -->
<section class="pad80" id="form1">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-left">
                    
                <?php if( have_rows('contact_info') ) {  while( have_rows('contact_info') ) { the_row(); ?>                         
                     
                    <div class="row">
                    <div class="col-md-3">
                    <div class="feature-9 text-center wow fadeInUp" data-wow-duration="1s">
                        <?= get_sub_field('icon');?>
                       
                    
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="feature-9 text-center wow fadeInUp" data-wow-duration="1s">
                      
                        <h4> <?= get_sub_field('name');?></h4>
                        <p> <?= get_sub_field('heading');?></p>
                    
                    </div>
                </div>
                </div>
               <?php }} ?>
                
               
                </div>
                
                
                
                
                <div class="col-md-8">
                    <div class="section-title left">
                        <h3>Contact With Us.</h3>
                    </div>
                    
                    <div class="row" id="form">
                    <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1 ) ); ?>  
                   </div>
               
                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Faq's Page Area -->

    <!-- Start Map Area -->
    <div class="pad-t80" >
        <div  class="page-contact" id="map">
            <?= get_field('map_iframe');?>
       
        </div>
    </div>
    <!-- End Map Area -->