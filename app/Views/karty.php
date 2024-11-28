<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.darkly.css') ?>">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>JA KURWA BOBER KARTIČKY</h1>
        <div class="row">
        <?php


            foreach($hraci as $row){
                ?>

                    <div class="card col-lg-4">
                        <div class="card-body"><?= anchor('hrac/'.$row->id, $row->jmeno) ?></div>
                    </div>
                <?php
            }
          
        ?>
        </div>
        <div class="row">
            <?php
                foreach($hraci as $row){
                    echo"<div class=\"card col-lg-4\">"; //zpetnym lomitkem oznacim spesl znaky co chcu vypsat
                    echo"<div class=\"card-body\">".$row->jmeno."</div>"; //musi tam byt tecky jakoze + text dohromady a tak :D
                    echo"</div>";
                }
            ?>
        </div>
    </div>
</body>
</html>

<?php


//var_dump($hraci);
