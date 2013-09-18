<div class="main_box">
	<section class="left_section">
		<h1> Portfolio </h1>
		<br />
		<hr />
		<br />
		<?php
			foreach($portfolio as $portfolio_type)
			{
		?>
				<article>
					<header>
						<hgroup>
							<h1>
								<a href="<?php echo base_url().$this->uri->uri_string().'/'.$portfolio_type['url'];?>"><?php echo $portfolio_type['label']; ?></a>
							</h1>
							<h2><?php echo $portfolio_type['slogan']; ?> </h2>
						</hgroup>
					</header>
					<p><?php echo $portfolio_type['description'];?></p>
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