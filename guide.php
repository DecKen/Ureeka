<?php
add_action('admin_menu', 't_guide');

function t_guide() {
	add_theme_page('How to use the theme', 'Theme user guide', 8, 'user_guide', 't_guide_options');
	
}

function t_guide_options() {
?>
<div class="wrap">

<h2>Theme user guide</h2>

<div class="opwrap">

<div id="wrapr" class="postbox-container" style="width: 70%; ">



<div class="postbox guidebox">

  <?php echo file_get_contents(dirname(__FILE__) . '/FT/license-html.php') ?>
  
  </div>
  
  
<div class="postbox guidebox">  <!-- Thumbnails --------------------->
  <h3>How to add featured thumbnail to posts?</h3>
  
	<div class="inside">  
	<p>Check the video below to see how to add featured images to posts. Theme uses timthumb script to generate thumbnail images. Make sure your host has PHP5 and GD library enabled. You will also need to set the CHMOD value for the "cache" folder <strong>within the theme</strong> to "777" or "755" .</p>
	<p>If your site is on a free hosting network the timthumb script will sometimes be disabled.</p>
	<div class="midcenter"><iframe src="http://www.screenr.com/embed/0IR" width="650" height="396" frameborder="0"></iframe></div>
	</div>
</div>	 						<!-- Thumbnails End ----------------->
	
	

	
<div class="postbox guidebox">  
	<h3> How to create Book review post </h3>

	<div class="inside">	
	<p>The following video shows a walkthrough of how to create a book review post</p>
	<div class="midcenter"><iframe src="http://www.screenr.com/embed/1qVs" width="650" height="396" frameborder="0"></iframe></div>
	</div>
	
</div>






</div>

</div>

<?php }; ?>
