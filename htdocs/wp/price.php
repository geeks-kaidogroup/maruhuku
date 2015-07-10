<?php
/*
Template Name: price
*/
get_header(); ?>

	<section class="l-contents">
		<section class="l-main form">
			<nav class="breadlist">
				<p><a href="<?php echo home_url(); ?>">トップページ</a> &gt; 料金・見積依頼</p>
			</nav>
			<article class="l-form">

			<h2 class="headline-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/price/price_title.png" width="780" height="90" alt="料金・見積依頼"></h2>
			
			<h3><img src="<?php echo get_template_directory_uri(); ?>/assets/img/media/media_headline.png" alt="" width="780" height="35" class="form-headline" /></h3>
			<p class="form-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
			<h3><img src="<?php echo get_template_directory_uri(); ?>/assets/img/media/media_headline.png" alt="" width="780" height="35" class="form-headline" /></h3>
			
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/module/form_read.png" alt="私たちは地元の職人です。強引な営業は一切できませんのでご安心ください。" width="780" height="76" class="form-message" />

				<form action="https://24auto.biz/alljapan01/responder.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="mcode" value="UTF-8">
					<input type="hidden" name="tno" value="188">
					<table class="form-table">
					<tr>
						<th>
							お名前
							<span class="must">＊</span>
							<br>
						</th>
						<td><input type="text" name="name1" size="45"></td>
					</tr>
					<tr>
						<th>
							ふりがな<span class="must">＊</span>
						</th>
						<td><input type="text" name="name2" size="45"></td>
					</tr>
					<tr>
						<th>
							ご住所<span class="must">＊</span>
						</th>
						<td><input type="text" name="fld1" size="45"></td>
					</tr>
					<tr>
						<th>
							メールアドレス<span class="must">＊</span>
						</th>
						<td><input type="text" name="email" size="45"></td>
					</tr>
					<tr>
						<th>
							電話番号<span class="must">＊</span>
						</th>
						<td><input type="text" name="fld2" size="45"></td>
					</tr>
					<tr>
						<th>
							第1訪問ご希望日<span class="must">＊</span>
						</th>
						<td><input type="text" name="fld3" size="30"></td>
					</tr>
					<tr>
						<th>第2訪問ご希望日</th>
						<td><input type="text" name="fld4" size="30"></td>
					</tr>
					<tr>
						<th>ご希望のリフォーム内容</th>
						<td><input type="text" name="fld5" size="30"></td>
					</tr>
					<tr>
						<th>親方に事前に伝えておきたいこと</th>
						<td>
							<textarea name="fld6" rows="5" cols="40"></textarea>
						</td>
					</tr>
					</table>
					<p class="enter-price enter"><input type="submit" name="sbm" value=""></p>
				</form>

			</article>	<!--/article-->

<?php include_once('mainfooter.php'); ?>
		</section>
<?php include_once('sidebar.php'); ?>
	</section><!-- /.l-contents -->

<?php include_once('footer.php'); ?>