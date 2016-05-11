<?php
/**
 *	The template for dispalying the team section in front page.
 *
 *	@package WordPress
 *	@subpackage illdy
 */
?>
<?php
$general_title = get_theme_mod( 'illdy_team_general_title', __( 'Team', 'illdy' ) );
$general_entry = get_theme_mod( 'illdy_team_general_entry', __( 'Meet the people that are going to take your business to the next level.', 'illdy' ) );
?>
<section id="team" class="front-page-section">
	<?php if( $general_title || $general_entry ): ?>
		<div class="section-header">
			<div class="container">
				<div class="row">
					<?php if( $general_title ): ?>
						<div class="col-sm-12">
							<h3><?php echo illdy_sanitize_html( $general_title ); ?></h3>
						</div><!--/.col-sm-12-->
					<?php endif; ?>
					<?php if( $general_entry ): ?>
						<div class="col-sm-10 col-sm-offset-1">
							<p><?php echo illdy_sanitize_html( $general_entry ); ?></p>
						</div><!--/.col-sm-10.col-sm-offset-1-->
					<?php endif; ?>
				</div><!--/.row-->
			</div><!--/.container-->
		</div><!--/.section-header-->
	<?php endif; ?>
	<div class="section-content">
		<div class="container">
			<div class="row">
				<?php
				if( is_active_sidebar( 'front-page-team-sidebar' ) ):
					dynamic_sidebar( 'front-page-team-sidebar' );
				else:
					$the_widget_args = array(
						'before_widget'	=> '<div class="col-sm-4 col-sm-offset-0 col-xs-10 col-xs-offset-1 widget_illdy_person">',
						'after_widget'	=> '</div>',
						'before_title'	=> '',
						'after_title'	=> ''
					);

					the_widget( 'Illdy_Widget_Person', 'title='. __( 'Flavio Henrique', 'illdy' ) .'&image='. esc_url( 'http://lavajatoeco.com.br/wp-content/uploads/2016/05/aa22.png' ) .'&position='. __( 'Criação do Produto', 'illdy' ) .'&entry='. __( '', 'illdy' ) .'&facebook_url='. esc_url( 'https://www.facebook.com/flavio.henrique.56884?fref=ts' )  .'&color=#E1E6B9', $the_widget_args );

					the_widget( 'Illdy_Widget_Person', 'title='. __( 'Francisco de Assis', 'illdy' ) .'&image='. esc_url( 'http://lavajatoeco.com.br/wp-content/uploads/2016/05/aa55.png' ) .'&position='. __( 'Conteúdo do site', 'illdy' ) .'&entry='. __( '', 'illdy' ) .'&facebook_url='. esc_url( 'https://www.facebook.com/francisco.deassis.1042?ref=ts&fref=ts' )  .'&color=#C4D7A4', $the_widget_args );

					the_widget( 'Illdy_Widget_Person', 'title='. __( 'Iago Lima', 'illdy' ) .'&image='. esc_url( 'http://lavajatoeco.com.br/wp-content/uploads/2016/05/aa33.png' ) .'&position='. __( 'Criação do Produto', 'illdy' ) .'&entry='. __( '', 'illdy' ) .'&facebook_url='. esc_url( 'https://www.facebook.com/iago.lima.1232?ref=ts&fref=ts' )  .'&color=#ABC8A4', $the_widget_args );

					the_widget( 'Illdy_Widget_Person', 'title='. __( 'Matheus Leão', 'illdy' ) .'&image='. esc_url( 'http://lavajatoeco.com.br/wp-content/uploads/2016/05/aa11.png' ) .'&position='. __( 'Criação do Produto', 'illdy' ) .'&entry='. __( '', 'illdy' ) .'&facebook_url='. esc_url( 'https://www.facebook.com/matheus.leao.1614?fref=ts' )  .'&color=#375D3B', $the_widget_args );

					the_widget( 'Illdy_Widget_Person', 'title='. __( 'Pedro Henrique', 'illdy' ) .'&image='. esc_url( 'http://lavajatoeco.com.br/wp-content/uploads/2016/05/aa66.jpg' ) .'&position='. __( 'Desenvolvimento e Design', 'illdy' ) .'&entry='. __( '', 'illdy' ) .'&facebook_url='. esc_url( 'https://www.facebook.com/pedrohff' )  .'&color=#6a4d8a', $the_widget_args );

					the_widget( 'Illdy_Widget_Person', 'title='. __( 'Wanderly Silva', 'illdy' ) .'&image='. esc_url( 'http://lavajatoeco.com.br/wp-content/uploads/2016/05/aa44.png' ) .'&position='. __( 'Conteúdo do site', 'illdy' ) .'&entry='. __( '', 'illdy' ) .'&facebook_url='. esc_url( 'https://www.facebook.com/profile.php?id=100001608774092&ref=ts&fref=ts' )  .'&color=#183128', $the_widget_args );

				endif;
				?>
			</div><!--/.row-->
		</div><!--/.container-->
	</div><!--/.section-content-->
</section><!--/#team.front-page-section-->