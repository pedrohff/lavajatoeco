<?php
/**
 *	The template for displaying the page content.
 *
 *	@package WordPress
 *	@subpackage illdy
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post' ); ?>>
	<?php if( has_post_thumbnail() ): ?>
		<div class="blog-post-image">
			<?php the_post_thumbnail( 'illdy-blog-list' ); ?>
		</div><!--/.blog-post-image-->
	<?php endif; ?>
	<div class="col-sm-12 blog-post-title-big">
		<h2><?php the_title(); ?><span class="span-dot"><?php _e( '.', 'illdy' ); ?></span></h2>
	</div><!--/.col-sm-12-->
	<div class="blog-post-entry markup-format">
		<?php
		the_content();

		wp_link_pages( array(
			'before'	=> '<div class="link-pages">' . __( 'Pages:', 'illdy' ),
			'after'		=> '</div><!--/.link-pages-->'
		) );
		?>
	</div><!--/.blog-post-entry.markup-format-->
</article><!--/#post-<?php the_ID(); ?>.blog-post-->