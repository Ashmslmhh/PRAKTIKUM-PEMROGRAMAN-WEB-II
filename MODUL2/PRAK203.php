<!DOCTYPE html>
<html>
    <body>
        <form method="post">
        Nilai: <input type="text" name="nilai" value="<?= isset($_POST['nilai']) ? $_POST['nilai'] : '' ?>"><br>

        Dari: <br>
        <input type="radio" name="from" value="C" 
            <?= (isset($_POST['from']) && $_POST['from'] == 'C') ? 'checked' : '' ?>>Celcius<br>
        <input type="radio" name="from" value="F" 
            <?= (isset($_POST['from']) && $_POST['from'] == 'F') ? 'checked' : '' ?>>Fahrenheit<br>
        <input type="radio" name="from" value="Re" 
            <?= (isset($_POST['from']) && $_POST['from'] == 'Re') ? 'checked' : '' ?>>Rheamur<br>
        <input type="radio" name="from" value="K" 
            <?= (isset($_POST['from']) && $_POST['from'] == 'K') ? 'checked' : '' ?>>Kelvin<br>

        Ke: <br>
        <input type="radio" name="to" value="C" 
            <?= (isset($_POST['to']) && $_POST['to'] == 'C') ? 'checked' : '' ?>>Celcius<br>
        <input type="radio" name="to" value="F" 
            <?= (isset($_POST['to']) && $_POST['to'] == 'F') ? 'checked' : '' ?>>Fahrenheit<br>
        <input type="radio" name="to" value="Re" 
            <?= (isset($_POST['to']) && $_POST['to'] == 'Re') ? 'checked' : '' ?>>Rheamur<br>
        <input type="radio" name="to" value="K" 
            <?= (isset($_POST['to']) && $_POST['to'] == 'K') ? 'checked' : '' ?>>Kelvin<br>
        
        <button type="submit" name="submit">Konversi</button>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $nilai = $_POST['nilai'];
            $from = isset($_POST['from']) ? $_POST['from'] : '';
            $to = isset($_POST['to']) ? $_POST['to'] : '';

        if ($nilai == '' || $from == '' || $to == '') {
            echo "<p style='color:red;'>Harap isi semua field!</p>";
        } else {
            if ($from == 'C') $celcius = $nilai;
            if ($from == 'F') $celcius = ($nilai - 32) * 5 / 9;
            if ($from == 'Re') $celcius = $nilai * 5 / 4;
            if ($from == 'K') $celcius = $nilai - 273.15;

            if ($to == 'C') $hasil = $celcius;
            if ($to == 'F') $hasil = ($celcius * 9 / 5) + 32;
            if ($to == 'Re') $hasil = $celcius * 4 / 5;
            if ($to == 'K') $hasil = $celcius + 273.15;

            echo "<h2>Hasil Konversi: " . round($hasil, 1) . " °$to</h2>";
        }
        }
        ?>
    </body>
</html>