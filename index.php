<?php get_header(); ?>
<?php
if(get_option('uree_home') == "blog") { ?>	
<?php include (TEMPLATEPATH . '/lib/blog-home.php'); ?>
<?php } else { ?>

<div id="home-content" class="clearfix">
<ul id="shelf">

	<?php
		$home_count = get_option('uree_home_count');
		$temp = $wp_query;
		$wp_query= null;
		$wp_query = new WP_Query();
		$wp_query->query('posts_per_page='.$home_count.'&post_type=book'.'&paged='.$paged);
	?>
	<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>	
	<li class="box" id="post-<?php the_ID(); ?>">
		<div class="postim" id="post-<?php the_ID(); ?>">
			<div class="btitle">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			</div>
			<span class="inwriter"><?php $writer=get_post_meta($post->ID, 'fabthemes_author', true); echo $writer; ?></span>
			<a href="<?php the_permalink() ?>"><img class="bookcover" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php get_image_url(); ?>&amp;h=190&amp;w=150&amp;zc=1" alt=""/></a>
		</div>
	</li>
	
	<?php endwhile; ?>
	<div class="clear"></div>
	<?php getpagenavi(); ?>
	<?php $wp_query = null; $wp_query = $temp;?>
	
</ul>
</div>
<?php get_footer(); ?>
<?php } ?>