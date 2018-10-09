<link rel="stylesheet" href="http://bootstraptema.ru/plugins/2015/bootstrap3/bootstrap.min.css" />
<?php
ob_start(); //начать поток
$title ='Заказ билетов';
?>
<div class="container" style="min-height:400px;">
<div class="col-md-12">
        <img src="<?php
        if ($row['Poster'] == '') {
            print('images/nopicture.png');
        } else {
            print('images/' .$row ['Poster']);
        }
        ?>" width="300"  height="400"
        style="float:left;margin: 27px 265px 7px 0">
        
        
        <h4 style="text-align: center">Заказ билета:
            <?php echo $row['Name_band']; ?></h4>
        <?php
         echo '<p style="text-align:left"><b>Группа: </b>'.$row['Name_band']. '</p>';
         echo '<p style="text-align: left"><b>Страна: </b>'.$row['Country']. '</p>';
         echo '<p style="text-align: left"><b>Город: </b>'.$row['City']. '</p>';
         echo '<p style="text-align: left"><b>Площадка: </b>'.$row['Place']. '</p>';
         echo '<p style="text-align: left"><b>Цена билета: </b>'.$row['Price']. '&euro;</p>'
        
        ?>
           
<div class="container" style="min-height:400px;">
<div class="row">
<div class="col-md-6">
	<div>
	<h1>Оформите свой заказ</h1>
<?php 
if (!isset($_GET['message'])){
    
 ?>	

        <Form action="ContactTicket?id=<?php  echo $id;  ?>" method="post" name ="form1" id="form1">
            Ваше имя
            <input class="form-control" type="text" id="name" name="name" placeholder="Ваше имя"  autofocus required ><br> 
            Ваш телефон:
            <input  type="text" id="Telefon"  name="Telefon" placeholder="Ваш телефон" required> <br> 
            Ваша электронная почта:                  
            <input  type="text"  name="e-mail" placeholder="Ваша электронная почта" required> <br> 
            Количество билетов:                
            <input type="number" min="1" max="10" name="Quantity" placeholder="Количество билетов" required> <br> 

            <input type="submit" name ="send" value="Отправить">				
        </form><br>
<?php 
    }//if
 elseif (isset($_GET['message']) && $_GET['message']=='send') {
     echo '<h4>Отправка заказа</h4>';
          echo '<p>Ваш заказ отправлен.Спасибо</p>';
           echo '<p>'.$_GET['mes2'].'</p>';
          // echo '<p>'.$_GET['message'].'</p>';
          echo '<hr><p><a href="contactTicket"></a></p>';
 } 
 else{
    echo '<h4>Ошибка</h4>'; 
    echo '<p> Исправьте Ваши ошибки ввода данных - '.$_GET['message'].'</p>';
    echo '<hr><p><a href="contactTicket">Оформить заказ</a></p>';
 }

 ?>	
	
	</div> <!-- /.inner-content -->
</div> <!-- /.col-md-6 -->

         <div style="clear:both"></div>-->
         

  
 <?php 
        //ссылка ConcertList
        echo '<div style="text-align:right;margin-top:32px;height:40px;"> 
         <a href="shows">Shows</a>
             </div>';
    //detail?id='.$row['ID_affiche'].'
   
    ?>
</div>   
</div>   

<?php $content = ob_get_clean();
?>

<?php
include "view/templates/layout.php";
