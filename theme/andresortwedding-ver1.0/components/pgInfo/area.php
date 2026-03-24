<section id="pgInfo_area" class="pginfo_area pginfo_section">
	<div class="pginfo_container">
		<div class="pginfo_head fade-anime" data-fade="fade-up">
			<h2 class="pginfo_head_ttl cls-grn">
				<img src="<?php echo esc_url(get_theme_file_uri('assets/images/info/icon_resort.svg')); ?>" alt="アイコン">
				<span>どこで挙げる？人気エリア比較</span>
			</h2>
			<p class="pginfo_head_txt">人気のエリアは、ハワイ、グアム、沖縄の3つ。<br>それぞれのベストシーズンや招待人数などが異なるので、ふたりの理想に合わせて選びましょう。<br>エリアを決めずに、ウェディング会社に相談するのもおすすめ。</p>
		</div>

		<div class="pginfo_area_table fade-anime" data-fade="fade-up">
			<table>
				<tbody>
					<tr class="cls-img">
						<th></th>
						<td><img src="<?php echo esc_url(get_theme_file_uri('assets/images/info/area_hawaii.jpg')); ?>" alt="ハワイ"></td>
						<td><img src="<?php echo esc_url(get_theme_file_uri('assets/images/info/area_guam.jpg')); ?>" alt="グアム"></td>
						<td><img src="<?php echo esc_url(get_theme_file_uri('assets/images/info/area_okinawa.jpg')); ?>" alt="沖縄"></td>
					</tr>

					<?php
						for ($i = 1; $i <= 7; $i++) :
						$th = [
							"エリアの特徴",
							"フライト時間<br><small>（東京から）</small>",
							"時差",
							"平均挙式総額<br><small>（挙式+パーティ）</small>",
							"旅行費用",
							"平均ゲスト人数",
							"ベストシーズン",
							];
						$td01 = [
							'ハネムーンも大人気！<br>誰もが憧れる<br class="sp">海外リゾート',
							"約7時間",
							"約-19時間",
							"約156万円",
							"約63万円",
							"7.8人",
							"4~10月",
						];
						$td02= [
							'フライト約3.5時間、<br class="sp">時差+1時間！<br>海外なのに気軽に<br class="sp">招待できるリゾート',
							"約3.5時間",
							"約+1時間",
							"約146万円",
							"約40万円",
							"8.7人",
							"11~5月",
						];
						$td03 = [
							'ゲストも招待しやすい！<br>近くて安心な<br class="sp">国内リゾートの王道',
							"約2.5時間",
							"なし",
							"約123万円",
							"約24万円",
							"19人",
							"3~4月/7~10月",
						];
					?>
					<tr>
						<th><?php echo $th[$i - 1];?></th>
						<td><?php echo $td01[$i - 1];?></td>
						<td><?php echo $td02[$i - 1];?></td>
						<td><?php echo $td03[$i - 1];?></td>
					</tr>
					<?php endfor; ?>
					<tr class="cls-link">
						<th></th>
						<td><a href="<?php echo esc_url(home_url());?>/hawaii">くわしく見る<span></span></a></td>
						<td><a href="<?php echo esc_url(home_url());?>/guam">くわしく見る<span></span></a></td>
						<td><a href="<?php echo esc_url(home_url());?>/okinawa">くわしく見る<span></span></a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>