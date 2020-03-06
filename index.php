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
			var num_post = 14;
			var prevent_dup = 0;

			function infinite_page() {
				if((document.getElementById("body").scrollTop > (document.getElementById("body").scrollHeight * 0.50)) && prevent_dup != 1) {
					prevent_dup = 1;
					loadPosts();
				}
			}
		</script>
	</head>
	<body id='body' onload="loadPosts();" onscroll="infinite_page();">
		<div class="whole_body">
			<?php require_once ('template/menu_bar.php')?>
			<div class="wrapper">
				<div class="gallery" id="gallery">
					
				</div>
				<div class="loader-wrapper">
                    <div class="loader"></div>
                </div>
			</div>
		</div>

        <?php require_once ('template/footer.php')?>
	</body>
</html>