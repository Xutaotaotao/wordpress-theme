<?php get_header(); ?>
<!-- 文章部分 -->
<div id="container">
	<?php if(have_posts()):?>
		<?php while(have_posts()):the_post(); ?>
			<div class="post id="post-<?php the_ID(); ?>"><!-- 为每篇文章添加特殊id -->
				<h2>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>
				<div class="post-content">
					<?php the_content() ?><!--文章-->
					<?php link_pages('<p><strong>Pages:</strong>','</p>','number'); ?>
					<?php edit_post_link('Edit','<p>','</p>') ?>
				</div>
			</div>
		<?php endwhile; ?>
		<?php else: ?>
			<div class="post">
				<h2>Not Found</h2>
			</div>
	<?php endif; ?>
</div>

<!-- 侧边栏	 -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>
</body>

</html>