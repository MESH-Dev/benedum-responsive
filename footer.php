 
<!-- </div> --> <!--Ends the container-wrap-->
<footer class="site-footer">

	<div class="container">
		<div class="row">
			<div class="columns-6">
				<nav class="main-navigation foot">
					<?php wp_nav_menu( array('menu_id' => 'footer-nav', 'theme_location' => 'footer_nav', 'menu_id' => 'secondarynav',) ); ?>
				</nav>
			</div>
			<div class="columns-6">
				<p>1400 Benedum-Trees Building | 223 Fourth Avenue | Pittsburgh, Pennsylvania 15222<br>
(				P) 412-288-0360 | (P) 800-223-5948 (toll-free in WV) | (F) 412-288-0366 | <a href="mailto:info@benedum.org">info@benedum.org</a><br>
					© <?php echo date('Y'); ?>&nbsp;Claude Worthington Benedum Foundation</p>
					<p>Designed by <a href="http://meshfresh.com" target="_blank">MESH</a></p>
			</div><!-- End of Footer -->
		</div>
	</div>

</footer>

<!-- Benedum Google Analytics current -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-16845948-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<?php wp_footer(); ?>
<!-- </div> --><!--ends surrounding container-->
</body>
</html>
