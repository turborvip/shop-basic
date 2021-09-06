<?php 
    namespace controllers;

    class CategoryControler extends AppController {

      public function __construct() {
        parent::__construct();
      }

      public function index() {
        
        // action
        // get list category litmit 20 on page
        // $page = isset($_GET["page"]) ? $_GET["page"] : null;
        $page = count(explode('?', $_SERVER['REQUEST_URI'], 2)) > 1 ? (int) explode("=", explode('?', $_SERVER['REQUEST_URI'], 2)[1])[1] : 1;
        //count number category
        $queryCount = "SELECT count(*) as totalRow from category_product";
        $total = $this->connection->query($queryCount)->fetchArray();
        
        // lay bao nhieu phan tu trong 1 page
        $limit = 10;
        $pages = $total['totalRow'] > 0 ? ceil($total['totalRow'] / $limit) : 0;

        // lay tu phan tu thu bao nhieu
        $offset = ($page - 1)  * $limit;
        $query = "SELECT * FROM category_product ORDER BY category_product.id DESC LIMIT ".  $limit . " OFFSET ". $offset;
        $data = $this->connection->query($query)->fetchAll();
        $view = new view('dashboard/danhsach-danhmuc');
        $view->assign('data',  $data);
        $view->assign('pages',  $pages);
      }

        public function listCategory() {
    
            $view = new view('dashboard/danhsach-danhmuc');
 
            $view->assign('variablename', 'variable content');
    
        }
    

        public function viewCreateCategory() {
        
            $view = new view('dashboard/themmoidanhmuc');
            // sec => data
            $view->assign('variablename', 'variable content');
            //  include '../view/layout_admin.php';
        }

        public function CreateCategory() {
          // create table category_product roew
          // var_dump($_REQUEST);die;

          $title = trim($_REQUEST["title"]);
          $description = $_REQUEST["description"];
          $status = (int) $_REQUEST["status"];
          $image = $_REQUEST["image"];

          if( $title == "" || $description == ""|| $status == ""|| $image == "" ) {
                $_SESSION["err"] = "Bạn cần nhập đủ thông tin !";
                header("Location: ../tao-moi");
                return;
                die;
            }
          // var_dump( $_REQUEST["image"]);die;

          // query sql 
          $queryCheck = "SELECT * FROM category_product WHERE title ='" . $title. "'";
          $dataCheck = $this->connection->query($queryCheck)->fetchAll();
          if (count($dataCheck) > 1) {
             $_SESSION["err"] = "Danh mục đã tồn tại!";
            header("Location: ../tao-moi");
            return;
          } 

          $query = "INSERT INTO category_product  (title, description, image, status) 
          VALUE ('" . $title . "',  '" . $description . "',  '" . $image . "', ". $status.")";

          $data = $this->connection->query($query);

          $_SESSION["success"] = "Tạo mới thành công!";
          header("Location: ../tao-moi");
          return;
        }

        public function controllerChangeCategory(){
          $id = (int)$_REQUEST["idcategory"];
          $categoryname = trim($_REQUEST["categoryname"]);
          $description = $_REQUEST["description"];
          $image = $_REQUEST["image"];
          $status = $_REQUEST["status"];

          var_dump( $id);
          var_dump( $categoryname);
          var_dump( $description);
          var_dump( $image);
          
          if(!empty($image)){
            $query = "UPDATE category_product
                    SET  title = '".$categoryname."', description = '".$description."',image = '".$image."', status = '".$status."'
                    WHERE id = $id ";
            $data = $this->connection->query($query);
          }else{
            $query = "UPDATE category_product
                    SET title= '".$categoryname."', description = '".$description."', status = '".$status."'
                    WHERE id = $id ";
            $data = $this->connection->query($query);
          }
          header("Location:http://localhost/maneger_shop_basic1/danh-muc ");
        }

        public function viewChangeCategory(){
          $id_category = (int) explode('/', $_REQUEST["url"])[2];
          $view = new view('dashboard/sua-danh-muc');
          $query = "SELECT * from category_product where id = $id_category;";
          $data = $this->connection->query($query)->fetchAll();

          $view->assign('data', $data);
          $view->assign('id_category', $id_category);
          

        }
       
        public function search_category(){
          
          if(isset($_REQUEST["status"])){ $status = (int)$_REQUEST["status"];}
          if(isset($_REQUEST["namecategory"])){ $namecategory = trim($_REQUEST["namecategory"]);}
          $view = new view('dashboard/danhsach-danhmuc');
          if(empty($namecategory)){
            $query = "SELECT * FROM category_product WHERE status = $status ";
          }

          if(isset($namecategory)){
            $query = "SELECT * FROM category_product WHERE status = $status and title LIKE '".'%'.$namecategory.'%'."' ";
          }
          $data = $this->connection->query($query)->fetchAll();
          $view->assign('data', $data);
        }

        public function delete_category(){
          $id = (int) explode('/', $_REQUEST["url"])[2];
          $query = "DELETE  FROM category_product
                      WHERE category_product.id = $id;";
          $data = $this->connection->query($query);
          header("Location:http://localhost/maneger_shop_basic1/danh-muc ");
        }
    }



?>