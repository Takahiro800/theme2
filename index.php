<?php get_header(); ?>
<div id="contents" class="inner">

	<div id="contents-in">

		<aside id="mainimg">
			<img src="<?php echo get_template_directory_uri(); ?>/images/mainimg_01.jpg" alt="飲食店を探す" id="img1">
			<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/mainimg_02.jpg" alt="病院を探す" id="img2"></a>
			<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/mainimg_03.jpg" alt="美容院を探す" id="img3"></a>
			<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/mainimg_04.jpg" alt="習い事を探す" id="img4"></a>
			<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/mainimg_05.jpg" alt="介護施設を探す" id="img5"></a>
		</aside>

		<div id="main">

			<section>

				<h2>テンプレートのご利用前に必ずお読み下さい</h2>

				<h3>利用規約のご案内</h3>
				<p>このテンプレートは、<a href="https://template-party.com/">Template Party</a>にて無料配布している『ポータルサイト向け 無料ホームページテンプレート tp_portal1』です。必ずダウンロード先のサイトの<a href="https://template-party.com/read.html">利用規約</a>をご一読の上でご利用下さい。</p>
				<p><strong class="color1">■HP最下部の著作表示『Web Design:Template-Party』は無断で削除しないで下さい。</strong><br>
					わざと見えなく加工する事も禁止です。</p>
				<p><strong class="color1">■下部の著作を外したい場合は</strong><br>
					<a href="https://template-party.com/">Template-Party</a>の<a href="https://template-party.com/member.html">ライセンス契約</a>を行う事でHP下部の著作を外す事ができます。</p>

				<h3>上のスライドショー写真はダウンロードファイルには梱包されていません</h3>
				<p>配布元である「PIXTA」さんの一般利用規約範囲内で利用している為、ダウンロードファイルには梱包されておりません。PSD特典にも含まれませんので同じ写真が必要な際はPIXTAさんで直接お買い求め下さい。</p>

				<h3>当テンプレートにはお問い合わせフォーム（自動フォーム：試用版）がセットされています</h3>
				<p><a href="contact.html">contact.html</a>と同じ３項目のお問い合わせフォームを簡単に使えるようにセットしています。</p>
				<p><strong class="color1">■自動フォームを使う場合（※編集に入る前にご確認下さい）</strong><br>
					あなたのメールアドレス設定と、簡単な編集だけで使えます。<a href="https://template-party.com/file/formgen_manual_set2.html" target="_blank">詳しくはこちらのマニュアルをご覧下さい。</a></p>
				<p><strong class="color1">■自動フォームを使わない場合</strong><br>
					テンプレートに梱包されている「form.html」「confirm.html」「finish.html」の3枚のファイルを削除して下さい。</p>

				<h3>メニューなどの開閉ブロック（openclose.js）について</h3>
				<p>当テンプレートの開閉ブロックパーツは<a href="https://www.crytus.info/" target="_blank">クリタス様</a>提供のプログラムを使用しています。openclose.jsファイルは改変せずにご利用下さい。<br>
					また、当サイトのテンプレート以外に使いたいなど、「プログラムのみ」を使う場合は<a href="https://template-party.com/free_program/openclose_license.html">こちらの規約</a>をお守り下さい。</p>

				<h3>当テンプレートの詳しい使い方は</h3>
				<p><a href="company.html">こちらをご覧下さい。</a></p>

			</section>

			<section>
				<h2>ポータルサイト向けCMS販売中<span>CMS</span></h2>
				<p>複数のユーザーが情報を登録し、訪問客がそれを閲覧するポータルサイト向けCMS販売中です。<br>
					<a href="https://template-party.com/portal_db/"><img src="<?php echo get_template_directory_uri(); ?>/https://template-party.com/portal_db/images/img01.jpg" alt=""></a></p>
			</section>

			<section>

				<h2>地域の情報検索サイト</h2>
				<ul class="list2">
					<li><a href="list_foods.html"><img src="<?php echo get_template_directory_uri(); ?>/images/mark_foods.png" alt="" class="img">飲食店を調べる<br><span>XX件</span></a></li>
					<li><a href="list_job.html"><img src="<?php echo get_template_directory_uri(); ?>/images/mark_job.png" alt="" class="img">求人情報を探す<br><span>XX件</span></a></li>
					<li><a href="list_clinic.html"><img src="<?php echo get_template_directory_uri(); ?>/images/mark_clinic.png" alt="" class="img">病院を探す<br><span>XX件</span></a></li>
					<li><a href="list_scool.html"><img src="<?php echo get_template_directory_uri(); ?>/images/mark_school.png" alt="" class="img">習い事を探す<br><span>XX件</span></a></li>
				</ul>

				<h2>地域の不動産情報</h2>
				<ul class="list2">
					<li><a href="list_fudosan.html"><img src="<?php echo get_template_directory_uri(); ?>/images/mark_fudosan.png" alt="" class="img">不動産情報（売買）<br><span>XX件</span></a></li>
					<li><a href="list_chintai.html"><img src="<?php echo get_template_directory_uri(); ?>/images/mark_fudosan.png" alt="" class="img">不動産情報（賃貸）<br><span>XX件</span></a></li>
				</ul>

			</section>

			<section id="new">
				<h2>更新情報・お知らせ</h2>
				<dl>
					<dt>2019/12/12</dt>
					<dd>style.cssの900pxと480px以下の両方に「.sh {display:block;}」と「.pc {display:none;}」が入ってしまっていたので480px以下の方は削除しました。※そのままでも問題は出ないと思います。<span class="newicon">NEW</span></dd>
					<dt>2019/09/20</dt>
					<dd>list_fudosan_chintai.htmlの日本地図の岡山と島根の場所が逆だったのでmap.cssを修正。</dd>
					<dt>2019/03/18</dt>
					<dd>tp_portal1配布開始。</dd>
					<dt>20XX/00/00</dt>
					<dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
					<dt>20XX/00/00</dt>
					<dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
					<dt>20XX/00/00</dt>
					<dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
					<dt>20XX/00/00</dt>
					<dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
					<dt>20XX/00/00</dt>
					<dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
					<dt>20XX/00/00</dt>
					<dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
				</dl>
				<p class="r">&raquo;&nbsp;<a href="#">過去ログ</a></p>
			</section>

			<section>

				<h2>新着 不動産情報</h2>

				<h3>売買物件</h3>

				<div class="list-compact">
					<p class="img"><a href="item.html"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_fudosan1.jpg" alt=""></a></p>
					<h4><a href="item.html">タイトル</a></h4>
					<p>ここに簡単な説明を入れます。サンプルテキスト。</p>
					<p class="name"><a href="item.html">サンプル不動産</a></p>
				</div>

				<div class="list-compact">
					<p class="img"><a href="item.html"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_fudosan1.jpg" alt=""></a></p>
					<h4><a href="item.html">タイトル</a></h4>
					<p>ここに簡単な説明を入れます。サンプルテキスト。</p>
					<p class="name"><a href="item.html">サンプル不動産</a></p>
				</div>

				<div class="list-compact">
					<p class="img"><a href="item.html"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_fudosan1.jpg" alt=""></a></p>
					<h4><a href="item.html">タイトル</a></h4>
					<p>ここに簡単な説明を入れます。サンプルテキスト。</p>
					<p class="name"><a href="item.html">サンプル不動産</a></p>
				</div>

				<div class="list-compact">
					<p class="img"><a href="item.html"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_fudosan1.jpg" alt=""></a></p>
					<h4><a href="item.html">タイトル</a></h4>
					<p>ここに簡単な説明を入れます。サンプルテキスト。</p>
					<p class="name"><a href="item.html">サンプル不動産</a></p>
				</div>

				<h3>賃貸物件</h3>

				<div class="list-compact">
					<p class="img"><a href="item.html"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_fudosan2.jpg" alt=""></a></p>
					<h4><a href="item.html">タイトル</a></h4>
					<p>ここに簡単な説明を入れます。サンプルテキスト。</p>
					<p class="name"><a href="item.html">サンプル不動産</a></p>
				</div>

				<div class="list-compact">
					<p class="img"><a href="item.html"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_fudosan2.jpg" alt=""></a></p>
					<h4><a href="item.html">タイトル</a></h4>
					<p>ここに簡単な説明を入れます。サンプルテキスト。</p>
					<p class="name"><a href="item.html">サンプル不動産</a></p>
				</div>

				<div class="list-compact">
					<p class="img"><a href="item.html"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_fudosan2.jpg" alt=""></a></p>
					<h4><a href="item.html">タイトル</a></h4>
					<p>ここに簡単な説明を入れます。サンプルテキスト。</p>
					<p class="name"><a href="item.html">サンプル不動産</a></p>
				</div>

				<div class="list-compact">
					<p class="img"><a href="item.html"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_fudosan2.jpg" alt=""></a></p>
					<h4><a href="item.html">タイトル</a></h4>
					<p>ここに簡単な説明を入れます。サンプルテキスト。</p>
					<p class="name"><a href="item.html">サンプル不動産</a></p>
				</div>

			</section>

			<section>

				<h2>新着 求人情報</h2>

				<div class="list">
					<h4><a href="item.html">タイトル</a></h4>
					<p>ここに簡単な説明を入れます。サンプルテキスト。</p>
					<p class="name"><a href="item.html">サンプル求人</a></p>
				</div>

			</section>

			<section>

				<h2>新着 飲食店情報</h2>

				<div class="list">
					<h4><a href="item.html">タイトル</a></h4>
					<p>ここに簡単な説明を入れます。サンプルテキスト。</p>
					<p class="name"><a href="item.html">サンプル飲食店</a></p>
				</div>

			</section>

			<section>

				<h2>新着 病院情報</h2>

				<div class="list">
					<h4><a href="item.html">タイトル</a></h4>
					<p>ここに簡単な説明を入れます。サンプルテキスト。</p>
					<p class="name"><a href="item.html">サンプルクリニック</a></p>
				</div>

			</section>

			<section>

				<h2>新着 習い事情報</h2>

				<div class="list">
					<h4><a href="item.html">タイトル</a></h4>
					<p>ここに簡単な説明を入れます。サンプルテキスト。</p>
					<p class="name"><a href="item.html">サンプルお稽古</a></p>
				</div>

			</section>

		</div>
		<!--/#main-->

		<div id="sub">
			<?php get_template_part('template-parts/loop', 'sub'); ?>
		</div>
		<!--/#sub-->

	</div>
	<!--/#contents-in-->

	<div id="side">
		<?php get_template_part('template-parts/loop', 'side'); ?>
	</div>
	<!--/#side-->

</div>
<!--/#contents-->