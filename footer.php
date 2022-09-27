	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
	<!-- slick.js -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.min.js"></script>
	

	<!-- IEのスムーススクロール対応でpolyfill -->
	<script src="https://polyfill.io/v3/polyfill.min.js?features=smoothscroll"></script>
	<!-- メインのJavaScriptファイル読み込み -->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/scripts/main.js"></script>
	<!-- AOS -->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<!-- AOS初期化 -->
	<script>
		AOS.init({
			offset: 1000,
			duration: 1000,
			easing: 'ease-out-back',
			once: true,
			// なぜかinitでanchorPlacementが効かない？？？
		});
	</script>

	<?php wp_footer(); ?>

	</body>

	</html>
