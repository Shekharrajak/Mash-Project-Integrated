

    <!--======== Our Team============-->

<div class="container-fluid" id="team">
     <div class="section-header">
                <h2 class="section-title text-center">Our Team</h2>
            </div>
<div class="container">
    <ul class="ch-grid">


    <?php 
        foreach ($results_team_present as $item) :

                     extract($item);
                // include 'templates/press.php';
                  include 'C:\xampp1\htdocs\mashproject\application\views\templates\tmpl_team.php';
            endforeach
    ?>
 <!-- 
        <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-mayank"></div>
                    <div class="ch-info-back">
                        <h4>Developer,Epicure,Gadget-freak,Foodie,Sarcastic being
                        </h4>
                    </div>    
                </div>
            </div>
                        <h5>Mayank Bhola</h5>
                        <p>Advisor<br>Development<br><a href="http://about.me/bholamayank" target="_blank" class="btn btn-primary">Know More</a></p>
        </li><br>
        <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-aashish"></div>
                    <div class="ch-info-back">
                        <h4>Changemaker<br>Entrepreneur<br>Jet-Spotter<br>Travel Enthusiast<br>
                        Love Tennis &amp; Reading Autobiographies
                        </h4>
                    </div>    
                </div>
            </div>
                        <h5>Aashish Beergi</h5>
                        <p>Co-founder<br><a href="http://www.about.me/abeergi" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>
        <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-kartik"></div>
                    <div class="ch-info-back">
                        <h4>Entrepreneur<br>Engineer<br>Social Activist<br>Tech Freak<br>Insanely Awesome<br></h4>
                    </div>    
                </div>
            </div>
                        <h5>Kartik Jain</h5>
                        <p>Co-founder<br><a href="http://about.me/kartik.jain" target="_blank" class="btn btn-primary">Know More</a></p>
        </li><br>
        <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-mehna"></div>
                    <div class="ch-info-back">
                        <h4>Engineer<br>Travel Buff<br>Keen learner<br>Foodie<br>Spiritual
                        </h4>
                    </div>    
                </div>
            </div>
                        <h5>Mehna Jain</h5>
                        <p>Head<br>HR<br><a href="http://about.me/mehna.jain.3" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>
        <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-sheerin"></div>
                    <div class="ch-info-back">
                        <h4>Vivacious Core<br>Self Reliant<br>Animal lover<br>Art  enthusiast<br>Self driven
                        </h4>
                    </div>    
                </div>
            </div>
                        <h5>Sheerin Naseem</h5>
                        <p>Head<br>Social Media<br><a href="http://about.me/sheerinaseem" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>

        
        
        <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-shivani"></div>
                    <div class="ch-info-back">
                        <h4>optimistic <br>sportsperson<br>aspiring<br>entrepreneur<br>passionate
                        </h4>
                    </div>  
                </div>
            </div>
                        <h5>Shivani Tiwari</h5>
                        <p>Head<br>Finance<br><a href="http://about.me/shivani" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>
        <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-gagandeep"></div>
                    <div class="ch-info-back">
                        <h4>Dedicated<br>Passionate<br>Creative<br>Vivacious Reader<br>Adventurer
                        </h4>
                    </div>  
                </div>
            </div>
                        <h5>Gagandeep Kaur</h5>
                        <p>Head<br>Content<br><a href="http://about.me/gagandeepkaur" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>
        
<li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-harshita"></div>
                    <div class="ch-info-back">
                        <h4>Keen Educator<br>Quick Learner<br>Creator<br>Innovator<br>Easily Motivated
                        </h4>
                    </div>  
                </div>
            </div>
                        <h5>Harshita Srivastava</h5>
                        <p>Head<br>Admin<br><a href="http://about.me/harshita_srivastava" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>
        
