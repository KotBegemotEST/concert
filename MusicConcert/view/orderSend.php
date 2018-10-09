<?php

if (isset($_POST['send'])) {//send - eto imja knopki
    /* Set e-mail recipient Добавьте e-mail куда будут приходить сообщения */
    $myemail = "you@domain.com"; //куда отправляется сообщения хозяину

    /* Check all form inputs using check_input functionб 3 проверки */
    $yourname = check_input($_POST['name'], "Enter your name");

    $email = check_input($_POST['email'], $problem = ''); //
    $phone = check_input($_POST['tel'], "Введите телефон");
    $count = check_input($_POST['count'], "Write your count");

    //--------------------------query!

    $name = $row['Name_band'];
    $price = $row['Price'];
    $date = $row['Date'];
    $country = $row['Country'];
    $city = $row['City'];
    $place = $row['Place'];
    $total = $price * $count;


    $subject = "Message from company site";
    /* If e-mail is not valid show error message */
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {//проверка правильности адреса
        show_error("E-mail address not valid");
    }

    //Сообщение
    $message = "Hello!             //отправка на email клиенту

	Your contact form has been submitted by:

	Name: $yourname
	E-mail: $email

	Comments:
	$comments
       

	End of message";
//---------------------------------------------------------------------

    $print = ' <h2>Билет </h2>';
    //---------------------------------Ticet
    $print .= 'Ваше имя: '. $yourname . '<br>' ;
    $print .= 'Ваш телефон: '. $phone . '<br>' ;
    $print .= 'Группа: ' . $name . '<br>';
    $print .= 'Цена: ' . $price . '<br>';
    $print .= 'Дата: ' .   $date . '<br>';
    $print .= 'Старан: ' .$country  . '<br>';
    $print .= 'Город: ' . $city. '<br>';
    $print .= 'Место: ' .$place  . '<br>';
    
    $print .= 'Кол-во билетов x: ' . $count . '<br>';;
    $print .= 'Стоимость билетов: ' . $total. 'Евро';
    /* Send the message using mail() function */
    mail($myemail, $subject, $message);

    /* Redirect visitor to the thank you page */
    header('Location: order?id=' . $id . '&message=send&mess=' . $print); //функция,которая перенаправляет по заданному адресу
} else {
    header('Location: order?id=' . $id . '&message=error'); //error
}
/* Functions we used */

function check_input($data, $problem = '') {
    $data = trim($data); //удаление пробелов
    $data = stripslashes($data); //убирают символы/
    $data = htmlspecialchars($data); //убирает теги
    if ($problem && strlen($data) == 0) {
        show_error($problem);
    }
    return $data;
}

function show_error($myError) {
    header('Location: order?id=' . $id . '&message=' . $myError);
    exit();
}

?>
