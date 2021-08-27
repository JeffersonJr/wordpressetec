			<?php
				// If Single or Archive (Category, Tag, Author or a Date based page).
				if ( is_single() || is_archive() ) :
			?>
					</div><!-- /.col -->

					<?php
						get_sidebar();
					?>

				</div><!-- /.row -->
			<?php
				endif;
			?>
		</main><!-- /#main -->
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<p><?php printf( esc_html__( '&copy; %1$s %2$s. Todos direitos reservados.', 'site-etec-praia-grande' ), date_i18n( 'Y' ), get_bloginfo( 'name', 'display' ) ); ?></p>
						<p>SEDE: AVENIDA GUADALAJARA, 941 - GUILHERMINA - PRAIA GRANDE - SP TELEFONE: (13) 3491-3153 E (13) 3491-1585</p>
						<p>EXTENSÃO: AVENIDA DOUTOR ROBERTO DE ALMEIDA VINHAS, 10.119 - BALNEÁRIO MARACANÃ - PRAIA GRANDE - SP TELEFONE: (13) 3471-2395</p>
					</div>
					<div class="col-md-12">
						<?php
							dynamic_sidebar( 'third_widget_area' );

							if ( current_user_can( 'manage_options' ) ) :
						?>
							<span class="edit-link"><a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>" class="badge badge-secondary"><?php esc_html_e( 'Edit', 'site-etec-praia-grande' ); ?></a></span><!-- Show Edit Widget link -->
						<?php
							endif;
						?>						
					</div>

				</div><!-- /.row -->
				
			</div><!-- /.container -->
		</footer><!-- /#footer -->
	</div><!-- /#wrapper -->
	<?php
		wp_footer();
	?>
</body>
</html>
