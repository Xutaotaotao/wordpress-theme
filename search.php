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
					<?php the_excerpt() ?><!--文章-->
						<p class="postmetadata"><!--文章数据-->
							<?php _e('Filed under&#58;'); ?> 
							<?php the_category(', ') ?> 
							<?php _e('by'); ?> 
							<?php  the_author(); ?><br />
							<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
						</p>
				</div>
			</div>
		<?php endwhile; ?>
			<div class="post-nav"><!--文章导航-->
				<?php posts_nav_link('in between','befor','after'); ?>
			</div>
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