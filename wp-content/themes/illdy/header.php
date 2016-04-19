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
$svglogo="<svg version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' width='100%'
	  viewBox='0 0 100 100' enable-background='new 0 0 100 100' xml:space='preserve'>
<g id='Layer_1' display='none'>
	<path display='inline' fill='none' d='M-22.75,4.375c0,3.523,20.574,6.375,46,6.375'/>
	<path display='inline' fill='none' d='M23.25,10.75c0,1.935,19.288,3.5,43.125,3.5'/>
	<path display='inline' fill='none' d='M66.375,14.25C66.375,10.243,51.896,7,34,7'/>
	<path display='inline' fill='none' d='M34,7c0,0-6.15,0-13.75,0'/>
	<path display='inline' fill='none' d='M20.25,7c0,0-5.255,0-11.75,0'/>
</g>
<g id='Layer_2'>
	<ellipse fill='#83AF41' cx='50.313' cy='45.188' rx='48.063' ry='21.563'/>
	<path fill='#84B041' d='M23.5,30.75c-11.394-5.599-12.831-8.649-12.924-9.7c-0.589,5.726,1.602,16.021,1.602,16.021
		S38,37.875,23.5,30.75z'/>
</g>
<g id='Layer_3'>
	<g>
		<g>
			<path fill='#014422' d='M11.375,22.875c0,0,6,7,15.75,7.125l21,0.078c0,0,10.875,0.672,16.875,8.547c0,0-6.875-5.25-16.875-5.75
				l-18,0.125C30.125,33,17,33.25,11.375,22.875z'/>
		</g>
	</g>
</g>
<g id='Layer_4'>
	<path fill='#014422' d='M16.125,30.75c0,0,10.875,17.375,40.125,10.25c0,0,26.25-6.875,34,11.75c0,0-4.75-13.625-30.25-9.125
		C60,43.625,27.279,51.272,16.125,30.75z'/>
</g>
<g id='Layer_5'>
	<path fill='#014422' d='M10.625,26.625c0,0-0.375,21.75,15.75,25.5C26.375,52.125,14.375,44,10.625,26.625z'/>
</g>
<g id='Layer_6'>
	<circle fill='#014422' cx='35.375' cy='54.625' r='7.375'/>
	<circle fill='#014422' cx='74.75' cy='54.625' r='7.375'/>
</g>
<g id='Layer_7'>
	<circle fill='#84B041' cx='36.296' cy='53.204' r='5.829'/>
	<circle fill='#84B041' cx='75.796' cy='53.204' r='5.829'/>
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
						<div class="col-sm-2">
								<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="header-logo"><?php echo $svglogo ?></a>
						</div><!--/.col-sm-2-->
						<div class="col-sm-10">
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