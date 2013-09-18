<div class="main_box">
	<section class="left_section">
		<h1> Recent News </h1>
		<br />
		<hr />
		<br />
		<?php query_posts('showposts=3'); ?>
		<?php while (have_posts()) : the_post(); ?>
			<article>
				<header>
					<hgroup>
						<h1>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
						</h1>
						<h2>Posted in <?php the_category(', ') ?> </h2>
					</hgroup>
				</header>
				<p><?php the_content()?></p>
				<footer>
					<p>- <?php the_author()?>, <?php the_time('F jS, Y') ?></p> 
					<p><?php comments_popup_link('No Comments >>', '1 Comment >>', '% Comments >>'); ?></p>
				</footer>
			</article>
		<?php endwhile;?>
	</section>
	<aside class="right_aside">
		<?php echo $twitter_widget;?>
	</aside>
</div>