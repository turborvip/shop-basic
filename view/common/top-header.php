<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class=" text-navbar-top-header" href="<?php echo SITE_ROOT; ?>/dashboard">Trang chủ</a>

    <ul class="navbar-nav">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Tài Khoản
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo SITE_ROOT. "/sign-out" ?>">Đăng Xuất</a>
            <a class="dropdown-item" href="<?php echo SITE_ROOT. "/sua-tai-khoan-admin" ?>">Sửa tài khoản</a>
            <a class="dropdown-item" href="<?php echo SITE_ROOT. "/doi-mat-khau" ?>">Đổi mật khẩu</a>
        </div>
        </li>
    </ul>
</nav>