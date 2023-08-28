 <style>
    .section-title{
        margin-top:-30px;
        margin-bottom:-20px;
    }
    .post-text{
        justify-content: center;
        text-align:justify;
        padding-left:5px;
        padding-right:5px;
    }

</style>
<style>
    #term{
        /* margin-top:10px; */
        margin-bottom:20px;
    }
    .pad80{
        margin-top:0px;
        margin-bottom:-50px;
    }
    @media only screen and (max-width: 600px) {
        #term{
        margin-top:40px;
        margin-bottom:50px;
    }
}
</style>
 <!-- End Breadcrumb Area -->
 <section class="pad80">
        <div class="container">
            <div class="row">
            <div class="col-md-12" id="term">
                    <div class="section-title text-center">
                        <h3><?= get_field('title');?></h3>
                    </div>
                </div>
               
                
                <div class="col-md-12">
                    <div class="single-blog-post">

                        
                       
                          
                            <div class="right-part">
                            <?php if( get_field('discription')!='') { ?>  
                              
                                <div class="post-text">
                                    <p><?= get_field('discription');?></p>
                                   
                                </div>
                                <?php } ?>
                            </div>
                          
                        </div>
                       
                        </div>
                    </div>
                  
                </div>
                </div>
                </section>
               
            