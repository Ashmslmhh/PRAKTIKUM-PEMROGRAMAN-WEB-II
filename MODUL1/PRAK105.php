<?php
    $phones = array(
        "first" => "Samsung Galaxy S22", 
        "second" => "Samsung Galaxy S22+", 
        "thirth" => "Samsung Galaxy A03", 
        "fourth" => "Samsung Galaxy Xcover 5");
?>

<style>
    table{
        border: 1px solid black;
    }
    th, td {
        border: 1px solid black;
        padding: 1px 1px;
    }
    th {
        background-color: red;
        padding: 15px 0px;
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