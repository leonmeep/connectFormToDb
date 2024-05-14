<?php

require 'partials/header.php';

?>

<h1 class="flex justify-center text-green-400"><?= $heading ?></h1>

    <form method="post" action="/controllers/response.php">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <br>
        <input type="submit" value="Submit">
    </form>

<?php require 'partials/footer.php'; ?>