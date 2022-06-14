<?php
require "header.php"
?>
<div class="sign-up">
<h1 class="heading">Enter Your Details</h1>
<?php
if (isset($_GET["error"])){
    if ($_GET["error"] == "invalidattempt"){
        echo "<p class='error'>Please fill in all fields</p>";
    } elseif ($_GET["error"] == "invalidusername"){
        echo "<p class='error'>Invalid Username</p>";
    } elseif ($_GET["error"] == "invalidpassword"){
        echo "<p class='error'>Invalid Password -> passwords must ONLY have values 0-9 and/or A-Z and/or _&-@#\"</p>";
    } elseif ($_GET["error"] == "databaseerror"){
        echo "<p class='error'>database error</p>";
    } elseif ($_GET["error"] == "usernametaken"){
        echo "<p class='error'>Username is already taken</p>";
    } elseif ($_GET["error"] == "invalidmatch"){
        echo "<p class='error'>Passwords do not match</p>";
    }
}
?>

    <form method="post" action="includes/signup.inc.php">
        <input type="text" name="username_register" placeholder="Username..">
        <input type="password" name="password_register" placeholder="Password..">
        <input type="password" name="password_register_repeat" placeholder="Repeat Pass..">
        <button type="submit" name="submit_register">Register</button>
    </form>
</div>