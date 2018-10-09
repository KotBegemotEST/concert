<?php

//-------------------------ADMIN
//начало сессии
session_start();

//controller admin   db route
require_once '../inc/db.php';
include_once 'model_admin/AdminModel.php';
include_once 'controller_admin/AdminController.php';

include_once 'route_admin/routing.php';

echo $response;
?>
