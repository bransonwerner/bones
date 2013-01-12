			<footer class="footer" role="contentinfo">
			
				<div id="inner-footer" class="wrap clearfix">
						
						<div id="footercol1" class="threecol first clearfix">

						<?php if ( is_active_sidebar( 'footer1' ) ) : ?>

							<?php dynamic_sidebar( 'footer1' ); ?>

						<?php endif; ?>

					</div>


					<div id="footercol2" class="threecol clearfix">

						<?php if ( is_active_sidebar( 'footer2' ) ) : ?>

							<?php dynamic_sidebar( 'footer2' ); ?>

						<?php endif; ?>

					</div>


					<div id="footercol3" class="threecol clearfix">

						<?php if ( is_active_sidebar( 'footer3' ) ) : ?>

							<?php dynamic_sidebar( 'footer3' ); ?>

						<?php endif; ?>

					</div>


					<div id="footercol4" class="threecol last clearfix">

						<?php if ( is_active_sidebar( 'footer4' ) ) : ?>

							<?php dynamic_sidebar( 'footer4' ); ?>

						<?php endif; ?>

					</div>


					<nav role="navigation">
    					<?php bones_footer_links(); ?>
	                </nav>
	                		
				</div> <!-- end #inner-footer -->

				<div id="extras"> 
					<div class="wrap">
						<div class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</div>
					</div>
				</div>		
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->