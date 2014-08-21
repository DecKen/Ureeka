<?php
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('请不要直接载入评论，谢谢！');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->
<div id="commentsbox">
<?php if ( have_comments() ) : ?>
	<h3 id="comments">目前为止<?php comments_number('', '已有1条评论', '已有%条评论' );?>。</h3>



	<ol class="commentlist">
	<?php wp_list_comments(); ?>
	</ol>

	<div class="comment-nav clearfix">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->
		<h3 id="comments">目前为止<?php comments_number('还没有评论，留言占个沙发吧', '', '' );?>。</h3>
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">评论功能已经被关闭。</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ( comments_open() ) : ?>
<div id="comment-form">
<div id="respond">

<h3><?php comment_form_title( '人过留名，雁过留声', 'Leave a Reply to %s' ); ?></h3>


	<small><?php cancel_comment_reply_link(); ?></small>


<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( is_user_logged_in() ) : ?>

<p>登录的账号<a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a><a href="<?php echo wp_logout_url(get_permalink()); ?>" title="退出该账号"> &nbsp &nbsp退出登录 &raquo;</a></p>
<?php else : ?>
<label for="author">昵称 <small><?php if ($req) echo "(必填项)"; ?></small></label>
<input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />

<label for="email">邮箱 <small><?php if ($req) echo "(必填项)"; ?></small></label>
<input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />

<label for="url">个人主页</label>
<input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />


<?php endif; ?>

<textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea><br />

<input name="submit" type="submit" id="commentSubmit" tabindex="5" value="提交" />
<?php comment_id_fields(); ?>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>
</div>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
</div>