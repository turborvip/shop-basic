<?php

namespace controllers;


class OrderController extends AppController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){

        // action
        // get list category litmit 20 on page
        // $page = isset($_GET["page"]) ? $_GET["page"] : null;
        $page = count(explode('?', $_SERVER['REQUEST_URI'], 2)) > 1 ? (int) explode("=", explode('?', $_SERVER['REQUEST_URI'], 2)[1])[1] : 1;
        //count number category
        $queryCount = "SELECT count(*) as totalRow from order_u";
        $total = $this->connection->query($queryCount)->fetchArray();

        // lay bao nhieu phan tu trong 1 page
        $limit = 10;
        $pages = $total['totalRow'] > 0 ? ceil($total['totalRow'] / $limit) : 0;

        // lay tu phan tu thu bao nhieu
        $offset = ($page - 1)  * $limit;
        $query = "SELECT * FROM order_u ORDER BY order_u.id DESC  LIMIT  " .  $limit . " OFFSET " . $offset;
        $data = $this->connection->query($query)->fetchAll();
        $view = new view('dashboard/danhsachorder');
        $view->assign('data',  $data);
        $view->assign('pages',  $pages);
    }


    public function detailorder(){

        $id = (int) explode('/', $_REQUEST["url"])[2];
       
        // action
        // get list category litmit 20 on page
        // $page = isset($_GET["page"]) ? $_GET["page"] : null;
        $page = count(explode('?', $_SERVER['REQUEST_URI'], 2)) > 1 ? (int) explode("=", explode('?', $_SERVER['REQUEST_URI'], 2)[1])[1] : 1;
        //count number category
        $queryCount = "SELECT count(*) as totalRow from order_u";
        $total = $this->connection->query($queryCount)->fetchArray();

        // lay bao nhieu phan tu trong 1 page
        $limit = 10;
        $pages = $total['totalRow'] > 0 ? ceil($total['totalRow'] / $limit) : 0;

        // lay tu phan tu thu bao nhieu
        $offset = ($page - 1)  * $limit;
        $query = "SELECT op.* , p.* FROM order_product AS op
                    INNER JOIN product AS p ON op.id_product = p.id
                    WHERE op.order_id =  $id
                    LIMIT " .  $limit . " OFFSET " . $offset;
        $data = $this->connection->query($query)->fetchAll();
        $view = new view('dashboard/chitietorder');
        $view->assign('data',  $data);
        $view->assign('pages',  $pages);
    }

    public function complete_order(){
        $id = (int) explode('/', $_REQUEST["url"])[2];
        
        $user_completed = $_SESSION['user']['fullname'];
        $query = "UPDATE order_u
                    SET status_order = 1 , user_completed = '".$user_completed."'
                    WHERE id = $id";
        $data = $this->connection->query($query);
        header("Location:http://localhost/maneger_shop_basic1/don-hang ");
    }

    public function delete_order(){
        $id = (int) explode('/', $_REQUEST["url"])[2];
        $query = "DELETE  FROM order_u
                    WHERE order_u.id = $id;";
        $data = $this->connection->query($query);

        $query = "DELETE  FROM order_product
                     WHERE order_product.order_id = $id;";
        $data = $this->connection->query($query);


        header("Location:http://localhost/maneger_shop_basic1/don-hang ");
    }

    public function search_order(){
        
        if(isset($_REQUEST["status"])){ $status = (int)$_REQUEST["status"];}
        if(isset($_REQUEST["code"])){ $code = ($_REQUEST["code"]);}
        if($_REQUEST["fromdate"] != ""){ 
            $fromdate = ($_REQUEST["fromdate"]);
        }else{
            $fromdate = "2020/01/01";
        }
        if($_REQUEST["todate"] != ""){ 
            $todate = ($_REQUEST["todate"]);
        }else{
            $todate = date('Y/m/d',time());
        }

        $view = new view('dashboard/danhsachorder');
        if(!$code){
          $query = "SELECT * FROM order_u WHERE status_order = $status ";
        }
        else if($code){
          $query = "SELECT * FROM order_u WHERE  code like '".'%'.$code.'%'."' ";
        }
        
        // if(1 == 1){
        //     var_dump("c");
        //     $query = "SELECT * FROM order_u WHERE created_time BETWEEN $fromdate AND $todate ";
        // }

        $data = $this->connection->query($query)->fetchAll();
        $view->assign('data', $data);
      }
    
}   

