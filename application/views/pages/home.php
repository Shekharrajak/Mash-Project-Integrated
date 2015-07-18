

<!--------------------------------------------HOME------------------------------------------>
    <section id="main-slider">
        <div class="owl-carousel">
            
            <a href="<?php echo base_url(); ?>pages/Leadership_Camp/Leadership_Camp" target="_blank"><div class="item" style="background-image: url(<?php echo base_url(); ?>images/slider/dowhatyoulove_mashcamp.jpg);">

            </div><!--/.item--></a>
             
            <a href="https://redspotmashproject.wordpress.com/redspot-campaign/" target="_blank"><div class="item" style="background-image: url(<?php echo base_url(); ?>images/slider/redspot.png);">
                 
                
            </div><!--/.item--></a>
            
            <a href="http://www.mashglobal.org/redspot/" target="_blank"><div class="item" style="background-image:url(data:image/gif;base64,R0lGODlhAQABAIAAAFVVVQAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="carousel-content">
                                    <br><br>
                                    <h2>Faced - Fought<br>Witnessed - Confronted<br><small>or</small><br>Just <span>Mute</span> Spectators</h2>
                                    <br><br>
                                    <h2>Your story is our lesson<br>Get Involved!<br></h2>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div></a><!--/.item-->
 
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->


<!--------------------------------------------ABOUT------------------------------------------>

        <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center">About Us</h2>
              </div>

            <div class="row">
                <div class="col-sm-6">
                    <h3 class="column-title">Video Intro</h3>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="http://www.youtube.com/embed/3GYpPvoSkEg?rel=0&autohide=1&autoplay=0&showinfo=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-sm-6">
                    <h3 class="column-title">Our Vision</h3>
                    <p>The vision of MASH Project is to build a community of technologically enabled social change makers.</p>

                    <h3 class="column-title">What we do</h3>
                    <p>We are building this community by focusing on three major areas </p>

                            <ul class="nostyle">
                                <li><i class="fa fa-check-square"></i> Developing cause based web and mobile applications </li>
                                <li><i class="fa fa-check-square"></i> Raising awareness through Social media and </li>
                                <li><i class="fa fa-check-square"></i> Organization engaging events like Open Dialogue, Hackathons, Workshops and Seminars.</li>
                            </ul>


                </div>
            </div>
        </div>
    </section><!--/#about-->
    
<!--------------------------------------------WORK------------------------------------------>
     <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center">Our Works</h2>

            </div>
            
        <ul class="nav nav-tabs nav-justified">
            <li class="active"><a href="#apps" data-toggle="tab">Projects</a></li>
            <li><a href="#event" data-toggle="tab">Events</a></li>
        </ul>
            
        <!-- Tab Sections -->
        <div class="tab-content text-justify">
            <div class="tab-pane active" id="apps">
                  
                    <?php

   
          foreach ($results_project as $item) :

                     extract($item);
                // include 'templates/press.php';
                  include 'C:\xampp1\htdocs\mashproject\application\views\templates\project.php';
         endforeach
    
                    ?>


                
            </div>
            <div class="tab-pane" id="event">
                   <?php
                    foreach ($results_event as $item) :

                         extract($item);
                // include 'templates/press.php';
                        include 'C:\xampp1\htdocs\mashproject\application\views\templates\event.php';
                     endforeach
    

                   ?>
                

      <!-- 
                    <div class="col-md-4 portfolio-item ">
                        <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"> 
                                  <i class="fa fa-search-plus fa-3x"></i> 
                                </div>
                            </div>
                            <img src="<?php echo base_url(); ?>images/work/hack.jpg" class="img-responsive" alt=""></a>

                            <div class="portfolio-caption">
                                <h4> <a href="https://www.facebook.com/events/678482125533776/" target="_blank">HACK day</a></h4>
                            </div> 
                        </div>
               
                <div class="col-md-4 portfolio-item ">
                        <a href="Leadership%20Camp.html" class="portfolio-link">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"> 
                                  <i class="fa fa-search-plus fa-3x"></i> 
                                </div>
                            </div>
                            <img src="<?php echo base_url(); ?>images/work/dowhatyoulove_mashcamp.jpg" class="img-responsive" alt=""></a>

                            <div class="portfolio-caption">
                                <h4> <a href="https://www.facebook.com/events/1157413600951843/" target="_blank">#DoWhatYouLove #MASHCamp</a></h4>
                            </div> 
                        </a>
                    </div> -->
                
            </div>
            </div>  
            </div>
        </section>



