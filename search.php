<?php get_header(); ?>

<div class="topnav">
	<?php
		$mySearch =& new WP_Query("s=$s & showposts=-1");
		$num = $mySearch->post_count;
		echo '找到'.$num.'条结果';
	?> 
	（用时： <?php  get_num_queries(); ?> <?php timer_stop(1); ?> 秒）
	关键词：<?php the_search_query(); ?>
</div>

<div id="content" >
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
		
<div class="post" id="post-<?php the_ID(); ?>">
<div class="title">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="点击查看 <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>
<div class="entry">
<?php wpe_excerpt('wpe_excerptlength_index', ''); ?>
<div class="clear"></div>
</div>


</div>
<?php endwhile; ?>

<?php getpagenavi(); ?>

<?php else : ?>

<div class="post">
<div class="title">
		<h2>没有搜索到“<?php the_search_query();?>”的相关内容</h2>
</div>


<div class="entry">
<p>建议:</p>
<ul>
   <li>  请检查输入字词有无错误。</li>
   <li>  请尝试其他的查询词</li>
   <li>  请改用较常见的字词。</li>
   <li>  请减少查询字词的数量。</li>
</ul>
</div></div>


<?php endif; ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>