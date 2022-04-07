<?php
include 'config.php';
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Hoạt động thiện nguyện sinh viên</title>
	<?php echo '<link rel="stylesheet" href="'.vendor_path.'bootstrap-4.1.1-dist/css/bootstrap.min.css" >'; ?>
	<link rel="stylesheet" href="vendor\fontawesome-free-5\css\all.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Top header -->
	<?php include content_path.'TopHeader.php'; ?>
	<!-- Menu -->
	<?php include content_path.'Menu.php'; ?>
	<?php include content_path.'BodyIndex.php'; ?>
	<!-- Footer -->
	<?php include content_path.'Footer.php'; ?>
	<!-- Nút quay về đầu trang -->
	<?php include content_path.'Nutquayxe.php';?>
</body>
</html>