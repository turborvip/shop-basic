<?php 
  namespace controllers;

  class ProductController extends AppController {
      public function __construct() {
          parent::__construct();
      }

      public function index() {        
          // action
          // get list category litmit 20 on page
          // $page = isset($_GET["page"]) ? $_GET["page"] : null;
          $page = count(explode('?', $_SERVER['REQUEST_URI'], 2)) > 1 ? (int) explode("=", explode('?', $_SERVER['REQUEST_URI'], 2)[1])[1] : 1;
          //count number category
          $queryCount = "SELECT count(*) as totalRow from product";
          $total = $this->connection->query($queryCount)->fetchArray();
          
          // lay bao nhieu phan tu trong 1 page
          $limit = 10;
          $pages = $total['totalRow'] > 0 ? ceil($total['totalRow'] / $limit) : 0;

          // lay tu phan tu thu bao nhieu
          $offset = ($page - 1)  * $limit;
          $query = "SELECT * FROM product order by product.id DESC LIMIT ".  $limit . " OFFSET ". $offset;
          $data = $this->connection->query($query)->fetchAll();
          $view = new view('dashboard/danhsachsanpham');
          $view->assign('data',  $data);
          $view->assign('pages',  $pages);

      }

      public function listProduct() {

          $view = new view('dashboard/danhsachsanpham');
            // sec => data
          $view->assign('variablename', 'variable content');
      }

      public function viewCreateProduct() {

          $view = new view('dashboard/themmoisanpham');
          $query = "SELECT title FROM category_product ";
          $data = $this->connection->query($query)->fetchAll();
          $view->assign('data', $data);
          
      }

      public function CreateProduct() {
                    
            $productname = trim($_REQUEST["productname"]);
            $description = $_REQUEST["description"];
            $status = (int) $_REQUEST["status"];
            $namecategory = $_REQUEST["namecategory"];
            $price = $_REQUEST["price"];
            $image = $_REQUEST["image"];

            $query1 = "SELECT id FROM category_product where title = '" . $namecategory. "'"; 
            $data1 = $this->connection->query($query1)->fetchArray();
            $id = implode("",$data1);
            
            
            if( $productname == "" || $description == ""|| $status == ""|| $namecategory == ""|| $price == ""|| $image == "" ) {
                $_SESSION["err"] = "Bạn cần nhập đủ thông tin !";
                header("Location: ../tao-moi");
                return;
            }
            
            // query sql 
            $queryCheck = "SELECT * FROM product WHERE product_name ='" . $productname. "'";
            $dataCheck = $this->connection->query($queryCheck)->fetchAll();
            if (count($dataCheck) > 1) {
              $_SESSION["err"] = "Sản Phẩm đã tồn tại!";
              header("Location: ../tao-moi");
              return;
            } 

            $query = "INSERT INTO product  (product_name, price, unit, image, category, description, status, id_category_product) 
            VALUE ('" . $productname . "',  '" . $price . "', 'VND', '" . $image . "', '" . $namecategory . "','" . $description . "','" . $status . "', '" . $id . "')";

            $data = $this->connection->query($query);

            $_SESSION["success"] = "Tạo mới thành công!";
            header("Location: ../tao-moi");
            return;
      }

      public function delete_Product(){
        $id = (int) explode('/', $_REQUEST["url"])[2];
        $query = "DELETE  FROM product
                    WHERE product.id = $id;";
        $data = $this->connection->query($query);

        header("Location:http://localhost/maneger_shop_basic1/san-pham ");
      }

      public function view_change_Product(){
          $id_product = (int) explode('/', $_REQUEST["url"])[2];
          $view = new view('dashboard/sua-san-pham');

          $query = "SELECT * from product where id = $id_product;";
          $data = $this->connection->query($query)->fetchAll();

          $view->assign('data', $data);
          $view->assign('id_product', $id_product);

          $query1 = "SELECT title FROM category_product"; 
          $data1 = $this->connection->query($query1)->fetchAll();
          $view->assign('data1', $data1);


      }

      public function change_Product(){

          $id = (int)$_REQUEST["idproduct"];

          $productname = trim($_REQUEST["productname"]);
          $description = $_REQUEST["description"];
          $namecategory = $_REQUEST["namecategory"];
          $price = (int)$_REQUEST["price"];
          $status = $_REQUEST["status"];
          $image = $_REQUEST["image"];

          var_dump( $id);
          var_dump( $productname);
          var_dump( $description);
          var_dump( $namecategory);
          var_dump( $price);
          var_dump( $image);
          if($namecategory == "Điện Thoại"){
            $id_category_product = 1;
          }
          if($namecategory == "Laptop"){
            $id_category_product = 2;
          }
          if($namecategory == "Tablet"){
            $id_category_product = 3 ;
          }
          
          if(!empty($image)){
            $query = "UPDATE product
                    SET price = '".$price."' ,product_name = '".$productname."', category = '".$namecategory."', description = '".$description."',image = '".$image."', status = '".$status."',id_category_product = '".$id_category_product."'
                    WHERE id = $id ";
            $data = $this->connection->query($query);
          }else{
            $query = "UPDATE product
                    SET price = '".$price."' ,product_name = '".$productname."', category = '".$namecategory."', description = '".$description."' ,status = '".$status."',id_category_product = '".$id_category_product."'
                    WHERE id = $id ";
            $data = $this->connection->query($query);
          }
          header("Location:http://localhost/maneger_shop_basic1/san-pham ");
      }

      public function search_product(){
        if(isset($_REQUEST["status"])){ $status = (int)$_REQUEST["status"];}
        if(isset($_REQUEST["nameproduct"])){ $nameproduct = trim($_REQUEST["nameproduct"]);}
        $view = new view('dashboard/danhsachsanpham');
        if(empty($nameproduct)){
          $query = "SELECT * FROM product WHERE status = $status ";
        }

        if(isset($nameproduct)){
          $query = "SELECT * FROM product WHERE status = $status and product_name LIKE '".'%'.$nameproduct.'%'."'";
        }
        $data = $this->connection->query($query)->fetchAll();
        $view->assign('data', $data);
      }
 
  }   


?>