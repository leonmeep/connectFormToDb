<?php

require 'views/partials/header.php';

?>

    <div class="flex justify-center mt-64">
        <h1 class="flex text-green-400 text-2xl p-1"><?= $heading ?></h1>
    </div>
<! -- HAPPY FACE -->
    <div class="flex justify-center mt-2">
        <img src="/img/happy.png" alt="happy face" class="w-20 h-20">
    </div>
<! MESSAGE -->
    <div class="flex justify-center mt-5">
        <p class="flex tracking-wider text-green-400 ">Your comment has been saved</p>
    </div>
<! -- RETURN TO COMMENTS FORM LINK -->
    <div class="flex justify-center mt-10">
        <a href="/" class="flex text-pink-400 p-3 hover:underline">Return to the comments form</a>
    </div>

<?php require 'views/partials/footer.php'; ?>