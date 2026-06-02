<!DOCTYPE html>
<html>
    <body>
        <form method="post">
        Nilai: <input type="text" name="nilai" value="<?= isset($_POST['nilai']) ? $_POST['nilai'] : '' ?>"><br>

        <button type="submit" name="submit">Konversi</button>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $nilai = $_POST['nilai'];

        if ($nilai < 0 || $nilai > 999) {
            $hasil = "Anda Menginput Melebihi Limit Bilangan";
        } else if ($nilai == 0) {
            $hasil = "Nol";
        } else if ($nilai >= 1 && $nilai <= 9) {
            $hasil = "Satuan";
        } else if ($nilai >= 10 && $nilai <= 19) {
            $hasil = "Belasan";
        } else if ($nilai >=20 && $nilai <= 99) {
            $hasil = "Puluhan";
        } else {
            $hasil = "Ratusan";
        }

        echo "<h2> Hasil: " . $hasil . "</h2>";
        }
        ?>
    </body>
</html>