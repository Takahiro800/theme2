<?php get_header(); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>


		<div id="contents" class="inner">

			<div id="contents-in">

				<div id="main">

					<article class="item">

						<h2><?php the_title(); ?><span class="new">NEW</span><span class="option1">オプション1</span><span class="option2">オプション2</span></h2>
						<p>詳細ページは飲食店用しか梱包していません。必要に応じてそれぞれの詳細ページを準備して下さい。</p>

						<figure class="c mb15"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_foods1.jpg" alt="タイトル"></figure>

						<?php the_content(); ?>

					</article>

					<?php previous_post_link( '%link', '前の記事へ', TRUE ); ?>
					<?php next_post_link( '%link', '次の記事へ', TRUE ); ?>

				</div>
				<!--/#main-->

				<div id="sub">

					<nav>
						<h2>情報一覧</h2>
						<ul class="submenu">
							<li><a href="list_foods.html">飲食店を探す</a></li>
							<li><a href="list_job.html">求人を探す</a></li>
							<li><a href="list_clinic.html">病院を探す</a></li>
							<li><a href="list_school.html">習い事を探す</a></li>
						</ul>
					</nav>

					<nav>
						<h2>不動産情報</h2>
						<ul class="submenu">
							<li><a href="list_fudosan.html">売買物件を探す</a></li>
							<li><a href="list_fudosan_chintai.html">賃貸物件を探す</a></li>
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
						<a href="recruit.html"><img src="images/banner1.jpg" alt="採用情報" class="pc"></a>
						<a href="recruit.html"><img src="images/banner1_sh.jpg" alt="採用情報" class="sh"></a>
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
							<p class="img"><img src="images/sample_yahoo.jpg" alt=""></p>
							<h4>タイトル</h4>
							<p>ここに簡単な説明を入れます。サンプルテキスト。</p>
							<span class="new">new</span>
						</a>
					</div>

					<div class="list-sub">
						<a href="#" target="_blank">
							<p class="img"><img src="images/sample_amazon.jpg" alt=""></p>
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
							<p class="img t"><img src="images/sample_side1.jpg" alt="タイトル"></p>
							<h4>アルバイト募集！</h4>
							<p>ここに簡単な説明を入れます。サンプルテキスト。</p>
							<p class="name">サンプルカフェ</p>
						</a>
					</div>

					<div class="list-sub">
						<a href="#">
							<p class="img t"><img src="images/sample_side2.png" alt="タイトル"></p>
							<h4>医療スタッフ募集</h4>
							<p>ここに簡単な説明を入れます。サンプルテキスト。</p>
							<p class="name">サンプルクリニック</p>
						</a>
					</div>

					<div class="list-sub">
						<a href="#">
							<p class="img t"><img src="images/sample_side3.jpg" alt="タイトル"></p>
							<h4>Cafeオープン記念</h4>
							<p>ここに簡単な説明を入れます。サンプルテキスト。</p>
							<p class="name">サンプルCafe</p>
						</a>
					</div>

					<div class="list-sub">
						<a href="#">
							<p class="img t"><img src="images/sample_side1.jpg" alt="タイトル"></p>
							<h4>アルバイト募集！</h4>
							<p>ここに簡単な説明を入れます。サンプルテキスト。</p>
							<p class="name">サンプルカフェ</p>
						</a>
					</div>

					<div class="list-sub">
						<a href="#">
							<p class="img t"><img src="images/sample_side2.png" alt="タイトル"></p>
							<h4>医療スタッフ募集</h4>
							<p>ここに簡単な説明を入れます。サンプルテキスト。</p>
							<p class="name">サンプルクリニック</p>
						</a>
					</div>

					<div class="list-sub">
						<a href="#">
							<p class="img t"><img src="images/sample_side3.jpg" alt="タイトル"></p>
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
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>