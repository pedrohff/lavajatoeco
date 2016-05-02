<?php
/**
 *	The template for displaying the header.
 *
 *	@package WordPress
 *	@subpackage illdy
 */
?>
<?php
$img_logo = get_theme_mod( 'illdy_img_logo', esc_url( get_template_directory_uri() . '/layout/images/header-logo.png' ) );
$text_logo = get_theme_mod( 'illdy_text_logo', __('Illdy', 'illdy') );
$jumbotron_general_image = get_theme_mod( 'illdy_jumbotron_general_image', esc_url( get_template_directory_uri() . '/layout/images/LJE/4.jpg' ) );
$preloader_enable = get_theme_mod( 'illdy_preloader_enable', 1 );
$svglogo="<svg id='svglogoheader' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
	 width='100%' viewBox='0 0 225.834 50' enable-background='new 0 0 225.834 50' xml:space='preserve'>
<g id='Layer_2'>
	<ellipse fill='#83AF41' cx='49.979' cy='25.104' rx='48.063' ry='21.563'/>
	<path fill='#84B041' d='M23.167,10.667c-11.394-5.599-12.831-8.649-12.924-9.7c-0.589,5.726,1.602,16.021,1.602,16.021
		S37.667,17.792,23.167,10.667z'/>
	<g>
		<g>
			
			<g clip-path='url(#SVGID_2_)'>
				<defs>
					<rect id='SVGID_9_' x='91.334' y='7.042' width='150' height='50'/>
				</defs>
				<clipPath id='SVGID_10_'>
					<use xlink:href='#SVGID_9_'  overflow='visible'/>
				</clipPath>
				<path clip-path='url(#SVGID_10_)' fill='#004422' d='M135.02,38.292c-7.379,0-13.357-5.975-13.357-13.353
					c0-7.376,5.979-13.354,13.357-13.354c3.197,0,6.129,1.126,8.428,3c-3.092-3.975-7.908-6.543-13.332-6.543
					c-9.33,0-16.897,7.566-16.897,16.897c0,9.332,7.567,16.897,16.897,16.897c5.424,0,10.24-2.567,13.332-6.542
					C141.148,37.166,138.217,38.292,135.02,38.292'/>
			</g>
			<g clip-path='url(#SVGID_2_)'>
				
					<text transform='matrix(0.9485 0.3167 -0.3298 0.9878 118.5459 30.665)' fill='#004422' font-family='Leafs' font-size='26.3368'>M</text>
			</g>
			<g clip-path='url(#SVGID_2_)'>
				<defs>
					<rect id='SVGID_11_' x='91.334' y='7.042' width='150' height='50'/>
				</defs>
				<clipPath id='SVGID_12_'>
					<use xlink:href='#SVGID_11_'  overflow='visible'/>
				</clipPath>
				<path clip-path='url(#SVGID_12_)' fill='#004422' d='M173.014,38.292c-7.379,0-13.357-5.973-13.357-13.352
					c0-7.376,5.979-13.354,13.357-13.354c3.003,0,5.765,1.002,7.995,2.676c-3.099-3.795-7.812-6.22-13.091-6.22
					c-9.33,0-16.897,7.566-16.897,16.897c0,9.332,7.567,16.897,16.897,16.897c5.278,0,9.99-2.423,13.089-6.216
					C178.776,37.292,176.016,38.292,173.014,38.292'/>
				<path clip-path='url(#SVGID_12_)' fill='#004422' d='M222.795,24.938c0,9.333-7.567,16.897-16.896,16.897
					c-9.33,0-16.897-7.563-16.897-16.897c0-9.331,7.567-16.897,16.897-16.897C215.228,8.042,222.795,15.607,222.795,24.938
					 M208.512,11.584c-7.38,0-13.357,5.979-13.357,13.354c0,7.378,5.978,13.353,13.357,13.353c7.374,0,13.353-5.975,13.353-13.353
					C221.864,17.563,215.886,11.584,208.512,11.584'/>
			</g>
		</g>
	</g>
