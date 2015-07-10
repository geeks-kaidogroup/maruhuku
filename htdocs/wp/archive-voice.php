<?php
/*
Template Name: voice
*/
get_header(); ?>

<section class="l-contents">
	<section class="l-main voice">
		<nav class="breadlist">
			<p><a href="<?php echo home_url(); ?>">トップページ</a> &gt; お客様が語る丸福</p>
		</nav>
		<h2 class="headline-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice/voice_title.png" width="780" height="90" alt="お客様が語る丸福"></h2>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice/voice_text.png" width="780" height="57" alt="" class="read" />
		<article class="l-voice" width="240" height="153"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice/voice_catchcopy.png" width="780" height="35" alt="" class="catchcopy" />
			<div class="wp-pagenavi cf">
				<?php if (function_exists("pagination")) {    pagination($additional_loop->max_num_pages);} ?>
			</div>
			<?php if(have_posts()): while (have_posts()): the_post(); ?>
			<section class="h-customer-voice">
				<h2><a href="<?php the_permalink() ?>"><?php echo get_post_meta($post->ID,'name-customer',true); ?></a></h2>
			</section>
			<section class="cf voicearea">
				<div class="voice-left"> <?php echo wp_get_attachment_image(get_post_meta($post->ID,"image-worker",true),array(240,175)); ?>
					<p class="worker"><?php echo get_post_meta($post->ID,'name-worker',true); ?></p>
				</div>
				<div class="voice-right">
					<p class="customer-voice-title">
						<?php the_title(); ?>
					</p>
					<p class="customer-voice-text"><?php echo nl2br(get_post_meta($post->ID,'voice-text',true)); ?></p>
				</div>
				<h3 class="customer-voice-h3">
					<?php the_title(); ?>
				</h3>
				<div class="sekou-under-box cf">
					<div class="sekou-before-left"> <?php echo wp_get_attachment_image(get_post_meta($post->ID,"image-before",true),array(240,153)); ?>
						<div class="sekou-before-left-text">
							<p class="description"><?php echo nl2br(get_post_meta($post->ID,'description',true)); ?></p>
							<img class="sekoumae-maru" src="<?php echo get_template_directory_uri(); ?>/assets/img/voice/voice_before.png" width="78" height="78" alt="施工前"> <img class="sekouato-maru" src="<?php echo get_template_directory_uri(); ?>/assets/img/voice/voice_after.png" width="113" height="113" alt="施工後"> </div>
					</div>
					<div class="sekou-before-center"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice/voice_next.png" width="106" height="53" alt="矢印"> </div>
					<div class="sekou-before-right"> <?php echo wp_get_attachment_image(get_post_meta($post->ID,"image-after",true),array(360,240)); ?> </div>
				</div>
			</section>
			<?php endwhile; ?>
			<?php endif; ?>
			<div class="wp-pagenavi cf">
				<?php if (function_exists("pagination")) {    pagination($additional_loop->max_num_pages);} ?>
			</div>
			<div class="letter"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice/voice_letter_pic.png" alt="" width="211" height="150" />
				<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
			</div>
		</article>
		<!--/article-->
		
		<?php include_once('mainfooter.php'); ?>
	</section>
	<?php include_once('sidebar.php'); ?>
</section>
<!-- /.l-contents -->

<?php include_once('footer.php'); ?>