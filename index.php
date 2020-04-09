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
				<h2>地域の情報検索サイト</h2>
				<ul class="list2">
					<li><a href="list_foods.html"><img src="<?php echo get_template_directory_uri(); ?>/images/mark_foods.png" alt="" class="img"><?php echo get_category(2)->name; ?>を調べる<br><span><?php echo get_category(2)->category_count; ?>件</span></a></li>
					<li><a href="list_job.html"><img src="<?php echo get_template_directory_uri(); ?>/images/mark_job.png" alt="" class="img">求人情報を探す<br><span><?php echo get_category(3)->count ?>件</span></a></li>
					<li><a href="list_clinic.html"><img src="<?php echo get_template_directory_uri(); ?>/images/mark_clinic.png" alt="" class="img">病院を探す<br><span><?php echo get_category(4)->count ?>件</span></a></li>
					<li><a href="list_scool.html"><img src="<?php echo get_template_directory_uri(); ?>/images/mark_school.png" alt="" class="img">習い事を探す<br><span><?php echo get_category(5)->count ?>件</span></a></li>

				</ul>

				<h2>地域の不動産情報</h2>
				<ul class="list2">
					<li><a href="list_fudosan.html"><img src="<?php echo get_template_directory_uri(); ?>/images/mark_fudosan.png" alt="" class="img">不動産情報（売買）<br><span><?php echo get_category(7)->count ?>件</span></a></li>
					<li><a href="list_chintai.html"><img src="<?php echo get_template_directory_uri(); ?>/images/mark_fudosan.png" alt="" class="img">不動産情報（賃貸）<br><span><?php echo get_category(8)->count ?>件</span></a></li>
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
				<?php
				$args = array(
					'category' => 5,
					'posts_per_page' => 1,
					'orderby' => 'date',
				);
				$posts_array = get_posts($args);
				global $post;
				if ($posts_array) :
					foreach ($posts_array as $post) : setup_postdata($post); ?>
						<div class="list">
							<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<p><?php the_excerpt(); ?></p>
							<p class="name"><a href="<?php the_permalink(); ?>">サンプルお稽古</a></p>
						</div>
				<?php endforeach;
				endif;
				wp_reset_postdata();
				?>


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