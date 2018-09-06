<!-- Заголовок title -->
<?php 
ob_start();
$title="Контакт ";

 ?>

<!--   message form            -->

<div class="container" style="min-height:400px;">
<div class="row">
<div class="col-md-6">
	<div>
	<h2>Ваше сообщение</h2>
	

	
	<div class="contact-form">
		<form  action="send_contact" id="myForm" method="post" >
				
				<p><input class="form-control" type="text" id="name" name="name" placeholder="Ваше имя"  autofocus required ></p> 
				<p><input class="form-control" type="text" id="email" name="email" placeholder="Email address" required></p> 
				<p><textarea class="form-control" id="mess" name="message" placeholder="Сообщение" required></textarea></p> 	
				
				<input class="button" type="submit" name ="send" id="submit" value="Send it">				
		</form>	
	</div> <!-- /.contact-form -->
	
	
	</div> <!-- /.inner-content -->
</div> <!-- /.col-md-6 -->	


	
<div class="col-md-6">
	<div>
	<h2>Our Location</h2>
   	<h3>Ida-Virumaa Kutsehariduskeskus</h3>
	<p >
    <br>
    <b>Aadress:</b> Kutse 13, 41533 Jõhvi, Ida-Virumaa<br>
	 <b>Telefon:</b> 332 0381<br>
	 <b>E-post:</b> info@ivkhk.ee<br>
 	</p>
	</div> <!-- /.inner-content -->
</div> <!-- /.col-md-6 -->	
	
</div> <!-- /.row -->	
</div> <!-- /.container -->		
	
	
	
	


<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php";