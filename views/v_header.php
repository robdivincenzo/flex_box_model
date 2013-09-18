<?php $CDNPrefix=base_url().'cdn/'.$site_type.'/css/'?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title><?php echo $title;?></title>
	<link rel="stylesheet" href="<?php echo $CDNPrefix;?>main.css"> 
</head>
<body>
	<div class="site_wrapper">
		<header class="site_header">
			<h1>Site Header</h1>
		</header>
		<nav class="top_nav">
			<ul>
				<li><a <?php echo $this->uri->segment(1)=='news'||$this->uri->segment(1)==''?'class="purpletext"':'';?> href="<?php echo base_url()?>">News</a></li>
				<li><a href="<?php echo base_url()?>blog">Blog</a></li>
				<li><a <?php echo $this->uri->segment(1)=='about'?'class="purpletext"':'';?> href="<?php echo base_url()?>about">About</a>
					<ul>
						<li><a <?php echo $this->uri->segment(2)=='our_team'?'class="purpletext"':'';?> href="<?php echo base_url()?>about/our_team">Our Team</a>
					</ul>
				</li>
				<li><a <?php echo $this->uri->segment(1)=='portfolio'?'class="purpletext"':'';?> href="<?php echo base_url()?>portfolio">Portfolio</a>
					<ul>
						<li><a <?php echo $this->uri->segment(2)=='web_development'?'class="purpletext"':'';?> href="<?php echo base_url()?>portfolio/web_development">Web Development</a></li>
						<li><a <?php echo $this->uri->segment(2)=='video_production'?'class="purpletext"':'';?> href="<?php echo base_url()?>portfolio/video_production">Video Production</a></li>
					</ul>
				</li>
			</ul>
		</nav>