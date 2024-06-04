<?php

require 'views/partials/header.php';


?>

<! -- SAD FACE -->
<div class="flex justify-center p-3 pr-3 pb-3 pl-3 pt-3 m-3.5 ml-3.5 mr-3.5 mt-3.5 mb-3.5">
    <img src="/img/sad.png" alt="404" class="w-1/2 h-1/2" />
</div>
<! -- 404 MESSAGE -->
<div class="flex justify-center p-3 pr-3 pb-3 pl-3 pt-3 m-3.5 ml-3.5 mr-3.5 mt-3.5 mb-3.5">
    <h1 class="text-4xl text-pink-400 font-poetsen">404 - Sorry, Page Not Found</h1>
</div>

<! -- RETURN TO HOME -->
<p class="flex justify-center p-6 pr-6 pb-6 pl-6 pt-6 m-7 ml-7 mr-7 mt-7 mb-7">
    <a href="/" class="text-blue-600 text-2xl underline hover:animate-pulse hover:text-green-600 font-poetsen">Return to Home</a>
</p>


<?php require 'views/partials/footer.php'; ?>
