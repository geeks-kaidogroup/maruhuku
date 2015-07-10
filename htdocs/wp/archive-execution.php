<?php
/*
Template Name: execution
*/
get_header(); ?>

	<section class="l-contents">
		<section class="l-main execution">
			<nav class="breadlist">
				<p><a href="<?php echo home_url(); ?>">トップページ</a> &gt; ご近所の施工宅</p>
			</nav>
			<h2 class="headline-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/execution/execution_title.png" width="780" height="90" alt="ご近所の施工宅"></h2>
			
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/execution/execution_read.png" width="780" height="118" alt="execution-read" />


			<article class="l-works">
	<div class="wp-pagenavi cf">
		<?php if (function_exists("pagination")) {    pagination($additional_loop->max_num_pages);} ?>
	</div>	
				<div class="works-manth">
					<p>月別の施工例</p>

				<ul class="float-list archive-list">
				  <?php wp_get_archives('type=monthly&post_type=execution'); ?>
				</ul>

				</div>

				<h3 class="headline-device">テキスト</h3>
				<ul class="works-list float-list">
				
				
<?php if(have_posts()): while (have_posts()): the_post(); ?>
				<li><a href="<?php the_permalink() ?>">
					<p class="works-head"><?php echo mb_strimwidth(the_title('','', false ), 0, 30, '...'); ?></p>
					<div class="works-photo"><?php echo wp_get_attachment_image(get_post_meta($post->ID,"photo1",true),array(240,153)); ?></div>
					
					<div class="works-detail">
						<p class="date"><?php echo mb_strimwidth(get_post_meta($post->ID,'address',true), 0, 32, '...'); ?></p>
						<p class="work"><?php echo mb_strimwidth(get_post_meta($post->ID,'work',true), 0, 32, '...'); ?></p>
					</div>
				</a></li>
<?php endwhile; ?>
<?php endif; ?>
				</ul>

	<div class="wp-pagenavi cf">
		<?php if (function_exists("pagination")) {    pagination($additional_loop->max_num_pages);} ?>
	</div>
			</article>	<!--/article-->

<?php include_once('mainfooter.php'); ?>
		</section>
<?php include_once('sidebar.php'); ?>
	</section><!-- /.l-contents -->

<?php include_once('footer.php'); ?>