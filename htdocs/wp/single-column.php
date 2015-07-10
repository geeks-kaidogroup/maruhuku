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
		<section class="l-main column">
			<nav class="breadlist">
				<p><a href="<?php echo home_url(); ?>">トップページ</a> &gt; 専門家コラム</p>
			</nav>
			
			<article class="l-column">
				<h2 class="headline-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/column/column_title.png" width="780" height="90" alt="専門家コラム"></h2>
<?php 
$paged = get_query_var('paged');
$loop = new WP_Query( array( 'post_type' => 'column','p' => $post->ID, 'posts_per_page' => 1,	'paged'=>$paged ) );
if(function_exists('wp_pagenavi')) wp_pagenavi(array('query' => $loop));
while ( $loop->have_posts() ) : $loop->the_post();
?>
	
				<section class="entry">
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<p class="entry-date"><?php the_time('Y年m月d日'); ?></p>
					<p>
						<?php echo nl2br(the_content()); ?>
					</p>
				</section>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
				<div class="pager"><p><?php previous_post_link('%link','＜＜前の記事'); ?><a href="<?php echo home_url('/column/'); ?>" class="centerlink">一覧へ戻る</a><?php next_post_link('%link','次の記事＞＞'); ?></p></div>
			</article>	<!--/article-->

<?php include_once('mainfooter.php'); ?>
		</section>
<?php include_once('sidebar-blog.php'); ?>
	</section><!-- /.l-contents -->

<?php include_once('footer.php'); ?>