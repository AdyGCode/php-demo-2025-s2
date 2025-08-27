<?php
/**
 * Header for all pages
 *
 */
?>
    <div class="bg-gray-900 m-0 p-0 text-gray-200" id="page-top">
        <header class="text-gray-300 body-font container mx-auto flex flex-row p-5 mb-6 justify-between items-center">

            <h1>
                <a class="flex title-font font-medium items-center text-gray-400 mb-4 md:mb-0"
                   href=".">
                    <span><i class="fa fa-worm text-3xl text-gray-200"></i></span>
                    <span class="ml-3 text-xl inline-block font-serif"> <?= $_ENV["APP_NAME"]; ?></span>
                    <!--
Long hand version of above: <?php echo $_ENV["APP_NAME"]; ?>
-->
                </a>
            </h1>


            <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4
            text-gray-500
            flex flex-wrap items-center text-base justify-left grow">

                <a class="mr-5 py-2
              hover:text-gray-100
              border-0 border-b-2 border-b-gray-500 hover:border-b-gray-200"
                   href="/">
                    Experiments
                </a>

                <a class="mr-5 py-2
              hover:text-gray-100
              border-0 border-b-2 border-b-gray-500 hover:border-gray-200"
                   href="about.php">
                    About
                </a>
                <a class="mr-5 py-2
              hover:text-gray-100
              border-0 border-b-2 border-b-gray-500 hover:border-gray-200">
                    Second Link
                </a>
                <a class="mr-5 py-2
              hover:text-gray-100
              border-0 border-b-2 border-b-gray-500 hover:border-gray-200">
                    Third Link
                </a>

            </nav>

        </header>
<?php
