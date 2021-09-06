<?php include dirname(__FILE__).'../../common/header.php'; ?>
<body>
        <div class="row">
            <?php include __DIR__.'../../common/left-menu.php' ?>
            <div class="col-sm-9">
                <?php include __DIR__.'../../common/top-header.php' ?>
                <div class="main">
                    <h5 class="h5-title">Sửa sản phẩm</h5>
                    <div class= "box-table">
                        <form method="post" action="<?php echo SITE_ROOT; ?>/danh-muc/sua/luu" class="formchange">
                            <input class="d-none" type="number" name="idcategory" value="<?php echo $id_category ?>">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Tên danh mục :</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input name="categoryname" class="productname" type="text" value="<?php echo $data[0]["title"]; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label>Trạng thái :</label>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="input-category" name="status" id="status">
                                            <option value="1">Hoạt Động </option>
                                            <option value="0">Không Hoạt Động </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
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
                                    <div class="col-md-2">
                                        <label >Mô tả :</label>
                                    </div>
                                    <div class="col-md-4">
                                        <textarea name="description" class="description" cols="46" rows="6" type="text" ><?php echo $data[0]["description"];?></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="activity" >
                                        <a href="<?php echo SITE_ROOT; ?>/danh-muc"><button type="button" class="btn btn-success">Quay lại</button></a>
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
        
        $(".collapse-category").show();
    
        $("#file").change(function(){
            var img = $("#file")[0].files[0];
            console.log(img.name);
            html='<img src="/maneger_shop_basic1/static/img/category-img/product/phone/'+ img.name +'" style="width:130px;">';
            $(".add-class").html(html);
        })
    })
</Script>
</html>