<!-- ==================================================COORDINATORS========================================================================================== 
     
        <br>   
        
       
        
        
        
        
       
        <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-sachin"></div>
                    <div class="ch-info-back">
                        <h4>Happy go lucky<br>Hardcore Metal fan<br>Avid bird watcher <br>Dependable<br>Social butterfly
                        </h4>
                    </div>  
                </div>
            </div>
                        <h5>Sachin Srinivas</h5>
                        <p>Coordinator<br>Content<br><a href="http://about.me/sachu_rocks001" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>
        <!-- <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-anish"></div>
                    <div class="ch-info-back">
                        <h4>Adorable<br>Not Innocent<br>Simply Honest<br>Budding Writer<br>Enthusiastic
                        </h4>
                    </div>  
                </div>
            </div>
                        <h5>Anish Singh</h5>
                        <p>Coordinator<br>Content<br><a href="http://about.me/singhanish" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>    
        
       
             
       
        <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-shivangi"></div>
                    <div class="ch-info-back">
                        <h4>Dedicated<br>Hard working<br>Bubbly<br>Cheerful<br>Amiable
                        </h4>
                    </div>  
                </div>
            </div>
                        <h5>Shivangi Gupta</h5>
                        <p>Coordinator<br>Research<br><a href="http://about.me/guptashivangi3012" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>
        <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-shreeya"></div>
                    <div class="ch-info-back">
                        <h4>Fun <br>love dancing <br>couch potato <br>hard working <br>helpful
                        </h4>
                    </div>  
                </div>
            </div>
                        <h5>Shreeya Bhutani</h5>
                        <p>Coordinator<br>Research<br><a href="http://about.me/shreeyabhutani" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>
        <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-smriti"></div>
                    <div class="ch-info-back">
                        <h4>Economics Enthusiast<br>Learner<br>Foodie<br>Optimist<br>Happy-go-lucky
                        </h4>
                    </div>  
                </div>
            </div>
                        <h5>Smriti Mehra</h5>
                        <p>Coordinator<br>Research<br><a href="http://about.me/mehrasmriti" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>              
        <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-amandeep"></div>
                    <div class="ch-info-back">
                        <h4>Keen learner<br>Keen explorer<br>Adventurous <br>pragmatic<br>meticulous

                        </h4>
                    </div>  
                </div>
            </div>
                        <h5>Amandeep Singh</h5>
                        <p>Coordinator<br>Development<br><a href="http://about.me/ads93" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>
        
        <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-namrata"></div>
                    <div class="ch-info-back">
                        <h4>Keen Learner<br>Tactful<br>Inexplicably Explicit<br>Undoubtedly Endearing<br>Food Freak
                        </h4>
                    </div>  
                </div>
            </div>
                        <h5>Namrata Gupta</h5>
                        <p>Coordinator<br>Development<br><a href="http://about.me/nams05" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>
 
        
       
        <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-pranit"></div>
                    <div class="ch-info-back">
                        <h4>Travel enthusiast<br> Entrepreneur<br> Ambitious<br> Gizmo freak<br> Art lover
                        </h4>
                    </div>  
                </div>
            </div>
                        <h5>Pranit Singhal</h5>
                        <p>Coordinator<br>Design<br><a href="http://about.me/pranitsinghal" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>
        <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-sakshi"></div>
                    <div class="ch-info-back">
                        <h4>Hardworking<br>Trustworthy<br>Ambitious<br>Passionate <br>Caring
                        </h4>
                    </div>  
                </div>
            </div>
                        <h5>Sakshi Mahajan</h5>
                        <p>Coordinator<br>Finance<br><a href="http://about.me/sakshi_mahajan" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>
                <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-aakriti"></div>
                    <div class="ch-info-back">
                        <h4>Sincere<br>Dedicated<br>Write Poems<br>Adventurous<br>Eager learner
                        </h4>
                    </div>  
                </div>
            </div>
                        <h5>Aakriti Saxena</h5>
        </li>
                <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-rishika"></div>
                    <div class="ch-info-back">
                        
                    </div>  
                </div>
            </div>
                        <h5>Rishika sharma</h5>
        </li>
                <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-tanvi"></div>
                    <div class="ch-info-back">
                        <h4>Hard working<br>Voracious reader<br>Adventurous<br>Sensitive
                        </h4>
                    </div>  
                </div>
            </div>
                        <h5>Tanvi Garg</h5>
        </li>
                <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-tripti"></div>
                    <div class="ch-info-back">
                        <h4>Very social<br>Voracious reader<br>Economics lover<br>Passionate about writing (hope to finish my book soon!)<br>Big foodie (love to eat food, not to experiment with it!)
                        </h4>
                    </div>  
                </div>
            </div>
                        <h5>Tripti Lal</h5>
        </li> -->
    </ul>
