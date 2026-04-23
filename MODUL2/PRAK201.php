<!DOCTYPE html>
<html>
    <body>
        <form method="post">
        Nama: 1 <input type="text" name="nama1" value="<?= isset($_POST['nama1']) ? $_POST['nama1'] : '' ?>"><br>
        Nama: 2 <input type="text" name="nama2" value="<?= isset($_POST['nama2']) ? $_POST['nama2'] : '' ?>"><br>
        Nama: 3 <input type="text" name="nama3" value="<?= isset($_POST['nama3']) ? $_POST['nama3'] : '' ?>"><br>
        <button type="submit" name="submit">Urutkan</button>
        </form>

        <?php
        if (isset($_POST['submit'])){
            $a = $_POST['nama1'];
            $b = $_POST['nama2'];
            $c = $_POST['nama3'];
        

        if ($a > $b) {
            $temp = $a;
            $a = $b;
            $b = $temp;
        }

        if ($b > $c) {
            $temp = $b;
            $b = $c;
            $c = $temp;
        }

        if ($a > $b) {
            $temp = $a;
            $a = $b;
            $b = $temp;
        }

        echo "<br>" . $a . "<br>";
        echo $b . "<br>";
        echo $c . "<br>";

        }
        ?>
    </body>
</html>