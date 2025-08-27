<?php
/**
 * Experiment 10
 *
 * This is a duplicated copy of Experiment 07.
 * Using Forms and Databases
 *
 * Edit a Category
 *
 * Author:          Adrian Gould <https://github.com/AdyGCode>
 * Date created:    2025-08-27
 *
 */

global $pdo, $base_path;

require_once __DIR__ . "/../../app/settings.php";
require_once $base_path . "/app/database.php";

if (!empty($_GET)) {

    $old_id = (int)($_GET['id'] ?? 0);

    $sql = "SELECT * FROM categories WHERE id = :id";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':id', $old_id, PDO::PARAM_INT);
    $results = $statement->execute();

    $category = $statement->fetch(PDO::FETCH_OBJ);
    $old_id = (int)$category->id;
    $old_title = $category->title;
    $old_description = $category->description;
}

if (isset($_POST) && count($_POST) > 0) {

    $new_id = (int)($_POST['id'] ?? 0);

    $new_title = "";
    if (isset($_POST['title'])) {
        $new_title = trim($_POST['title']);
    }

    $new_description = $_POST['description'] ?? "";

    if (strlen($new_title) >= 3
            && $old_id === $new_id
            && $old_title !== $new_title) {

        $sql = "UPDATE categories SET `title` = :title, `description` =  :description WHERE id = :id";

        $statement = $pdo->prepare($sql);
        $statement->bindValue(':title', $new_title, PDO::PARAM_STR);
        $statement->bindValue(':description', $new_description, PDO::PARAM_STR);
        $statement->bindValue(':id', $old_id, PDO::PARAM_INT);

        $results = $statement->execute();

        $errors['success'] = "Category Updated";

        // remove the title and description from memory when successfully inserted
        unset($title, $description, $id);
    } else {

        if ((strlen($new_title) >= 3
                && $old_id === $new_id
                && $old_title === $new_title)) {

            $sql = "UPDATE categories SET `description` =  :description WHERE id = :id";

            $statement = $pdo->prepare($sql);
            $statement->bindValue(':description', $new_description, PDO::PARAM_STR);
            $statement->bindValue(':id', $old_id, PDO::PARAM_INT);

            $results = $statement->execute();

            $errors['success'] = "Category Updated";


        } else {
            $errors['title'] = "Title already exists";
        }
    }

}
?>
<!doctype html>
<html lang="en_AU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $_ENV["APP_NAME"] ?> » Exp 10 </title>

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
            <h3>Edit Category</h3>
        </header>
        <section>
            <!-- form[id=NewCategory,method=POST,action=exp-08.php] -->
            <!-- HyperUI.dev for TailwindCSS components -->
            <form
                    action="exp-10.php?id=<?= $old_id ?>"
                    id="NewCategory"
                    method="POST">

                <!-- Cross Site Request Forgery -->
                <input type="hidden"
                       name="csrf"
                       value="<?= random_int(1000, 9999) ?>">


                <input type="hidden"
                       name="id"
                       value="<?= $old_id ?>">

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
                            value="<?= $new_title ?? $old_title ?>"
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
                    ><?= $new_description ?? $old_description ?></textarea>
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
