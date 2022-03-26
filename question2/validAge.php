<html>

<body>
    <?php
    $age = $_POST["age"];

    $min = 26;
    $max = 56;

    if (filter_var($age, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) === false) {
        echo ("Sorry!! Invalid Age");
    } else {
        echo ("Welcome!! Valid Age.");
    }
    ?>
</body>

</html>