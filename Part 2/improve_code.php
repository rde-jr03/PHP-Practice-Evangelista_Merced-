<?php
function calculatetheTotalPrice(array $items): float {
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}

function modifytheString(string $input): string {
    return strtolower(str_replace(' ', '', $input));
}

function checkifEvenOrOdd(int $number): string {
    return $number % 2 === 0 ? "The number $number is even." : "The number $number is odd.";
}

$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20]
];

$string = "This is a poorly written program with little structure and readability.";
$number = 42;

echo "Total Price: $" . calculatetheTotalPrice($items) . "\n";
echo "Modified String: " . modifytheString($string) . "\n";
echo checkifEvenOrOdd($number) . "\n";
?>
 
