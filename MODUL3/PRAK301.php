<!DOCTYPE html>
<html>
    <head>
        <style>
            .odd{
                color: red;
                font-weight: bold;
                font-size: 16px;
            }
            .even{
                color: green;
                font-weight: bold;
                font-size: 16px;

            }
            </style>
    </head>
    <body>
        <form method="post">
        Jumlah Peserta : <input type="text" name="amount" value="<?= isset($_POST['amount']) ? $_POST['amount'] : '' ?>"><br>
        <button type="submit" name="submit">Cetak</button>
        </form>

<?php
if (isset($_POST['submit'])){
    $amount = $_POST['amount'];
    $i = 1;
    while ($i <= $amount) {
        if ($i % 2 == 0){?>
        <span class = "even">
            <h2>Peserta ke-<?= $i ?></h2>
        </span><?php
        }
        else{?>
        <span class = "odd">
            <h2>Peserta ke-<?= $i ?></h2>
        </span><?php
        }
        $i++;}}?>
    </body>
</html>