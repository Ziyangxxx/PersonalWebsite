<?php 
/**
 * Index page
 * @author Carlos Xu <asdiop963@hotmail.com>
 * @date_interval_create_form_date_string() 2020-8-25
 */
require __DIR__ . '/includes/header.inc.php';
require __DIR__ . '/includes/nav.inc.php'; 
?>

        <div class="section1"><!-- start of 1st section -->
          <img src="images/logo.png" alt="logo"/>
          
          <p id="software">
            <span>Photoshop</span>
            <span>AutoCAD</span>
            <span>SketchUp</span>
            <span>Illustrator</span>
            <span>Lumion</span>
            <span>Office</span>
          </p>
          
          <p id="percent">
            <span>88%</span>
            <span>74%</span>
            <span>73%</span>
            <span>68%</span>
            <span>54%</span>
            <span>78%</span>
          </p>
          
          <div id="bars">
            <div id="photoshop"></div>
            <div id="photoshop_bg"></div>

            <div id="autocad"></div>
            <div id="autocad_bg"></div>

            <div id="sketchup"></div>
            <div id="sketchup_bg"></div>

            <div id="illustrator"></div>
            <div id="illustrator_bg"></div>

            <div id="lumion"></div>
            <div id="lumion_bg"></div>

            <div id="office"></div>
            <div id="office_bg"></div>
          </div>
        </div><!-- end of 1st section -->
        
        <div class="section2"><!-- start of the 2nd section -->
          <div id="project1">
            <img src="images/project1.jpg" alt="project1" />
          </div>
          
          <div id="project2">
            <img src="images/project2.jpg" alt="project2" />
          </div>
          
          <div id="project3">
            <img src="images/project3.jpg" alt="project3" />
          </div>
          
        </div>
        
        <div class="section3"><!-- start of the 2nd section -->
          <img id="me" src="images/me.jpg" alt="author" />
          
          <div class="dot1"></div>
          
          <p class="readme">
            <span>READ</span>
            <br />
            <span class="me">ME</span>
          </p>
          
          <div class="dot2"></div>
          
          <p class="about">
            If you are actually reading this, it means 
            you are my instructor or you are very interested in me. 
            If you are interested in me, contact links are down below. 
            If you are my instructor, I hope you like what you have 
            seen and what you are about to see. I know I am a terrible 
            writer, so please go easy on me with my grammar. Last but 
            not least, it was an honor to be your student; I have 
            learned a lot!
          </p>
        </div><!-- end of the 3rd section -->
        
        <div class="section4">
          <a href="#" class="email">
            <img src="images/email.png" alt="email" />
          </a>

          <a href="#" class="ins">
            <img src="images/ins.png" alt="instagram" />
          </a>

          <a href="#" class="wechat">
            <img src="images/wechat.png" alt="wechat" />
          </a>
        </div>

        <?php require __DIR__ . '/includes/footer.inc.php'; ?>
