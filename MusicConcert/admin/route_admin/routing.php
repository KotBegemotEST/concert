<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num=substr_count($host,'/');
$uri  = explode('/', $host)[$num];
//echo $uri;
if ($uri == '' OR $uri == 'index.php' ){
	// - start логин
    $response = ControllerAdmin::formLogin();// forma vhoda	
}elseif($uri=="login"){
    $response = ControllerAdmin::login();
}





else
{	// Страница не существует
	
	$response = ControllerAdmin::error_404();
}	

?>