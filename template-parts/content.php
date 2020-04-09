<article id="post-<?php the_ID(); ?>" <?php post_class('wrap'); ?>>
	<header>
		<h1 class="wrap"><?php the_title(); ?></h1>
	</header>

	<section>
		<?php the_content(); ?>
	</section>

	<aside>
		<?php // brief author bio starting with ellipsis ?>
	</aside>

	<footer>
		<?php // link to author's profile I guess ?>
	</footer>
</article>