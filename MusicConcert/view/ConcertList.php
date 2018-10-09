<style>
    
    .button {
  font: bold 11px Arial;
  text-decoration: none;
  background-color: grey;
  color: white;
  padding: 2px 6px 2px 6px;
/*  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;*/
margin-left: 30px;
}

</style>
<?php
ob_start(); //начать поток
$title ='Список концертов';

?> 
<?php
//ссылка на архив

        ?>
<div class="container" style="min-height:400px;">
   
  <div class="col-md-12"   
 <div style="text-align:right;margin-top:-32px;height:40px;"> <a href="arhiv">Архив</a></div>
<table class="table table-striped">
 
 <thead>
 <tr>
 <th width="20%">Группа</th>
 <th width="40%">Информация о концерте</th>
 <th width="20%">Дата концерта</th>
 <th width="20%">Покупка билетов</th>
 </tr>
 </thead>
 <tbody>
 <?php
 foreach($shows as $show){
     echo '<tr>';
     echo '<td><a href="detail?id=' . $show['ID_affiche']. '">' .$show['Name_band'] .'</td>';
     echo '<td>'.$show['Info'].'</td>';
     echo '<td>'.$show['Date'].'</td>';
     echo '<td><button type="button" class="btn btn-default"><a href="tickets?id=' .$show['ID_affiche'].'">Купить билет</a></button>';
     echo '</tr>';
 }   
  ?>     
</tbody> 

 </table>
</div>
</div> 

<?php $content = ob_get_clean();
?>

<?php
include "view/templates/layout.php";





