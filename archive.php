<?php get_header(); ?>
<div id="content">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
		
<div class="post" id="post-<?php the_ID(); ?>">

<div class="title">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="点击查看 <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>

<div class="postmeta">
	<span class="author">发布者：<?php the_author(); ?> </span> <span class="clock">  <?php the_time('Y-m-d'); ?></span> <span class="comm"><?php comments_popup_link('占个沙发', '1条评论', '%条评论'); ?></span>
</div>

<div class="entry">
	<img class="postimg" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php get_image_url(); ?>&amp;h=150&amp;w=200&amp;zc=1" alt="" />
	<?php wpe_excerpt('wpe_excerptlength_archive', ''); ?>
	<div class="clear"></div>
</div>

<div class="singleinfo">
<span class="category">分类: <?php the_category(', '); ?> </span>
</div>

</div>
<?php endwhile; ?>
<?php getpagenavi(); ?>
<?php else : ?>
	<h1 class="title">Not Found</h1>
	<p>Sorry, but you are looking for something that isn't here.</p>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>