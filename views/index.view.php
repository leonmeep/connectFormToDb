<?php

require 'views/partials/header.php';

?>

    <div class="flex justify-center text-green-400">
        <h1><?= $heading ?></h1>

    </div>


    <div>

        <form method="post" action="/response">

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <br>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <br>
            <input type="submit" value="Submit">

        </form>

    </div>

<?php require 'views/partials/footer.php'; ?>