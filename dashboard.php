<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>8Annas</title>

		<!-- Site favicon -->
		<?php include "favicon.php"; ?>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>
		<!-- CSS -->
         <?php include "css.php"; ?>
		
	</head>
	<body>
		<?php include "pre-loader.php"; ?>

		<div class="header">			
            <!-- Header Left -->
            <?php include "header-left.php"; ?>
			<!-- Header Right -->
             <?php include "header-right.php"; ?>
		</div>

        <!-- Left Side Bar -->
        <?php include "left-side-bar.php"; ?>
		
		<div class="mobile-menu-overlay"></div>
        <!--------------------Start  Content -------------->
		<div class="main-container">
			<div class="xs-pd-20-10 pd-ltr-20">
				<div class="title pb-20">
					<h2 class="h3 mb-0">Hospital Overview</h2>
				</div>
                <!------------- Start Main Content ---------------->

                <!------------- End Main Content ---------------->
                <!-- footer-->
                <?php include "footer.php"; ?>
			</div>
		</div>
        <!--------------------End  Content -------------->
		
		<!-- js -->
         <?php include "script.php"; ?>

	</body>
</html>
