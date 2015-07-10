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
<?php 
$paged = get_query_var('paged');
$loop = new WP_Query( array( 'post_type' => 'execution', 'posts_per_page' => -1,	'paged'=>$paged ) );
if(function_exists('wp_pagenavi')) wp_pagenavi(array('query' => $loop));
?>

				<div class="works-manth">
					<p>月別の施工例</p>

				<ul class="float-list">
				  <?php wp_get_archives('type=monthly&post_type=execution&limit=12'); ?>
				</ul>

				</div>

				<h3 class="headline-device">テキスト</h3>
				<ul class="works-list float-list">
<?php
while ( $loop->have_posts() ) : $loop->the_post();
 ?>
					<li><a href="<?php the_permalink() ?>">
						<p class="works-head"><?php the_title(); ?></p>
						<div class="works-photo"><?php echo wp_get_attachment_image(get_post_meta($post->ID,"photo1",true),array(240,153)); ?></div>
						<div class="works-detail">
							<p class="date"><?php echo get_post_meta($post->ID,'period',true); ?></p>
							<p class="work"><?php echo get_post_meta($post->ID,'work',true); ?></p>
						</div>
						</a>
					</li>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
				</ul>

<?php if(function_exists('wp_pagenavi')) wp_pagenavi(array('query' => $loop)); ?>
			</article>	<!--/article-->

<?php include_once('mainfooter.php'); ?>
		</section>
<?php include_once('sidebar.php'); ?>
	</section><!-- /.l-contents -->

<?php include_once('footer.php'); ?>