<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<section class="l-contents">
	<main class="l-main">
		<div class="l-top-catch"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_catch.png" width="780" height="69" alt="キャッチコピー">
			<div class="top-catch-box cf">
				<div class="top-catch-photo"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_catch_pic.png" width="240" height="331" alt="親方"> </div>
				<p> 私は塗替えリフォームを通して、地域に幸せの輪を広げて行きたいと思っています。<br>
					なぜなら、幼い頃あまり幸せを感じたことがなかったからです。 </p>
				<p> 小学３年の時に母が再婚をしました。弟が二人生まれ男ばかりの５人兄弟になりました。<br>
					母は家計を助けるため夜働くようになり、夫婦ゲンカが多くなりました。<br>
					ある朝、いつもいるはずの母がいませんでした。<br>
					働きに出たまま帰らず家出したのです。<br>
					母の帰りを待つさみしさといったら、今思い出しても切なくなります…。 </p>
				<p> 当時、嫌なことや辛いことがあるとよく考えていたのは、『別にお金持ちでなくていい、家族仲良く普通に暮らしたい」と。<br>
					だからこそ、私は、子供の頃から人生とは何だろう… <br>
					幸せとは何なのか… 家族とはどうあるべきなのか… <br>
					そんなことを考えるに至ったのだと思います。 </p>
				<p> そして大人になり、偶然にもこの塗装業に就いたのです。<br>
					そこで気づいたことは、塗替えやリフォームをされるお宅は、私が子供の頃に憧れた、家族が仲良く幸せそうなお宅ばかりだということ…。 </p>
				<p> 塗装業は、家の壁や屋根をただ塗るだけの仕事ではありません。かけがえの無い大切な我が家を守る仕事です。家族の幸せを守る仕事です。<br>
					それは、我が家を大切にする気持ちが家族の心を一つにするからです。 </p>
				<p> 私は、『やりがい』あるこの職業、塗装業から、ごくありふれた普通の『幸せ』を、地域の皆様に、確実に、「笑顔で喜んでいただける仕事」という形にしてお届けさせていただきたいと、日々心に誓い、仕事をさせていただいております。 </p>
			</div>
		</div>
		<div class="l-top-news">
			<div class="top-headline"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_news.png" width="780" height="34" alt="新着情報"> </div>
			<ul class="top-news-list">
				<?php
	$newVoiceCount = 0;
	$args = array(
	'posts_per_page' => '4',
	'post_type' => array(
		'blog',
		'column'
		),
	);
	$wp_query = new WP_Query($args);
?>
				<?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				<li> <span class="date">
					<?php the_time('Y.m.d') ?>
					</span>
					<?php if( get_post_type() == 'blog' ) : ?>
					<span class="category category-blog">ブログ</span>
					<?php elseif( get_post_type() == 'column' ) : ?>
					<span class="category category-column">コラム</span>
					<?php else: ?>
					<span class="category">投稿はありません</span>
					<?php endif; ?>
					<span class="title"><a href="<?php the_permalink() ?>"> <?php echo mb_substr(strip_tags($post-> post_content),0,35) . '…'; ?> </a></span> </li>
				<?php
					endwhile;
					wp_reset_postdata();
					else:
				?>
				<p>まだ新着情報はありません。</p>
			</ul>
			<?php endif; ?>
		</div>
		<div class="l-top-advantage"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_advantage.png" width="780" height="69" alt="丸福だけの魅力" />
			<p> 私たち「塗替え丸福」は、施工から完了までを全て自社職人だけで運営している塗替えリフォームの専門店です。<br>
				専門店ならではの拘りを持って、皆様のお家の塗替えを行わせて頂いております。 </p>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_advantage_headline_01.png" width="780" height="45" alt="一．塗替えリフォーム専門店" />
			<p> 新築・大型物件の仕事は致しません。一般住宅の塗替え・関連するリフォームのみに特化しています。
				丸福だけにしかない住宅塗替えのノウハウを日々蓄積しながら仕事を行っています。 </p>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_advantage_headline_02.png" width="780" height="45" alt="二．地元の方のための専門店" />
			<p> 営業エリアは、品川区全域、大田・目黒区の一部で（車移動 片道25分までのエリア）活動しています。<br>
				それは、お客様のためでもあり、私たちのためでもあります。遠ければ余計な経費が掛かりますし、何かの時にすぐ駆けつけられないからです。 </p>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_advantage_headline_03.png" width="780" height="45" alt="三．下請けをしない、下請けに出さない" />
			<p> 正直、下請け仕事ではお客様を満足させる仕事は不可能だと考えています。逆も同じだからです。 </p>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_advantage_headline_04.png" width="780" height="45" alt="四．モットーは新築のように元通りに" />
			<p> 常に、自分の家族や友人に誇れる仕事でありたい、自分の家のつもりで施工しております。 </p>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_advantage_headline_05.png" width="780" height="45" alt="五．10年間ノークレーム" />
			<p> クレームがなかったわけではありません。何かの時にはすぐに伺い対応します。ほったらかしには絶対にしません。<br>
				言い訳もしません。お客様から言われなくても、私たちが何か不具合を見つければ率先して手直し致します。<br>
				私たちも地元に住んでいます。繋がりのある方は多いです。だからクレームはないんです。 </p>
		</div>
		<div class="l-top-voice">
			<div class="top-headline"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_voice.png" width="780" height="34" alt="お客様の声"> </div>
			<ul class="voice-list float-list">
