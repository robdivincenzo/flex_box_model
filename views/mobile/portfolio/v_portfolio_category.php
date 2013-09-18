<div class="main_box">
	<section class="left_section">
		<h1> <?php echo $category_label[0]['label'];?> </h1>
		<br />
		<hr />
		<br />
	
		<?php
			foreach($projects as $project)
			{
		?>
				<article>
					<header>
						<hgroup>
							<h1>
								<?php echo $project['name']; ?>
							</h1>
						</hgroup>
					</header>
					<p><?php echo $project['description'];?></p>
					<footer>
					</footer>
				</article>
		<?php
			}
		?>
	</section>
		<aside class="right_aside">
		<?php /*echo $twitter_widget;*/?>
	</aside>
</div>