<?php
/**
 * Template Name: Not found
 * Description: Page template 404 Not found.
 *
 */

get_header();

$search_enabled = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
?>
<div id="post-0" class="content error404 not-found text-center">
	<h1 class="entry-title"><?php esc_html_e( 'Oops!', 'site-etec-praia-grande' ); ?></h1>
	<div class="entry-content">
		<h1 class="erro404">404</h1>
		<h5 class="mb-5"><?php esc_html_e( 'Parece que nada foi encontrado neste local.', 'site-etec-praia-grande' ); ?></h5>
		<p><?php esc_html_e( 'Tente buscar na barra de busca.', 'site-etec-praia-grande' ); ?></p>
		<div>
			<?php
				if ( '1' === $search_enabled ) :
					get_search_form();
				endif;
			?>
		</div>
	</div><!-- /.entry-content -->
</div><!-- /#post-0 -->
<?php
get_footer();
