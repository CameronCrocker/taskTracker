<?php
    require "header.php";
if (isset($_GET["error"])){
    if ($_GET["error"] == "databaseerror"){
        echo "<p class='error'>database error</p>";
    }
}
?>


<h1>Add some data..</h1>
<div class="enter-data">
    <form method="post" action="includes/add.inc.php">
        Date:
        <br>
        <input type="date" required="required" name="data-date">
        <br>
        Distance (miles):
        <br>
        <input type="number" required="required" min="0" maxlength="3" name="data-distance">
        <br>
        <button type="submit" name="submit_add_data">Enter</button>
    </form>
</div>

