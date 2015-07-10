	<aside class="l-side l-side-archive">
		<h4><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/side/side_archive_headline_01.png" width="200" height="35" alt="最新記事"></h4>
		<ul class="dot-list">
			<?php
			$args = array(
				'posts_per_page' => '5', //表示件数。-1なら全件表示
				'post_type' => 'column', //カスタム投稿タイプの名称を入れる
				'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
				'orderby' => 'date', //ID順に並び替え
				'order' => 'DESC'//順番切り替え（or 'ASC'
			);
			$the_query = new WP_Query( $args );
			?>
	
			<?php if ($the_query->have_posts()) : ?>
			<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
	
			<li>
			<a href="<?php the_permalink() ?>">
				<?php if(mb_strlen($post->post_title)>10) { $title= mb_substr($post->post_title,0,10) ; echo $title. ･･･ ;
				} else {echo $post->post_title;}?>
			</a>
			</li>
	
			<?php endwhile; ?>
			<?php endif ?>
			<?php wp_reset_postdata();	?>
		</ul>
		<h4><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/side/side_archive_headline_02.png" width="200" height="35" alt="月別アーカイブ"></h4>
		<ul class="dot-list">
			<?php wp_get_archives('type=monthly&limit=4&post_type=column'); ?>
		</ul>
		<h4><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/side/side_archive_headline_03.png" width="200" height="35" alt="カテゴリー"></h4>
		<ul class="dot-list">
			<?php wp_list_categories(array('title_li' => '', 'taxonomy' => 'column_category','hide_empty' => 0)); ?>
		</ul>
	</aside>