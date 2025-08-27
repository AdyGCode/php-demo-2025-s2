<?php
/**
 * Experiment 08
 *
 * This is a duplicated copy of Experiment 07.
 * Using Forms and Databases
 *
 * Add a new Category
 *
 * Author:          Adrian Gould <https://github.com/AdyGCode>
 * Date created:    2025-08-27
 *
 */

global $pdo, $base_path;

require_once __DIR__ . "/../../app/settings.php";
require_once $base_path . "/app/database.php";

if (isset($_POST) && count($_POST) > 0) {
// POST Superglobal
    $title = "";
    if (isset($_POST['title'])) {
        $title = trim($_POST['title']);
    }
    // null coalesce - use the value before the ?? if defined, otherwise value after
    $description = $_POST['description'] ?? "";

    if (strlen($title) >= 3) {
        // Use placeholder for the values
        $sql = "INSERT INTO categories(`title`, `description`) VALUE(:title, :description);";
        // Prepare the SQL statement
        $statement = $pdo->prepare($sql);
        // Binding data into the SQL
        $statement->bindValue(':title', $title, PDO::PARAM_STR);
        $statement->bindValue(':description', $description, PDO::PARAM_STR);
        // Execute the query
        $results = $statement->execute();

        $errors['success'] = "New Category Added";

        // remove the title and description from memory when successfully inserted
        unset($title, $description);
    } else {
        $errors['title'] = "Title must be 3 or more characters";
    }

}
?>
<!doctype html>
<html lang="en_AU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $_ENV["APP_NAME"] ?> » Exp 08 </title>

    <!-- Only use the CDN when developing and no access to Vite -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body>
<?php
require_once $base_path . "/resources/templates/header.php";
?>
<main>
    <header>
        <h2><a href="exp-07.php">Categories</a></h2>
    </header>

    <?php
    if (isset($errors)) :
        ?>
        <section>
            <?php
            foreach ($errors as $error => $message) :
                ?>
                <p><?= $message ?></p>
            <?php
            endforeach
            ?>
        </section>
    <?php
    endif
    ?>
    <article>
        <header>
            <h3>New Category</h3>
        </header>
        <section>
            <!-- form[id=NewCategory,method=POST,action=exp-08.php] -->
            <!-- HyperUI.dev for TailwindCSS components -->
            <form
                    action="exp-08.php"
                    id="NewCategory"
                    method="POST">

                <!-- Cross Site Request Forgery -->
                <input type="hidden"
                       name="csrf"
                       value="<?= random_int(1000, 9999) ?>">

                <label for="Title">
                    <span class="text-sm font-medium text-gray-700">
                        Title
                    </span>

                    <input
                            name="title"
                            type="text"
                            id="Title"
                            class="p-1 mt-0.5 w-full
                                   rounded border-gray-300 shadow-sm
                                   sm:text-sm"
                            value="<?= $title ?? '' ?>"
                            placeholder="Enter Category Title"
                    />
                </label>

                <label for="Description">
                    <span class="text-sm font-medium text-gray-700">
                        Description
                    </span>

                    <textarea
                            name="description"
                            id="Description"
                            class="p-1 mt-0.5 w-full resize-none
                                   rounded border-gray-300 shadow-sm
                                   sm:text-sm"
                            rows="4"
                            placeholder="Enter Category Description, or leave blank"
                    ><?= $description ?? '' ?></textarea>
                </label>

                <button
                        type="submit"
                        class="inline-block rounded-sm
                               border border-indigo-600 bg-indigo-600
                               px-12 py-3
                               text-sm font-medium text-white
                               hover:bg-transparent hover:text-indigo-600
                               focus:ring-3 focus:outline-hidden"
                >
                    Save
                </button>

            </form>
        </section>
    </article>
</main>
<?php
require_once $base_path . "/resources/templates/footer.php";
?>
</body>
</html>
