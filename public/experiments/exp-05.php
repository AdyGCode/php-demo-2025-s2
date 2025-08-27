<?php
/**
 * Experiment 05 - Include, Base Path, DIR and more!
 *
 * MULTI-LINE DESCRIPTION (OPTIONAL)
 * To tell the reader what this does in detail
 *
 * Author:          Adrian Gould <https://github.com/AdyGCode>
 * Date created:    2025-08-06
 *
 */

/*
 __DIR__
    - is a global 'constant'
    - the folder where the first file was loaded
 For example, this file is at:
    - C:\Users\USERNAME\Source\Repos\php-demo-2025-s2\public\experiments

 Include the settings.php file contained in the /app/ folder
*/

include __DIR__ . "/../../app/settings.php";

echo "<p>Do other things</p>";

/*
 * https://www.twilio.com/en-us/blog/working-with-environment-variables-in-php
 * https://udoyhasan.medium.com/what-is-an-env-file-and-how-to-use-an-env-file-in-php-4e146358cca6
 *
 */
?>
<p>
    <a href="../">Back</a>
</p>
