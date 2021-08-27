<?php
/**
 * The template for displaying Procurar forms.
 */
?>
<form class="search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">
		<input type="text" name="s" class="form-control" placeholder="<?php esc_attr_e( 'Digite aqui para procurar', 'site-etec-praia-grande' ); ?>" />
		<button type="submit" class="btn btn-primary" name="submit"><?php esc_html_e( 'Procurar', 'site-etec-praia-grande' ); ?></button>
	</div><!-- /.input-group -->
</form>
