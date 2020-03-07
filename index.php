<?php
	session_start();
?>
<html>
	<head>
		<?php require_once('template/head_includes.php'); ?>
		<title>Camagru</title>
		<script type="text/javascript" src="js/ajax.js"></script>
		<script type="text/javascript" src="js/upload.js"></script>
		<script>
			var num_load = 0;
			var num_post = 8;
			var isPostsLoading = false;

			var loader;

			function fetchPosts() {
			    var body = document.getElementById("body");

				if ((body.scrollTop > (body.scrollHeight * 0.5)) && isPostsLoading !== true) {
				    console.log('hi');
					isPostsLoading = true;
					loadPosts();
				}
			}
		</script>
	</head>
	<body id='body' onload="loadPosts();" onscroll="fetchPosts();">
		<div class="whole_body">
			<?php require_once ('template/menu_bar.php')?>

			<div class="wrapper">
				<div class="gallery" id="gallery">
					
				</div>
				<div class="loader-wrapper loader-hidden" id="loader">
                    <div class="loader"></div>
                </div>
			</div>
		</div>

        <?php require_once ('template/footer.php')?>
	</body>
</html>