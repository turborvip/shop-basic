<?php include dirname(__FILE__).'../../common/header.php'; ?>
<body>
        <div class="row">
            <?php include __DIR__.'../../common/left-menu.php' ?>
            <div class="col-sm-9">
                <?php include __DIR__.'../../common/top-header.php' ?>
                <div class="main">
                    <h5 class="h5-title">Chi tiết đơn hàng : <?php echo $data[0]["code"] ?></h5>
                    <div class= "box-table">
                        <table class="table table-hover " id="tableorderdetail">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Ảnh</th>
                                    <th>Số lượng</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    // print("<pre>".print_r($data,true)."</pre>");die;
                                if (isset($data) && count($data)) {
                                        for ($i = 0; $i < count($data); $i++) {
                                    
                                ?>
                                <tr class="orderdetail"> 
                                <td><?php echo $i + '1' ?></td>
                                <td><?php echo $data[$i]["product_name"] ?></td>
                                <td><img id="orderimg" src="<?php echo IMG_DIR ?>/category-img/product/phone/<?php echo $data[$i]["image"] ?>" alt=""></img></td>
                                <td><?php echo $data[$i]["quantity"] ?></td>
                                <td><?php echo $data[$i]["price"] ?></td>
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
        $(".collapse-order").show();
    })
</script>
</html>