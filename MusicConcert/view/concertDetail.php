<?php
ob_start(); //начать поток
$title = 'Группа: ' . $row['Name_band'];
?>
<div class="container" style="min-height:400px;">

    <div class="col-md-12">


        <img src="<?php
        if ($row['Poster'] == '') {
            print('images/nopicture.png');
        } else {
            print('images/' . $row ['Poster']);
        }
        ?>" width="300"  height="400" style="float: left;margin: 7px 15px 7px 0px;">
        
        <h4>Информация о концерте</h4>
        <?php 
        echo $row['Info'];
        ?>
        <h4>Дата концерта:
            <?php echo $row['Date']; ?></h4>
        <?php 
        echo '<p><b> Strana: </b>'.$row['Country'].'</p>';
         echo '<p><b> Gorod: </b>'.$row['City'].'</p>';
         echo '<p><b> Mecto: </b>'.$row['Place'].'</p>';
         echo '<p><b>Opisanie: </b>'.$row['Description'].'</p>';
         echo '<p><b> Hind: </b>'.$row['Price']. ' euro</p>';
       ?>
        <div style="clear:both"></div>
        <h3>Info band</h3>
        <?php print($row['BandInfo']); ?>
    </div>
</div>    

<div style="text-align:right;margin-top:-35px;height:40px;">
        <a href="shows" style="float: left">Concert List</a>
        </div>
       ;

   



<?php $content = ob_get_clean();

include "view/templates/layout.php";

