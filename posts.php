<?php theme_include('partials/header'); ?>

<!-- +++++ Posts Lists +++++ -->	
<?php if(has_posts()): ?>    
<!-- We have posts, it's safe to loop. -->
    <?php $i = 0; while(posts()): $i++; ?>
	<div id="bg<?php echo $i % 2; ?>"> 
	    <div class="container">
			<div class="row">
				<div class="col-lg-12">                
                    <a href="<?php echo article_url(); ?>"><h2><?php echo article_title(); ?></h2></a>
					<div class="article-meta">
							<time class="article-meta__time" datetime="<?php echo date(DATE_W3C, article_time()); ?>"> <i class="fa fa-calendar"></i> <?php echo article_date(); ?></time>
							
							<span class="article-meta__author"><i class="fa fa-user"></i> by <?php echo article_author('real_name'); ?></span>
							<br />
							<span class="article-meta__category"><i class="fa fa-folder-o"></i> in <a href="<?php echo article_category_url(); ?>"><?php echo article_category(); ?></a></span>
							<span class="article-meta__read-time"><i class="fa fa-clock-o"></i> Read Time: <?php echo dg_est_reading_time(); ?></span>
						</div><br />
							<!-- change the default backup image below by replacing the postimg link -->
							<div class="posts-image" style="background-image: url(<?php echo article_custom_field('thumbnail', 'http://s13.postimg.org/w3p4tc5pz/article_img_default.jpg'); ?>);">
							<div class="overlay"></div>							
							</div>
							<br />
							<?php echo cust_excerpt(article_markdown()); ?>
							<p><a href="<?php echo article_url(); ?>">Continue Reading...</a></p>
							
						</div>
					</div>
                    
                </div>
            </div><!-- /row -->
        </div><!-- /container -->
     </div><!-- /#bg -->
    <?php endwhile; ?>

<?php if(has_pagination()): ?>           
    <div id="grey">
        <div class="col-lg-8 col-lg-offset-2">
        <?php echo posts_prev('# Back'); ?>
        <?php echo posts_next('# Next'); ?>
        </div>
    </div><!-- /#grey -->
<?php endif; ?>
                
<?php else: ?>
    <div id="white">
        <div class="col-lg-8 col-lg-offset-2">
            <p>Looks like you have some writing to do!</p>
        </div>
    </div><!-- /#white -->
<?php endif; ?>     
<!-- +++++ Posts Lists +++++ -->	

<?php theme_include('partials/footer'); ?>