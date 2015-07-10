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
	<section class="l-main voice">
		<nav class="breadlist">
			<p><a href="<?php echo home_url(); ?>">トップページ</a> &gt; お客様が語る丸福</p>
		</nav>
		<h2 class="headline-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice/voice_title.png" width="780" height="90" alt="お客様が語る丸福"></h2>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice/voice_text.png" width="780" height="57" alt="" class="read"/>
		<article class="l-voice" width="240" height="153">


			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice/voice_catchcopy.png" width="780" height="35" alt="" class="catchcopy" />
			
<?php 
$paged = get_query_var('paged');
$loop = new WP_Query( array( 'post_type' => 'voice','p' => $post->ID, 'posts_per_page' => 1,	'paged'=>$paged ) );
while ( $loop->have_posts() ) : $loop->the_post();
 ?>
				<section class="h-customer-voice">
					  <h2><a href="<?php the_permalink() ?>"><?php echo get_post_meta($post->ID,'name-customer',true); ?></a></h2>
				</section>
				<section class="cf voicearea">
					<div class="voice-left">
						<?php echo wp_get_attachment_image(get_post_meta($post->ID,"image-worker",true),array(240,175)); ?>
						<p class="worker"><?php echo get_post_meta($post->ID,'name-worker',true); ?></p>
					</div>
					<div class="voice-right">
						<p class="customer-voice-title"><?php the_title(); ?></p>
						<p class="customer-voice-text"><?php echo nl2br(get_post_meta($post->ID,'voice-text',true)); ?></p>
					</div>
					<h3 class="customer-voice-h3"><?php the_title(); ?></h3>
					<div class="sekou-under-box cf">
						<div class="sekou-before-left">
							<?php echo wp_get_attachment_image(get_post_meta($post->ID,"image-before",true),array(240,153)); ?>
							<div class="sekou-before-left-text">
								<p class="description"><?php echo nl2br(get_post_meta($post->ID,'description',true)); ?></p>
								<img class="sekoumae-maru" src="<?php echo get_template_directory_uri(); ?>/assets/img/voice/voice_before.png" width="78" height="78" alt="施工前">
								<img class="sekouato-maru" src="<?php echo get_template_directory_uri(); ?>/assets/img/voice/voice_after.png" width="113" height="113" alt="施工後">
							</div>
						</div>
						<div class="sekou-before-center">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice/voice_next.png" width="106" height="53" alt="矢印">
						</div>
						<div class="sekou-before-right">
							<?php echo wp_get_attachment_image(get_post_meta($post->ID,"image-after",true),array(360,240)); ?>
						</div>
					</div>
				</section>
<?php endwhile; ?>
<?php wp_reset_query(); ?>

				<a href="<?php echo home_url('/voice/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice/voice_more.png" alt="ご近所のお客様の声一覧はこちら" width="400" height="60" class="voice-more"/></a>
			<div class="pager"><p><?php previous_post_link('%link','＜＜前の記事'); ?><a href="<?php echo home_url('/voice/'); ?>" class="centerlink">一覧へ戻る</a><?php next_post_link('%link','次の記事＞＞'); ?></p></div>
		</article>
		<!--/article-->
		
		<div class="l-main-foot">
			<div class="foot-banner"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_bnr_price.png" width="740" height="80" alt="見積もり"> </div>
			<ul class="foot-list float-list">
				<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_bnr_resume.png" width="355" height="80" alt="資料請求"></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_bnr_contact.png" width="355" height="80" alt="問い合わせ"></li>
			</ul>
			<div class="foot-banner"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_bnr_tel.png" width="740" height="150" alt="電話"> </div>
		</div>
	</section>
	<aside class="l-side">
		<ul class="side-list-top">
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/side/side_bnr_01.png" width="200" height="165" alt="見積もり"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/side/side_bnr_02.png" width="200" height="100" alt="実績"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/side/side_bnr_03.png" width="200" height="100" alt="施工ブログ"></li>
		</ul>
		<ul class="side-navi-list">
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/side/side_nav_01.png" width="200" height="30" alt="サイドナビ1"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/side/side_nav_02.png" width="200" height="30" alt="サイドナビ2"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/side/side_nav_03.png" width="200" height="30" alt="サイドナビ3"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/side/side_nav_04.png" width="200" height="30" alt="サイドナビ4"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/side/side_nav_05.png" width="200" height="30" alt="サイドナビ5"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/side/side_nav_06.png" width="200" height="30" alt="サイドナビ6"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/side/side_nav_07.png" width="200" height="30" alt="サイドナビ7"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/side/side_nav_08.png" width="200" height="30" alt="サイドナビ8"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/side/side_nav_09.png" width="200" height="30" alt="サイドナビ9"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/side/side_nav_10.png" width="200" height="30" alt="サイドナビ10"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/side/side_nav_11.png" width="200" height="30" alt="サイドナビ11"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/side/side_nav_12.png" width="200" height="30" alt="サイドナビ12"></li>
		</ul>
		<ul class="side-list-bottom">
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/side/side_bnr_conference.png" width="200" height="66" alt="日本建築塗装職人の会"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/side/side_bnr_facebook.png" width="200" height="87" alt="FACEBOOK"></li>
		</ul>
	</aside>
</section>
<!-- /.l-contents -->

<?php include_once('footer.php'); ?>