<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>


    <!-- Only use the CDN when developing and no access to Vite -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>

<div class="bg-gray-900 m-0 p-0 text-gray-200" id="page-top">
    <header class="text-gray-300 body-font container mx-auto flex flex-row p-5 mb-6 justify-between items-center">

        <h1>
            <a class="flex title-font font-medium items-center text-gray-400 mb-4 md:mb-0"
               href=".">
                <span><i class="fa fa-worm text-3xl text-gray-200"></i></span>
                <span class="ml-3 text-xl inline-block font-serif">PHP Demo</span>
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
    <main class="min-h-192 flex flex-col gap-8
             container grow w-full overflow-hidden
             px-6 mx-auto
             bg-white text-gray-700">

        <!--ul>li*10>a[href=experiments/exp-$$.php]{Experiment $$}-->
        <ul>
            <li><a href="./experiments/exp-01.php"
                   class="text-blue-900 hover:text-blue-700
                  hover:underline underline-offset-2 ">
                    Experiment 01
                </a></li>
            <li><a href="./experiments/exp-02.php"
                   class="text-blue-900 hover:text-blue-700
                      hover:underline underline-offset-2 ">
                    Experiment 02
                </a></li>
            <li><a href="./experiments/exp-03.php"
                   class="text-blue-900 hover:text-blue-700
                      hover:underline underline-offset-2 ">
                    Experiment 03
                </a></li>
            <li><a href="./experiments/exp-04.php"
                   class="text-blue-900 hover:text-blue-700
                      hover:underline underline-offset-2 ">
                    Experiment 04
                </a></li>
            <li><a href="./experiments/exp-05.php"
                   class="text-blue-900 hover:text-blue-700
                      hover:underline underline-offset-2 ">
                    Experiment 05
                </a></li>
            <li><a href="./experiments/exp-06.php"
                   class="text-blue-900 hover:text-blue-700
                      hover:underline underline-offset-2 ">
                    Experiment 06
                </a></li>
            <li><a href="./experiments/exp-07.php"
                   class="text-blue-900 hover:text-blue-700
                      hover:underline underline-offset-2 ">
                    Experiment 07 - Browse All Categories
                </a></li>
            <li><a href="./experiments/exp-08.php"
                   class="text-blue-900 hover:text-blue-700
                      hover:underline underline-offset-2 ">
                    Experiment 08 - Add New Category
                </a></li>
            <li><a href="./experiments/exp-09.php"
                   class="text-blue-900 hover:text-blue-700
                      hover:underline underline-offset-2 ">
                    Experiment 09 - Retrieve A Category
                </a>(Use Show button on experiment 07)</li>
            <li><a href="./experiments/exp-10.php"
                   class="text-blue-900 hover:text-blue-700
                      hover:underline underline-offset-2 ">
                    Experiment 10 - Edit A Category
                </a> (Use Edit button on experiment 07)</li>
            <li><a href="./experiments/exp-11.php"
                   class="text-blue-900 hover:text-blue-700
                      hover:underline underline-offset-2 ">
                    Experiment 11 - Delete A Category
                </a></li>
            <li><a href="./experiments/exp-12.php"
                   class="text-blue-900 hover:text-blue-700
                      hover:underline underline-offset-2 ">
                    Experiment 12 - Search Categories
                </a></li>
            <li><a href="./experiments/exp-13.php"
                   class="text-blue-900 hover:text-blue-700
                      hover:underline underline-offset-2 ">
                    Experiment 13
                </a></li>
            <li><a href="./experiments/exp-14.php"
                   class="text-blue-900 hover:text-blue-700
                      hover:underline underline-offset-2 ">
                    Experiment 14
                </a></li>
        </ul>
    </main>

    <footer class="p-8 pb-12 mt-8 mx-auto
            container grow w-full overflow-hidden
            gap-12 flex flex-wrap justify-between">

        <nav>
            <h5 class="text-left font-medium tracking-widest text-gray-500 uppercase title-font text-xs">
                Terms & Conditions
            </h5>

            <a class="my-1 block" href="/public#">
                Privacy Policy
                <span class="text-sky-600 text-xs p-1">TBA</span>
            </a>

            <a class="my-1 block" href="/public#">
                Terms & Conditions
                <span class="text-sky-600 text-xs p-1">TBA</span>
            </a>

            <p class="mt-4 text-md capitalize text-gray-400">
                © Copyright 2025 NAME/COMPANY. All rights reserved
            </p>
        </nav>

        <nav>
            <h5 class="text-left font-medium tracking-widest text-gray-500 uppercase title-font text-xs">
                Support
            </h5>

            <a class="my-1 block" href="https://help.screencraft.net.au">
                Help Center
                <span class="text-sky-600 text-xs p-1">New</span>
            </a>
            <a class="my-1 block" href="https://help.screencraft.net.au/hc/2680392001">
                FAQs
                <span class="text-sky-600 text-xs p-1">New</span>
            </a>

        </nav>


        <nav>
            <h5 class="text-left font-medium tracking-widest text-gray-500 uppercase title-font text-xs">
                About
            </h5>

            <a class="my-1 block" href="/about">
                Personal and project Information
                <span class="text-sky-600 text-xs p-1"></span>
            </a>

            <a class="my-1 block" href="https://github.com/YOUR_GITHUB_NAME">
                GitHub Profile
                <span class="text-sky-600 text-xs p-1">New</span>
            </a>

            <a class="my-1 block" href="#">
                Contact Us
                <span class="text-sky-600 text-xs p-1">New</span>
            </a>

            <a href="#page-top" class="bock mt-6 text-md text-gray-400">Jump to Top</a>

        </nav>

    </footer>
</body>
</html>
