<?php

class ControllerAdmin {

    // 
    //Страница Error
    public function error_404() {
        include_once('view_admin/error_404.php');
    }
    
    //form login
    public function formLogin(){
        include_once 'view_admin/form_login.php';
    }
    public function login(){
        $log_in=AdminModel::user_aut();
        if ($isset($log_in)&& $log_in==true) {
            include_once 'view_admin/start_admin.php';
        }else{
            include_once 'view_admin/form_login.php';
        }
    }

}

?>