<!--  Portfolio Modal 2 
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body">
            <h2><img src="http://www.mashglobal.org/img/INFO_MDG_icon.png" class="img-responsive" alt="INFO MDG"></h2>
              <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"> </div>
      </div>
    </div>
            <p>
                INFO MDG is one of the first initiatives MASH Project took in the Tech Development sector. It is centered around the 8 Millennium Development Goals that the United Nations designed, all to be achieved by the target date 2015. These goals are chosen in context to the major issues that surround the world today, like educational levels, degrading health levels etc. INFO MDG, with its simple interface, provides its users with a thorough understanding of these goals and gives them an insight into the steps that have been taken by far and lists out various pointers that surround the 8 goals. It is purely a knowledge-sharing application.
            </p>
                            <p><strong>App status:</strong> Developmental stage</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->


<!-- Portfolio Modal 4 
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body"> 
            <!-- Project Details Go Here -
            <h2> <a href="https://www.facebook.com/events/678482125533776/" target="_blank">HACK day</a></h2>
            <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"> </div>
      </div>
    </div>
              <img src="http://www.mashglobal.org/img/hack.jpg" class="img-responsive" alt="">
              <p>
                MASH Project held it's first Hack-Day on March 29, 2014 to take-off it's Mobile Application - NGO Connect. An incredible opportunity that not only brought developers and programmers under one roof but also provided a platform wherein the collective effort set the foundation of the App. NGO Connect was developed with the motive of connecting NGO's with people to serve the society by encouraging volunteer participation with complete knowledge of the various organisation working in the field of development and empowerment.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->


<!--------------------------------------------INTERNSHIPS------------------------------------------>
    <section id="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center">Internship<br><small>Looking for a window to expand your ideas?</small></h2>
                <p class="text-center">MASH Project is open for all eager minds, be it a beginner or a master in any field. Check out our sections available for Internship and choose the one which excites you! 
                <br>For the Experienced ones, if you have any suggestions or believe you can contribute to us in your own way. Please visit our <a href="contact.html">Contact us page.</a></p>
                <p class="text-center">
