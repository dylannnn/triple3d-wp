			<!-- footer -->
			<footer id="footer">
				<div class="container-fluid">
					<div class="row" id="footer-sidebar">
						<div class="col-lg-4 col-md-4 col-sm-4">
							<div id="footer-sidebar1">
								<?php
									if(is_active_sidebar('widget-area-1')){
										dynamic_sidebar('widget-area-1');
									}
								?>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4">
							<div id="footer-sidebar2">
								<?php
									if(is_active_sidebar('widget-area-2')){
										dynamic_sidebar('widget-area-2');
									}
								?>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4">
							<div id="footer-sidebar1">
								<?php
									if(is_active_sidebar('widget-area-3')){
										dynamic_sidebar('widget-area-3');
									}
								?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-xs-12">
							<p class="copyRight">
								&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'triple3d'); ?> 
							<a href="#" title="Triple 3D">Triple 3D</a>
							</p>
						</div>
					</div>
				</div>
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->
		<?php wp_footer(); ?>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
		<!-- analytics -->
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-54116604-1','auto');ga('send','pageview');
        </script>

	</body>
</html>
