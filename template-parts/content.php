<article id="post-<?php the_ID(); ?>" <?php post_class('wrap'); ?>>
	<header>
		<?php if(is_single()): ?>
		
		<h1><?php the_title(); ?></h1>
		
		<?php else: ?>
		
		<h2><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
		
		<?php endif; ?>
		
		<?php if(is_single()): ?>

		<div class="post-meta">
			<div class="author-avatar">
				<a href="#" class="user-avatar new-activity">
				<?php $author = get_the_author_meta(); ?>
					<?php echo get_avatar($author->ID); ?>
				</a>
			</div>
			<div class="post-info">
				<div class="author-links">
					<a href="#" class="post-author"><?php the_author(); ?></a>
					<a href="#" class="btn">Follow</a>
				</div>
				<div class="post-time">
					<time class="post-date"><?php the_date(); ?></time>
					<span class="post-read-time">1 min read<?php // read_time(); ?></span>
				</div>
			</div>
			<div class="author-social">
				<ul>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
				</ul>
			</div>
		</div>

		<?php endif; ?>

	</header>

	<section>
		<?php if(is_single()): ?>

		<?php the_content(); ?>	
		
		<?php else: ?>
		
		<?php the_excerpt(); ?>
		
		<?php endif; ?>
	</section>

	<?php if(is_single()): ?>

	<aside class="author-excerpt">
		<?php // brief author bio starting with ellipsis ?>
		<p>Excerpt here. Yadda, yadda, yadda. Ja bless Argentinialus, y'know? Wham, bam, thank you, ma'am. Eat my <a href="#">pop tart</a> or order <a href="#">boiled eggs</a>.</p>
	</aside>

	<footer class="author-info wrap">
		<div class="author-avatar">
			<a href="#" class="user-avatar new-activity">
			<?php $author = get_the_author_meta(); ?>
				<?php echo get_avatar($author->ID); ?>
			</a>
		</div>

		<div class="author-bio">
			<span>Written by</span>
			<a href="#" class="post-author"><?php the_author(); ?></a>
			<p>Biography here</p>	
		</div>

		<div class="author-link">
			<a href="#" class="btn">Follow</a>
		</div>
	</footer>

	<?php endif; ?>
</article>