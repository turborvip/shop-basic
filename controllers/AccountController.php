<?php 

    namespace controllers;

    class AccountController extends AppController{

        public function __construct() {
        parent::__construct();
        }

        public function index() {
        
          $page = count(explode('?', $_SERVER['REQUEST_URI'], 2)) > 1 ? (int) explode("=", explode('?', $_SERVER['REQUEST_URI'], 2)[1])[1] : 1;
          //count number category
          $queryCount = "SELECT count(*) as totalRow from user";
          $total = $this->connection->query($queryCount)->fetchArray();
          
          // lay bao nhieu phan tu trong 1 page
          $limit = 10;
          $pages = $total['totalRow'] > 0 ? ceil($total['totalRow'] / $limit) : 0;

          // lay tu phan tu thu bao nhieu
          $offset = ($page - 1)  * $limit;
          $query = "SELECT * FROM user LIMIT ".  $limit . " OFFSET ". $offset;
          $data = $this->connection->query($query)->fetchAll();
          $view = new view('dashboard/danhsachtaikhoan');
          $view->assign('data',  $data);
          $view->assign('pages',  $pages);

        }

        public function listAccount() {
    
          $view = new view('dashboard/danhsachtaikhoan');
          // sec => data
          $view->assign('variablename', 'variable content');
        //  include '../view/layout_admin.php';
        }
    

        public function viewCreateAccount() {

          $view = new view('dashboard/themmoitaikhoan');
          // sec => data
          $view->assign('variablename', 'variable content');
        //  include '../view/layout_admin.php';
        }

        public function createAccount() {

          $user = trim($_REQUEST["user"]);
          $password = $_REQUEST["repassword"];
          $fullname = $_REQUEST["fullname"];
          $phonenumber = $_REQUEST["phonenumber"];
          $address = $_REQUEST["address"];
          $role = (int) $_REQUEST["role"];
          $status = (int) $_REQUEST["status"];

          // var_dump((int) $_REQUEST["status"]);die;
          if( $user == "" || $password == ""|| $fullname == ""|| $phonenumber == ""|| $address == ""|| $role == ""|| $status == "" ) {
                $_SESSION["err"] = "Bạn cần nhập đủ thông tin !";
                header("Location: ../tao-moi");
                return;
                die;
          }
          // query sql 
          $queryCheck = "SELECT * FROM user WHERE username ='" . $user. "'";
          $dataCheck = $this->connection->query($queryCheck)->fetchAll();
          if (count($dataCheck) > 1) {
             $_SESSION["err"] = "Tài khoản đã tồn tại!";
            header("Location: ../tao-moi");
            return;
          }

          $query = "INSERT INTO user  (username, password, fullname, phonenumber, address, role,  status) 
          VALUE ('" . $user . "',  '" . $password . "',  '" . $fullname . "',  '" . $phonenumber . "',  '" . $address . "' , ". $role.", 1)";

          $data = $this->connection->query($query);

          $_SESSION["success"] = "Tạo mới thành công!";
          header("Location: ../tao-moi");
          return;

        }

        public function delete_Account(){

          $id = (int) explode('/', $_REQUEST["url"])[2];
          $query = "DELETE  FROM user
                      WHERE user.id = $id;";
          $data = $this->connection->query($query);

          header("Location:http://localhost/maneger_shop_basic1/tai-khoan ");
        }

        public function search_account(){
          if(isset($_REQUEST["status"])){ $status = (int)$_REQUEST["status"];}
          if(isset($_REQUEST["username"])){ $username = trim($_REQUEST["username"]);}
          if(isset($_REQUEST["fullname"])){ $fullname = trim($_REQUEST["fullname"]);}
          if(isset($_REQUEST["role"])){ $role = trim($_REQUEST["role"]);}
          $view = new view('dashboard/danhsachtaikhoan');
          if(empty($username)){
            if(empty($fullname)){
              $query = "SELECT * FROM user WHERE role = $role and status = $status";
            }else{
              $query = "SELECT * FROM user WHERE role = $role and status = $status and fullname LIKE '".'%'.$fullname.'%'."'";
            }
          }else{
            if(empty($fullname)){
              $query = "SELECT * FROM user WHERE role = $role and status = $status and username LIKE '".'%'.$username.'%'."'";
            }else{
              $query = "SELECT * FROM user WHERE role = $role and status = $status and username LIKE '".'%'.$username.'%'."' ";
            }
          }
          $data = $this->connection->query($query)->fetchAll();
          $view->assign('data', $data);
        }
        
    }
?>