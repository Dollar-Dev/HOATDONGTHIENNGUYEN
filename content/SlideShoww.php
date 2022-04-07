<?php
echo'<div class="carousel-inner">
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
                <!-- Left and right controls -->';
             include 'LeftARcontrol.php';
echo '</div>';
?>