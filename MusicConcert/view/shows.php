
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
    .arhiv{
        float:right;
        margin-right: 150px;
        margin-bottom: 25px;
    }
    
</style>
<h1> Спискок концертов БУДУЩИХ концертов</h1>
<a href="arhiv" class="arhiv"> Архив концертов</a>
<table border="1">
<?php
echo '<tr>';
echo '<td class="header">' ," Группа ",'</td>','<td class="header">' ," Информация о концерте ",'</td>','<td class="header">' ," Дата концерта ",'</td>'; 
echo '</tr>';

    
    foreach ($rows as $row) {
        echo '<tr>';
        echo '<td class="row1">', '<a href="detail?id='.$row['ID_affiche'].'">', $row['Name_band'],'</a>','</td>'; 
        echo "<td>" ,$row ['Info'],"</td>"; 
        echo '<td class="row2">', $row ['Date'],"</td>";
        echo '<td clas="shop">','<a href="order?id='.$row['ID_affiche'].'">',"Купить",'</a>', '</td>';
        echo '</tr>';
       
    }
    ?>
    
</table>      
        
        

<?php $content = ob_get_clean();

include "view/templates/layout.php";

