<?php
get_header(); ?>

<section class="l-contents">
	<section class="l-main blog">
		<nav class="breadlist">
			<p><a href="<?php echo home_url(); ?>">トップページ</a> &gt; 現場ブログ</p>
		</nav>
		<article class="l-blog">
			<h2 class="headline-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog_title.png" width="780" height="90" alt="現場ブログ"></h2>
			<div class="wp-pagenavi cf">
				<?php if (function_exists("pagination")) {    pagination($additional_loop->max_num_pages);} ?>
			</div>
			<?php if(have_posts()): while (have_posts()): the_post(); ?>
			<section class="entry">
				<h1 class="entry-title">
					<?php the_title(); ?>
				</h1>
				<div class="entry-data">
					<div class="entry-pic"> <?php echo wp_get_attachment_image(get_post_meta($post->ID,"photo",true),array(140,105)); ?> </div>
					<div class="entry-text">
						<p class="entry-date">
							<?php the_time('Y年m月d日'); ?>
						</p>
						<p> <?php echo mb_substr(get_the_excerpt(), 0, 160); ?> </p>
						<p class="more"><a href="<?php the_permalink() ?>">▶ 続きを読む</a></p>
					</div>
				</div>
			</section>
			<?php endwhile; ?>
			<?php endif; ?>
			<div class="wp-pagenavi cf">
				<?php if (function_exists("pagination")) {    pagination($additional_loop->max_num_pages);} ?>
			</div>
		</article>
		<!--/article-->
		
		<?php include_once('mainfooter.php'); ?>
	</section>
	<?php include_once('sidebar-blog.php'); ?>
</section>
<!-- /.l-contents -->

<?php include_once('footer.php'); ?>