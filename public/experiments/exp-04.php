<?php
/**
 * Experiment 04 - Built-in Functions, Arrays and Loops
 *
 * Author:          Adrian Gould <https://github.com/AdyGCode>
 * Date created:    2025-08-06
 *
 */

$prices = [9, 54.3, 67.1, 1.35, 6.92];
$associative_array = [
        'key' => 'value',
        'given' => 'Eileen',
        'family' => 'Dover',
];

$total = array_sum($prices);
echo "<p></p>";

echo "<p>";
for ($count = 0; $count < count($prices); $count++) {
    echo $prices[$count] . " ";
}
echo "</p>";
echo "<p></p>";

sort($prices);

echo "<p>";
foreach ($prices as $price) {
    echo $price . " ";
}
echo "</p>";
echo "<p></p>";

echo "<p>";
foreach ($associative_array as $key => $value) {
    echo $key . " => " . $value . " ";
}
echo "</pre>";
echo "<p></p>";

foreach ($prices as $key => $value) {
    echo $key . " => " . $value . " ";
}

?>
<p>
    <a href="../">Back</a>
</p>
