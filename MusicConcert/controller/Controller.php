<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author pupil
 */
class Controller {
    //put your code here// страница старт
    public function start_site(){
        
        $rows=Model::getConcertLimit3();//это массив трех концертов
        include_once 'view/start.php';
}
//----------------contact
  public function contact(){
        include_once 'view/contact.php';
}

  //-------------sendContact
  
  public function contactSend(){
    include_once 'view/contactSend.php';
    // обработка формы и отправка на страницу контакт
  }

//-----------------error
    public function error_404(){
        include_once 'view/error_404.php';
}
  //-------------cconcertDetail($id)
  public function concertDetail($id){
      
  $row= Model::getConcertDetail($id);//одна запись не олл
  include_once 'view/concertDetail.php';
  }
    //-------------concertList
  public function concertList(){
      
  $rows= Model::getConcertList();//Записи концертов
  include_once 'view/shows.php';
  }
  //-------------arhivList
  
  public function arhivList(){
      
  $rows= Model::getArhivList();//Записи концертов
  include_once 'view/arhiv.php';
  }
  
  //-------------Search
  
 public function mySearch($text){  
    $rows= Model::getSearch($text);//Записи концертов
    include_once 'view/concertSearch.php';

 }
 
}
 