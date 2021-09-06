<?php include dirname(__FILE__).'../../common/header.php'; ?>
<body>
        <div class="row">
            <?php include __DIR__.'../../common/left-menu.php' ?>
            <div class="col-sm-9">
                <?php include __DIR__.'../../common/top-header.php' ?>
                <div class="main">
                    <h5 class="h5-title">Danh sách Tài Khoản</h5>
                    <hr>
                    <div class= "box-table">
                        <form action="<?php echo SITE_ROOT; ?>/tai-khoan/tim-kiem" method="post">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Tên tài khoản :</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input name="username" type="text"></input>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Tên người dùng</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input name="fullname" type="text"></input>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Nhóm quyền</label>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="input-acc" name="role" id="">
                                            <option >Tất cả</option>
                                            <option value="0">ROOT </option>
                                            <option value="1">ADmin</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Trạng Thái</label>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="input-acc"  name="status" id="">
                                            <option >Tất cả</option>
                                            <option value="1">Hoạt Động </option>
                                            <option value="0">Không Hoạt Động </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="activity" >
                                        <button class="btn btn-success">Tìm Kiếm</button>
                                        <a href="<?php echo SITE_ROOT; ?>/tai-khoan/tao-moi"><button type="button" class="btn btn-primary">Thêm mới</button></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tài khoản</th>
                                    <th>Tên người dùng</th>
                                    <th>Số điện thoại</th>
                                    <th>Email</th>
                                    <th>Ngày sinh</th>
                                    <th>Giới tính</th>
                                    <th>Địa chỉ</th>
                                    <th>Nhóm quyền</th>
                                    <th>Trạng thái</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    // print("<pre>".print_r($data,true)."</pre>");die;
                                if (isset($data) && count($data)) {
                                        for ($i = 0; $i < count($data); $i++) {
                                    
                                ?>
                                <tr>
                                    <td><?php echo $data[$i]["id"];?></td>
                                    <td><?php echo $data[$i]["username"]; ?></td>
                                    <td><?php echo $data[$i]["fullname"]; ?></td>
                                    <td><?php echo $data[$i]["phonenumber"]; ?></td>
                                    <td><?php echo $data[$i]["email"]; ?></td>
                                    <td><?php echo $data[$i]["birthday"]; ?></td>
                                    <td><?php echo $data[$i]["gender"]; ?></td>
                                    <td><?php echo $data[$i]["address"]; ?></td>
                                    <td>
                                        <?php if ($data[$i]["role"] == 0) {
                                                echo "ROOT";
                                            } else {
                                                echo "Admin";
                                            }  ?>
                                        </td>
                                    <td>
                                        <?php if ($data[$i]["status"] == 0) {
                                                echo "Không hoạt động";
                                            } else {
                                                echo "Hoạt động";
                                            } ?>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                Hành Động
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- <a class="dropdown-item" href="#">Sửa </a> -->
                                                <a class="dropdown-item" href="<?php echo SITE_ROOT ?>/tai-khoan/xoa/<?php echo $data[$i]["id"]; ?>">Xóa</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <?php 
                                        }
                                    } 
                            ?>
                        </table>
                        <div class="pagination">
                            <a href="?page=<?php echo 1; ?>">&laquo;</a>
                            <?php if (isset($pages)) {
                                    for ($i = 1; $i <= $pages; $i++) {
                            ?>
                            <?php ?>
                            
                            <a href="?page=<?php echo $i; ?>" class= "<?php  
                                $page = count(explode('?', $_SERVER['REQUEST_URI'], 2)) > 1 ? (int) explode("=", explode('?', $_SERVER['REQUEST_URI'], 2)[1])[1] : 1;
                                if ($page == $i) { echo "active"; }
                            ?>">
                            <?php echo $i; ?></a>
                            <!-- <a href="#" class="active">2</a> -->
                            
                            <?php 
                                    }
                                }
                            ?>
                            <a href="?page=<?php echo $pages; ?>">&raquo;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
<script>
    $(document).ready(function(){
        $(".collapse-acc").show();
    })
</script>
</html>
