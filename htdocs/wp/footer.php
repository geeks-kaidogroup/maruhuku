	<footer class="l-footer">
		<div class="wrap">
			<div class="l-footer-left">
				<div class="footer-logo">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/footer/footer_logo.png" width="354" height="74" alt="ロゴ"></a>
				</div>
				<div class="footer-address">
					<p>所在地： 東京都品川区西中延3-11-2<br>
					電話：0120-980-544<br>
					Ｅメール：info@nurikae-maruhuku.com<br>
					営業時間：7:00～19:00</p>
				</div>
				<div class="footer-banner">
					<a href="http://www.nihon-syokunin.com/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/footer/footer_bnr_conference.png" width="270" height="54" alt="日本建築塗装職人の会"></a>
				</div>
				<div class="footer-copyright">
					<p>Copyright© 塗替え丸福株式会社 All Rights Reserved.</p>
				</div>
			</div>
			<div class="l-footer-right">
				<div class="footer-navi-box">
					<ul class="footer-navi-list footer-bold-list">
						<li><a href="<?php echo home_url(); ?>">トップページ</a></li>
						<li><a href="<?php echo home_url('/execution/'); ?>">ご近所の施工宅</a></li>
						<li><a href="<?php echo home_url('/voice/'); ?>">お客様の声</a></li>
						<li><a href="<?php echo home_url('/company/'); ?>">会社概要</a></li>
					</ul>
				</div>
				<div class="footer-navi-box">
					<ul class="footer-navi-list">
						<li><a href="<?php echo home_url('/advantage/'); ?>">専門店の強み</a></li>
						<li><a href="<?php echo home_url('/real/'); ?>">職人の本音</a></li>
						<li><a href="<?php echo home_url('/flow/'); ?>">施工の流れ</a></li>
						<li><a href="<?php echo home_url('/warranty/'); ?>">塗り替え丸福の保証</a></li>
<!--						<li><a href="<?php echo home_url('//'); ?>">見学会も開催中</a></li>-->
					</ul>
				</div>
				<div class="footer-navi-box">
					<ul class="footer-navi-list">
						<li><a href="<?php echo home_url('/voice/'); ?>">お客様が語る丸福</a></li>
						<li><a href="<?php echo home_url('/media/'); ?>">マスコミ取材</a></li>
						<li><a href="<?php echo home_url('/price/'); ?>">料金・ローン・お見積もり</a></li>
<!--						<li><a href="<?php echo home_url('/policy/'); ?>">プライバシーポリシー</a></li>-->
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>