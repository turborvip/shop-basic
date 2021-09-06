<?php 
namespace controllers;

class ViewClientController extends AppController { 

    
    public function indexCategory() { 
          // action
          // get list category litmit 20 on page
          // $page = isset($_GET["page"]) ? $_GET["page"] : null;
          $page = count(explode('?', $_SERVER['REQUEST_URI'], 2)) > 1 ? (int) explode("=", explode('?', $_SERVER['REQUEST_URI'], 2)[1])[1] : 1;
          //count number category
          $queryCount = "SELECT count(*) as totalRow from product";
          $total = $this->connection->query($queryCount)->fetchArray();
          
          
          // lay bao nhieu phan tu trong 1 page
          $limit = 15;
          $pages = $total['totalRow'] > 0 ? ceil($total['totalRow'] / $limit) : 0;

          // lay tu phan tu thu bao nhieu
          $offset = ($page - 1)  * $limit;
          $query = "SELECT * FROM product order by product.id desc LIMIT  ".  $limit . " OFFSET ". $offset;
          $data = $this->connection->query($query)->fetchAll();
          $view = new view('categoryPage');
          $view->assign('data',  $data);
          $view->assign('pages',  $pages);

    }

    public function indexCategoryPhone() { 
          // action
          // get list category litmit 20 on page
          // $page = isset($_GET["page"]) ? $_GET["page"] : null;
          $page = count(explode('?', $_SERVER['REQUEST_URI'], 2)) > 1 ? (int) explode("=", explode('?', $_SERVER['REQUEST_URI'], 2)[1])[1] : 1;
          //count number category
          $queryCount = "SELECT count(*) as totalRow from product";
          $total = $this->connection->query($queryCount)->fetchArray();
          
          // lay bao nhieu phan tu trong 1 page
          $limit = 15;
          $pages = $total['totalRow'] > 0 ? ceil($total['totalRow'] / $limit) : 0;

          // lay tu phan tu thu bao nhieu
          $offset = ($page - 1)  * $limit;
          $query = "SELECT * FROM product  where id_category_product = '1' order by product.id desc LIMIT  ".  $limit . " OFFSET ". $offset;
          $data = $this->connection->query($query)->fetchAll();
          $view = new view('categoryPage');
          $view->assign('data',  $data);
          $view->assign('pages',  $pages);

    }

    public function indexCategoryTablet() { 
          // action
          // get list category litmit 20 on page
          // $page = isset($_GET["page"]) ? $_GET["page"] : null;
          $page = count(explode('?', $_SERVER['REQUEST_URI'], 2)) > 1 ? (int) explode("=", explode('?', $_SERVER['REQUEST_URI'], 2)[1])[1] : 1;
          //count number category
          $queryCount = "SELECT count(*) as totalRow from product";
          $total = $this->connection->query($queryCount)->fetchArray();
          
          // lay bao nhieu phan tu trong 1 page
          $limit = 15;
          $pages = $total['totalRow'] > 0 ? ceil($total['totalRow'] / $limit) : 0;

          // lay tu phan tu thu bao nhieu
          $offset = ($page - 1)  * $limit;
          $query = "SELECT * FROM product where id_category_product = '3' order by product.id desc LIMIT  ".  $limit . " OFFSET ". $offset;
          $data = $this->connection->query($query)->fetchAll();
          $view = new view('categoryPage');
          $view->assign('data',  $data);
          $view->assign('pages',  $pages);

    }

    public function indexCategoryLaptop() { 
          // action
          // get list category litmit 20 on page
          // $page = isset($_GET["page"]) ? $_GET["page"] : null;
          $page = count(explode('?', $_SERVER['REQUEST_URI'], 2)) > 1 ? (int) explode("=", explode('?', $_SERVER['REQUEST_URI'], 2)[1])[1] : 1;
          //count number category
          $queryCount = "SELECT count(*) as totalRow from product";
          $total = $this->connection->query($queryCount)->fetchArray();

          // lay bao nhieu phan tu trong 1 page
          $limit = 15;
          $pages = $total['totalRow'] > 0 ? ceil($total['totalRow'] / $limit) : 0;

          // lay tu phan tu thu bao nhieu
          $offset = ($page - 1)  * $limit;
          $query = "SELECT * FROM product where id_category_product = '2' order by product.id desc LIMIT  ".  $limit . " OFFSET ". $offset;
          $data = $this->connection->query($query)->fetchAll();
          $view = new view('categoryPage');
          $view->assign('data',  $data);
          $view->assign('pages',  $pages);

    }
    
    public function indexDetail() { 
        
        $idinput = $_POST['id'];
        // var_dump($id);die;
        $query = "SELECT * FROM product where id = '" . $idinput. "'"; 
        $data = $this->connection->query($query)->fetchArray();
        $view = new view('detailPage');
        $view->assign('data',  $data);
    }

    public function homePage() {

        $view = new view('/homePage');
          // sec => data
        $view->assign('variablename', 'variable content');
    }

