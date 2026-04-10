<?php
    $phones = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5");
?>

<style>
    table{
        border: 1px solid black;
    }
    th, td {
        border: 1px solid black;
        padding: 1px 1px;
    }
</style>

<table>
    <tr>
        <th>Daftar Smartphone Samsung</th>
    </tr>

    <?php
    foreach ($phones as $handphone) {
        echo "<tr>";
        echo "<td>" . $handphone . "</td>";
        echo "</tr>";
    }
    ?>
</table>