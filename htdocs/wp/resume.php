<?php
/*
Template Name: resume
*/
get_header(); ?>

	<section class="l-contents">
		<section class="l-main form">
			<nav class="breadlist">
				<p><a href="<?php echo home_url(); ?>">トップページ</a> &gt; 資料請求</p>
			</nav>
			<article class="l-form">

			<h2 class="headline-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/resume/resume_title.png" width="780" height="90" alt="資料請求"></h2>
			
			<h3><img src="<?php echo get_template_directory_uri(); ?>/assets/img/media/media_headline.png" alt="" width="780" height="35" class="form-headline" /></h3>
			<p class="form-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
			
			<h3><img src="<?php echo get_template_directory_uri(); ?>/assets/img/media/media_headline.png" alt="" width="780" height="35" class="form-headline" /></h3>
			
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/module/form_read.png" alt="私たちは地元の職人です。強引な営業は一切できませんのでご安心ください。" width="780" height="76" class="form-message" />

				<form action="https://24auto.biz/alljapan01/responder.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="mcode" value="UTF-8">
					<input type="hidden" name="tno" value="191">
					<table class="form-table">
					
					<tr>
					<th>
						資料請求1
					</th>
					<td>
						<input type="checkbox" name="fld1[]" value="塗り替えリフォームで失敗しない３つの方法"><font size="-1" color="#666666"> 塗り替えリフォームで失敗しない３つの方法  </font><br>
						<input type="checkbox" name="fld1[]" value="あなたも塗り替え リフォームで幸せに なれる方法"><font size="-1" color="#666666"> あなたも塗り替え リフォームで幸せに なれる方法  </font><br><input type="checkbox" name="fld1[]" value="儲かるアパート経営の秘密"><font size="-1" color="#666666"> 儲かるアパート経営の秘密  </font>  <input type="checkbox" name="fld1[]" value="幸せリフォーム通信"><font size="-1" color="#666666"> 幸せリフォーム通信  </font>
					</td>
					</tr>
					<tr>
					<th>
						お名前
						<span class="must">＊</span>
					</th>
					<td><input type="text" name="name1" size="45"></td>
					</tr>
					<tr>
						<th>
							フリガナ<span class="must">＊</span>
						</th>
						<td><input type="text" name="name2" size="45"></td>
					</tr>
					<tr>
						<th>
							ご住所<span class="must">＊</span>
						</th>
						<td><input type="text" name="fld2" size="45"></td>
					</tr>
					<tr>
						<th>
							メールアドレス<span class="must">＊</span>
						</th>
						<td><input type="text" name="email" size="45"></td>
					</tr>
					<tr>
						<th>
							お電話番号<span class="must">＊</span>
						</th>
						<td><input type="text" name="fld3" size="45"></td>
					</tr>
					<tr>
						<th>任意コメント</th>
						<td>
							<textarea name="fld4" rows="10" cols="40"></textarea>
						</td>
					</tr>
					</table>
					<p class="enter-resume enter"><input type="submit" name="sbm" value=""></p>
				</form>

			</article>	<!--/article-->

<?php include_once('mainfooter.php'); ?>
		</section>
<?php include_once('sidebar.php'); ?>
	</section><!-- /.l-contents -->

<?php include_once('footer.php'); ?>