    public function categoryPage() {

        $view = new view('/categoryPage');
          // sec => data
        $view->assign('variablename', 'variable content');
    }

    public function detailPage() {

        $view = new view('/detailPage');
          // sec => data
        $view->assign('variablename', 'variable content');
    }

    public function loginPage() {

        $view = new view('/layout_login');
        $query = "SELECT id FROM user ";
        $data = $this->connection->query($query)->fetchAll();
        $view->assign('data', $data);
        
    } 
    
    function controllerLogin(){
      $user;
      $pass;
      if (isset($_POST['submit'])) {
          if (empty($_POST['usenamelogin']) || empty($_POST['passlogin'])) {
            header("Location: ../maneger_shop_basic1/login-page");
            $_SESSION["error"] = "Username or Password is Invalid";
          } else {
            $user = $_POST['usenamelogin'];
            $pass = $_POST['passlogin'];
          }
      }

        $query = $this->connection->query("SELECT * FROM user WHERE  user.username='" . $user . "'");
        $user = $query->fetchArray();
          
        if (!isset($user)) {
           $view = new view('/layout_login');
            $err = "Username is invalid";
            $view->assign('err', $err);
        }
        if(isset($user["password"])){
          $isValid = password_verify($pass,($user["password"]));
        }
        if(empty($isValid)){
          $view = new view('/layout_login');
          $err = "Password is invalid";
          $view->assign('err', $err);
        }else{
          if($isValid){
              $view = new view('/homePage');
              $view->assign('user', $user);

          } else{
            $view = new view('/layout_login');
            $err = "Password is invalid";
            $view->assign('err', $err);
          }
      }
    }
    
    public function signOut(){
      header("Location:http://localhost/maneger_shop_basic1/login-page ");
      
    }

     public function cartPage() {

        $view = new view('/cartPage');
          // sec => data
        $view->assign('variablename', 'variable content');
    }

    public function paymentPage() {

        $view = new view('/paymentPage');
          // sec => data
         
        $view->assign('variablename', 'variable content');
    }

    public function menutopPageController() {

        $view = new view('/menutopPage');
        // $user = $_REQUEST["user"];
        // var_dump($user[0]["fullname"]);
        // $a= "a";
        // $view->assign('a', $a);
        
    }

    public function completePage() {
      $id = $_REQUEST["idUser"];
        
      $query = "SELECT ou.*,op.*,p.* FROM order_product AS op
                INNER JOIN order_u AS ou ON op.order_id = ou.id
                INNER JOIN product AS p ON p.id = op.id_product
                WHERE ou.user_id = $id AND status_order = 0 OR status_order = 1
                ORDER BY ou.id DESC "; 
      $data = $this->connection->query($query)->fetchAll();
      echo json_encode($data);
      
    }
    public function completePage1() {
     $view = new view('/completePage');
      
    }
    

