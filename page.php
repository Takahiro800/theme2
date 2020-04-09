<?php get_header(); ?>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

		<div id="contents" class="inner">

			<div id="contents-in">

				<div id="main">

					<section>

						<h2><?php the_title(); ?></h2>
						</h2>

						<h3>サンプル見出し</h3>
						<?php the_content(); ?>

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
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>