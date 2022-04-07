<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Hoạt động thiện nguyện sinh viên</title>
	<link rel="stylesheet" href="vendor/bootstrap-4.1.1-dist/css/bootstrap.min.css" >
	<link rel="stylesheet" href="vendor\fontawesome-free-5\css\all.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>	
    <!-- Top header -->
	<?php include 'content/TopHeader.php'; ?>
	<!-- Menu -->
	<?php include 'content/Menu.php'; ?>
	<div class="container mt-4">
		<!-- Slideshow + tin nóng -->
		<?php include 'content/SlideshowTinnong.php'; ?>
		<!-- Bài viết mới nhất	 -->
		<?php include 'content/Baivietmoinhat.php'; ?>
		<!-- Chiến dịch tình nguyện hè + nổi bật -->
		<?php include 'content/Chiendichmuahe.php'; ?>
		<!-- Công tác giáo dục + phong trào -->
		<?php include 'content/Congtacgiaoduc.php'; ?>
		<!-- Tiêu đề Hình ảnh hoạt động	 -->
		<?php include 'content/Tieudehoatdong.php'; ?>
		<!-- Slideshow hình ảnh-->
		<?php include 'content/SlideAnh.php'; ?>
		<!-- Tiêu đề Video hoạt động -->
		<div class="row mt-4 mb-3">
			<div class="col-12">
				<div class="title-section">
					<h4 class="bg-danger p-3 text-white">Video hoạt động</h4>
				</div>
			</div>			
		</div>
		<!-- Slideshow video-->
		<div class="row">
			<div class="col-md-12">
				<div id="slideshowVideo" class="carousel slide" data-ride="carousel">								  
					<!-- The slideshow -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="row">
								<div class="col-4">
									<video controls class="w-100">
										<source src="video/video1.mp4" type="video/mp4">
											Your browser does not support the video tag.
										</video>
									</div>
									<div class="col-4">
										<video controls class="w-100">
											<source src="video/mv.mp4" type="video/mp4">
												Your browser does not support the video tag.
											</video>
										</div>
										<div class="col-4">
											<video controls class="w-100">
												<source src="video/video1.mp4" type="video/mp4">
													Your browser does not support the video tag.
												</video>
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<div class="row">
											<div class="col">
												<video controls class="w-100">
													<source src="video/mv.mp4" type="video/mp4">
														Your browser does not support the video tag.
													</video>
												</div>
												<div class="col">
													<video controls class="w-100">
														<source src="video/video1.mp4" type="video/mp4">
															Your browser does not support the video tag.
														</video>
													</div>
													<div class="col">
														<video controls class="w-100">
															<source src="video/mv.mp4" type="video/mp4">
																Your browser does not support the video tag.
															</video>
														</div>
													</div>
												</div>
											</div>

										</div>				  
										<!-- Left and right controls -->
										<a class="carousel-control-prev" href="#slideshowVideo" data-slide="prev">
											<span class="carousel-control-prev-icon"></span>
										</a>
										<a class="carousel-control-next" href="#slideshowVideo" data-slide="next">
											<span class="carousel-control-next-icon"></span>
										</a>
									</div>
								</div>
							</div>
						</div> <!-- day! -->
						<!-- Footer -->
						<?php include 'content/Footer.php'; ?>
						<!-- Nút quay về đầu trang -->
						<?php include 'content/Nutquayvetrangdau.php'; ?>

						<script src="vendor/js/jquery-3.3.1.min.js"></script>
						<script src="vendor/js/popper.min.js"></script>
						<script src="vendor/bootstrap-4.1.1-dist/js/bootstrap.min.js" ></script>
						<script src="js/script.js"></script>
					</body>	
				</body>
				</html>

