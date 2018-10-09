<?php
ob_start(); //начать поток
$title = 'Оформление заказа:';

?>
<div class="container" style="min-height:400px;">
    <div class="col-md-12">

               
                  
             
            <?php

            
            ?>
        <div>
        <h3>Оформите свой заказ: </h3>
          <?php
                if (!isset($_GET['message'])) {
                    ?>
        <div >
		<form  action="send_order?id=<?php echo $id; ?>" id="myForm" method="post" >
                    
                    <?php
            echo ' <p class="none">Группа: '.$row['Name_band']. '</p>';
            echo '<p class="none"> Дата: ' . $row['Date'] . '</p>';
            echo '<p class="none">Цена: ' . $row['Price'] . ' евро</p>';
            echo ' <p class="none">Страна: ' . $row['Country'] . '</p>';
            echo ' <p class="none">Город: ' . $row['City'] . '</p>';
            echo '<br>'
            
                    
                     ?>
				<p>Ваше имя:  <input class="form-control" type="text" id="name" name="name" placeholder="Ваше имя"  autofocus required ></p> 
				<p>Ваш электронный адрес:<input class="form-control" type="text" id="email" name="email" placeholder="Email address" required></p> 
				<p>Ваш номер телефона: <input class="form-control" type="text" id="tel" name="tel" placeholder="telephone" required></p> 
				<p>Количество билетов:<input type="number"  name="count" min="1" value="1"> шт</p>
                                <p>Послать: <input class="button" type="submit" name ="send" id="submit" value="Отправить"></p>				
		</form>	
	</div> <!-- /.contact-form -->
            <?php
                }//if
                elseif (isset($_GET['message']) && $_GET['message'] == 'send') {
                    
                    
                    echo "<h4>Отправка заказа:</h4>";
                    echo "<p>Заказ отправлен. Спасибо</p>";
                    echo '<p>'.$_GET['mess'].'</p>';
                    echo '<hr><p><a href="order?id='.$row['ID_affiche'].'">Оформить заказ</a></p>';
                    
                } else {
                    echo "<h4>Ошибка</h4>";
                    echo "<p>Исправьте ошибки ввода данных - " . $_GET['message'] . "</p>";
                    echo '<hr><p><a href="order?id='.$row['ID_affiche'].'">Оформить повторно</a></p>';
                }
                ?>

        
        </div>
       <div style="margin-top:35px;height:40px;">
        <a href="shows">Информация о концертах</a>
        </div>   
    </div><!--           end col-md-12         -->        

</div>   




<?php $content = ob_get_clean();
?>

<?php
include "view/templates/layout.php";
