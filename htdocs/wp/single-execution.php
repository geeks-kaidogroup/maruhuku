<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
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
<?php 
$paged = get_query_var('paged');
$loop = new WP_Query( array( 'post_type' => 'execution','p' => $post->ID, 'posts_per_page' => 1,	'paged'=>$paged ) );
while ( $loop->have_posts() ) : $loop->the_post();
 ?>
				<h1 class="single-headline"><?php the_title(); ?></h1>
				<div class="works-summary">
					<div class="box">
						<div class="box-left">
							<?php echo wp_get_attachment_image(get_post_meta($post->ID,"photo1",true),array(426,286)); ?>
						</div>
						<div class="box-right">
							<h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img/execution/execution_summary.png" alt="リフォーム概要" width="263" height="34" /></h2>
							<h3 class="headline-small"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/execution/execution_summary_headline_01.png" alt="" width="263" height="16" /></h3>
							<p><?php echo get_post_meta($post->ID,'address',true); ?></p>
							<h3 class="headline-small"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/execution/execution_summary_headline_01.png" alt="" width="263" height="16" /></h3>
							<p><?php echo get_post_meta($post->ID,'work',true); ?></p>
							<h3 class="headline-small"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/execution/execution_summary_headline_01.png" alt="" width="263" height="16" /></h3>
							<p><?php echo get_post_meta($post->ID,'period',true); ?></p>
						</div>
					</div>
					<h3 class="headline-small"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/execution/execution_summary_headline_01.png" alt="" width="263" height="16" /></h3>
					<p><?php echo get_post_meta($post->ID,'paint',true); ?></p>
					<h3 class="headline-small"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/execution/execution_summary_headline_01.png" alt="" width="263" height="16" /></h3>
					<p><?php echo get_post_meta($post->ID,'reason',true); ?></p>
					<h3 class="headline-small"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/execution/execution_summary_headline_01.png" alt="" width="263" height="16" /></h3>
					<p><?php echo get_post_meta($post->ID,'choice',true); ?></p>
					<h3 class="headline-small"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/execution/execution_summary_headline_01.png" alt="" width="263" height="16" /></h3>
					<p><?php echo get_post_meta($post->ID,'offer',true); ?></p>
					</div>
				</div>
				
				<h2 class="headline-device">テキスト</h2>
				
				<?php echo wp_get_attachment_image(get_post_meta($post->ID,"photo2",true),array(675,450)); ?>
				
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/execution/execution_arrow.png" alt="矢印" width="780" height="45" class="arrow" />
				
				<h2 class="headline-device">テキスト</h2>
				<div class="box">
					<div class="box-left">
						<?php echo wp_get_attachment_image(get_post_meta($post->ID,"photo3",true),array(345,260)); ?>
					</div>
					<div class="box-right">
						<p><?php echo nl2br(get_post_meta($post->ID,'description',true)); ?></p>
					</div>
				</div>
				
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/execution/execution_arrow.png" alt="矢印" width="780" height="45" class="arrow" />
				
				<h2 class="headline-device">テキスト</h2>
				<?php echo wp_get_attachment_image(get_post_meta($post->ID,"photo4",true),array(675,450)); ?>
				
				<h2 class="headline-device">テキスト</h2>
				<p><?php echo nl2br(get_post_meta($post->ID,'comment',true)); ?></p>
				
				<a href="<?php echo home_url('/execution/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/execution/execution_more.png" alt="ご近所の施工宅はこちら" width="400" height="60" class="execution-more"/></a>
				<div class="pager"><p><?php previous_post_link('%link','＜＜前の記事'); ?><a href="<?php echo home_url('/voice/'); ?>" class="centerlink">一覧へ戻る</a><?php next_post_link('%link','次の記事＞＞'); ?></p></div>


<?php endwhile; ?>
<?php wp_reset_query(); ?>
			</article>	<!--/article-->
			

<?php include_once('mainfooter.php'); ?>
		</section>
<?php include_once('sidebar.php'); ?>
	</section><!-- /.l-contents -->

<?php include_once('footer.php'); ?>