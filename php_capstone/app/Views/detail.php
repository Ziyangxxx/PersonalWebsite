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
    <img src="/images/projects/<?=e($detail['image'])?>" alt="<?=$detail['name']?>"/>
    <h2><?=e($detail['name']);?></h2>
    <ul>
        <li><strong>Name:&nbsp;&nbsp;</strong><?=e($detail['name']);?></li>
        <li><strong>Categry:&nbsp;&nbsp;</strong><?=e($detail['cat_name']);?></li>
        <li><strong>Tools:&nbsp;&nbsp;</strong><?=e($detail['tools']);?></li>
        <li><strong>Created Location:&nbsp;&nbsp;</strong><?=e($detail['created_location']);?></li>
        <li><strong>Created Year:&nbsp;&nbsp;</strong><?=e($detail['created_year']);?></li>
        <li><strong>Status:&nbsp;&nbsp;</strong><?=e($detail['status']);?></li>
        <li><strong>Description:&nbsp;&nbsp;</strong><?=e($detail['discription']);?></li>
    </ul>
    <?php if(empty($_SESSION['user_id'])) :?>
        <h3>Login to leave a Comment</h3>
        <p>Please 
            <a href="/contact">Register</a>
            or 
            <a href="sign_in">Login</a>
            to leave a comment
        </p>
    <?php else :?>
        <form action="/detail?id=<?=e($detail['id'])?>"
              method="post" 
              autocomplete="off" 
              novalidate
              placeholder="Please leave some comments">
            <h3>Comments</h3>
            <textarea class="comments" name="comments" id="comments" cols="100" rows="5"></textarea><br />
            <?=$errors['comments'][0] ?? '' ?>
            <input type="hidden" name = "project_id" value = "<?=$detail['id']?>">
            <button type="submit">submit</button>
        </form>
    <?php endif ;?>
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