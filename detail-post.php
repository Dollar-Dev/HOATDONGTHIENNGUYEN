<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hoạt động thiện nguyện sinh viên</title>
    <link rel="stylesheet" href="vendor/bootstrap-4.1.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor\fontawesome-free-5\css\all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Top header -->
    <?php include 'content/TopHeader.php'; ?>
    <!-- Menu -->
    <?php include 'content/Menu.php'; ?>
    <div class="container mt-3">
        <!-- Điều hướng -->
        <?php include 'content/DieuHuong.php'; ?>
        <!-- Bài viết chi tiết và bài viết liên quan -->
        <?php include 'content/BaiVietCHiTietnLienQuan.php'; ?>
        <!-- Bình luận -->
        <div class="row mt-4 mb-4 comment">
            <div class="col-12 title pl-0">
                Bình luận</div>
            <div class="col-12 write-comment pl-0 pr-0">
                <div class="input-group mb-3">
					<textarea class="form-control" placeholder="Người đăng" rows="3"></textarea>
                    <textarea class="form-control" placeholder="Nội dung bình luận" rows="3"></textarea>
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit">
                            Gửi bình luận</button>
                    </div>
                </div>
            </div>
            <div class="col-12 media border p-3">
                <img src="img/img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width: 60px;">
                <div class="media-body">
                    <h4>
                        Nguyễn An <small><i>Đăng ngày 19 Tháng Một, 2016</i></small></h4>
                    <p>
                        Bài viết rất hữu ích</p>
                    <div class="media p-3">
                        <img src="img/img_avatar2.png" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width: 45px;">
                        <div class="media-body">
                            <h4>
                                Phạm Thanh Hóa <small><i>Đăng ngày 23 Tháng Hai, 2018</i></small></h4>
                            <p>
                                Đã qua một thời sinh viên, đã từng có những trải nghiệm như bài viết</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <!-- Footer -->
    <?php include 'content/Footer.php'; ?>
    <!-- Nút quay về đầu trang -->
    <div class="btn-go-up">
        <a href="#top-header" class="fas fa-arrow-circle-up"></a>
    </div>
    <script src="vendor/js/jquery-3.3.1.min.js"></script>
    <script src="vendor/js/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</body>
</html>
