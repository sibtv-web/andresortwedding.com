<section id="pgInfo_ontheday" class="pginfo_ontheday pginfo_section">
	<div class="pginfo_container">
		<div class="pginfo_head fade-anime" data-fade="fade-up">
			<h2 class="pginfo_head_ttl cls-pnk">
				<img src="<?php echo esc_url(get_theme_file_uri('assets/images/info/icon_couple.svg')); ?>" alt="アイコン">
				<span>挙式当日のスケジュール</span>
			</h2>
			<p class="pginfo_head_txt">
				いよいよ結婚式当日！一日のスケジュールをご紹介します。<br>エリアや会場によって時間配分は異なりますが、基本的な動きは共通です。<br>おふたりの特別な一日が、どのように進んでいくのかイメージしてみてください。
			</p>
		</div>

		<div class="pginfo_guest_cont fade-anime" data-fade="fade-up">
			<ul class="pginfo_schedule cls-pnk pginfo_preparation_schedule">
				<?php
					for ($i = 1; $i <= 7; $i++) :
					$label = [
						"8:00~10:00",
						"10:00~11:00",
						"11:00~11:30",
						"11:30~12:30",
						"12:30~14:00",
						"14:00~16:00",
						"18:00~",
						];
					$dt = [
						"ヘアメイク＆着付け",
						"ファーストミート",
						"入場前の最終準備",
						"挙式",
						"アフタータイム＆フォトタイム",
						"パーティ",
						"余韻を楽しむリラックスのひととき",
					];
					$dd= [
						"",
						"",
						"",
						"",
						"",
						"",
						"",
					];
					$cls = [
						"",
						"",
						"",
						"",
						"",
						"",
						"",
					];
				?>
				<li class="pginfo_schedule_cmn <?php echo $cls[$i - 1];?>">
					<p class="cls-label cls-time"><?php echo $label[$i - 1];?></p>
					<div class="pginfo_schedule_cmn_cont">
						<div class="cls-img"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/info/ontheday_0'.$i.'.jpg')); ?>" alt="イメージ"></div>
						<dl class="cls-txtarea">
							<dt><?php echo $dt[$i - 1];?></dt>
							<dd><?php echo $dd[$i - 1];?></dd>
						</dl>
					</div>
				</li>
				<?php endfor; ?>
			</ul>

		</div>

	</div>
</section>