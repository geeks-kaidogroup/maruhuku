<?php
/*
Template Name: company
*/
get_header(); ?>

	<section class="l-contents">
		<section class="l-main company">
			<nav class="breadlist">
				<p><a href="<?php echo home_url(); ?>">トップページ</a> &gt; 会社概要</p>
			</nav>
			<h2 class="headline-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/company_title.png" width="780" height="90" alt="会社概要"></h2>
			<article class="l-company">
				<section>
					<h1 class="company-headline"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/company_headline_01.png" width="780" height="35" alt="会社概要" ></h1>
						<table>
						<tbody>
							<tr><th>会社名</th><td>式会社 ○○（○○）</td></tr>
							<tr><th>代表者</th><td>代表取締役　○○　○○（○○○）　　一級塗装技能士／塗料開発技術者</td></tr>
							<tr><th>所在地</th><td>〒000－0000 東京都品川区西中延3-11-2 </td></tr>
							<tr><th>電話番号・FAX</th><td>電話: 0120-980-544</td></tr>
							<tr><th>メールアドレス</th><td>info@nurikae-maruhuku.com</td></tr>
							<tr><th>URL</th><td>テキストテキストテキストテキストテキストテキスト</td></tr>
							<tr><th>営業時間</th><td>7:00～19:00</td></tr>
							<tr><th>事業内容</th><td>住宅塗装・リフォーム全般</td></tr>
							<tr><th>設立年月日</th><td>平成○○年○月○日</td></tr>
							<tr><th>資本金</th><td>0000万円</td></tr>
							<tr><th>許認可</th><td>○○○許可　第0000号</td></tr>
							<tr><th>施工エリア</th><td>○○○許可　第0000号</td></tr>
						</tbody>
						</table>
				</section>

				<section>
					<h1 class="company-headline"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/company_headline_02.png" width="780" height="35" alt="アクセスマップ" ></h1>
					<p class="address">《住所》　〒000－0000 東京都品川区西中延3-11-2</p>
					
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/company_map.png" alt="マップ" width="780" height="230" />
					
				</section>
			</article>

<?php include_once('mainfooter.php'); ?>
		</section>
<?php include_once('sidebar.php'); ?>
	</section><!-- /.l-contents -->

<?php include_once('footer.php'); ?>