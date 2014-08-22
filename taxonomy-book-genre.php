<?php get_header(); ?>
<div id="home-content" class="clearfix">
<ul id="shelf">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
		
	<li class="box" id="post-<?php the_ID(); ?>">
	
	<div class="postim" id="post-<?php the_ID(); ?>">
			<div class="btitle">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="点击查看 <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			</div>
			<span class="inwriter"><?php $writer=get_post_meta($post->ID, 'fabthemes_author', true); echo $writer; ?></span>
			<a href="<?php the_permalink() ?>"><img class="bookcover" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php get_image_url(); ?>&amp;h=190&amp;w=150&amp;zc=1" alt=""/></a>
		</div>

	</li>
<?php endwhile; ?>
	<div class="clear"></div>
<?php getpagenavi(); ?>
<?php else : ?>
	<h1 class="title">Not Found</h1>
	<p>Sorry, but you are looking for something that isn't here.</p>
<?php endif; ?>
</div>
<?php get_footer(); ?>