<!-- Заголовок title -->
<?php $title = 'Страница не найдена'; ?>

<?php ob_start() ?>

<div class="container" style="min-height:400px;">
<h2>404 ошибка - что это такое?</h2>

	
<p>	Когда человек хочет перейти на новую страницу, браузер 
	обращается к серверу чтобы тот передал ему её содержимое. 
	Если сайт работает, но по запрашиваемому URL страница не найдена, 
	то сервер сообщает о 404 ошибке.
</p>
</div>  

<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php";