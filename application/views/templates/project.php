                <div class="col-md-<?= $size ?> portfolio-item ">
                        <a href="#portfolioModal<?= $project_id ?>" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"> 
                                  <i class="fa fa-search-plus fa-3x"></i> 
                                </div>
                                </div>
                                <img src="<?php echo base_url(); ?><?= $project_thumb ?>" class="img-responsive" alt=""></a>
                            <div class="portfolio-caption">
                                
                                <h4><?= $project_title ?></h4>
                            </div> 
                </div>
        <!-- 
                    <div class="col-md-6 portfolio-item "> 
                        <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"> 
                                  <i class="fa fa-search-plus fa-3x"></i> 
                                </div>
                            </div>
                           <img src="<?php echo base_url(); ?>images/work/INFO_MDG_icon.png" class="img-responsive" alt=""></a>

                            <div class="portfolio-caption">
                                <h4>INFO MDG</h4>
                            </div> 
                    </div> -->

    <!-- Portfolio Modals --> 
<!-- Use the modals below to showcase details about your portfolio projects! --> 

<!-- Portfolio Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal<?= $project_id ?>" tabindex="-1" role="dialog" aria-hidden="true" style="z-index:999;">
  <div class="modal-content">

    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body"> 
            <!-- Project Details Go Here -->
            <h2><img src="<?php echo base_url(); ?><?= $project_thumb ?>" class="img-responsive" alt="<?= $project_title ?>"></h2>
                  <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"> </div>
      </div>
    </div>
              
            <p>
            <?= $project_content ?>
           
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>