<?php
/**
 *	The template for dispalying the footer.
 *
 *	@package WordPress
 *	@subpackage illdy
 */
?>
<?php
$display_copyright = get_theme_mod( 'illdy_general_footer_display_copyright', 1 );
$footer_copyright = get_theme_mod( 'illdy_footer_copyright', __( '&copy; Copyright 2016. All Rights Reserved.', 'illdy' ) );
$img_footer_logo = get_theme_mod( 'illdy_img_footer_logo', esc_url( get_template_directory_uri() . '/layout/images/footer-logo.png' ) );
$svgfooter = "<svg id ='svgfooter' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 111.125 35.75' enable-background='new 0 0 111.125 35.75' xml:space='preserve'>
<g id='Layer_1' display='none'>
	<path display='inline' fill='#014422' d='M36.766,28.328c-3.221,0-5.83-2.607-5.83-5.828c0-3.219,2.609-5.829,5.83-5.829
		c1.396,0,2.675,0.492,3.679,1.31c-1.35-1.735-3.452-2.856-5.819-2.856c-4.072,0-7.375,3.302-7.375,7.375
		c0,4.073,3.303,7.375,7.375,7.375c2.368,0,4.47-1.121,5.819-2.855C39.441,27.837,38.161,28.328,36.766,28.328z'/>
	<path display='inline' fill='#84B041' d='M40.412,18.981'/>
</g>
<g id='Layer_4' display='none'>
	<path display='inline' fill='#014422' d='M40.444,17.981'/>
	<path display='inline' fill='#014422' d='M30.458,24.417'/>
	<path display='inline' fill='#014422' d='M8.458,19.458'/>
	
		<text transform='matrix(0.9108 0.3041 -0.3167 0.9485 29.5313 25.0049)' display='inline' fill='#014422' font-family='Leafs'  font-size='11.9714'>M</text>
</g>
<g id='Layer_3' display='none'>
	<path display='inline' fill='#014422' d='M53.349,28.328c-3.221,0-5.83-2.607-5.83-5.828c0-3.219,2.609-5.829,5.83-5.829
		c1.311,0,2.516,0.438,3.49,1.168c-1.353-1.656-3.41-2.715-5.714-2.715c-4.072,0-7.375,3.302-7.375,7.375
		c0,4.073,3.303,7.375,7.375,7.375c2.304,0,4.36-1.058,5.713-2.713C55.864,27.892,54.659,28.328,53.349,28.328z'/>
</g>
<g id='Layer_2' display='none'>
	<path display='inline' fill='#014422' d='M75.077,22.5c0,4.073-3.303,7.375-7.375,7.375s-7.375-3.302-7.375-7.375
		c0-4.073,3.303-7.375,7.375-7.375S75.077,18.427,75.077,22.5z M68.843,16.671c-3.221,0-5.83,2.609-5.83,5.829
		c0,3.221,2.609,5.828,5.83,5.828c3.219,0,5.828-2.607,5.828-5.828C74.671,19.281,72.062,16.671,68.843,16.671z'/>
</g>
<g id='Layer_5'>
	<path fill='#014422' d='M22.81,31.25c-7.379,0-13.357-5.974-13.357-13.353c0-7.375,5.979-13.354,13.357-13.354
		c3.197,0,6.129,1.126,8.428,3C28.146,3.568,23.33,1,17.906,1C8.576,1,1.009,8.566,1.009,17.897c0,9.333,7.567,16.897,16.897,16.897
		c5.424,0,10.241-2.568,13.333-6.542C28.939,30.124,26.007,31.25,22.81,31.25z'/>
	<path fill='#84B041' d='M31.165,9.835'/>
	<path fill='#014422' d='M31.238,7.543'/>
	<path fill='#014422' d='M8.36,22.288'/>
	<text transform='matrix(0.9108 0.3041 -0.3167 0.9485 6.2935 23.6299)' fill='#014422' font-family='Leafs' font-size='27.4278'>M</text>
	<path fill='#014422' d='M60.805,31.25c-7.379,0-13.357-5.973-13.357-13.352c0-7.375,5.979-13.354,13.357-13.354
		c3.003,0,5.765,1.002,7.995,2.676C65.701,3.425,60.988,1,55.709,1c-9.33,0-16.897,7.566-16.897,16.897
		c0,9.333,7.567,16.897,16.897,16.897c5.278,0,9.99-2.423,13.089-6.216C66.567,30.25,63.807,31.25,60.805,31.25z'/>
	<path fill='#014422' d='M110.586,17.897c0,9.333-7.567,16.897-16.896,16.897c-9.33,0-16.897-7.564-16.897-16.897
		C76.792,8.566,84.359,1,93.689,1C103.019,1,110.586,8.566,110.586,17.897z M96.303,4.543c-7.38,0-13.357,5.979-13.357,13.354
		c0,7.379,5.978,13.353,13.357,13.353c7.374,0,13.353-5.974,13.353-13.353C109.655,10.521,103.677,4.543,96.303,4.543z'/>
