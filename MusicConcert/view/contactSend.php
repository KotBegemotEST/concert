<?php
if(isset($_POST['send'])){// имя кнопки
	/* Set e-mail recipient Добавьте e-mail куда будут приходить сообщения*/
	$myemail  = "you@domain.com";

	/* Check all form inputs using check_input function */
	$yourname = check_input($_POST['name'], "Enter your name");

	$email    = check_input($_POST['email'],$problem='');//

	$comments = check_input($_POST['message'], "Write your comments");
	$subject ="Message from company site";
	/* If e-mail is not valid show error message */
	if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
	{
		show_error("E-mail address not valid");

	}

	//Сообщение
	$message = "Hello!

	Your contact form has been submitted by:

	Name: $yourname
	E-mail: $email

	Comments:
	$comments

	End of message";

	/* Send the message using mail() function */
	mail($myemail, $subject, $message);

	/* Redirect visitor to the thank you page */
	header('Location: contact?message=send');

}else{
	header('Location: contact?message=error');// системныая функция перенаправляет по задоному маршруту
}
/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);// удаляет проблемы
    $data = stripslashes($data);// проверка символов 
    $data = htmlspecialchars($data); // убирает html теги
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);	
		
    }
    return $data;
}

function show_error($myError)
{
	header('Location: contact?message='.$myError);
	exit();
}
?>
