<?php

$fruits = ["Apple", "Banana", "Orange", "Mango", "Grapes"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Array of Fruits</title>
</head>
<body>
    <h2>List of Fruits</h2>
    <ol>
        <?php
       
        for ($i = 0; $i < count($fruits); $i++) {
            echo "<li>" . $fruits[$i] . "</li>";
        }
        ?>
    </ol>
</body>
</html>
