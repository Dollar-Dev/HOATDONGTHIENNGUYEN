<?php
echo'
<div class="row">
			<div class="col-md-9">
				<div id="slideshow" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->';
					include  'Indicators.php';
					
					include 'Theslideshow.php';  
					
                    include 'Leftandrightcontrols.php';
				echo'</div>
			</div>
			<div class="col-md-3 tinnong">
				<h4 class="bg-danger text-white text-center p-1">Tin nóng</h4>
				<ul>
					<li><a href="#">Sau chuyến thiện nguyện: cho đi và nhận lại rất nhiều</a></li>
					<li><a href="#">Người trẻ tình nguyện ra chăm chút từng góc đảo Hòn Cau</a></li>
					<li><a href="#">Tình nguyện viên quốc tế học tiếng Việt, trồng cây xanh ở Việt Nam</a></li>
					<li><a href="#">20 mùa hè xanh, bê tông hóa hàng trăm km đường xứ dừa Bến Tre</a></li>
					<li><a href="#">Mùa yêu thương trên đất Lào</a></li>
				</ul>
			</div>
		</div>	';
        

?>