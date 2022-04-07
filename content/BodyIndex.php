<?php
echo '<div class="container mt-4">
<!-- Slideshow + tin nóng -->';
include 'SlideshowTinnong.php'; 
echo '<!-- Bài viết mới nhất	 -->';
include 'Baivietmoinhat.php'; 
echo '<!-- Chiến dịch tình nguyện hè + nổi bật -->';
 include 'Chiendichmuahe.php'; 
echo '<!-- Công tác giáo dục + phong trào -->';
 include 'Congtacgiaoduc.php'; 
echo '<!-- Tiêu đề Hình ảnh hoạt động	 -->';
 include 'Tieudehoatdong.php'; 
echo '<!-- Slideshow hình ảnh-->';
include 'SlideAnh.php'; 
echo '<!-- Tiêu đề Video hoạt động -->';
include 'TieuDeVid.php'; 
echo '<!-- Slideshow video-->';
include 'SlideShowVid.php'; 
echo '</div>';
?>