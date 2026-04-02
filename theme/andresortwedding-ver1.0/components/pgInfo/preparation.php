<section id="pgInfo_preparation" class="pginfo_preparation pginfo_section">
	<div class="pginfo_container">
		<div class="pginfo_head fade-anime" data-fade="fade-up">
			<h2 class="pginfo_head_ttl cls-grn">
				<img src="<?php echo esc_url(get_theme_file_uri('assets/images/info/icon_cutlery.svg')); ?>" alt="アイコン">
				<span>事前準備とダンドリ</span>
			</h2>
			<p class="pginfo_head_txt">「準備が大変そう…」と思われがちなリゾートウェディングですが、一般的な結婚式よりも打ち合わせ回数が少なく、<br>オンラインで打ち合わせを進めることも可能です。無理なく準備を進められます。</p>
		</div>

		<div class="pginfo_guest_cont fade-anime" data-fade="fade-up">
			<h3 class="pginfo_guest_subttl pginfo_subttl cls-grn">
				<span>準備スケジュール</span>
			</h3>
			<p class="pginfo_subttl_txt">一般的なリゾートウェディングの準備スケジュールをご紹介します。</p>

			<ul class="pginfo_schedule cls-grn pginfo_preparation_schedule">
				<?php
					for ($i = 1; $i <= 8; $i++) :
					$label = [
						"START",
						"約8ヶ月前",
						"約6ヶ月前",
						"約6〜4ヶ月前",
						"約4ヶ月前",
						"約2ヶ月前",
						"約1ヶ月前",
						"2〜1日前",
						];
					$dt = [
						"お申し込み・ご予約",
						'日程調整　<br class="sp">航空券＆ホテルの手配',
						"ドレス試着",
						"ゲストの招待",
						'1回目の打ち合わせ　<br class="sp">ドレス決定',
						"2回目の打ち合わせ　<br>タキシード決定＆アクセサリーなど小物決定",
						'最終打ち合わせ　<br class="sp">最終フィッティング',
						"いよいよ出発！",
					];
					$dd= [
						"まずはお近くのサロンやオンラインで相談＆お申し込み・ご予約",
						"プランナーと一緒に、挙式までのスケジュールをたて、お打ち合わせ日のご決定<br>相談の上、理想の結婚式のイメージを固める。航空券等ご旅行手配",
						"ドレスコーディネーターと一緒に、選んだ会場や雰囲気にあわせたドレスを選択＆試着",
						"リゾートウェディングは移動や宿泊を伴うため、招待状を送る前に、打診しておくのがおすすめ",
						"アルバム・お料理・お花など、挙式アイテムのご紹介<br>結婚式の準備物のご確認",
						"挙式アイテムのご選択<br>挙式当日のスケジュールや演出のご説明＆ご提案",
						"準備物の最終確認。確定したスケジュールや演出の確認<br>ドレス・タキシードの最終確認",
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
						"cls-end",
					];
				?>
				<li class="pginfo_schedule_cmn <?php echo $cls[$i - 1];?>">
					<p class="cls-label"><?php echo $label[$i - 1];?></p>
					<div class="pginfo_schedule_cmn_cont">
						<div class="cls-img"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/info/preparation_0'.$i.'.jpg')); ?>" alt="イメージ"></div>
						<dl class="cls-txtarea">
							<dt><?php echo $dt[$i - 1];?></dt>
							<dd><?php echo $dd[$i - 1];?></dd>
						</dl>
					</div>
				</li>
				<?php endfor; ?>
			</ul>

			<p class="pginfo_subttl_txt">上記はあくまで、一般的なスケジュールです。沖縄など国内リゾートなら、最短1ヶ月前からでも挙式が可能なこともあります。<br>「急に結婚が決まった」「転勤前に挙式したい」「授かり婚で早めに挙式したい」など、お急ぎの方もまずは相談してみるのがおすすめです。</p>
		</div>

	</div>
</section>