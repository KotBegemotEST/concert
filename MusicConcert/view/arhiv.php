<?php

ob_start(); //начать поток 
?>

<style type="text/css">
    td{
        padding: 25px;
    }
    .header{
        font-weight: bold;
    }
    table{
        width: 90%;
        margin: 0 auto;
    }
    .row2{
        width:200px;
    }
    h1{
        text-align: center;
        padding-bottom: 25px;
    }
    row2{
        width: 200px;
    }
    h2,h3{
        text-align: center;
    }
    .list{
       margin-right: 150px;
       margin-top: 40px;
       float: right
    }
    
</style>
<h1>  Список прошедших концертов </h1>

<table border="1">
<?php
if ($rows) {
    echo '<tr>';
    echo '<td class="header">' ," Группа ",'</td>','<td class="header">' ," Информация о концерте ",'</td>','<td class="header">' ," Дата концерта ",'</td>'; 
    echo '</tr>';
        foreach ($rows as $row) {
            echo '<tr>';
            echo '<td class="row1">', $row['Name_band'],'</td>'; 
            echo "<td>" ,$row ['Info'],"</td>"; 
            echo '<td class="row2">', $row ['Date'],"</td>"; 
            echo '</tr>';
        }  
}else{
     echo '<h2>Данных нет</h2>';
     echo '<h3>Вернитесь на список концертов</h3>';
}
    ?>
</table>      
 <a href="shows" class="list">Concert List</a>
<?php $content = ob_get_clean();

include "view/templates/layout.php";

