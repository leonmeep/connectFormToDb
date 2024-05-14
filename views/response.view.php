<?php

require 'views/partials/header.php';

?>

    <div class="flex justify-center">
        <h1 class="flex text-green-400"><?= $heading ?></h1>
    </div>

    <div class="flex justify-center">
        <p class="flex ">Your comment has been saved</p>
    </div>

    <div class="flex justify-center">
        <a href="/" class="flex text-pink-400 hover:underline">Back to home</a>
    </div>

<?php require 'views/partials/footer.php'; ?>