<!DOCTYPE html>
<html>
    <head>
        <style>
            img{
                width: 20px;
                height: 20px;
            }
        </style>
    </head>
    <body>
        <form method="post">
        Tinggi : <input type="text" name="height" value="<?= isset($_POST['height']) ? $_POST['height'] : '' ?>"><br>
        Alamat Gambar : <input type="text" name="image" value="<?= isset($_POST['image']) ? $_POST['image'] : '' ?>"><br>
         <button type="submit" name="submit">Cetak</button><br><br>
    </form>

<?php
if (isset($_POST["submit"])) {
        $height = $_POST["height"];
        $img = $_POST['image'];
         $i = 1;
            while ($i <= $height) {
                $j = 1;
                while ($j < $i) {
                    echo "<img src='$img' style='visibility:hidden;'>";
                    $j++;
                }

                $k = 1;
                while ($k <= ($height - $i + 1)) {
                    echo "<img src='$img'>";
                    $k++;
                }

                echo "<br>";
                $i++;
            }
        }
        ?>
    </body>
</html>