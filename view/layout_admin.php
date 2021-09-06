<!--header--->
<?php include __DIR__.'./common/header.php';
// var_dump($variablename);
// echo $variablename;
?>
<!--end: header --->

<body>
    <div class="container">
         <div class="row">
            <!--left-menu--->
            <?php include __DIR__.'../common/left-menu.php' ?>
             <!--end: left-menu--->

            <div class="col-sm-9">
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                    <a class="navbar-brand" href="<?php echo  __DIR__. "../view/dashboard.php" ?>">Trang chủ</a>
<?php //loadView('./dashboard1/danhsach-danhmuc.php'); ?>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Tài Khoản
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Đăng Xuất</a>
                            <a class="dropdown-item" href="#">Đổi mật khẩu</a>
                            <a class="dropdown-item" href="#">Help</a>
                        </div>
                        </li>
                    </ul>
                </nav>
                <?php //$this->renderSection('content'); ?>
                <?php //var_dump($_SERVER['REQUEST_URI']); die; ?> 
                <?php //include './dashboard1/danhsach-danhmuc.php'; ?>

            </div>
        </div>
    </div>
       
</body>
</html>