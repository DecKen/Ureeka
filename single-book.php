<?php get_header(); ?>

<div id="content" >

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="post clearfix" id="post-<?php the_ID(); ?>">

<div class="title">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>

<div class="revbox clearfix">
<div class="revleft">
<span><strong>Author:</strong> <?php $writer=get_post_meta($post->ID, 'fabthemes_author', true); echo $writer; ?> </span>
<span><strong>Genre:</strong> <?php echo get_the_term_list( $post->ID, 'book-genre', '', ', ', '' ); ?></span>
</div>
<div class="revright">
<span class="ratehead">Rating</span>
<span class="ratebg"> <span class="rstar rate-<?php $rating=get_post_meta($post->ID, 'fabthemes_slider', true); echo $rating; ?>"></span></span>
</div>
</div>

<div class="entry">
<a class="bookshot" href="<?php get_image_url(); ?>"><img class="bookimg" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php get_image_url(); ?>&amp;w=250&amp;zc=1" alt=""/></a>
	<?php the_content('Read the rest of this entry &raquo;'); ?>
	<div class="clear"></div>
	<?php wp_link_pages(array('before' => '<p><strong>Pages: </strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
</div>

<div class="postmeta">
		<span class="author">Posted by <?php the_author(); ?> </span> 
		<span class="clock"> Posted on <?php the_time('M - j - Y'); ?> </span>
		<span class="comm"><?php comments_popup_link('0 Comment', '1 Comment', '% Comments'); ?></span>
</div>

</div>

<?php comments_template(); ?>

<?php endwhile; else: ?>

		<h1 class="title">Not Found</h1>
		<p>I'm Sorry,  you are looking for something that is not here. Try a different search.</p>

<?php endif; ?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>