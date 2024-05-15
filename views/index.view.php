<?php

require 'views/partials/header.php';

?>

    <div class="flex justify-center mt-48 text-green-400">
        <h1><?= $heading ?></h1>

    </div>


    <div class="mt-8">

        <form method="post" action="/response">

            <div class="flex flex-row gap-2 text-green-400">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="border rounded-tl rounded-tr rounded-bl rounded-br" required placeholder="......">
            </div>

            <br>

            <div class="flex flex-col gap-2 mt-4 text-green-400">
            <label for="message">Message:</label>
                <textarea id="comment" name="comment" class="border rounded-tl rounded-tr rounded-bl rounded-br" required="" placeholder="what do you think?"></textarea>
            </div>

            <br>
            <input type="submit" value="Submit" class="bg-pink-300 m-auto  rounded-tl rounded-tr rounded-bl rounded-br p-1.5 hover:underline">

        </form>

    </div>

<?php require 'views/partials/footer.php'; ?>