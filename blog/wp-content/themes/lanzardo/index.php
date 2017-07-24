<?php 
get_header();
?>

		<!-- start post -->
		<div class="post">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


	
<div class="articolo" id="articolo-<?php the_ID(); ?>">
	 <?php 
              $dopo_titolo = "";
              if (!is_single() && !is_page()) { 
                 $dopo_titolo = "</a>";
              ?>
                 <a href="<?php the_permalink(); ?>" rel="bookmark">
              <?php
              }                
             ?>
           <h2><?php the_title(); echo $dopo_titolo; ?></h2>
	<div class="meta"><p><?php the_author() ?> (<?php the_date() ?>, <?php the_time() ?>) <?php edit_post_link(__('Edit This')); ?></p></div>
	
	<div class="storycontent">
		<?php the_content(__('(more...)')); ?>
	</div>
	
	<div class="feedback">
            <?php wp_link_pages(); ?>
            <p><?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?></p>
	</div>

</div>

<?php comments_template(); // Get wp-comments.php template ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php posts_nav_link(' &#8212; ', __('&laquo; Previous Page'), __('Next Page &raquo;')); ?>

		</div><!-- end post -->

<?php get_footer(); ?>
