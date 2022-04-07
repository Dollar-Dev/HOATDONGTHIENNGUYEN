<?php
echo
'<div class="container mt-3">
        <!-- Điều hướng -->';
<?php include content_path.'Dieuhuong_catagories.php'; ?>
echo 
'<!-- Danh sách sản phẩm -->';
<?php include content_path.'Danhsachsanpham.php'; ?>
echo
'<!-- Phân trang --> ';
<?php include content_path.'Phantrang.php'; ?>
echo 
'</div>';
?>