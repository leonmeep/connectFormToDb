<?php

require 'views/partials/header.php';

?>

    <div class="flex justify-center mt-48 text-green-400">
        <h1><?= $heading ?></h1>

    </div>


    <div class="mt-8">

        <form method="post" action="/">

            <div class="flex flex-row gap-2">
            <label for="name" class="flex flex-row gap-2 text-green-400">Name:</label>
            <input type="text" id="name" name="name" class="border rounded-tl rounded-tr rounded-bl rounded-br" placeholder="......">
                <?php if (isset($errors['name'])) : ?>
                    <p class="text-red-500"><?= $errors['name'] ?></p>
                <?php endif; ?>

            </div>

            <br>

            <div class="flex flex-col gap-2 mt-4">
            <label for="comment" class="text-green-400">Comment:</label>
                <textarea id="comment" name="comment" class="border rounded-tl rounded-tr rounded-bl rounded-br" placeholder="what do you think?"></textarea>
            </div>
            <?php if (isset($errors['comment'])) : ?>
                <p class="text-red-500"><?= $errors['comment'] ?></p>
            <?php endif; ?>

            <br>
            <input type="submit" value="Submit" class="bg-pink-300 m-auto  rounded-tl rounded-tr rounded-bl rounded-br p-1.5 hover:underline">

        </form>

    </div>

<?php require 'views/partials/footer.php'; ?>