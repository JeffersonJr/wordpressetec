<?php
/**
 * The Template for displaying Search Results pages.
 */

get_header();

if ( have_posts() ) :
?>	
	<header class="page-header">
		<h1 class="page-title"><?php printf( esc_html__( 'Resultados da busca por: %s', 'site-etec-praia-grande' ), get_search_query() ); ?></h1>
	</header>
<?php
	get_template_part( 'archive', 'loop' );
else :
?>
	<article id="post-0" class="post no-results not-found">
		<header class="entry-header">
			<h1 class="entry-title"><?php esc_html_e( 'Nada encontrado', 'site-etec-praia-grande' ); ?></h1>
		</header><!-- /.entry-header -->
		<p><?php esc_html_e( 'Desculpe, mas nada corresponde aos seus critérios de busca. Por favor, tente novamente com algumas palavras-chave diferentes.', 'site-etec-praia-grande' ); ?></p>
		<?php
			get_search_form();
		?>
	</article><!-- /#post-0 -->
<?php
endif;
wp_reset_postdata();

get_footer();
