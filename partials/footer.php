		<div class="footer">

			<div class="content">
				<div class="col newsletter">
					<h3>Don't miss an update!</h3>
					<form>
						<input type="email" placeholder="Email"/>
						<input type="submit" value="Sign Up"/>
					</form>
				</div>

				<div class="col social">
					<h3>Remember to follow!</h3>
					<a href="<?= $global['social']['facebook']; ?>"><img src="/img/facebook.png"></a>
					<a href="<?= $global['social']['twitter']; ?>"><img src="/img/twitter.png"></a>
					<a href="<?= $global['social']['youtube']; ?>"><img src="/img/youtube.png"></a>
					<a href="<?= $global['social']['patreon']; ?>"><img src="/img/patreon.png"></a>
				</div>
			</div>
			<div class="copyright">
				&copy; 2016 Nightown
			</div>
		</div>
	</div>  <!-- end #main  -->

	<script src="/js/vendor/require-jquery.js"></script>
	<script> require.config({ urlArgs: "bust=" + (new Date()).getTime() }); </script>
	<script src="/js/main.js"></script>

	</body>
</html>
