<!DOCTYPE html>
<html>
    <body>
        <form method="post">
        Nama: <input type="text" name="nama" value="<?= isset($_POST['nama']) ? $_POST['nama'] : '' ?>">
        <span style="color:red;">*
            <?php if (isset($_POST['submit']) && $_POST['nama'] == '') echo "nama tidak boleh kosong"; ?>
        </span><br>

        Nim: <input type="text" name="nim" value="<?= isset($_POST['nim']) ? $_POST['nim'] : '' ?>">
        <span style="color:red;">*
            <?php if (isset($_POST['submit']) && $_POST['nim'] == '') echo "nim tidak boleh kosong"; ?>
        </span><br>

        Jenis Kelamin:
        <span style="color:red;">*
            <?php if (isset($_POST['submit']) && !isset($_POST['gender'])) echo "jenis kelamin tidak boleh kosong"; ?>
        </span><br>
        <input type="radio" name="gender" value="Laki-Laki" <?= (isset($_POST['gender']) && $_POST['gender'] == 'Laki-Laki') ? 'checked' : '' ?>>Laki-Laki<br>
        <input type="radio" name="gender" value="Perempuan" <?= (isset($_POST['gender']) && $_POST['gender'] == 'Perempuan') ? 'checked' : '' ?>>Perempuan<br>
        
        <button type="submit" name="submit">Submit</button>
        </form>
        <?php
        if (isset ($_POST['submit'])) {
            if ($_POST['nama'] != '' && $_POST['nim'] != '' && isset($_POST['gender'])) {
                echo "<h2>Output:</h2>";
                echo $_POST['nama'] . "<br>";
                echo $_POST['nim'] . "<br>";
                echo $_POST['gender'] . "<br>";
            }
        }
        ?>
    </body>
</html>