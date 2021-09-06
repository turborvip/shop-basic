<?php 
namespace controllers;

class HomeController extends AppController {
     public function __construct() {
       parent::__construct();
       $session = $this->getSessionAuth();
       if(!$session) {
         header("Location: ../maneger_shop_basic1/sign-in");
       }
      //  $view = new view('layout_admin');
    }

    public function index() {
        //   echo 'home';
        //   var_dump($this->render('../view/layout_admin.php'));
          $view = new view('dashboard/dashboard');
          // sec => data
          $view->assign('variablename', 'variable content');
        //  include '../view/layout_admin.php';
    }
    public function changpass(){
          $view = new view('dashboard/doi-mat-khau');
    }

    public function changpass_controller(){
     
      $password_hash = password_hash($_REQUEST['newpass'], PASSWORD_BCRYPT);
      $id = (int)$_SESSION["user"]["id"];
      $username = $_SESSION["user"]["username"];

      $query = $this->connection->query(" SELECT * FROM user WHERE  user.username = '" . $username . "'");
      $user = $query->fetchArray();
          
        if (!isset($user)) {
          echo "Mật khẩu hiện tại sai";
        }
        if(isset($user["password"])){
          $isValid = password_verify($_REQUEST["oldpass"],($user["password"]));
        }
        if(empty($isValid)){
          echo "Mật khẩu hiện tại sai";
        }else{
          if($isValid){
              $query = "UPDATE user SET password = '".$password_hash."' WHERE id = $id ";
              $data = $this->connection->query($query);
          } else{
            echo "Mật khẩu hiện tại sai";
          }
      }

    }

    public function changacc(){
      $view = new view('dashboard/sua-tai-khoan-admin');
    }

    public function changacc_controller(){

      var_dump($_REQUEST);
      $id = $_SESSION["user"]["id"];
      $query = "UPDATE user
              SET username = '".$_REQUEST['username']."' ,fullname = '".$_REQUEST['fullname']."', 
              phonenumber = '".$_REQUEST['phonenumber']."', birthday = '".$_REQUEST['birthday']."',gender = '".$_REQUEST['gender']."',
              address = '".$_REQUEST['address']."', email = '".$_REQUEST['email']."'
              WHERE id = $id ";
      $data = $this->connection->query($query);
      header("Location:sign-in");
    }
}

?>