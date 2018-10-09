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
        $sql = 'SELECT affiche.*, location.*,band.Name_band,band.Info AS BandInfo FROM affiche,location,band WHERE affiche.ID_band=band.ID_band AND  location.ID_location=affiche.ID_location and affiche.ID_affiche=' . $id;

        $db = new db();
        $row = $db->getOne($sql);
        return $row;
    }

    public function getConcertList() {
        $sql = $sql = "SELECT affiche.ID_affiche, band.Name_band, affiche.Info, affiche.Date FROM `affiche`,band WHERE affiche.ID_band=band.ID_band AND affiche.Date>CURDATE() ORDER BY affiche.Date";

        $db = new db();
        $rows = $db->getALL($sql); //результат массива
        return $rows;
    }

    public function getArhivList() {
        $sql = $sql = "SELECT affiche.ID_affiche, band.Name_band, affiche.Info, affiche.Date FROM `affiche`,band WHERE affiche.ID_band=band.ID_band AND affiche.Date<CURDATE() ORDER BY affiche.Date";

        $db = new db();
        $rows = $db->getALL($sql); //результат массива

        return $rows;
    }

    public function getSearch($text) {

        $sql = 'SELECT affiche.*,band.Name_band FROM affiche,band WHERE affiche.ID_band = band.ID_band AND affiche.Date>=CURDATE() AND band.Name_band LIKE "%' . $text . '%"';
        $db = new db();
        $rows = $db->getALL($sql); //результат массива
        return $rows;
    }

    public function getOrder($id) {
        $sql = 'SELECT affiche.*, location.*,band.Name_band,band.Info AS BandInfo FROM affiche,location,band WHERE affiche.ID_band=band.ID_band AND  location.ID_location=affiche.ID_location and affiche.ID_affiche=' . $id;
        $db = new db();
        $row = $db->getOne($sql);
        return $row;
    }

    //------------register user
    public function registerUser() {
        $reg_result = array(0, 'Error'); // default value
        if (isset($_POST['save'])) {
            $errorString = ''; //читаем данные
            $username = $_POST['username'];
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $password = $_POST['password'];
            $confirm = $_POST['confirm'];
            //--------------проверка паролей
            if (!$password || !$confirm || mb_strlen($password) < 6) {
                $errorString .= 'Пароль 6 и больше символов <br>';
            }
            if ($password != $confirm) {
                $errorString .= 'Пароли не совпадают <br>';
            }
            if (!$email) {
                $errorString .= 'Неверный емайл <br>';
            }
            // кодировть и вносить
            if (mb_strlen($errorString) == 0) {
                /*$options = [
                    'salt' => '01234567890123456789ab', //22 и больше символов для кодирования
                    'cost' => 10, // сколько раз крутить изменение пароля
                ];*/
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                // isert DB sql
                $sql = "INSERT INTO `user` (`ID_User`, `Email`, `Password`, `Username`, `Pass`, `Flag`) VALUES (NULL, '$email', '$passwordHash', '$username', '$password', '0')";
                $db = new db ();
                $item = $db->executeRun($sql); // запрос
                if ($item) {
                    $reg_result = array(0 => true);
                } else {
                    $reg_result = array(0 => false, 1 => "Ошибка! Имя или емаил уже существует");
                }
            }//mb_strlen
            else {
                $reg_result = array(0 => false, 1 => $errorString);
            }
        }

        return $reg_result;
    }

}
