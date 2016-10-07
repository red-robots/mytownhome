</div> <!-- main -->
</div> <!-- main-wrapper -->


	<div id="footer">
		<div id="footer-wrapper">
			<div id="footer-row1">
				
				<div id="footer-row1-box1">
					<div class="item-address">
						<h2><?php the_field('office_name', 'option'); ?></h2>
						<?php the_field('office_address', 'option'); ?> <?php the_field('office_address_line2', 'option'); ?> <?php the_field('office_address_line3', 'option'); ?>
					</div><!-- address -->
					<div class="item-address">
						<h2><?php the_field('office_name2', 'option'); ?></h2>
						<?php the_field('office_address2', 'option'); ?> <?php the_field('office_address2_line2', 'option'); ?> <?php the_field('office_address2_line3', 'option'); ?>
					</div><!-- address -->
					<div class="item-address">
						<h2><?php the_field('office_name3', 'option'); ?></h2>
						<?php the_field('office_address3', 'option'); ?> <?php the_field('office_address3_line2', 'option'); ?> <?php the_field('office_address3_line3', 'option'); ?>
					</div><!-- address -->
				</div><!-- footer-row1-box1 -->

				<div id="footer-newsletter">
					<div class="newsletter-signup">
						<a href="<?php bloginfo('url'); ?>/newsletter">Newsletter Signup</a>
					</div><!-- agent-button-link -->
				</div><!-- footer-newsletter -->

				<div id="footer-content2">
					<div id="footer-social">
						<div id="social4"><a href="<?php the_field('youtube_link', 'option'); ?>" target="_blank"></a></div><!--  -->
						<div id="social3"><a href="<?php the_field('facebook_link', 'option'); ?>" target="_blank"></a></div><!--  -->
					</div><!-- footer-social -->
					<div id="footer-links">
						<ul>
							<li><a href="<?php bloginfo('url'); ?>/about">ABOUT</a></li>
							<li><a href="<?php bloginfo('url'); ?>/careers">CAREERS</a></li>
							<li><a href="<?php bloginfo('url'); ?>/news">NEWS</a></li>
							<!-- <li><a href="<?php bloginfo('url'); ?>/resources">RESOURCES</a></li> -->
							<li><a href="<?php bloginfo('url'); ?>/contact">CONTACT US</a></li>
						</ul>
					</div><!-- footer-links -->
				</div><!-- footer-content2 -->
			</div><!-- footer-row1 -->

			<div id="footer2">
				<a href="<?php bloginfo('url'); ?>/sitemap">sitemap</a> | site by <a href="http://www.bellaworksweb.com" target="_blank">bellaworks</a>
			</div><!-- footer2 -->
		</div><!-- footer-wrapper -->
	</div><!-- footer -->

	<div id="chat-bar">
		<div id="chat-bar-background">
			<div id="chat-bar-background-wrapper">
				<div id="chat-tab">
				<!-- This code must be installed within the body tags -->
				<script type="text/javascript">
				    var lhnAccountN = "3217-1";
				    var lhnButtonN = 7695;
				    var lhnInviteEnabled = 1;
				    var lhnWindowN = 0;
				    var lhnDepartmentN = 0;
				    var lhnInviteN = 21336;
				    var lhnChatPosition = 'default';
				</script>
				<a href="http://www.livehelpnow.net/products/live-chat-system" target="_blank" style="font-size:10px;" id="lhnHelp">best live chat</a>
				<script src="//www.livehelpnow.net/lhn/widgets/chatbutton/lhnchatbutton-current.min.js" type="text/javascript" id="lhnscript"></script>
				</div><!-- chat-tab -->
			</div><!-- chat-bar-background-wrapper -->
		</div><!-- chat-bar-background -->
	</div><!-- chat-bar -->

	

</div><!-- main-wrapper-all -->
<?php wp_footer(); ?>
<script type="text/javascript">
	jQuery(window).load(function ($) {
	
	});
</script>
</body>
</html>