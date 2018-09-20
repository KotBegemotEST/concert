<?php
ob_start(); //начать поток
$title = 'PUNK ROCK, HARDCORE AND INDEPENDENT<br> MUSIC SHOWS IN EUROPE';
?>
<div class="container" style="min-height:400px;">
    <?php
    foreach ($rows as $row) {
        echo '<div class="col-md-4">';
        ?>

        <img src="<?php
        if ($row['Poster'] == '') {
            print('images/nopicture.png');
        } else {
            print('images/' .$row ['Poster']);
        }
        ?>" width="300"  height="400">
        <h1>Группа:<?php echo $row ['Name_band']; ?></h1>

        <h4>Дата концерта:
            <?php echo $row['Date']; ?></h4>
        <?php
      
        
        //делаем ссылку на Details (подробнее)
        echo '<div style="text-align:right;margin-top:-35px;height:40px;">
        <a href="detail?id='.$row['ID_affiche'].'">Details</a>
        </div>
        ' ;
        
          echo'</div>';
    }
    ?>
</div>   




<?php $content = ob_get_clean();
?>

<?php
include "view/templates/layout.php";
