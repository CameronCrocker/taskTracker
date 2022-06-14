<?php
    require "header.php";

if (isset($_GET["error"])){
    if ($_GET["error"] == "databaseerror"){
        echo "<p class='error'>database error</p>";
    } elseif ($_GET["error"] == "invalidnumber"){
        echo "<p class='error'>data entry not found</p>";
    }
}
?>

<h1>Edit some data..</h1>

<div class="edit-data">
    <form method="post" action="includes/edit.inc.php">
        Number:
        <br>
        <input type="number" required="required" min="1" name="number-edit">
        <br>
        Date:
        <br>
        <input type="date" required="required" name="data-date">
        <br>
        Distance (miles):
        <br>
        <input type="number" required="required" min="0" name="data-distance">
        <br>
        <button type="submit" name="submit_edit_data">Enter</button>
    </form>
</div>