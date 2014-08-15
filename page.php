<?php theme_include('partials/header'); ?>

<!-- +++++ Projects Section +++++ -->
	<?php if(page_custom_field('featured-image')): ?>
		<!-- change the default backup image below by replacing the postimg link -->
		<div class="featured-image" style="background-image: url(<?php echo page_custom_field('featured-image', 'http://s13.postimg.org/w3p4tc5pz/article_img_default.jpg'); ?>);">
			<div class="overlay"></div>
			
				<?php if(page_custom_field('featured-image-credit')): ?>
				<div class="featured-image__credit"><?php echo page_custom_field('featured-image-credit'); ?></div>
				<?php endif; ?>
		<header class="post-header">
					<div class="container">
						<h1><?php echo page_title(); ?></h1>
						
						<div class="article-meta">
							<!-- If you wanted to add a date, do it here
							<time class="article-meta__time"> <i class="fa fa-calendar"></i> Last edited August 12, 2014</time>
							-->
						</div>
					
					</div>
				</header>
		</div>
	<div class="container pt">
		<article class="article-post">
		
		<?php else: ?>
		<header class="post-header">
			<div class="container">
				<h1><?php echo page_title(); ?></h1>
				
				
			</div>
		</header>
		<div class="container pt">
		<article class="article-post">
		<?php endif; ?>

		<div class="container post-content">
			
			<p><?php echo page_content(); ?></p>
		</div>
		
		
		
	</article>
	
	</div><!-- /container -->

<script>
function goBack()
  {
  window.history.back()
  }
</script>

<?php theme_include('partials/footer'); ?>