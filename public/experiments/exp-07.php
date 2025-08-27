<?php
/**
 * Experiment 07
 *
 * This is a duplicated copy of Experiment 06,
 * modified to work with a Database
 *
 * Author:          Adrian Gould <https://github.com/AdyGCode>
 * Date created:    2025-08-13
 *
 */

global $pdo, $base_path; // hmmmmm

require_once __DIR__ . "/../../app/settings.php";

require_once $base_path . "/app/database.php";

$sql = "SELECT * FROM categories;";

// Prepared statements allow for some protection form SQL injection
$statement = $pdo->prepare($sql);

$resultCode = $statement->execute();

//var_dump($resultCode);
//var_dump($statement->fetch());
//var_dump($statement->fetchAll(PDO::FETCH_OBJ));

$categories = $statement->fetchAll(PDO::FETCH_OBJ);
$rowCount = $statement->rowCount();
?>
<!doctype html>
<html lang="en_AU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $_ENV["APP_NAME"]; ?> » Exp 07 </title>

    <!-- Only use the CDN when developing and no access to Vite -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body>
<?php
// Read the header from the templates
require_once $base_path . "/resources/templates/header.php";
?>
<main>
    <header>
        <h2> Categories </h2>
    </header>

    <article>
        <header>
            <h3>Browse</h3>
            <p>
                <a href="exp-08.php">Add Category</a>
            </p>
        </header>
        <section>
<!--            table>(thead>tr>th*3)+(tbody>tr>td*3)+(tfoot>tr>td) -->
            <table>
                <thead>
                <tr>
                    <th class="text-left px-2">ID</th>
                    <th class="text-left px-2">Name</th>
                    <th class="text-left px-2">Description</th>
                    <th class="text-left px-2">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($categories as $category): ?>
                    <tr>
                        <td class="w-1/8 px-2"><?= $category->id ?></td>
                        <td class="w-1/6 px-2"><?= $category->title ?></td>
                        <td class="w-1/2 px-2"><?= $category->description ?></td>
                        <td class="py-2 pl-4">

                            <a href="exp-09.php?id=<?= $category->id ?>"
                               class="inline-block rounded-sm border border-indigo-600 bg-indigo-600
                                      px-2 py-1 text-sm font-medium text-white
                                      hover:bg-transparent hover:text-indigo-600
                                      focus:ring-3 focus:outline-hidden">Show</a>

                            <a href="exp-10.php?id=<?= $category->id ?>"
                               class="inline-block rounded-sm border border-indigo-600 bg-indigo-600
                                      px-2 py-1 text-sm font-medium text-white
                                      hover:bg-transparent hover:text-indigo-600
                                      focus:ring-3 focus:outline-hidden">Edit</a>

                            <a href="exp-11.php?id=<?= $category->id ?>"
                               class="inline-block rounded-sm border border-indigo-600 bg-indigo-600
                                      px-2 py-1 text-sm font-medium text-white
                                      hover:bg-transparent hover:text-indigo-600
                                      focus:ring-3 focus:outline-hidden">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="3">
                        Total Rows: <?= $rowCount ?>
                    </td>
                </tr>
                </tfoot>
            </table>
        </section>
    </article>
</main>
<?php
require_once $base_path . "/resources/templates/footer.php";
?>
</body>
</html>
