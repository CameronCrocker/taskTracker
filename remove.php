<?php
    require "header.php";
?>

<h1>Remove data..</h1>

<div class="delete-data">
    <form method="post" action="includes/delete.inc.php">
        Number:
        <br>
        <input type="number" required="required" name="number-delete">
        <br>
        <button type="submit"  name="delete_data">Ok</button>
    </form>
</div>