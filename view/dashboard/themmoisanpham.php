<?php include dirname(__FILE__).'../../common/header.php'; ?>
</head>
<body>
        <div class="row">
            <?php include __DIR__.'../../common/left-menu.php' ?>
            <div class="col-sm-9">
                <?php include __DIR__.'../../common/top-header.php' ?>
                <div class="main">
                    <h5 class="h5-title">Thêm mới sản phẩm :</h5>
                    <h6 style="color:red; padding:20px 0">
                        <?php
                            if ( isset($_SESSION["err"]) ) {
                                echo $_SESSION["err"];
                                unset($_SESSION["err"]);
                            }

                            if ( isset($_SESSION["success"]) ) {
                                echo $_SESSION["success"];
                                unset($_SESSION["success"]);
                            }
                        ?> 
                    </h6>
                    <div class= "box-table">
                        <form  action="<?php echo SITE_ROOT; ?>/san-pham/tao-moi/luu" method="post" >
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Tên sản phẩm :</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Nhập tên sản phẩm" name="productname"></input>
                                    </div>
                                    <div class="col-md-2">
                                        <label> Giá tiền :</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Nhập Giá" name="price"></input>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label> Danh mục sản phẩm</label>
                                    </div>
                                    <div class="col-md-4">
                                        <Select class="input-product" name="namecategory" id="namecategory">
                                            <?php
                                                if (isset($data) && count($data)) {
                                                        for ($i = 0; $i < count($data); $i++) {
                                                        
                                            ?>
                                            <option  name ="category">
                                                <?php 
                                                    echo $data[$i]["title"];
                                                ?>
                                            </option>
                                            <?php 
                                                }
                                            }
                                            ?>                         
                                        </Select>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Trạng Thái :</label>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="input-product" name="status" id="status">
                                            <option value="">Hoạt Động </option>
                                            <option value="">Không Hoạt Động </option>
                                        </select>
                                    </div>
                                </div>
                                <DIV class="row">
                                    <div class="col-md-2">
                                        <label>Mô tả :</label>
                                    </div>
                                    <div class="col-md-4">
                                        <textarea id="description" name="description" rows="6" cols="45"></textarea>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="files" style="cursor : pointer" class="label">Chọn ảnh của bạn:</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="file" class="d-none" name="image" id="files" value=""></input>
                                        <div class="add-class">
                                            <label for="files" style="cursor : pointer" class="label">
                                                <img for="files" src="/maneger_shop_basic1/static/img/logo/add-img.png" class="icon-add-class" alt="addClass" >
                                            </label>
                                        </div>
                                        <img id="image">
                                    </div>
                                </DIV>
                                <div class="row">
                                    <div class="activity" >
                                    <a href="<?php echo SITE_ROOT ?>/san-pham"><button type="button" class="btn btn-success">Quay lại</button></a>
                                        <button  class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
<script>
$(document).ready(function(){
    $(".collapse-product").show();
    $("#files").change(function(){
        var img = $("#files")[0].files[0];
        console.log(img.name);
        html='<img src="/maneger_shop_basic1/static/img/category-img/product/phone/'+ img.name +'" style="width:130px;">';
        $(".add-class").html(html);
    })
})
</script>