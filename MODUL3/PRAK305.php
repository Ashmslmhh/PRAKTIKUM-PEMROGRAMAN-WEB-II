<!DOCTYPE html>
<html>
<body>
    <form method="post">
        <input type="text" name="input">
        <button type="submit" name="submit">submit</button>
    </form>
    <?php
    if (isset($_POST["submit"])) {
        $inputString = $_POST["input"];
        $stringLength = strlen($inputString);

        echo "<h3>Input:</h3>";
        echo "$inputString";
        echo "<h3>Output:</h3>";

        if ($stringLength > 0) {
            for ($i = 0; $i < $stringLength; $i++) {
                $char = $inputString[$i];
                
                for ($j = 0; $j < $stringLength; $j++) {
                    if ($j == 0) {
                        echo strtoupper($char);
                    } else {
                        echo strtolower($char);
                    }
                }
            }
        }
    }
    ?>
</body>
</html>