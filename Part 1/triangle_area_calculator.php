<?php
function calculateTriangleArea($a, $b, $c) {
   
    $s = ($a + $b + $c) / 2;
    
    
    $areaSquared = $s * ($s - $a) * ($s - $b) * ($s - $c);
    $area = $areaSquared ** 0.5; 
    
    return number_format($area, 2); 
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Triangle Area Calculator</title>
</head>
<body>
    <h2>Triangle Area Calculator</h2>
    <form method="POST">
        Side 1: <input type="number" name="side1" step="any" required><br>
        Side 2: <input type="number" name="side2" step="any" required><br>
        Side 3: <input type="number" name="side3" step="any" required><br>
        <button type="submit">Calculate Area</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $side1 = $_POST["side1"];
        $side2 = $_POST["side2"];
        $side3 = $_POST["side3"];
        
        if ($side1 + $side2 > $side3 && $side1 + $side3 > $side2 && $side2 + $side3 > $side1) {
            echo "<h3>Area of the Triangle: " . calculateTriangleArea($side1, $side2, $side3) . "</h3>";
        } else {
            echo "<h3 style='color:red;'>Invalid triangle sides. The sum of any two sides must be greater than the third side.</h3>";
        }
    }
    ?>
</body>
</html>
 
