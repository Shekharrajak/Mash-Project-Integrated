                 
                    <div class="col-md-<?= $size_event ?> portfolio-item "> 
                        <a href="#portfolioModal<?= $event_id ?>" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"> 
                                  <i class="fa fa-search-plus fa-3x"></i> 
                                </div>
                            </div>
                            <img src="<?php echo base_url(); ?><?= $event_thumb ?>" class="img-responsive" alt=""></a>
                            <div class="portfolio-caption">
                               <h4> <a href="<?= $event_link ?>" target="_blank"><?= $event_title ?></a></h4>
                            </div> 
                    </div>






<!-- Portfolio Modal 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal<?= $event_id ?>" tabindex="-1" role="dialog" aria-hidden="true" style="z-index:999;">
  <div class="modal-content">
    
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body"> 
            <!-- Project Details Go Here -->
            <h2> <a href="<?= $event_link ?>" target="_blank"><?= $event_title ?></a></h2>
              <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"> </div>
      </div>
    </div>
              <img src="<?= base_url() ?><?= $event_thumb ?>" class="img-responsive" alt="">
            <p>
               <?= $event_content ?> </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- else {
    
                <div class="col-md-<?= $size_event ?> portfolio-item ">
                        <a href="<?php echo base_url(); ?>pages/Leadership_Camp/Leadership_Camp" class="portfolio-link">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"> 
                                  <i class="fa fa-search-plus fa-3x"></i> 
                                </div>
                            </div>
                            <img src="<?php echo base_url(); ?><?= $event_thumb ?>" class="img-responsive" alt=""></a>

                            <div class="portfolio-caption">
                                <h4> <a href="<?= $event_link ?>" target="_blank"><?= $event_title ?></a></h4>
                            </div> 
                        
                    </div>
} -->




