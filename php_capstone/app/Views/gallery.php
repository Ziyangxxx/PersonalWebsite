<?php
/**
 * Gallery page
 * @author Carlos Xu <asdiop963@hotmail.com>
 * @date_interval_create_form_date_string() 2020-8-25
 */
require __DIR__ . '/includes/header.inc.php';
require __DIR__ . '/includes/nav.inc.php'; 

?>
      <div class="sidenav">
        <h2>Category List</h2>

            <ul>
              <?php foreach($categories as $category) :?>
                <li><a href="gallery?cat_id=<?=e($category['id']);?>"><?=e($category['name']);?></a></li>
              <?php endforeach ;?>
            </ul>

        <div class="search">
	      	<form action="/gallery" method="get" autocomplete="off" novalidate>
            <input id="search" 
                   type="text" 
                   name="search" 
                   maxlength="255" 
                   placeholder="Search"/>&nbsp;
		      	<input type="submit" value="search" />
		        	<div>
		        		<ul id="live_search"></ul>
	        		</div>
	      	</form>
        </div>

      </div>
      <div class="section1"><!-- start of section1 -->
      <?php if(!empty($_GET)):?>
        <h2 class="stitle">
          <?=$categories[$_GET['cat_id']-1]['name']?> > <?=count($projects)?> Results Found 
        </h2>
      <?php endif ;?>
          <?php foreach($projects as $value) :?>
            
            <div class="info">
              <img src="/images/projects/<?=e($value['image'])?>" alt="<?=$value['name']?>"/>
              <p><span class="name">NAME: </span><?=e($value['name'])?></p>
              <p><span class="year">CREATED AT: </span><?=e($value['created_year'])?></p>
              <p><span class="tools">TOOLS: </span><?=e($value['tools'])?></p>
              <p><a href="detail?id=<?=e($value['id']);?>">SEE MORE</a></p>
              <div class="line3"></div>
            </div>

          <?php endforeach ;?>
          <?php if(count($projects) === 0) :?>

            <p class="nosearch">No Result Found.&nbsp;(-_-)</p>

          <?php endif;?>
      </div><!-- end of section1 -->
      
      <div class="line2"></div>
      
      <div class="section4"><!-- start of section4 -->
          <a href="#" class="email">
            <img src="../images/email.png" alt="email" />
          </a>

          <a href="#" class="ins">
            <img src="../images/ins.png" alt="instagram" />
          </a>

          <a href="#" class="wechat">
            <img src="../images/wechat.png" alt="wechat" />
          </a>
        </div><!-- end of section4 -->
        
        <?php require __DIR__ . '/includes/footer.inc.php'; ?>