    public function controllerCompletePage() {

        $id_province = $_REQUEST["province"];
        $query = "SELECT name FROM province where id = $id_province ";
        $getprovice = $this->connection->query($query)->fetchArray();
         
        $id_district = $_REQUEST["district"];
        $query = "SELECT name FROM district where id = $id_district ";
        $getdistrict = $this->connection->query($query)->fetchArray();

        $dataCard = $_REQUEST["dataCard"];
        $fullname = $_REQUEST["fullname"];
        $phonenumber = $_REQUEST["phonenumber"];
        $email = $_REQUEST["email"];
        $address =  $_REQUEST["address"] ."<br/>".$_REQUEST["ward"]."<br/>". $getdistrict["name"]."<br/>".$getprovice["name"];
        $description = $_REQUEST["description"];
        $code = mt_rand().time();
        $createdtime =  date('Y-m-d H:i:s',time());
        $method = $_REQUEST["layout"];
        $total = $_REQUEST["getprice"];
        
        if(!empty($_REQUEST["id"])){
          $id = $_REQUEST["id"];
        }else{
          $id = $_REQUEST["fullname"]."<br/>".$_REQUEST["phonenumber"]."<br/>".$_REQUEST["email"];
        }
        $data = $this->connection->query("INSERT INTO `order_u` (code, user_id, address ,method,total,description,created_time,status_order)
        VALUES ('$code', '$id', '$address','$method', '$total','$description', '$createdtime', '0')");

        $query = "SELECT id FROM order_u where code =  $code";
        $getdata = $this->connection->query($query)->fetchAll();
        $order_id = $getdata[0]["id"];
        
        foreach($dataCard as $key => $value){
          $id_product = $value['id'];
          $quantity = $value['quantity'];
          $total_price = $value['price'];
          $data = $this->connection->query("INSERT INTO `order_product` (order_id,code, id_product, quantity ,total_price)
          VALUES ('$order_id', '$code', '$id_product','$quantity','$total_price')");
        }

        $query = "SELECT ou.*,op.*,p.* FROM order_product AS op
            INNER JOIN order_u AS ou ON op.order_id = ou.id
            INNER JOIN product AS p ON p.id = op.id_product
            WHERE ou.user_id = $id AND status_order = 0 OR status_order = 1
            ORDER BY ou.id DESC"; 
        $data = $this->connection->query($query)->fetchAll();
        echo json_encode($data);
    }

    public function delete_OrderPage(){
        // $id = (int) explode('/', $_REQUEST["url"])[2];
        $id_product = $_REQUEST["id_product"];
        $id_order = $_REQUEST["id_order"];
        $query = "DELETE  FROM order_u
                    WHERE order_u.id = $id_order;";
        $data = $this->connection->query($query);

        $query = "DELETE  FROM order_product
                     WHERE order_product.order_id = $id_order;";
        $data = $this->connection->query($query);
      
    }

    public function received_order(){
        $id_received = $_REQUEST["id_received"];
        $query = "UPDATE order_u
                    SET status_order = 2
                    WHERE id = $id_received;";
        $data = $this->connection->query($query);
        
    }

    public function accountPage(){

      $view = new view('/accountPage');
      
      $view->assign('variablename', 'variable content');
    }
    

    public function accountPageController(){
      $id = $_REQUEST["id"];
          if($id == ""){
            header("Location:http://localhost/maneger_shop_basic1/login-page ");
          }
          if(isset($_REQUEST['image'])){
            $query = "UPDATE user
                    SET username = '".$_REQUEST['username']."' ,fullname = '".$_REQUEST['fullname']."', 
                    phonenumber = '".$_REQUEST['phonenumber']."', birthday = '".$_REQUEST['birthday']."',gender = '".$_REQUEST['gender']."',
                    address = '".$_REQUEST['address']."', email = '".$_REQUEST['email']."', image='".$_REQUEST['image']."'
                    WHERE id = $id ";
            $data = $this->connection->query($query);
            
          }else if(empty($_REQUEST['image'])){
            $query = "UPDATE user
                    SET username = '".$_REQUEST['username']."' ,fullname = '".$_REQUEST['fullname']."', 
                    phonenumber = '".$_REQUEST['phonenumber']."', birthday = '".$_REQUEST['birthday']."',gender = '".$_REQUEST['gender']."',
                    address = '".$_REQUEST['address']."', email = '".$_REQUEST['email']."'
                    WHERE id = $id ";
            $data = $this->connection->query($query);
          }
          header("Location:http://localhost/maneger_shop_basic1/signout-page ");
    }
    
    public function changePassPage(){

      $view = new view('/changePassPage');
      
    }
    public function changePass(){
      $password_hash = password_hash($_REQUEST['new-pass2'], PASSWORD_BCRYPT);
      $id = (int)$_REQUEST['id'];
      // var_dump($password_hash);
      // var_dump($id);die;
      $query = $this->connection->query("SELECT * FROM user WHERE  user.username='" . $_REQUEST["username"] . "'");
        $user = $query->fetchArray();
          
        if (!isset($user)) {
           $view = new view('/changePassPage');
            $err = "Username is invalid";
            $view->assign('err', $err);
        }
        if(isset($user["password"])){
          $isValid = password_verify($_REQUEST["old-pass"],($user["password"]));
        }
        if(empty($isValid)){
          $view = new view('/changePassPage');
          $err = "Password is invalid";
          $view->assign('err', $err);
        }else{
          if($isValid){
              $view = new view('/layout_login');
              $query = "UPDATE user SET password = '".$password_hash."' WHERE id = $id ";
              $data = $this->connection->query($query);
          } else{
            $view = new view('/changePassPage');
            $err = "Password is invalid";
            $view->assign('err', $err);
          }
      }
    }

    public function orderCompletedPage(){

      $view = new view('/profile-orderCompleted');
      
    }

    public function orderCompleted(){
      $id = (int)$_REQUEST["id"] ;
      $query = "SELECT ou.*,op.*,p.* FROM order_product AS op
                INNER JOIN order_u AS ou ON op.order_id = ou.id
                INNER JOIN product AS p ON p.id = op.id_product
                WHERE ou.user_id = $id AND status_order = 2
                ORDER BY ou.id DESC"; 
      $data = $this->connection->query($query)->fetchAll();
      echo json_encode($data);
    }

    public function choose_province(){
      $query = "SELECT * FROM province 
                ORDER BY name "; 
      $data = $this->connection->query($query)->fetchAll();
      echo json_encode($data);
    }

    public function choose_district(){
      $province = (int)$_REQUEST["province"];
      $query = "SELECT * FROM district 
                where province = $province
                ORDER BY name "; 
      $data = $this->connection->query($query)->fetchAll();
      echo json_encode($data);
    }

    public function choose_ward(){
      $district = (int)$_REQUEST["district"];
      $query = "SELECT * FROM ward 
                where district = $district
                ORDER BY name "; 
      $data = $this->connection->query($query)->fetchAll();
      echo json_encode($data);
    }
}
?>