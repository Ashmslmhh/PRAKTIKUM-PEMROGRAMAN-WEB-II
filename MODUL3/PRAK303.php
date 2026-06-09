<!DOCTYPE html>
<html>
<head>
    <style>
        img {
            width: 20px;
        }
    </style>
</head>
<body>
    <form method="post">
        Batas Bawah : <input type="number" name="lower_limit" value="<?= isset($_POST['lower_limit']) ? $_POST['lower_limit'] : '' ?>"><br>
        Batas Atas : <input type="number" name="upper_limit" value="<?= isset($_POST['upper_limit']) ? $_POST['upper_limit'] : '' ?>"><br>
        <button type="submit" name="submit">Cetak</button><br><br>
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $lower_limit = $_POST["lower_limit"];
        $upper_limit = $_POST["upper_limit"];
        $starUrl = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png";

        if ($lower_limit <= $upper_limit) {
            $i = $lower_limit;
            
            do {
                if (($i + 7) % 5 == 0) {
                    echo "<img src='$starUrl' alt='star'> ";
                } else {
                    echo $i . " ";
                }
                
                $i++;
            } while ($i <= $upper_limit);
            
        } else {
            echo "Batas bawah harus lebih kecil atau sama dengan batas atas.";
        }
    }
    ?>
</body>
</html>