<?php
$args = array(
	'posts_per_page' => '9', //表示件数。-1なら全件表示
	'post_type' => 'voice', //カスタム投稿タイプの名称を入れる
	'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
	'orderby' => 'date', //ID順に並び替え
	'order' => 'DESC'//順番切り替え（or 'ASC'
);
$the_query = new WP_Query( $args );
?>
				<?php if ($the_query->have_posts()) : ?>
				<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
				<li><a href="<?php the_permalink() ?>">
					<div class="head"><?php echo mb_strimwidth(the_title('','', false ), 0, 32, '...'); ?></div>
					<div class="photo"><?php echo wp_get_attachment_image(get_post_meta($post->ID,"image-customer",true),array(240,153)); ?></div>
					<div class="voice-detail">
						<p class="text"><?php echo mb_strimwidth(get_post_meta($post->ID,'voice-text',true), 0, 80, '...'); ?></p>
						<p class="condition"><?php echo get_post_meta($post->ID,'work-area',true); ?><span class="work"><?php echo get_post_meta($post->ID,'work-name',true); ?></span>
						<p class="name"><?php echo get_post_meta($post->ID,'name-customer',true); ?></p>
					</div>
					</a></li>
				<?php endwhile; ?>
				<?php endif ?>
				<?php wp_reset_postdata();	?>
			</ul>
			<div class="top-voice-btn"> <a href="<?php echo home_url('/voice/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_voice_more.png" width="400" height="60" alt="お客様の声一覧"></a> </div>
		</div>
		<div class="l-top-works">
			<div class="top-headline"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_work.png" width="780" height="34" alt="今月の施工宅"> </div>
			<ul class="works-list float-list">


<?php
$args = array(
	'posts_per_page' => '9', //表示件数。-1なら全件表示
	'post_type' => 'execution', //カスタム投稿タイプの名称を入れる
	'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
	'orderby' => 'date', //ID順に並び替え
	'order' => 'DESC'//順番切り替え（or 'ASC'
);
$the_query = new WP_Query( $args );
?>
				<?php if ($the_query->have_posts()) : ?>
				<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

				<li><a href="<?php the_permalink() ?>">
					<div class="head"><?php echo get_post_meta($post->ID,'address',true); ?>　<?php echo get_post_meta($post->ID,'customer',true); ?>宅</div>
					<div class="photo"><?php echo wp_get_attachment_image(get_post_meta($post->ID,"photo1",true),array(240,153)); ?></div>
					<div class="works-detail">
						<p class="date"><?php echo get_post_meta($post->ID,'period',true); ?></p>
						<p class="work"><?php echo get_post_meta($post->ID,'work',true); ?></p>
					</div>
				</a></li>

				<?php endwhile; ?>
				<?php endif ?>
				<?php wp_reset_postdata();	?>
			</ul>
			<div class="top-works-btn"> <a href="<?php echo home_url('/execution/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_work_more.png" width="400" height="60" alt="施工宅一覧"></a> </div>
		</div>
		<?php include_once('mainfooter.php'); ?>
	</main>
	<?php include_once('sidebar.php'); ?>
</section>
<!-- /.l-contents -->

<?php include_once('footer.php'); ?>