<!DOCTYPE html>
<html>
    <head>
        <style>
            table, tr, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 8px;
            }
            th {
                background-color: lightgray;
            }
            .revisi {
                background-color: red;
            }
            .tidak-revisi {
                background-color: green;
            }
        </style>
    </head>
    <body>
        <?php
        $students = [
            [
                "no"   => 1,
                "name" => "Ridho",
                "courses" => [
                    ["subject" => "Pemrograman I",                  "sks" => 2],
                    ["subject" => "Praktikum Pemrograman I",        "sks" => 1],
                    ["subject" => "Pengantar Lingkungan Lahan Basah","sks" => 2],
                    ["subject" => "Arsitektur Komputer",            "sks" => 3],
                ]
            ],
            [
                "no"   => 2,
                "name" => "Ratna",
                "courses" => [
                    ["subject" => "Basis Data I",           "sks" => 2],
                    ["subject" => "Praktikum Basis Data I", "sks" => 1],
                    ["subject" => "Kalkulus",               "sks" => 3],
                ]
            ],
            [
                "no"   => 3,
                "name" => "Tono",
                "courses" => [
                    ["subject" => "Rekayasa Perangkat Lunak",          "sks" => 3],
                    ["subject" => "Analisis dan Perancangan Sistem",   "sks" => 3],
                    ["subject" => "Komputasi Awan",                    "sks" => 3],
                    ["subject" => "Kecerdasan Bisnis",                 "sks" => 3],
                ]
            ],
        ];

        for ($i = 0; $i < count($students); $i++) {
            $totalSks = 0;
            for ($j = 0; $j < count($students[$i]['courses']); $j++) {
                $totalSks += $students[$i]['courses'][$j]['sks'];
            }
            $students[$i]['total_sks'] = $totalSks;
            $students[$i]['status'] = ($totalSks < 7) ? "Revisi KRS" : "Tidak Revisi";
        }

        echo "<table>";
        echo "<tr>
                <th>No</th>
                <th>Nama</th>
                <th>Mata Kuliah diambil</th>
                <th>SKS</th>
                <th>Total SKS</th>
                <th>Keterangan</th>
            </tr>";

        for ($i = 0; $i < count($students); $i++) {
            $totalCourses = count($students[$i]['courses']);
            $cssClass = ($students[$i]['status'] == "Revisi KRS") ? "revisi" : "tidak-revisi";
            for ($j = 0; $j < $totalCourses; $j++) {
                echo "<tr>";
                if ($j == 0) {
                    echo "<td>" . $students[$i]['no']   . "</td>";
                    echo "<td>" . $students[$i]['name'] . "</td>";
                } else {
                    echo "<td></td>";
                    echo "<td></td>";
                }
                echo "<td>" . $students[$i]['courses'][$j]['subject'] . "</td>";
                echo "<td>" . $students[$i]['courses'][$j]['sks']     . "</td>";
                if ($j == 0) {
                    echo "<td>" . $students[$i]['total_sks'] . "</td>";
                    echo "<td class='$cssClass'>" . $students[$i]['status'] . "</td>";
                } else {
                    echo "<td></td>";
                    echo "<td></td>";
                }
                echo "</tr>";
            }
        }
        echo "</table>";
        ?>
    </body>
</html>