Internship type: Work from home
<br>Time period: Minimum 3 months .
<br>Stipend: Unpaid (loads of experience as takeaway) 
</p>

            </div>
            <div class="row">
                                        <div class=" col-md-4 col-sm-6">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h4>Design and Visual communication</h4>
                                    <p>A section meant for skilled Photoshoppers. Knowledge of CorelDRAW, Illustrator are a welcome deal!<a href="http://goo.gl/U3Swie" target="_blank" class="pull-right">Join</a></p>
                                </div>
                            </div>
                        </div>                        
                        <div class=" col-md-4 col-sm-6">
                            <div class="thumbnail">

                                <div class="caption">
                                    <h4>Social Media</h4>
                                    <p>We are looking for people who can use Social media platforms like Facebook, Twitter, Reddit, etc. in the right manner for the right cause.<br>
                                   <a href="http://www.mashglobal.org/http://goo.gl/U3Swie" target="_blank" class="pull-right">Join</a></p>
                                </div>
                            </div>
                        </div>
                
                        <div class=" col-md-4 col-sm-6">
                            <div class="thumbnail">

                                <div class="caption">
                                    <h4>Finance</h4>
                                    <p>We are looking for people who can come up with innovative fundraising strategies and help us in implementing them. <a href="http://goo.gl/U3Swie" target="_blank" class="pull-right">Join</a></p>
                                </div>
                            </div>
                        </div>
                
                
                        <div class=" col-md-4 col-sm-6">
                            <div class="thumbnail">

                                <div class="caption">
                                    <h4>Content & Research</h4>
                                    <p>Believe you can develop awesome content on social cause? Join us as Content Writer! If you find your tastes in digging deep for stories online and offline, then apply for our Research team.<a href="http://goo.gl/U3Swie" target="_blank" class="pull-right">Join</a></p>
                                </div>
                            </div>
                        </div>

                        <div class=" col-md-4 col-sm-6">
                            <div class="thumbnail">

                                <div class="caption">
                                    <h4>Web and Android development</h4>
                                    <p>We are looking for people with these skills :
                                    <br>Front end developer: HTML+CSS+JavaScript
                                    <br>Back end Developer: NodeJs/Php/Python/Java 
                                    <br>App Developer: Android/iOS
                                    <a href="http://goo.gl/U3Swie" target="_blank" class="pull-right">Join</a></p>
                                </div>
                            </div>
                        </div>

                        <div class=" col-md-4 col-sm-6">
                            <div class="thumbnail">

                                <div class="caption">
                                    <h4>Events Management</h4>
                                    <p>If you believe events can power change, and are willing to put in your skills for the same, then MASH is the place for you!<a href="http://goo.gl/U3Swie" target="_blank" class="pull-right">Join</a></p>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </section>
    
    <!--------------------------------------------BLOG------------------------------------------>
    <section id="blog">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center">Blog</h2>

            </div>

            <div class="row">
                <div class="col-sm-6 text-center">
                    <h4><a href="https://officialmashproject.wordpress.com/" target="_blank">MASH Project</a></h4>
                        <iframe width="400" height="315" src="https://officialmashproject.wordpress.com/" frameborder="0" allowfullscreen></iframe>
                        <div>
                        <a href="https://officialmashproject.wordpress.com/" class="btn btn-primary"target="_blank">Visit Blog</a>
                            </div>
                    </div>
                <div class="col-sm-6 text-center">
                    <h4><a href="https://redspotmashproject.wordpress.com/redspot-campaign/" target="_blank">RED Spot</a></h4>
                        <iframe width="400" height="315" src="https://redspotmashproject.wordpress.com/redspot-campaign/" frameborder="0" allowfullscreen></iframe>
                        <div>
                        <a href="https://redspotmashproject.wordpress.com/redspot-campaign/" class="btn btn-primary"target="_blank">Visit Blog</a>
                            </div>
                    </div>
                </div>

                    
        </div>
    </section>

    
<!--------------------------------------------PARTNERS------------------------------------------>
    <section id="meet-team">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center">Partners</h2>
                <p class="text-center">To bring all the good stuff from concept into action, we need support from our partners. Together as an extended TEAM (Together Everyone Achieve More), they have been a constant help in getting us an extra mile. We express our genuine love and gratitude for all the support.</p>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="team-member">
                        <div class="team-img">
                            <img class="img-responsive" src="<?php echo base_url(); ?>images/partners/CoWorkIn-logo.jpg" alt="">
                        </div>
                        <div class="team-info text-center">
                            <h3>coworking.co</h3>
                            <span>Connect | Collaborate | CoWork</span>
                        </div>
                        <p>CoworkIn is a network of coworking spaces and their member coworkers to connect with the entrepreneurial and social community across the spaces. CoworkIn allows all members and spaces to interact with each other, share resources and build their own local communities.</p>
                       
                </div>
                    </div>
                <div class="col-md-4">
                    <div class="team-member ">
                        <div class="team-img">
                            <img class="img-responsive" src="<?php echo base_url(); ?>images/partners/human-circle-logo.png" alt="">
                        </div>
                        <div class="team-info text-center">
                            <h3>Human Circle</h3>
                            <span>Connecting enlightened minds</span>
                        </div>
                        <p>Human Circle is a movement to inspire and enable young people to do what they love. It is an experiential platform comprising of physical and virtual forums like conferences, workshops, retreats and online communities, to empower people with mindsets and skills required to become impact individuals.</p>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member">
                        <div class="team-img">
                            <img class="img-responsive" src="<?php echo base_url(); ?>images/partners/josh-talks-logo.png" alt="">
                        </div>
                        <div class="team-info text-center">
                            <h3>Josh Talks</h3>
                            <span>Inspiring Thought!</span>
                        </div>
                        <p>Josh Talks is a platform that showcases India’s most inspiring stories to you. It features and highlights the struggle that people go through, the pain they have to suffer and the obstacles they have to overcome to reach their ultimate goal of success. It aims to disrupt you, move you, motivate you and inspire you.</p>
                    
                    </div>
                </div>

            </div>

        </div>
    </section>