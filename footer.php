			<footer class="footer" role="contentinfo">
			
				<div id="inner-footer" class="wrap clearfix">
					<ul class="threecol first">
						<h4>First Item</h4>
						<li><a href="#">Entry 1</a></li>
						<li><a href="#">Entry 1</a></li>
						<li><a href="#">Entry 1</a></li>
					</ul>

					<ul class="threecol">
						<h4>Second Item</h4>
						<li><a href="#">Entry 1</a></li>
						<li><a href="#">Entry 1</a></li>
						<li><a href="#">Entry 1</a></li>
					</ul>

					<ul class="threecol">
						<h4>Third Item</h4>
						<li><a href="#">Entry 1</a></li>
						<li><a href="#">Entry 1</a></li>
						<li><a href="#">Entry 1</a></li>
					</ul>

					<ul class="threecol last">
						<h4>Fourth Item</h4>
						<li><a href="#">Entry 1</a></li>
						<li><a href="#">Entry 1</a></li>
						<li><a href="#">Entry 1</a></li>
					</ul>

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