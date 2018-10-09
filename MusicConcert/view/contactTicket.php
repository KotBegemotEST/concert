<?php
if(isset($_POST['send'])){//send это имя кнопки
	/* Set e-mail recipient Добавьте e-mail куда будут приходить сообщения*/
	$myemail  = "you@domain.com";

	/* Check all form inputs using check_input function */
	$name = check_input($_POST['name'], "Enter your name");

	$email    = check_input($_POST['e-mail'],$problem='');//

	$telefon = check_input($_POST['Telefon'],$problem='');
        $id=$row['ID_affiche'];
        $name_band = $row['Name_band'];//
        $price = $row['Price'];//
        $quantity =  check_input($_POST['Quantity'],$problem='');//
         $total = $row[''];//
	$subject ="Message from company site";
	/* If e-mail is not valid show error message */
	if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))//preg_match - это незначищие пробелы контроль
	{
		show_error("E-mail address not valid");

	}

	//Сообщение письма которое придет на почту
	$message = "Hello!

	Ваш заказ:

	Name: $name
	E-mail: $email
        Telefon:$telefon
	Группа:$name_band
	Цена билета: $price
        Количество:$quantity
	Итого сумма";
   
        
       
        
$order="";
$order.='Имя:'.$name .'<br>';
$order.='Группа:'.$name_band .'<br>';
$order.='Всего:'.$total. $euro;//'<br>';


$total.='Итого сумма'.$price*$quantity ;

$print='<h2>Order</h2>';
$print='Name_band'.$name.'<br>';
$print='Price'.$price.'<br>';
$print='Total'.$total.'<br>';
	/* Send the message using mail() function */
	mail($myemail, $subject, $message);

	/* Redirect visitor to the thank you page */
	//header('Location: tickets?id='.$id.'&message=send&mes2='.$message);
        header('Location: tickets?id='.$id.'&message=send&mes2='.$order);

}else{
	header('Location: tickets?id='.$id.'message=error');//функция header с параметром message на ошибку по маршруту
}
/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data); //trim это удаление пробелов
    $data = stripslashes($data);//это системные функции
    $data = htmlspecialchars($data);// системные проблемы
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);	
		
    }
    return $data;
}

function show_error($myError)
{
	header('Location: tickets?id='.$id.'message='.$myError);
	exit();
}
?>
<?php $content = ob_get_clean();
?>

<?php
include "view/templates/layout.php";
