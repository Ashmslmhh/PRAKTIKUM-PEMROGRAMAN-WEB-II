<!DOCTYPE html>
<html>
<head>
    <style>
        img {
            width: 50px;
        }
    </style>
</head>
<body>
    <?php
    $starCount = 0;

    if (isset($_POST['submit'])) {
        $starCount = (int)$_POST['initial_count'];
    } 
    elseif (isset($_POST['add'])) {
        $starCount = (int)$_POST['current_count'] + 1;
    } 
    elseif (isset($_POST['subtract'])) {
        $starCount = (int)$_POST['current_count'] - 1;
        if ($starCount < 0) $starCount = 0;
    }

    if (!isset($_POST['submit']) && !isset($_POST['add']) && !isset($_POST['subtract'])) {
        ?>
        <form method="post">
            Jumlah bintang : <input type="number" name="initial_count" required>
            <br>
            <button type="submit" name="submit">Submit</button>
        </form>
        <?php
    } 
    else {
        echo "<p>Jumlah bintang $starCount</p><br>";
        
        $starUrl = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png";

        if ($starCount > 0) {
            $i = 1;
            while ($i <= $starCount) {
                echo "<img src='$starUrl' alt='star'>";
                $i++;
            }
        }
        ?>
        <form method="post">
            <input type="hidden" name="current_count" value="<?= $starCount ?>">
            <button type="submit" name="add">Tambah</button>
            <button type="submit" name="subtract">Kurang</button>
        </form>
        <?php
    }
    ?>
</body>
</html>