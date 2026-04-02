<section id="pgInfo_charm" class="pginfo_charm pginfo_section cls-bg-baige">
	<div class="pginfo_container">
		<div class="pginfo_head fade-anime" data-fade="fade-up">
			<h2 class="pginfo_head_ttl cls-blu">
				<img src="<?php echo esc_url(get_theme_file_uri('assets/images/info/icon_ring.svg')); ?>" alt="アイコン">
				<span>リゾートウェディングの魅力</span>
			</h2>
			<p class="pginfo_head_txt">青い海、澄みわたる空、心地よい風。日常を離れた特別なロケーションで誓う結婚式、それが「リゾートウェディング」です。</p>
		</div>

		<div class="pginfo_charm_intro fade-anime" data-fade="fade-up">
			<div class="pginfo_charm_intro_cmn">
				<p class="pginfo_charm_intro_ttl cls-blu">海外リゾート</p>
				<div class="pginfo_charm_intro_img">
					<div class="pginfo_charm_intro_img_wrap"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/info/charm_overseas_01.jpg')); ?>" alt="イメージ"></div>
					<div class="pginfo_charm_intro_img_wrap"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/info/charm_overseas_02.jpg')); ?>" alt="イメージ"></div>
					<div class="pginfo_charm_intro_img_wrap"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/info/charm_overseas_03.jpg')); ?>" alt="イメージ"></div>
				</div>
				<dl class="pginfo_charm_intro_cont">
					<dt class="pginfo_charm_intro_cont_label">ハワイ・グアム　<small>ほか</small></dt>
					<dd class="pginfo_charm_intro_cont_txt">非日常感あふれるロケーション<br>ハネムーンも一緒に楽しめる</dd>
				</dl>
			</div>
			<div class="pginfo_charm_intro_cmn">
				<p class="pginfo_charm_intro_ttl cls-pnk">国内リゾート</p>
				<div class="pginfo_charm_intro_img">
					<div class="pginfo_charm_intro_img_wrap"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/info/charm_domestic_01.jpg')); ?>" alt="イメージ"></div>
					<div class="pginfo_charm_intro_img_wrap"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/info/charm_domestic_02.jpg')); ?>" alt="イメージ"></div>
					<div class="pginfo_charm_intro_img_wrap"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/info/charm_domestic_03.jpg')); ?>" alt="イメージ"></div>
				</div>
				<dl class="pginfo_charm_intro_cont">
					<dt class="pginfo_charm_intro_cont_label">沖縄　<small>ほか</small></dt>
					<dd class="pginfo_charm_intro_cont_txt">パスポート不要で移動時間も短い<br>ゲストも招待しやすい</dd>
				</dl>
			</div>
		</div>

		<div class="pginfo_charm_txtbox fade-anime" data-fade="fade-up">
			<div class="pginfo_charm_txtbox_wrap">
				<p>どちらを選んでも、美しい自然に囲まれた非日常の空間で、特別な一日を過ごせることに変わりはありません。</p>
				<p><strong>おふたりの希望やゲストの状況に合わせて、ぴったりのスタイルを探しましょう。</strong></p>
			</div>
		</div>

		<div class="pginfo_charm_list">
			<h3 class="pginfo_charm_list_ttl pginfo_subttl cls-blu fade-anime sp-w" data-fade="fade-up"><span>リゾートウェディングが<br class="sp">選ばれる6つの理由</span></h3>

			<ul class="pginfo_charm_list_wrap">
			<?php
				for ($i = 1; $i <= 6; $i++) :
				$text = [
				"最高のロケーションで<br/><strong>写真映えも抜群！</strong>",
				"大切な家族や友人と、<br/><strong>ゆっくり分かち合える結婚式</strong>",
				"たった3時間で終わらない<br/><strong>人生最高の3日間</strong>",
				"手配や準備が<br/><strong>圧倒的に楽！</strong>",
				"意外と<br/><strong>コストもかからない！</strong>",
				"海外リゾートウェディングも<br/><strong>国内同様のホスピタリティ</strong>",
				];
				$subtext = [
				"青い海、白い砂浜、緑豊かなガーデン、どこまでも続く空。近場ウェディングでは撮れないような、ダイナミックなロケーションフォトが残せるのは、リゾートウェディングならでは。<br><br>「特別な日の写真だから、最高のロケーションで撮りたい」という願いを叶えてくれるのが、リゾートウェディングです。",
				"リゾートウェディングは、おふたりらしく自由に過ごせることが魅力のひとつ。<br>ルールや決まりが少ないからこそ、ビーチでの集合写真やドリンクタイム、サプライズなど、好みに合わせた時間の過ごし方ができます。<br><br>ゲストと近い距離でゆっくり過ごしながら、全員と「最幸の思い出」を分かち合えるのも魅力です。",
				"リゾートウェディングは、挙式の瞬間だけでなく、その前後の時間も一緒に過ごしながら思い出を分かち合える結婚式のかたちです。<br><br>挙式後にディナーを楽しんだり、翌日もビーチで過ごしたりと、大切な人たちとのかけがえのない時間が続きます。結婚式を超えた「人生最高の旅」を叶えられるのも魅力です。",
				"「準備が大変そう…」というイメージがあるかもしれません。<br>ですが、リゾートウェディングは、ルールに縛られることなく、おふたりの希望スタイルに合わせて、無理なくご準備いただけます。",
				"「リゾートウェディングは高そう」イメージがあるかもしれません。<br>ですが、実際は一般的な結婚式よりリーズナブルに叶います。また、挙式とハネムーンを一緒に楽しむことが出来るところも大きな魅力。<br><br>リーズナブルでありながら、特別な日の舞台は我慢せず、憧れの場所で叶えることができます。",
				"ハワイやグアムには、日本語を話すウェディング専門スタッフが揃っているので安心。<br><br>お打ち合わせも、国内リゾート・海外リゾートともに、日本全国にあるお近くのサロンで実施します。",
				];
			?>
				<li class="pginfo_charm_list_cmn <?php echo "cls-".$i;?> fade-anime" data-fade="fade-up">
					<p class="num">理由<span><?php echo "0".$i;?></span></p>
					<div class="img"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/info/charm_list_0'.$i.'.jpg')); ?>" alt="イメージ画像"></div>
					<p class="txt"><?php echo $text[$i - 1];?></p>
					<p class="subtxt"><?php echo $subtext[$i - 1];?></p>
				</li>
			<?php endfor; ?>
			</ul>
		</div>
	</div>
</section>