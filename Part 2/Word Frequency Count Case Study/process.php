<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST['text'];
    $sortOrder = $_POST['sort'];
    $limit = $_POST['limit'];

    $stopWords = ["the", "and", "in", "to", "of", "a", "for", "on", "with", "as", "at"];

    $words = preg_split('/\s+/', $text);
    $filteredWords = array_filter($words, function($word) use ($stopWords) {
        return !in_array(strtolower($word), $stopWords);
    });

    $wordCounts = array_count_values($filteredWords);

    if ($sortOrder == 'desc') {
        arsort($wordCounts);
    } else {
        asort($wordCounts);
    }

    $wordCounts = array_slice($wordCounts, 0, $limit);

    echo "<h2>Word Frequency Counter Result</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Word</th><th>Frequency</th></tr>";
    foreach ($wordCounts as $word => $count) {
        echo "<tr><td>" . htmlspecialchars($word) . "</td><td>" . $count . "</td></tr>";
    }
    echo "</table>";
}
?>
