<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num=substr_count($host,'/');
$uri  = explode('/', $host)[$num];//путь к сайту

if ($uri=='' OR $uri =='home' OR $uri=='index.php'){
        $response=Controller::start_site();
}

elseif ($uri=='contact'){
  $response=Controller::contact();    
}
elseif ($uri=='send_contact'){
  $response=Controller::contactSend();    
}


elseif ($uri=="detail" && isset($_GET['id'])) {
    $id=$_GET['id'];//номер записи в таблице
    $response= Controller::concertDetail($id);
}

elseif ($uri=="shows") {
    $response= Controller::concertList();
}

elseif ($uri=="arhiv") {
    $response= Controller::arhivList();
}

elseif ($uri=="search" && isset($_GET['text'])) {
    $text = $_GET ['text']; // название группы для поиска
    $response = Controller::mySearch($text);
}


elseif ($uri=="order" && isset($_GET['id'])) {
    $id=$_GET['id'];//номер записи в таблице
    $response= Controller::oneOrder($id);
}
elseif ($uri=='send_order' && isset($_GET['id']) ){
  $id=$_GET['id'];
  $response=Controller::orderSend($id);    
}


//----------------register user
elseif ($uri == 'form_register'){
    //на форму регистрации
    $response= Controller::registerForm();
}
elseif ($uri=='register') {
    $response= Controller::registerUser();
}

else{
   $response=Controller::error_404();  
    
}


?>