 <?php

$matrix = [
    [12, 23, 34], 
    [45, 55, 62], 
    [71, 84, 90]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Even Numbers from Matrix</title>
</head>
<body>
    <h2>Even Numbers from the Matrix</h2>
    <ul>
        <?php
     
        $i = 0;
        while ($i < count($matrix)) {
            
            $j = 0;
            while ($j < count($matrix[$i])) {
                if ($matrix[$i][$j] % 2 == 0) {
                    echo "<li>" . $matrix[$i][$j] . "</li>";
                }
                $j++;
            }
            $i++;
        }
        ?>
    </ul>
</body>
</html>

