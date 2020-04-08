<?php get_header(); ?>

<div id="contents" class="inner">

	<div id="contents-in">

		<div id="main">

			<section>

				<h2>飲食店を探す</h2>


				<div class="list">

					<p class="img"><a href="item.html"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_foods1.jpg" alt="タイトル"></a></p>

					<div class="text">

						<h4><a href="item.html">タイトル</a><span class="newicon">NEW</span></h4>

						<p class="mb10">ここに説明を入れます。サンプルテキスト。</p>

						<p class="mini1 color2">東京都品川区XXXX</p>

						<span class="icon"><a href="#">全室禁煙</a></span>
						<span class="icon"><a href="#">ご予約可</a></span>
						<span class="icon"><a href="#">駐車場あり</a></span>

						<p><a href="item.html" class="btn2">詳細をみる</a></p>

					</div>
					<!--/.text-->

					<p class="date"><span>■登録日:2019/03/03 20:18</span><span>■更新日:2019/03/14 10:37</span></p>

					<p class="name"><a href="item.html">サンプル飲食店</a></p>
					<!--{/def}-->

				</div>
				<!--/.list-->

				<div class="list">

					<p class="img"><a href="item.html"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_foods1.jpg" alt="タイトル"></a></p>

					<div class="text">

						<h4><a href="item.html">タイトル</a><span class="option1">option1</span></h4>

						<p class="mb10">右上の「option1」の文字情報はhtml側で直接変更できます。<br>
							<span style="color:red">&lt;span class=&quot;option1&quot;&gt;option1&lt;/span&gt;</span><br>
							色はcssフォルダのstyle.cssの設定で変更できます。</p>

						<p class="mini1 color2">東京都品川区XXXX</p>

						<span class="icon"><a href="#">全室禁煙</a></span>
						<span class="icon"><a href="#">ご予約可</a></span>
						<span class="icon"><a href="#">駐車場あり</a></span>

						<p><a href="item.html" class="btn2">詳細をみる</a></p>

					</div>
					<!--/.text-->

					<p class="date"><span>■登録日:2019/03/03 20:18</span><span>■更新日:2019/03/14 10:37</span></p>

					<p class="name"><a href="item.html">サンプル飲食店</a></p>
					<!--{/def}-->

				</div>
				<!--/.list-->

				<div class="list">

					<p class="img"><a href="item.html"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_foods1.jpg" alt="タイトル"></a></p>

					<div class="text">

						<h4><a href="item.html">タイトル</a><span class="option2">option2</span></h4>

						<p class="mb10">右上の「option2」の文字情報はhtml側で直接変更できます。<br>
							<span style="color:red">&lt;span class=&quot;option2&quot;&gt;option2&lt;/span&gt;</span><br>
							色はcssフォルダのstyle.cssの設定で変更できます。</p>

						<p class="mini1 color2">東京都品川区XXXX</p>

						<span class="icon"><a href="#">全室禁煙</a></span>
						<span class="icon"><a href="#">ご予約可</a></span>
						<span class="icon"><a href="#">駐車場あり</a></span>

						<p><a href="item.html" class="btn2">詳細をみる</a></p>

					</div>
					<!--/.text-->

					<p class="date"><span>■登録日:2019/03/03 20:18</span><span>■更新日:2019/03/14 10:37</span></p>

					<p class="name"><a href="item.html">サンプル飲食店</a></p>
					<!--{/def}-->

				</div>
				<!--/.list-->

			</section>

		</div>
		<!--/#main-->

		<div id="sub">

			<nav>
				<h2>情報一覧</h2>
				<ul class="submenu">
					<?php
					$args = array(
						'title_li' => '',
						'exclude' => '6',
					);
					wp_list_categories($args); ?>
				</ul>
			</nav>

			<nav>
				<h2>不動産情報</h2>
				<ul class="submenu">
					<?php
					$args = array(
						'title_li' => '',
						'exclude' => '1,2,3,4,5,'
					);
					wp_list_categories($args); ?>
				</ul>
			</nav>

			<div class="box1">
				<h2 class="mb10">運営会社</h2>
				<p>東京都XX区XXXXビル３F<br>
					TEL：00-0000-0000<br>
					受付：00:00〜00:00<br>
					定休日：水曜日</p>
			</div>

			<p>
				<a href="recruit.html"><img src="<?php echo get_template_directory_uri(); ?>/images/banner1.jpg" alt="採用情報" class="pc"></a>
				<a href="recruit.html"><img src="<?php echo get_template_directory_uri(); ?>/images/banner1_sh.jpg" alt="採用情報" class="sh"></a>
			</p>
			<p>上のバナー画像は、901px以上の端末と900px以下とで画像２種類が切り替わります。<br>
				<a href="company.html#banner">詳しい説明はこちら。</a></p>

		</div>
		<!--/#sub-->

	</div>
	<!--/#contents-in-->

	<div id="side">

		<section>

			<h2>管理者おすすめサイト</h2>

			<div class="list-sub">
				<a href="#" target="_blank">
					<p class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_yahoo.jpg" alt=""></p>
					<h4>タイトル</h4>
					<p>ここに簡単な説明を入れます。サンプルテキスト。</p>
					<span class="new">new</span>
				</a>
			</div>

			<div class="list-sub">
				<a href="#" target="_blank">
					<p class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_amazon.jpg" alt=""></p>
					<h4>タイトル</h4>
					<p>ここに簡単な説明を入れます。サンプルテキスト。</p>
					<span class="new">new</span>
				</a>
			</div>

		</section>

		<section>

			<h2>お知らせ</h2>

			<div class="list-sub">
				<a href="#">
					<p class="img t"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_side1.jpg" alt="タイトル"></p>
					<h4>アルバイト募集！</h4>
					<p>ここに簡単な説明を入れます。サンプルテキスト。</p>
					<p class="name">サンプルカフェ</p>
				</a>
			</div>

			<div class="list-sub">
				<a href="#">
					<p class="img t"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_side2.png" alt="タイトル"></p>
					<h4>医療スタッフ募集</h4>
					<p>ここに簡単な説明を入れます。サンプルテキスト。</p>
					<p class="name">サンプルクリニック</p>
				</a>
			</div>

			<div class="list-sub">
				<a href="#">
					<p class="img t"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_side3.jpg" alt="タイトル"></p>
					<h4>Cafeオープン記念</h4>
					<p>ここに簡単な説明を入れます。サンプルテキスト。</p>
					<p class="name">サンプルCafe</p>
				</a>
			</div>

			<div class="list-sub">
				<a href="#">
					<p class="img t"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_side1.jpg" alt="タイトル"></p>
					<h4>アルバイト募集！</h4>
					<p>ここに簡単な説明を入れます。サンプルテキスト。</p>
					<p class="name">サンプルカフェ</p>
				</a>
			</div>

			<div class="list-sub">
				<a href="#">
					<p class="img t"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_side2.png" alt="タイトル"></p>
					<h4>医療スタッフ募集</h4>
					<p>ここに簡単な説明を入れます。サンプルテキスト。</p>
					<p class="name">サンプルクリニック</p>
				</a>
			</div>

			<div class="list-sub">
				<a href="#">
					<p class="img t"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_side3.jpg" alt="タイトル"></p>
					<h4>Cafeオープン記念</h4>
					<p>ここに簡単な説明を入れます。サンプルテキスト。</p>
					<p class="name">サンプルCafe</p>
				</a>
			</div>

		</section>

	</div>
	<!--/#side-->

</div>
<!--/#contents-->

<?php get_footer(); ?>