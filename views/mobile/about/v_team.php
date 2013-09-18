<div class="main_box">
	<section class="left_section">
		<h1>Our Team</h1>
		<br />
		<hr />
		<br />
		<?php
			foreach($team as $member)
			{
		?>
				<article>
					<header>
						<hgroup>
							<h1>
								<?php echo $member['name']; ?>
							</h1>
							<h2><?php echo $member['title']; ?> </h2>
							<h3><?php echo $member['role']; ?> </h3>
						</hgroup>
					</header>
					<p><?php echo $member['biography'];?></p>
					<footer>
						<?php echo $member['industry_experience']; ?>
						<?php echo $member['programming_languages']; ?>
						<?php echo $member['databases']; ?>
						<?php echo $member['frameworks_and_libraries']; ?>
						<?php echo $member['media_production']; ?>
						<?php echo $member['other']; ?>
					</footer>
				</article>
		<?php
			}
		?>
	</section>
	<aside class="right_aside">
		<?php /* echo $twitter_widget;*/?>
	</aside>
</div>