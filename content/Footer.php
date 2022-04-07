<?php
echo
'<div class="footer mt-3 text-light">
    <div class="container-fluid">
    <div class="container">
    <div class="row pt-3 pb-3">
    <!-- Logo + liên hệ -->';
		include 'content/Logo-Lienhe.php';
	echo '<!-- Danh mục 1 -->';
		include "content/Danhmuc1.php";
	echo '<!-- Danh mục 2 -->';
		include "content/Danhmuc2.php";
	echo '<!-- Danh mục 3 -->';
		include "content/Danhmuc3.php";
	echo '<!-- Đóng góp -->';
		include "content/Donggop.php";
echo
'</div>
</div>
</div>
</div>';
?>