<?php 
namespace controllers;
// session_start();

class SignUpSignInSignOutController extends AppController  {

  public function __construct() {
    parent::__construct();
    // $session = $this->getSessionAuth();
    // var_dump($session);
    //    if($session) {
    //      header("Location: ../maneger_shop_basic1/dashboard");
    //    }
    // require_once  PATH_ROOT.'../database/DB.php';
    // $this->db = ;
  }

  public function signUp() {
    //  var_dump($this->connection);
    // $data = $this->connection->query("INSERT INTO banner (title, sologan, image) VALUES ('tieu de22', 'sologan 222', 'image')");
    // var_dump($data->fetchAll());
    // fetchArray
      $view = new view('dashboard/signUp');
        // sec => data
      $view->assign('variablename', 'variable content');
  }

  public function signIn() {

      $view = new view('dashboard/signIn');die;
        // sec => data
      $view->assign('variablename', 'variable content');
  }


  public function registerUser() {

    $username = $_REQUEST['username'];
    $pass = $_REQUEST['repassword'];
    $fullname = $_REQUEST['fullname'];
    $email = $_REQUEST['email'];
    $phonenumber = $_REQUEST['phonenumber'];
    $birthday = $_REQUEST['birthday'];
    $gender = $_REQUEST['gender'];
  
    $password_hash=password_hash($pass, PASSWORD_BCRYPT);
    $data2 = $this->connection->query("SELECT * FROM user WHERE user.username='" . $username . "'");
    $user = $data2->fetchAll();// chuyen doi tuong thanh mang <=> $data->fetchAll()
    // var_dump($user);die;
    if (!empty($user)) {
      $message = "Username is already exist !";
      echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
          $data3 = $this->connection->query("INSERT INTO `user` (username, password, fullname,phonenumber,birthday,gender,address,email,role)
          VALUES ('$username', '$password_hash', '$fullname','$phonenumber', '$birthday', '$gender', 'Ha Noi', '$email', '0'  )");
          header("Location: ../maneger_shop_basic1/login-page"); 
        }
  }

  function loginUser(){
      $user;
      $pass;
      if (isset($_POST['submit'])) {
          if (empty($_POST['usenamelogin']) || empty($_POST['passlogin'])) {
            header("Location: ../maneger_shop_basic1/sign-in");
            $_SESSION["error"] = "Username or Password is Invalid";
          } else {
            $user = $_POST['usenamelogin'];
            $pass = $_POST['passlogin'];
          }
      }

        $query = $this->connection->query("SELECT * FROM user WHERE  user.username='" . $user . "'");
        $user = $query->fetchArray();
        
        // print("<pre>".print_r($user,true)."</pre>");die;

        if(!empty($user)){
          
        //   // var_dump($pass);
        //   // var_dump(strlen($user["password"]));
          $isValid = password_verify($pass,($user["password"]));
          // var_dump($isValid);die;
          if($isValid && $user["role"] == 1){
            $_SESSION["user"] = $user;
            header("Location: ../maneger_shop_basic1/dashboard");
          }else{
            $_SESSION["error"] = "Password is Invalid";
            header("Location: ../maneger_shop_basic1/sign-in");
            
          }
        }else{
          $_SESSION["error"] = "Username is Invalid";
          header("Location: ../maneger_shop_basic1/sign-in");
          
        }
        
  }        
          
  public function signOut(){
    session_destroy();
      $view = new view('dashboard/signIn');
        // sec => data
      $view->assign('variablename', 'variable content');
  }     

 

}

  
    

?>
