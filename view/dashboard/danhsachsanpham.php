<?php include dirname(__FILE__).'../../common/header.php'; ?>
<body>
        <div class="row">
            <?php include __DIR__.'../../common/left-menu.php' ?>
            <div class="col-sm-9">
                <?php include __DIR__.'../../common/top-header.php' ?>
                <div class="main">
                    <h5 class="h5-title">Danh sách sản phẩm</h5>
                    <div class= "box-table">
                        <form action="<?php echo SITE_ROOT; ?>/san-pham/tim-kiem" method="post">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Từ Khóa :</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input name="nameproduct" type="text"></input>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Trạng Thái :</label>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="input-product" name="status" id="">
                                            <option>Tất cả </option>
                                            <option value="1">Hoạt Động </option>
                                            <option value="0">Không Hoạt Động </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="activity" >
                                        <button type="submit" class="btn btn-success">Tìm Kiếm</button>
                                        <a href="<?php echo SITE_ROOT; ?>/san-pham/tao-moi"><button type="button" class="btn btn-primary">Thêm mới</button></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Danh mục</th>
                                    <th>Trạng Thái</th>
                                    <th>Mô tả</th>
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
                                    <td><?php echo $i + 1 ?></td>
                                    <td><img class="img"  src="<?php echo IMG_DIR ?>/category-img/product/phone/<?php echo $data[$i]["image"] ?>" alt=""></img></td>
                                    <td><?php echo $data[$i]["product_name"]; ?></td>
                                    <td><?php echo $data[$i]["category"] ?></td>
                                    <td>
                                        <?php if ($data[$i]["status"] == 0) {
                                                echo "Không hoạt động";
                                            } else if ($data[$i]["status"] == 1){
                                                echo "Hoạt động";
                                            } 
                                        ?>
                                    </td>
                                    <td><?php echo $data[$i]["description"]; ?></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                Hành Động
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="<?php echo SITE_ROOT ?>/san-pham/sua/<?php echo $data[$i]["id"]; ?>">Sửa </a>
                                                <a class="dropdown-item" href="<?php echo SITE_ROOT ?>/san-pham/xoa/<?php echo $data[$i]["id"]; ?>">Xóa</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php 
                                        }
                                    } ?>
                            </tbody>
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
        $(".collapse-product").show();
    })
</script>
</html>