<?php
/**
 * Experiment 01 - Variables
 *
 * Author:          Adrian Gould <https://github.com/AdyGCode>
 * Date created:    2025-08-06
 */

// Variables
// start with $
// then _ or a-z
// and then any combination of _, a-z, 0-9, A-Z
// camel case preferred, but snake case allowed

$count = 0;
$total_cost = 23.5;
$name = 'Jacques d\'Carre';
$name_2 = "Jacques d'Carre";

// Arithmetic
// Operators + - * / %

$count = $count + 1;
$count += 1;
$count++;

$count -= 4;
$count *= 3;
$count /= 2;

// String Concatenation
$given_name = "Crystal Chantel";
$family_name = "Leer";
$full_name = $given_name . $family_name;

// String Interpolation
$fullname = "{$given_name} {$family_name}";
$fullname2 = "$given_name $family_name";


?>
<!-- ! TAB gives the HTML base code -->
<!doctype html>
<html lang="en_AU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Experiment 01</title>
</head>
<body>
<div class="flex flex-col gap-4">
    <?php
    echo '<h1>Experiment 01</h1>';
    echo "<pre>{$count}</pre>";
    echo "<pre>{$name}</pre>";
    echo "<pre>{$total_cost}</pre>";
    echo "<pre>{$family_name}</pre>";
    echo "<pre>{$given_name}</pre>";
    echo "<pre>{$fullname}</pre>";
    echo "<pre>{$full_name}</pre>";
    echo "<pre>{$fullname2}</pre>";
    ?>
    <p>Long way to display variable within HTML</p>
    <pre><?php echo $fullname2; ?></pre>
    <p>Shortcut display variable within HTML</p>
    <pre><?= $fullname2; ?></pre>


    <p>
        <a href="../">Back</a>
    </p>
</div>
</body>
</html>
