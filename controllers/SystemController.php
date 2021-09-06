<?php 

    namespace controllers;

    class SystemController {


        public function permission() {
        //   echo 'home';
        //   var_dump($this->render('../view/layout_admin.php'));
          $view = new view('dashboard/dashboard-quanlypermission');
          // sec => data
          $view->assign('variablename', 'variable content');
        //  include '../view/layout_admin.php';
    }
    

        public function menu() {
        //   echo 'home';
        //   var_dump($this->render('../view/layout_admin.php'));
          $view = new view('dashboard/quanlymenu');
          // sec => data
          $view->assign('variablename', 'variable content');
        //  include '../view/layout_admin.php';
    }
    }

?>