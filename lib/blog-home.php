<div id="content">

<?php
$temp = $wp_query;
$wp_query= null;
$wp_query = new WP_Query();
$wp_query->query('paged='.$paged);
?>
<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>	

<div class="post" id="post-<?php the_ID(); ?>">

<div class="title">
	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="点击查看 <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>
<div class="postmeta">
	<span class="author">发布者： <?php the_author(); ?> </span> <span class="clock">  <?php the_time('Y-m-d'); ?></span> <span class="comm"><?php comments_popup_link('占个沙发', '1条评论', '%条评论'); ?></span>
</div>

<div class="entry">

<?php
if ( has_post_thumbnail() ) { ?>
	<a href="<?php the_permalink() ?>"><img class="postimg" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php get_image_url(); ?>&amp;h=150&amp;w=200&amp;zc=1" alt=""/></a>
<?php } else { ?>
	<a href="<?php the_permalink() ?>"><img class="postimg" src="<?php bloginfo('template_directory'); ?>/images/dummy.png" alt="" /></a>
<?php } ?>
<?php wpe_excerpt('wpe_excerptlength_index', ''); ?>
<div class="clear"></div>
</div>
<div class="singleinfo">
<span class="category">分类: <?php the_category(', '); ?> </span>
</div>
</div>

<?php endwhile; ?>

<div class="clear"></div>

<?php getpagenavi(); ?>

<?php $wp_query = null; $wp_query = $temp;?>
     
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
