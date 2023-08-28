<style>
    .BizLine-accordion .panel-heading {
    background: #f9f9f9;
    border: 0;
    border-radius: 0;
    font-weight: 400;
    padding-left: 20px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.pad80{
       
        margin-bottom:-50px;
    }
</style>
<!-- Start Faq's Page Area -->
<section class="pad80">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3><?= get_field('faq_title');?></h3>
                        <p><?= get_field('faq_discription');?></p>
                    </div>
                    <div class="BizLine-accordion">
                        <div class="panel-group" id="accordion">
                        <?php $i=1; if( have_rows('faq') ) {  while( have_rows('faq') ) { the_row(); ?>                
                        <!-- Start Accordion 1 -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse-<?= $i;?>" aria-expanded="false" class="collapsed"><?= get_sub_field('faq_heading');?></a>
                                    </h4>
                                </div>
                              
                                <div id="collapse-<?= $i;?>" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                <?php if( get_sub_field('faq_discription') !='') { ?>  
                                    <div class="panel-body"><?= get_sub_field('faq_discription');?>.</div>
                                    <?php } ?>
                                </div>
                            
                            </div>
                            <!-- End Accordion 1 -->
                           <?php $i++; }} ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Faq's Page Area -->