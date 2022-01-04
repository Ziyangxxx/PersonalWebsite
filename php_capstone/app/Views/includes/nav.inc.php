<div id="wrapper2">
      
        <nav><!-- start of nav menu --> 
          
          <a href="#" id="menubutton">
            <span id="top"></span>
            <span id="middle"></span>
            <span id="bottom"></span>
            <div id="topcube">
              <span id="topcube1"></span>
              <span id="topcube2"></span>
              <span id="topcube3"></span>
              <span id="topcube4"></span>
              <span id="topcube5"></span>
              <span id="topcube6"></span>
              <span id="topcube7"></span>
              <span id="topcube8"></span>
              <span id="topcube9"></span>
              <span id="topcube10"></span>
            </div>
            <div id="bottomcube">
              <span id="bottomcube1"></span>
              <span id="bottomcube2"></span>
              <span id="bottomcube3"></span>
              <span id="bottomcube4"></span>
              <span id="bottomcube5"></span>
              <span id="bottomcube6"></span>
              <span id="bottomcube7"></span>
              <span id="bottomcube8"></span>
              <span id="bottomcube9"></span>
              <span id="bottomcube10"></span>
            </div>
          </a>
          
          <div id="border1"></div>
          <div id="border2"></div>
          <div id="border3"></div>
          <div id="border4"></div>

          <?php if($title == 'Carlos\'s Page') : ?>

            <ul>
                <li id="nav1"><a href="index">HOME</a></li>
                <li id="nav2"><a href="intro">INTRODUCTION</a></li>
                <li id="nav3"><a href="port">PORTFOLIO</a></li>
                <li id="nav4"><a href="gallery">GALLERY</a></li>
                <?php if(empty($_SESSION['user_id'])) :?>
                  <li id="nav5"><a href="sign_in">SIGN IN</a></li>
                <?php else :?>
                  <li id="nav5"><a href="success">PROFILE</a></li>
                <?php endif ;?>
            </ul>

          <?php else : ?>
            <ul>
                <li id="nav1"><a href="../index">HOME</a></li>
                <li id="nav2"><a href="intro">INTRODUCTION</a></li>
                <li id="nav3"><a href="port">PORTFOLIO</a></li>
                <li id="nav4"><a href="gallery">GALLERY</a></li>
                <?php if(empty($_SESSION['user_id'])) :?>
                  <li id="nav5"><a href="sign_in">SIGN IN</a></li>
                <?php else :?>
                  <li id="nav5"><a href="success">PROFILE</a></li>
                <?php endif ;?>
            </ul>
          <?php endif ;?>

        </nav><!-- end of nav menu -->
        <div class="line1"></div>