</div>
</div><br><br>

<!-- ====================================================PAST TEAM MEMBERS================================================================= 
-->
<div class="container-fluid" id="team">
    <div class="text-center well">
                <h2 class="section-head">Past Team Members</h2>
    </div>
<div class="container">
    <ul class="ch-grid">
       
             <?php 
        foreach ($results_team_past as $item) :

                     extract($item);
                // include 'templates/press.php';
                  include 'C:\xampp1\htdocs\mashproject\application\views\templates\tmpl_team.php';
            endforeach
            ?>


        <!-- <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-amanat"></div>
                    <div class="ch-info-back">
                        <h4>Traveler<br>Writer<br>Foodie<br>Wanderlust<br>Dreamer</h4>
                    </div>    
                </div>
            </div>
                        <h5>Amanat Khullar</h5>
                        <p><a href="http://about.me/khullar.amanat" target="_blank" class="btn btn-primary">Know more</a></p>
        </li> -->
<!--
<li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-misha"></div>
                    <div class="ch-info-back">
                        <h4>Reader<br>Transient<br>Sarcastic<br>Filmy<br>Anomaly(lol)</h4>
                    </div>    
                </div>
            </div>
                        <h5>Misha Dwivedi</h5>
                        <p> <a href="http://about.me/" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>

 <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-siddhant"></div>
                    <div class="ch-info-back">
                        <h4>Enthusiast<br>Committed<br>Technologist<br>& Design for Change</h4>
                    </div>    
                </div>
            </div>
                        <h5>Siddhant Gupta</h5>
                        <p> <a href="http://about.me/" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>



 <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-varsha"></div>
                    <div class="ch-info-back">
                        <h4>LSE aspirant<br>Budding writer<br>Believer<br>Learner<br>Thinker </h4>
                    </div>    
                </div>
            </div>
                        <h5>Varsha Sivaram</h5>                        
                        <p> <a href="http://about.me/varsha.sivaram" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>      
        
         <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-shubham"></div>
                    <div class="ch-info-back">
                        <h4>Ambitious<br>Procrastinator<br>Mysterious<br>Inquisitive<br>Versatile
                        </h4>
                    </div>  
                </div>
            </div>
                        <h5>Shubham Jain</h5>                        
                        <p> <a href="http://about.me/cyber.shubham" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>
         </li>
        <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-ishan"></div>
                    <div class="ch-info-back">
                        <h4>Audiophile<br>Art enthusiast <br>Movie Fanatic <br>Strums guitar <br>Total Procrastinator
                        </h4>
                    </div>  
                </div>
            </div>
                        <h5>Ishan Sain</h5>
                         <p> <a href="http://about.me/ishansain" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>
        <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-faiza"></div>
                    <div class="ch-info-back">
                        <h4>Cinephile<br>ardent reader<br>food addict<br>headstrong<br>righteous
                        </h4>
                    </div>  
                </div>
            </div>
                        <h5>Faiza Hasan</h5>
                        <p><a href="http://about.me/faizahasan" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>

        <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-isha"></div>
                    <div class="ch-info-back">
                        <h4>Reading-freak<br>keen explorer<br>dynamic<br>wanderer<br>great talker
                        </h4>
                    </div>  
                </div>
            </div>
                        <h5>Isha Arora</h5>
                        <p><a href="http://about.me/ishaarora" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>
         <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-shradha"></div>
                    <div class="ch-info-back">
                        <h4>artist<br>nerd<br>exuberant<br>bibliophile<br>conscientious
                        </h4>
                    </div>  
                </div>
            </div>
                        <h5>Shradha Jain</h5>
                        <p><a href="http://about.me/shradha_jain" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>
    <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-anish"></div>
                    <div class="ch-info-back">
                        <h4>Adorable <br>Not Innocent<br> Simply Honest
                        </h4>
                    </div>  
                </div>
            </div>
                        <h5>Anish Singh</h5>
                        <p><a href="http://about.me/singhanish" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>

    <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-divya-nakra"></div>
                    <div class="ch-info-back">
                        <h4>Hardworking<br>Sincere<br>Inquisitive<br>Amiable<br>Vivacious
                        </h4>
                    </div>  
                </div>
            </div>
                        <h5>Divya Nakra</h5>
                        <p><a href="https://about.me/divyanakra100" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>
    <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-divya-verma"></div>
                    <div class="ch-info-back">
                        <h4>Adventurous<br>Achiever<br>Unique<br>Wanderer<br>Believer
                    </div>  
                </div>
            </div>
                        <h5>Divya Verma</h5>
                        <p><a href="https://about.me/divyaverma23" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>
    <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-hemant"></div>
                    <div class="ch-info-back">
                        <h4>Creative<br>Techno Lingual<br>Fast Learner<br>Equanimous<br>Jocular
                        </h4>
                    </div>  
                </div>
            </div>
                        <h5>Hemant Kumar</h5>
                        <p><a href="http://about.me/hemant6488" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>
    <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-ishani"></div>
                    <div class="ch-info-back">
                        <h4>Adventurous<br>Bibliophile<br>Generous<br>Ambitious<br>Loves talking
                        </h4>
                    </div>  
                </div>
            </div>
                        <h5>Ishani Dutta</h5>
                        <p><a href="http://about.me/ishani_dutta" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>
    <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-jyoti"></div>
                    <div class="ch-info-back">
                        <h4>Technologically challenged<br>Ardent Cyclist<br> Free flowing in life<br>Compassionate<br>Ambitious<br>Happy Always
                        </h4>
                    </div>  
                </div>
            </div>
                        <h5>Jyoti Sandhu</h5>
                        <p><a href="https://about.me/jyoti.sandhu" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>
    <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-maalvika"></div>
                    <div class="ch-info-back">
                        <h4>Designer<br>Creative<br>Multiskilled<br>Observant<br>Dreamer
                        </h4>
                    </div>  
                </div>
            </div>
                        <h5>Maalvika Verma</h5>
                        <p><a href="http://about.me/maalvika_verma" target="_blank" class="btn btn-primary">Know More</a></p>
        </li>
    <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-neha"></div>
                    <div class="ch-info-back">
                        <h4>Explorer<br>Hard-worker<br>Aesthete<br>Solo-traveller<br>Directioner
                        </h4>
                    </div>  
                </div>
            </div>
                        <h5>Neha Rani</h5>
                        <p><a href="http://about.me/rneha725" target="_blank" class="btn btn-primary">Know more</a></p>
        </li>
    <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-sonal"></div>
                    <div class="ch-info-back">
                    </div>  
                </div>
            </div>
                        <h5>Sonal Chanana</h5>
        </li>
        <li>
            <div class="ch-item">             
                <div class="ch-info">
                    <div class="ch-info-front ch-ankush"></div>
                    <div class="ch-info-back">
                        <h4>Technologist <br>Entrepreneur <br>Passionate <br>Innovator <br>Keen Traveller
                        </h4>
                    </div>  
                </div>
            </div>
                        <h5>Ankush Pandey</h5>
        </li> 
        -->
     </ul>
    </div>
</div><br>

