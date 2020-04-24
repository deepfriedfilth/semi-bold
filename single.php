<?php // this must be the ..post ?>
<?php get_header(); ?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
			<?php
			while(have_posts()):
				the_post();

				get_template_part('template-parts/content', get_post_type());

				if(comments_open() || get_comments_number()):
					// comments_template();
					// Replace comments with button to load this on separate page
				?>

				<div class="comments">
					<a href="#" class="btn comments-btn">See responses (<?php echo get_comments_number(); ?>)</a>
				</div>

				<?php
				endif;

				// the_post_navigation();

			endwhile;
			?>
			</main>
		</div>

<?php get_sidebar('post'); ?>
<?php get_footer(); ?>