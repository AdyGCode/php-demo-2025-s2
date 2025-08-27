<?php
/**
 * Experiment 09
 *
 * This is a duplicated copy of Experiment 07,
 * modified to work with a Database
 *
 * Update ONE specific Record from the Categories
 *
 * Author:          Adrian Gould <https://github.com/AdyGCode>
 * Date created:    2025-08-13
 *
 */

global $pdo, $base_path; // hmmmmm

require_once __DIR__ . "/../../app/settings.php";
require_once $base_path . "/app/database.php";

$rowCount = 0;

if (isset($_GET['id'])) {

    $id = (int)$_GET['id'];

    $sql = "SELECT * FROM categories where id = :id;";

    // Prepared statements allow for some protection form SQL injection
    $statement = $pdo->prepare($sql);
    $statement->bindParam(":id", $id, PDO::PARAM_INT);
    $results = $statement->execute();

    $category = $statement->fetch(PDO::FETCH_OBJ);
    $rowCount = $statement->rowCount();
} else {
    header('Location: /');
    exit(0);
}

?>
<!doctype html>
<html lang="en_AU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $_ENV["APP_NAME"] ?> » Exp 09 </title>

    <!-- Only use the CDN when developing and no access to Vite -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
<?php
// Read the header from the templates
require_once $base_path . "/resources/templates/header.php";
?>

<main class="min-h-192 flex flex-col gap-8
             container grow w-full overflow-hidden
             px-6 mx-auto
             bg-white text-gray-700">

    <header>
        <h2><a href="exp-07.php">Categories</a></h2>
    </header>

    <article>
        <header>
            <h3>Category Details</h3>
        </header>
        <section>
            <?php if ($rowCount > 0 && isset($category)) : ?>
                <table class="table">
                    <thead>
                    <tr>
                        <th class="w-32 text-left"></th>
                        <th class="text-left">Value</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th class="w-32 text-left">ID</th>
                        <td><?= $category->id ?></td>
                    </tr>
                    <tr>
                        <th class="w-32 text-left">Title</th>
                        <td><?= $category->title ?></td>
                    </tr>
                    <tr>
                        <th class="w-32 text-left">Description</th>
                        <td><?= $category->description ?></td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="3">
                        </td>
                    </tr>
                    </tfoot>
                </table>
            <?php else: ?>
                <p class="">Category not found</p>
            <?php endif ?>
        </section>
    </article>
</main>
<?php
require_once $base_path . "/resources/templates/footer.php";
?>
</body>
</html>
