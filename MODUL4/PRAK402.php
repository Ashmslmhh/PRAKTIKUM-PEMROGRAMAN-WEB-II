<!DOCTYPE html>
<html>
    <head>
        <style>
            table, tr, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 7px 15px;
                text-align: center;
            }
            th {
                background-color: lightgray;
            }
        </style>
    </head>
    <body>
        <?php
        $students = [
            ["name" => "Andi",    "nim" => "2101001", "uts" => 87, "uas" => 65],
            ["name" => "Budi",    "nim" => "2101002", "uts" => 76, "uas" => 79],
            ["name" => "Tono",    "nim" => "2101003", "uts" => 50, "uas" => 41],
            ["name" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75],
        ];

        for ($i = 0; $i < count($students); $i++) {
            $finalScore = (0.4 * $students[$i]['uts']) + (0.6 * $students[$i]['uas']);
            $students[$i]['final'] = $finalScore;

            if ($finalScore >= 80) {
                $students[$i]['grade'] = 'A';
            } elseif ($finalScore >= 70) {
                $students[$i]['grade'] = 'B';
            } elseif ($finalScore >= 60) {
                $students[$i]['grade'] = 'C';
            } elseif ($finalScore >= 50) {
                $students[$i]['grade'] = 'D';
            } else {
                $students[$i]['grade'] = 'E';
            }
        }

        echo "<table>";
        echo "<tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Nilai Akhir</th>
                <th>Huruf</th>
            </tr>";

        for ($i = 0; $i < count($students); $i++) {
            echo "<tr>";
            echo "<td>" . $students[$i]['name']  . "</td>";
            echo "<td>" . $students[$i]['nim']   . "</td>";
            echo "<td>" . $students[$i]['uts']   . "</td>";
            echo "<td>" . $students[$i]['uas']   . "</td>";
            echo "<td>" . $students[$i]['final'] . "</td>";
            echo "<td>" . $students[$i]['grade'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
        ?>

    </body>
</html>