</g>
<g id='Layer_3'>
	<g>
		<g>
			<path fill='#014422' d='M11.042,2.792c0,0,6,7,15.75,7.125l21,0.078c0,0,10.875,0.672,16.875,8.547c0,0-6.875-5.25-16.875-5.75
				l-18,0.125C29.792,12.917,16.667,13.167,11.042,2.792z'/>
		</g>
	</g>
</g>
<g id='Layer_4'>
	<path fill='#014422' d='M15.792,10.667c0,0,10.875,17.375,40.125,10.25c0,0,26.25-6.875,34,11.75c0,0-4.75-13.625-30.25-9.125
		C59.667,23.542,26.946,31.189,15.792,10.667z'/>
</g>
<g id='Layer_5'>
	<path fill='#014422' d='M10.292,6.542c0,0-0.375,21.75,15.75,25.5C26.042,32.042,14.042,23.917,10.292,6.542z'/>
</g>
<g id='Layer_6'>
	<circle fill='#014422' cx='35.042' cy='34.542' r='7.375'/>
	<circle fill='#014422' cx='74.417' cy='34.542' r='7.375'/>
</g>
<g id='Layer_7'>
	<circle fill='#84B041' cx='35.963' cy='33.121' r='5.829'/>
	<circle fill='#84B041' cx='75.463' cy='33.121' r='5.829'/>
</g>
</svg>";
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php if( $preloader_enable == 1 ): ?>
			<div class="pace-overlay"></div>
		<?php endif; ?>
		<header id="header" class="<?php if( is_front_page() ): echo 'header-front-page'; else: echo 'header-blog'; endif; ?>" style="background-image: url('<?php if( is_front_page() ): echo ( ( $jumbotron_general_image ) ? esc_url( $jumbotron_general_image ) : '' ); else: echo esc_url( get_header_image() ); endif; ?>');">
			<div class="top-header">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 col-md-4">
								<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="header-logo"><?php echo $svglogo ?></a>
						</div><!--/.col-sm-2-->
						<div class="col-sm-8 col-md-8">
							<nav class="header-navigation">
								<ul class="clearfix">
									<?php
									wp_nav_menu( array(
										'theme_location'	=> 'primary-menu',
										'menu'				=> '',
										'container'			=> '',
										'container_class'	=> '',
										'container_id'		=> '',
										'menu_class'		=> '',
										'menu_id'			=> '', 
										'items_wrap'		=> '%3$s',
										'walker'			=> new MTL_Extended_Menu_Walker(),
										'fallback_cb'		=> 'MTL_Extended_Menu_Walker::fallback'
									) );
									?>
								</ul><!--/.clearfix-->
							</nav><!--/.header-navigation-->
							<button class="open-responsive-menu"><i class="fa fa-bars"></i></button>
						</div><!--/.col-sm-10-->
					</div><!--/.row-->
				</div><!--/.container-->
			</div><!--/.top-header-->
			<nav class="responsive-menu">
				<ul>
					<?php
					wp_nav_menu( array(
						'theme_location'	=> 'primary-menu',
						'menu'				=> '',
						'container'			=> '',
						'container_class'	=> '',
						'container_id'		=> '',
						'menu_class'		=> '',
						'menu_id'			=> '', 
						'items_wrap'		=> '%3$s',
						'walker'			=> new MTL_Extended_Menu_Walker(),
						'fallback_cb'		=> 'MTL_Extended_Menu_Walker::fallback'
					) );
					?>
				</ul>
			</nav><!--/.responsive-menu-->
			<?php
			if( is_front_page() ):
				get_template_part( 'sections/front-page', 'bottom-header' );
			/*Esconder bottom-header
			else:
				get_template_part( 'sections/blog', 'bottom-header' );
				*/
			endif;
			?>
		</header><!--/#header-->