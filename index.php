<?php

require 'partials/header.php';
?>



    <h1 class="flex justify-center text-green-400">Please fill out this form:</h1>

    <form method="post" action="/response.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        <br>
        <input type="submit" value="Submit">
    </form>



<?php require 'partials/footer.php'; ?>