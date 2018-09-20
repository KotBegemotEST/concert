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






else{
   $response=Controller::error_404();  
    
}


?>