</g>
<g id='Layer_6'>
</g>
</svg>"
?>
		<footer id="footer">
			<div class="container">
				<div class="row">
					<?php
					$the_widget_args = array(
						'before_widget'	=> '<div class="widget">',
						'after_widget'	=> '</div>',
						'before_title'	=> '<div class="widget-title"><h3>',
						'after_title'	=> '</h3></div>'
					);
					?>
					<div class="col-sm-3">
						<?php
						if( is_active_sidebar( 'footer-sidebar-1' ) ):
							dynamic_sidebar( 'footer-sidebar-1' );
						else:
							the_widget( 'WP_Widget_Text', 'title='. __( 'Products', 'illdy' ) .'&text=<ul><li><a href="'. esc_url( '#' ) .'" title="'. __( 'Our work', 'illdy' ) .'">'. __( 'Our work', 'illdy' ) .'</a></li><li><a href="'. esc_url( '#' ) .'" title="'. __( 'Club', 'illdy' ) .'">'. __( 'Club', 'illdy' ) .'</a></li><li><a href="'. esc_url( '#' ) .'" title="'. __( 'News', 'illdy' ) .'">'. __( 'News', 'illdy' ) .'</a></li><li><a href="'. esc_url( '#' ) .'" title="'. __( 'Announcement', 'illdy' ) .'">'. __( 'Announcement', 'illdy' ) .'</a></li></ul>', $the_widget_args );
						endif;
						?>
					</div><!--/.col-sm-3-->
					<div class="col-sm-3">
						<?php
						if( is_active_sidebar( 'footer-sidebar-2' ) ):
							dynamic_sidebar( 'footer-sidebar-2' );
						else:
							the_widget( 'WP_Widget_Text', 'title='. __( 'Information', 'illdy' ) .'&text=<ul><li><a href="'. esc_url( '#' ) .'" title="'. __( 'Pricing', 'illdy' ) .'">'. __( 'Pricing', 'illdy' ) .'</a></li><li><a href="'. esc_url( '#' ) .'" title="'. __( 'Terms', 'illdy' ) .'">'. __( 'Terms', 'illdy' ) .'</a></li><li><a href="'. esc_url( '#' ) .'" title="'. __( 'Affiliates', 'illdy' ) .'">'. __( 'Affiliates', 'illdy' ) .'</a></li><li><a href="'. esc_url( '#' ) .'" title="'. __( 'Blog', 'illdy' ) .'">'. __( 'Blog', 'illdy' ) .'</a></li></ul>', $the_widget_args );
						endif;
						?>
					</div><!--/.col-sm-3-->
					<div class="col-sm-3">
						<?php
						if( is_active_sidebar( 'footer-sidebar-3' ) ):
							dynamic_sidebar( 'footer-sidebar-3' );
						else:
							the_widget( 'WP_Widget_Text', 'title='. __( 'Support', 'illdy' ) .'&text=<ul><li><a href="'. esc_url( '#' ) .'" title="'. __( 'Documentation', 'illdy' ) .'">'. __( 'Documentation', 'illdy' ) .'</a></li><li><a href="'. esc_url( '#' ) .'" title="'. __( 'FAQs', 'illdy' ) .'">'. __( 'FAQs', 'illdy' ) .'</a></li><li><a href="'. esc_url( '#' ) .'" title="'. __( 'Forums', 'illdy' ) .'">'. __( 'Forums', 'illdy' ) .'</a></li><li><a href="'. esc_url( '#' ) .'" title="'. __( 'Contact', 'illdy' ) .'">'. __( 'Contact', 'illdy' ) .'</a></li></ul>', $the_widget_args );
						endif;
						?>
					</div><!--/.col-sm-3-->
					<div class="col-sm-3">
						<?php echo $svgfooter ?>
						<?php if( $display_copyright == 1 ): ?>
							<p class="copyright"><span data-customizer="copyright-credit"><?php printf( '%s <a href="%s" title="%s" target="_blank">%s</a>.', __( 'Theme:', 'illdy' ), esc_url( 'http://colorlib.com/wp/themes/illdy' ), __( 'Illdy', 'illdy' ), __( 'Illdy', 'illdy' ) ); ?></span> <?php echo illdy_sanitize_html( $footer_copyright ); ?></p>
						<?php else: ?>
							<p class="copyright"><?php echo illdy_sanitize_html( $footer_copyright ); ?></p>
						<?php endif; ?>
					</div><!--/.col-sm-3-->
				</div><!--/.row-->
			</div><!--/.container-->
		</footer><!--/#footer-->
		<?php wp_footer(); ?>
	</body>
</html>