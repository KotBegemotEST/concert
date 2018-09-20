<?php

/*
 * для выборки данных из баззы используем запросы
 * выполнение запросов - class db
 * результат запроса - массив
 */

/**
 * Description of Model
 *
 * @author pupil
 */
class Model {

    //три ближайшиу по дате концерта
    public function getConcertLimit3() {
        $sql = 'SELECT affiche.Date, affiche.Poster,band.Name_band,affiche.ID_affiche '
                . 'FROM `affiche`,band '
                . 'WHERE affiche.ID_band=band.ID_band AND affiche.Date>=CURDATE()'
                . ' ORDER BY affiche.Date LIMIT 3';
        //выполнить запрос
        $db = new db(); //экземпляр класс db(inc db.php)

        $rows = $db->getALL($sql); //результат массива
        return $rows;
    }

    public function getConcertDetail($id) {
        $sql = 'SELECT affiche.*, location.*,band.Name_band,band.Info AS BandInfo FROM affiche,location,band WHERE affiche.ID_band=band.ID_band AND  location.ID_location=affiche.ID_location and affiche.ID_affiche='.$id;
        
$db=new db();
$row=$db->getOne($sql);
return $row;
    }
    
    
public function getConcertList() {
    $sql = $sql = "SELECT affiche.ID_affiche, band.Name_band, affiche.Info, affiche.Date FROM `affiche`,band WHERE affiche.ID_band=band.ID_band AND affiche.Date>CURDATE() ORDER BY affiche.Date";
        
    $db=new db();
    $rows = $db->getALL($sql); //результат массива
    return $rows;
    }
    
   
    
    
    
    
    
    
    public function getArhivList() {
    $sql = $sql = "SELECT affiche.ID_affiche, band.Name_band, affiche.Info, affiche.Date FROM `affiche`,band WHERE affiche.ID_band=band.ID_band AND affiche.Date<CURDATE() ORDER BY affiche.Date";
        
    $db=new db();
    $rows = $db->getALL($sql); //результат массива
    
    return $rows;
    }
     public function getSearch($text) {
         
    $sql='SELECT affiche.*,band.Name_band FROM affiche,band WHERE affiche.ID_band = band.ID_band AND affiche.Date>=CURDATE() AND band.Name_band LIKE "%'.$text.'%"';    
    $db=new db();
    $rows = $db->getALL($sql); //результат массива
     return $rows;
     }
    
    
    
    
    }


