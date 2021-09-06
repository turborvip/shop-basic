<?php include dirname(__FILE__).'../../common/header.php'; ?>
<body>
        <div class="row">
            <?php include __DIR__.'../../common/left-menu.php' ?>
            <div class="col-sm-9">
                <?php include __DIR__.'../../common/top-header.php' ?>
                <div class="main">
                    <h5 class="h5-title">Danh sách đơn hàng</h5>
                    <div class= "box-table">
                        <form action="<?php echo SITE_ROOT; ?>/don-hang/tim-kiem" method="post">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Mã đơn</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input name="code" type="text" ></input>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Trạng Thái</label>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="input-category" name="status" id="">
                                            <option value="">Tất cả</option>
                                            <option value="0">Đang chờ</option>
                                            <option value="1">Đã xử lý</option>
                                            <option value="2">Đã xong</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Từ Ngày</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="date" name="fromdate"></input>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Đến ngày</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="date" name="todate"></input>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="activity" >
                                        <button  class="btn btn-success">Tìm Kiếm</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        
                        <table class="table table-hover " id="tableorder">
                            <thead>
                                <tr class="tr-order">
                                    <th>#</th>
                                    <th>Mã đơn</th>
                                    <th>Khách hàng</th>
                                    <th>Địa chỉ</th>
                                    <th>Giao hàng</th>
                                    <th>Tổng tiền</th>
                                    <th>Ghi chú</th>
                                    <th>Ngày tạo</th>
                                    <th>Trạng Thái</th>
                                    <th>Người xử lý</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    // print("<pre>".print_r($data,true)."</pre>");die;
                                if (isset($data) && count($data)) {
                                        for ($i = 0; $i < count($data); $i++) {
                                    
                                ?>
                                <tr> 
                                    <td class="ordertable idorder" name="id"><?php echo $i + 1; ?></td>
                                    <td class="ordertable ordertable-code"><?php echo $data[$i]["code"]; ?></td>
                                    <td class="ordertable"><?php echo $data[$i]["user_id"]; ?></td>
                                    <td class="ordertable"><?php echo $data[$i]["address"] ?></td>
                                    <td class="ordertable"><?php echo $data[$i]["method"] ?></td>
                                    <td class="ordertable"><?php echo $data[$i]["total"] ?></td>
                                    <td class="ordertable"><?php echo $data[$i]["description"]; ?></td>
                                    <td class="ordertable"><?php echo $data[$i]["created_time"] ?></td>
                                    <td class="ordertable">
                                        <?php if ($data[$i]["status_order"] == 0) {
                                                echo "Đang chờ";
                                            } else if($data[$i]["status_order"] == 1) {
                                                echo "Đã xử lý";
                                            } else if($data[$i]["status_order"] == 2) {
                                                echo "Đã xong";
                                            }
                                        ?>
                                    </td>
                                    <td class="ordertable"><?php echo $data[$i]["user_completed"]; ?></td>
                                    <td class="ordertable">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-primary dropdown-toggle actionorder" id="actionorder" data-toggle="dropdown">
                                                Hành Động
                                            </button>
                                            <div class="dropdown-menu">
                                                <a  class="get-detail-order dropdown-item" href="<?php echo SITE_ROOT ?>/don-hang/chi-tiet/<?php echo $data[$i]["id"]; ?>" >Chi tiết</a> 
                                                <a class="dropdown-item" href="<?php echo SITE_ROOT ?>/don-hang/xu-ly/<?php echo $data[$i]["id"]; ?>">Tiếp nhận</a>
                                                <a class="dropdown-item" href="<?php echo SITE_ROOT ?>/don-hang/xoa/<?php echo $data[$i]["id"]; ?>">Xóa</a>
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
<script type="text/javascript" src="<?php echo JS_DIR ?>/get-order-product.js"></script>
<script>
    $(document).ready(function(){
        $(".collapse-order").show();
    })
</script>
</html>