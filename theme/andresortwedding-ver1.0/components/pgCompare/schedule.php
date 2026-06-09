<section id="pgVs_schedule" class="pgvs_schedule pginfo_section">
	<div class="pgvs_schedule_container">
		<div class="pgvs_head fade-anime" data-fade="fade-up">
			<h2 class="pgvs_head_ttl cls-grn">
				<img src="<?php echo esc_url(get_theme_file_uri('assets/images/vs/nav_icon_couple.svg')); ?>" alt="アイコン">
				<span>全体スケジュールを比較</span>
			</h2>
			<p class="pgvs_head_txt">
				近場ウェディングでは、何ヶ月もかけて準備しても、当日は3〜4時間ほどで終わってしまうことが多いもの。<br>
				一方、リゾートウェディングでは、挙式当日だけでなく前後の滞在時間も大切な思い出になります。
			</p>
		</div>

		<div class="pgvs_schedule_main fade-anime" data-fade="fade-up">
			<p class="pgvs_schedule_main_note sp">タブを切り替えてそれぞれのスケジュールを見てみましょう</p>
			<div class="weddingSchedule js-weddingSchedule">
				<!-- PC / SP 共通タブ -->
				<div class="weddingSchedule__tabs">
					<div class="weddingSchedule__tabsSpacer"></div>

					<button class="weddingSchedule__tab cls-resort is-active" type="button" data-tab="resort">
					リゾートウェディング
					</button>

					<div class="weddingSchedule__tabsCenter"></div>

					<button class="weddingSchedule__tab cls-nearby" type="button" data-tab="nearby">
					近場ウェディング
					</button>
				</div>

				<!-- PC -->
				<div class="weddingSchedule__pc">
					<div class="weddingSchedule__dayTitle">前日</div>

					<div class="weddingSchedule__pcBody">
					<div class="weddingSchedule__col">
						<div class="scheduleCell scheduleCell--black cls-90">
						到着！リゾート地を観光
						</div>
					</div>

					<div class="weddingSchedule__timeCol">
						<div class="scheduleCell scheduleCell--time cls-90"></div>
					</div>

					<div class="weddingSchedule__col">
						<div class="scheduleCell scheduleCell--empty scheduleCell--diagonalReverse cls-90"></div>
					</div>
					</div>

					<div class="weddingSchedule__dayTitle">当日</div>

					<div class="weddingSchedule__pcBody">
					<!-- リゾートウェディング -->
					<div class="weddingSchedule__col">
						<div class="scheduleCell scheduleCell--black scheduleCell--diagonal cls-90"></div>
						<div class="scheduleCell scheduleCell--black cls-30">支度開始</div>
						<div class="scheduleCell scheduleCell--black cls-60">ファーストミート</div>
						<div class="scheduleCell scheduleCell--black cls-60">写真撮影</div>
						<div class="scheduleCell scheduleCell--pink cls-60">挙式・フラワーシャワー</div>
						<div class="scheduleCell scheduleCell--black cls-20">ビーチへ移動</div>
						<div class="scheduleCell scheduleCell--black cls-40">フリータイム</div>
						<div class="scheduleCell scheduleCell--black cls-60">スタイルチェンジ</div>
						<div class="scheduleCell scheduleCell--green cls-20">パーティ入場</div>
						<div class="scheduleCell scheduleCell--black cls-20">乾杯挨拶</div>
						<div class="scheduleCell scheduleCell--black cls-80">お食事・歓談</div>
						<div class="scheduleCell scheduleCell--black cls-20">ケーキ入刀</div>
						<div class="scheduleCell scheduleCell--black cls-20">ガーデンにてフォトタイム</div>
						<div class="scheduleCell scheduleCell--black cls-50">お食事・歓談</div>
						<div class="scheduleCell scheduleCell--black cls-15">手紙朗読</div>
						<div class="scheduleCell scheduleCell--black cls-15">記念品贈呈</div>
						<div class="scheduleCell scheduleCell--green cls-60">退場・お見送り</div>
						<div class="scheduleCell scheduleCell--black cls-60">着替え・客室にてリラックス</div>
					</div>

					<!-- 時間軸 -->
					<div class="weddingSchedule__timeCol">
						<div class="scheduleCell scheduleCell--time cls-30">5:00</div>
						<div class="scheduleCell scheduleCell--time cls-30">6:00</div>
						<div class="scheduleCell scheduleCell--time cls-30">7:00</div>
						<div class="scheduleCell scheduleCell--time cls-30">8:00</div>
						<div class="scheduleCell scheduleCell--time cls-120">10:30</div>
						<div class="scheduleCell scheduleCell--time cls-60">11:30</div>
						<div class="scheduleCell scheduleCell--time cls-60">12:00</div>
						<div class="scheduleCell scheduleCell--time cls-60">12:30</div>
						<div class="scheduleCell scheduleCell--time cls-60">13:00</div>
						<div class="scheduleCell scheduleCell--time cls-60">13:30</div>
						<div class="scheduleCell scheduleCell--time cls-60">14:00</div>
						<div class="scheduleCell scheduleCell--time cls-60">14:30</div>
						<div class="scheduleCell scheduleCell--time cls-60">15:00</div>
						<div class="scheduleCell scheduleCell--time cls-60">15:30</div>
					</div>

					<!-- 近場ウェディング -->
					<div class="weddingSchedule__col">
						<div class="scheduleCell scheduleCell--black cls-30">起床・準備</div>
						<div class="scheduleCell scheduleCell--black cls-30">出発</div>
						<div class="scheduleCell scheduleCell--black cls-30">最終の打ち合わせ・荷物確認</div>
						<div class="scheduleCell scheduleCell--black cls-30">支度開始</div>

						<div class="scheduleCell scheduleCell--black cls-30">ファーストミート</div>
						<div class="scheduleCell scheduleCell--black cls-30">写真撮影</div>
						<div class="scheduleCell scheduleCell--black cls-30">親族紹介</div>
						<div class="scheduleCell scheduleCell--black cls-30">親族リハーサル</div>

						<div class="scheduleCell scheduleCell--pink cls-60">挙式・フラワーシャワー</div>

						<div class="scheduleCell scheduleCell--black cls-20">アフターセレモニー</div>
						<div class="scheduleCell scheduleCell--black cls-20">親族紹介</div>
						<div class="scheduleCell scheduleCell--black cls-20">集合写真</div>

						<div class="scheduleCell scheduleCell--green cls-15">披露宴開式</div>
						<div class="scheduleCell scheduleCell--black cls-15">主賓挨拶</div>
						<div class="scheduleCell scheduleCell--black cls-15">来賓挨拶</div>
						<div class="scheduleCell scheduleCell--black cls-15">親族挨拶</div>

						<div class="scheduleCell scheduleCell--black cls-20">乾杯・食事スタート</div>
						<div class="scheduleCell scheduleCell--black cls-20">友人スピーチ</div>
						<div class="scheduleCell scheduleCell--black cls-20">ケーキ入刀</div>

						<div class="scheduleCell scheduleCell--black cls-60">中座</div>

						<div class="scheduleCell scheduleCell--black cls-20">再入場</div>
						<div class="scheduleCell scheduleCell--black cls-20">余興</div>
						<div class="scheduleCell scheduleCell--black cls-20">テーブルラウンド</div>

						<div class="scheduleCell scheduleCell--black cls-15">祝電紹介</div>
						<div class="scheduleCell scheduleCell--black cls-15">記念品贈呈</div>
						<div class="scheduleCell scheduleCell--black cls-15">親族挨拶</div>
						<div class="scheduleCell scheduleCell--black cls-15">謝辞</div>

						<div class="scheduleCell scheduleCell--green cls-60">退場・お見送り</div>

						<div class="scheduleCell scheduleCell--black cls-20">着替え・忘れ物チェック</div>
						<div class="scheduleCell scheduleCell--black cls-20">退館・出発</div>
						<div class="scheduleCell scheduleCell--black cls-20">帰着</div>
					</div>
					</div>

					<div class="weddingSchedule__dayTitle">翌日</div>

					<div class="weddingSchedule__pcBody">
					<div class="weddingSchedule__col">
						<div class="scheduleCell scheduleCell--black cls-90">
						ビーチで<br>マリンアクティビティ
						</div>
						<div class="scheduleCell scheduleCell--black cls-90">
						リゾートエリアならではの<br>絶品ランチ
						</div>
						<div class="scheduleCell scheduleCell--black cls-90">
						結婚式の疲れを癒す<br>南国スパ＆マッサージ
						</div>
						<div class="scheduleCell scheduleCell--black cls-90">
						サンセットで<br>ロマンチックな時間を
						</div>
					</div>

					<div class="weddingSchedule__timeCol">
						<div class="scheduleCell scheduleCell--time cls-360"></div>
					</div>

					<div class="weddingSchedule__col">
						<div class="scheduleCell scheduleCell--empty scheduleCell--diagonal cls-360"></div>
					</div>
					</div>

					<p class="weddingSchedule__note">
					※上記は一例です。挙式スタイルや演出内容によって所要時間は変動します。
					</p>
				</div>

				<!-- SP -->
				<div class="weddingSchedule__sp">
					<div class="weddingSchedule__panel is-active" data-panel="resort">
					<div class="weddingSchedule__dayTitle">前日</div>

					<div class="weddingSchedule__spBody">
						<div class="weddingSchedule__spTime">
						<div class="scheduleCell scheduleCell--time cls-60"></div>
						</div>
						<div class="weddingSchedule__spContent">
						<div class="scheduleCell scheduleCell--black cls-60">
							到着！リゾート地を観光
						</div>
						</div>
					</div>

					<div class="weddingSchedule__dayTitle">当日</div>

					<div class="weddingSchedule__spBody">
						<div class="weddingSchedule__spTime">
						<!-- <div class="scheduleCell scheduleCell--time cls-30">5:00</div>
						<div class="scheduleCell scheduleCell--time cls-30">6:00</div>
						<div class="scheduleCell scheduleCell--time cls-30">7:00</div> -->
						<div class="scheduleCell scheduleCell--time cls-30">8:00</div>
						<div class="scheduleCell scheduleCell--time cls-120">10:30</div>
						<div class="scheduleCell scheduleCell--time cls-60">11:30</div>
						<div class="scheduleCell scheduleCell--time cls-60">12:00</div>
						<div class="scheduleCell scheduleCell--time cls-60">12:30</div>
						<div class="scheduleCell scheduleCell--time cls-60">13:00</div>
						<div class="scheduleCell scheduleCell--time cls-60">13:30</div>
						<div class="scheduleCell scheduleCell--time cls-60">14:00</div>
						<div class="scheduleCell scheduleCell--time cls-60">14:30</div>
						<div class="scheduleCell scheduleCell--time cls-60">15:00</div>
						<div class="scheduleCell scheduleCell--time cls-60">15:30</div>
						</div>

						<div class="weddingSchedule__spContent">
						<!-- <div class="scheduleCell scheduleCell--black scheduleCell--diagonal cls-360"></div> -->
						<div class="scheduleCell scheduleCell--black cls-30">支度開始</div>
						<div class="scheduleCell scheduleCell--black cls-60">ファーストミート</div>
						<div class="scheduleCell scheduleCell--black cls-60">写真撮影</div>
						<div class="scheduleCell scheduleCell--pink cls-60">挙式・フラワーシャワー</div>
						<div class="scheduleCell scheduleCell--black cls-20">ビーチへ移動</div>
						<div class="scheduleCell scheduleCell--black cls-40">フリータイム</div>
						<div class="scheduleCell scheduleCell--black cls-60">スタイルチェンジ</div>
						<div class="scheduleCell scheduleCell--green cls-20">パーティ入場</div>
						<div class="scheduleCell scheduleCell--black cls-20">乾杯挨拶</div>
						<div class="scheduleCell scheduleCell--black cls-80">お食事・歓談</div>
						<div class="scheduleCell scheduleCell--black cls-20">ケーキ入刀</div>
						<div class="scheduleCell scheduleCell--black cls-20">ガーデンにてフォトタイム</div>
						<div class="scheduleCell scheduleCell--black cls-50">お食事・歓談</div>
						<div class="scheduleCell scheduleCell--black cls-15">手紙朗読</div>
						<div class="scheduleCell scheduleCell--black cls-15">記念品贈呈</div>
						<div class="scheduleCell scheduleCell--green cls-60">退場・お見送り</div>
						<div class="scheduleCell scheduleCell--black cls-60">着替え・邸宅にてリラックス</div>
						</div>
					</div>

					<div class="weddingSchedule__dayTitle">翌日</div>

					<div class="weddingSchedule__spBody">
						<div class="weddingSchedule__spTime">
						<div class="scheduleCell scheduleCell--time cls-360"></div>
						</div>
						<div class="weddingSchedule__spContent">
						<div class="scheduleCell scheduleCell--black cls-90">
							ビーチで<br>マリンアクティビティ
						</div>
						<div class="scheduleCell scheduleCell--black cls-90">
							リゾートエリアならではの<br>絶品ランチ
						</div>
						<div class="scheduleCell scheduleCell--black cls-90">
							結婚式の疲れを癒す<br>南国スパ＆マッサージ
						</div>
						<div class="scheduleCell scheduleCell--black cls-90">
							サンセットで<br>ロマンチックな時間を
						</div>
						</div>
					</div>
					<p class="weddingSchedule__note sp">
					※上記は一例です。挙式スタイルや演出内容によって所要時間は変動します。
					</p>
					<div class="pgvs_schedule_main_imgs-sp">
						<div class="cls-top">
							<div class="cls-1"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/vs/schedule_sp_01_a.jpg')); ?>" alt="イメージ"></div>
							<div class="cls-2"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/vs/schedule_sp_02_a.jpg')); ?>" alt="イメージ"></div>
						</div>
						<div class="cls-btm">
							<div class="cls-1"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/vs/schedule_sp_03_a.jpg')); ?>" alt="イメージ"></div>
							<div class="cls-2"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/vs/schedule_sp_04_a.jpg')); ?>" alt="イメージ"></div>
						</div>
					</div>
					</div>

					<div class="weddingSchedule__panel" data-panel="nearby">
					<!-- <div class="weddingSchedule__dayTitle">前日</div>

					<div class="weddingSchedule__spBody">
						<div class="weddingSchedule__spTime">
						<div class="scheduleCell scheduleCell--time cls-60"></div>
						</div>
						<div class="weddingSchedule__spContent">
						<div class="scheduleCell scheduleCell--black scheduleCell--diagonalReverse cls-60"></div>
						</div>
					</div> -->

					<div class="weddingSchedule__dayTitle">当日</div>

					<div class="weddingSchedule__spBody">
						<div class="weddingSchedule__spTime">
						<div class="scheduleCell scheduleCell--time cls-30">5:00</div>
						<div class="scheduleCell scheduleCell--time cls-30">6:00</div>
						<div class="scheduleCell scheduleCell--time cls-30">7:00</div>
						<div class="scheduleCell scheduleCell--time cls-30">8:00</div>
						<div class="scheduleCell scheduleCell--time cls-120">10:30</div>
						<div class="scheduleCell scheduleCell--time cls-60">11:30</div>
						<div class="scheduleCell scheduleCell--time cls-60">12:00</div>
						<div class="scheduleCell scheduleCell--time cls-60">12:30</div>
						<div class="scheduleCell scheduleCell--time cls-60">13:00</div>
						<div class="scheduleCell scheduleCell--time cls-60">13:30</div>
						<div class="scheduleCell scheduleCell--time cls-60">14:00</div>
						<div class="scheduleCell scheduleCell--time cls-60">14:30</div>
						<div class="scheduleCell scheduleCell--time cls-60">15:00</div>
						<div class="scheduleCell scheduleCell--time cls-60">15:30</div>
						</div>

						<div class="weddingSchedule__spContent">
						<div class="scheduleCell scheduleCell--black cls-30">起床・準備</div>
						<div class="scheduleCell scheduleCell--black cls-30">出発</div>
						<div class="scheduleCell scheduleCell--black cls-30">最終の打ち合わせ・荷物確認</div>
						<div class="scheduleCell scheduleCell--black cls-30">支度開始</div>

						<div class="scheduleCell scheduleCell--black cls-30">ファーストミート</div>
						<div class="scheduleCell scheduleCell--black cls-30">写真撮影</div>
						<div class="scheduleCell scheduleCell--black cls-30">親族紹介</div>
						<div class="scheduleCell scheduleCell--black cls-30">親族リハーサル</div>

						<div class="scheduleCell scheduleCell--pink cls-60">挙式・フラワーシャワー</div>

						<div class="scheduleCell scheduleCell--black cls-20">アフターセレモニー</div>
						<div class="scheduleCell scheduleCell--black cls-20">親族紹介</div>
						<div class="scheduleCell scheduleCell--black cls-20">集合写真</div>

						<div class="scheduleCell scheduleCell--green cls-15">披露宴開式</div>
						<div class="scheduleCell scheduleCell--black cls-15">主賓挨拶</div>
						<div class="scheduleCell scheduleCell--black cls-15">来賓挨拶</div>
						<div class="scheduleCell scheduleCell--black cls-15">親族挨拶</div>

						<div class="scheduleCell scheduleCell--black cls-20">乾杯・食事スタート</div>
						<div class="scheduleCell scheduleCell--black cls-20">友人スピーチ</div>
						<div class="scheduleCell scheduleCell--black cls-20">ケーキ入刀</div>

						<div class="scheduleCell scheduleCell--black cls-60">中座</div>

						<div class="scheduleCell scheduleCell--black cls-20">再入場</div>
						<div class="scheduleCell scheduleCell--black cls-20">余興</div>
						<div class="scheduleCell scheduleCell--black cls-20">テーブルラウンド</div>

						<div class="scheduleCell scheduleCell--black cls-15">祝電紹介</div>
						<div class="scheduleCell scheduleCell--black cls-15">記念品贈呈</div>
						<div class="scheduleCell scheduleCell--black cls-15">親族挨拶</div>
						<div class="scheduleCell scheduleCell--black cls-15">謝辞</div>

						<div class="scheduleCell scheduleCell--green cls-60">退場・お見送り</div>

						<div class="scheduleCell scheduleCell--black cls-20">着替え・忘れ物チェック</div>
						<div class="scheduleCell scheduleCell--black cls-20">退館・出発</div>
						<div class="scheduleCell scheduleCell--black cls-20">帰着</div>
						</div>
					</div>

					<div class="weddingSchedule__dayTitle">翌日</div>

					<div class="weddingSchedule__spBody">
						<div class="weddingSchedule__spTime">
						<div class="scheduleCell scheduleCell--time cls-360"></div>
						</div>
						<div class="weddingSchedule__spContent">
						<div class="scheduleCell scheduleCell--black scheduleCell--diagonal cls-360"></div>
						</div>
					</div>
					<p class="weddingSchedule__note sp">
					※上記は一例です。挙式スタイルや演出内容によって所要時間は変動します。
					</p>

					<div class="pgvs_schedule_main_imgs-sp">
						<div class="cls-top">
							<div class="cls-1"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/vs/schedule_sp_01_b.jpg')); ?>" alt="イメージ"></div>
							<div class="cls-2"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/vs/schedule_sp_02_b.jpg')); ?>" alt="イメージ"></div>
						</div>
						<div class="cls-btm">
							<div class="cls-1"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/vs/schedule_sp_03_b.jpg')); ?>" alt="イメージ"></div>
							<div class="cls-2"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/vs/schedule_sp_04_b.jpg')); ?>" alt="イメージ"></div>
						</div>
					</div>
					</div>

					<p class="weddingSchedule__note pc">
					※上記は一例です。挙式スタイルや演出内容によって所要時間は変動します。
					</p>
				</div>
			</div>

			<div class="pgvs_schedule_main_imgs-pc">
				<div class="cls-left cls-1">
					<img src="<?php echo esc_url(get_theme_file_uri('assets/images/vs/schedule_left_01.png')); ?>" alt="イメージ">
					<img src="<?php echo esc_url(get_theme_file_uri('assets/images/vs/schedule_left_02.png')); ?>" alt="イメージ">
					<img src="<?php echo esc_url(get_theme_file_uri('assets/images/vs/schedule_left_03.png')); ?>" alt="イメージ">
					<img src="<?php echo esc_url(get_theme_file_uri('assets/images/vs/schedule_left_04.png')); ?>" alt="イメージ">
					<img class="cls-max" src="<?php echo esc_url(get_theme_file_uri('assets/images/vs/schedule_left_05.png')); ?>" alt="イメージ">
				</div>
				<div class="cls-right cls-1">
					<img src="<?php echo esc_url(get_theme_file_uri('assets/images/vs/schedule_right_01.png')); ?>" alt="イメージ">
					<img src="<?php echo esc_url(get_theme_file_uri('assets/images/vs/schedule_right_02.png')); ?>" alt="イメージ">
					<img src="<?php echo esc_url(get_theme_file_uri('assets/images/vs/schedule_right_03.png')); ?>" alt="イメージ">
					<img src="<?php echo esc_url(get_theme_file_uri('assets/images/vs/schedule_right_04.png')); ?>" alt="イメージ">
				</div>
			</div>
			<!-- <div class="pgvs_schedule_main_imgs-sp">
				<div class="cls-top">
					<div class="cls-1"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/vs/schedule_sp_01_a.jpg')); ?>" alt="イメージ"></div>
					<div class="cls-2"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/vs/schedule_sp_02_a.jpg')); ?>" alt="イメージ"></div>
				</div>
				<div class="cls-btm">
					<div class="cls-1"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/vs/schedule_sp_03_a.jpg')); ?>" alt="イメージ"></div>
					<div class="cls-2"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/vs/schedule_sp_04_a.jpg')); ?>" alt="イメージ"></div>
				</div>
			</div> -->
		</div>

		<div class="pgvs_schedule_box fade-anime" data-fade="fade-up">
			<p>
				近場ウェディングでは、挨拶やセレモニーに追われて、ゲストとゆっくり話す時間が取れなかったという声も少なくありません。<br>
				<br>
				リゾートウェディングなら、前日の到着から翌日以降まで、大切な人たちとの時間がずっと続きます。<br>
				挙式の瞬間だけでなく、“人生最高の3日間”として心に残る結婚式です。
			</p>
		</div>
	</div>
</section>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const schedules = document.querySelectorAll(".js-weddingSchedule");

  schedules.forEach((schedule) => {
    const tabs = schedule.querySelectorAll("[data-tab]");
    const panels = schedule.querySelectorAll("[data-panel]");

    tabs.forEach((tab) => {
      tab.addEventListener("click", () => {
        const target = tab.dataset.tab;

        tabs.forEach((item) => {
          item.classList.toggle("is-active", item.dataset.tab === target);
        });

        panels.forEach((panel) => {
          panel.classList.toggle("is-active", panel.dataset.panel === target);
        });
      });
    });
  });
});
</script>