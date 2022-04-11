<?php
echo
'<div class="container mt-3">
        <!-- Điều hướng -->';
include 'Dieuhuong_catagories.php'; 
echo 
'<!-- Danh sách sản phẩm -->';
include 'Danhsachsanpham.php'; 
echo
'<!-- Phân trang --> ';
include 'Phantrang.php'; 
echo 
'</div>';
?>