<?php include dirname(__FILE__).'../../common/header.php'; ?>
<body>
        <div class="row">
            <?php include __DIR__.'../../common/left-menu.php' ?>
            <div class="col-sm-9">
                <?php include __DIR__.'../../common/top-header.php' ?>
                <div class="main">
                    <h5 class="h5-title">Sửa sản phẩm</h5>
                    <div class= "box-table">
                        <form method="post" action="<?php echo SITE_ROOT; ?>/san-pham/sua/luu" class="formchange">
                            <input class="d-none" type="number" name="idproduct" value="<?php echo $id_product ?>">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-2">
                                        <lable>Tên sản phẩm :</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input name="productname" class="productname" type="text" value="<?php echo $data[0]["product_name"]; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <lable>Giá :</lable>
                                    </div>
                                    <div class="col-md-4">
                                        <input name="price" class="price2" type="text" value="<?php echo $data[0]["price"]; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <lable>Danh mục :</lable>
                                    </div>
                                    <div class="col-md-4">
                                        <Select class="input-product" name="namecategory" id="namecategory">
                                            <?php
                                                if (isset($data1) && count($data1)) {
                                                        for ($i = 0; $i < count($data1); $i++) {
                                            ?>
                                            <option  name ="category">
                                                <?php 
                                                    echo $data1[$i]["title"];
                                                ?>
                                            </option>
                                            <?php 
                                                }
                                            }
                                            ?>                         
                                        </Select>
                                    </div>
                                    <div class="col-md-2">
                                        <lable>Trạng Thái :</lable>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="input-product" name="status" id="status">
                                            <option value="1">Hoạt Động </option>
                                            <option value="0">Không Hoạt Động </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <lable>Mô tả :</lable>
                                    </div>
                                    <div class="col-md-4">
                                        <textarea name="description" class="description" type="text"  id="" cols="46" rows="6"><?php echo $data[0]["description"]; ?></textarea>
                                    </div>
                                    <div class="col-md-2">
                                        <label style="cursor:pointer" for="file">Cập nhật ảnh :</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input id="file" src="<?php echo IMG_DIR ?>/category-img/product/phone/<?php echo $data[0]["image"] ?>" class="inputfile" type="file" name="image" />
                                        <div class="add-class">
                                            <label for="file" style="cursor : pointer" class="label">
                                                <img for="file" src="<?php echo IMG_DIR ?>/category-img/product/phone/<?php echo $data[0]["image"] ?>" class="icon-add-class" alt="addClass" >
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="activity" >
                                        <a href="<?php echo SITE_ROOT; ?>/san-pham"><button type="button" class="btn btn-success">Quay lại</button></a>
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
<Script>

    $(document).ready(function(){
        $(".collapse-product").show();
        $("#file").change(function(){
            var img = $("#file")[0].files[0];
            console.log(img.name);
            html='<img src="/maneger_shop_basic1/static/img/category-img/product/phone/'+ img.name +'" style="width:130px;">';
            $(".add-class").html(html);
        })
    })
</Script>
</html>