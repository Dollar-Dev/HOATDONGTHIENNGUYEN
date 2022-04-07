<?php
echo
'
<?php include 'content/Menu.php'; ?>
	<div class="container mt-3">
        <!-- Điều hướng -->
';
<?php include 'content/Dieuhuong_catagories.php'; ?>
echo 
'<!-- Danh sách sản phẩm -->';
<?php include 'content/Danhsachsanpham.php'; ?>
echo
'<!-- Phân trang --> ';
<?php include 'content/Phantrang.php'; ?>
echo 
'</div>';
?>