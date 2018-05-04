			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<p class="copyright">
					Down to the Wire is co-founded by CreativeRush &amp; Tallgrass Film Association &copy; 2011-<?php echo date('Y'); ?>.
				</p>


				<!-- /copyright -->

			</footer>
			<!-- /footer -->


		<?php wp_footer(); ?>

		<script src="/wp-content/themes/dttw/assets/dist/js/app.js"></script>

		<script type="text/javascript">
			$(".burger").click(function() {
				$(this).toggleClass("open").toggleClass("close"),
				$("nav.nav").toggleClass("open"),
				// $("header").toggleClass("lock"),
				console.log("nav-opened")
			});
		</script>

	</body>
</html>
