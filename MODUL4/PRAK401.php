<!DOCTYPE html>
<html>
    <head>
        <style>
            table, tr, td {
                border: 1.5px solid;
                border-collapse: collapse;
                padding: 7px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <form method="POST" action="">
            Panjang : <input type="number" name="row" value="<?= isset($_POST['row']) ? $_POST['row'] : ''?>"><br>
            Lebar : <input type="number" name="column" value="<?= isset($_POST['column']) ? $_POST['column'] : ''?>"><br>
            Nilai : <input type="text" name="value" value="<?= isset($_POST['value']) ? $_POST['value'] : ''?>"><br>
            <button type="submit" name="cetak">Cetak</button><br><br>
        </form>

        <?php
        if (isset($_POST['cetak'])) {
            $row = $_POST['row'];
            $col = $_POST['column'];
            $inputValue = $_POST['value'];
            
            $matrixData = explode(" ", trim($inputValue));
            $totalInput = count($matrixData);
            $totalCell = $row * $col;
            if ($totalInput != $totalCell) {
                echo "Panjang nilai tidak sesuai dengan ukuran matriks";
                } else {
                    $idx = 0;
                    echo "<table>";
                    for ($r = 0; $r < $row; $r++) {
                        echo "<tr>";
                        for ($c = 0; $c < $col; $c++) {
                            echo "<td>" . $matrixData[$idx] . "</td>";
                            $idx++;
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                }
            }?>
    </body>
</html>