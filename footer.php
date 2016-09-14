<!-- footer -->
<footer class="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<p>&copy;&nbsp;<?php bloginfo( 'name' ); ?>&nbsp;2015</p>
			</div>
			<div class="col-md-8">
				<?php
					$defaults = [
						'menu'           => 'footer',
						'container'      => false,
						'echo'           => true,
						'depth'          => 0,
						'walker'         => new NavbarLinkList,
						'theme_location' => 'footer',
						'items_wrap'     => '%3$s',
					];
					wp_nav_menu( $defaults ); ?>
			</div>
		</div>
	</div>
</footer>
<!-- /footer -->
</div>
<!-- /container -->
<?php wp_footer(); ?>
</body>
</html>
