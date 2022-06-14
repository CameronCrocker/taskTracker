<?php
    session_start();
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="description" content="Fitness application (for coursework).">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <nav>
                <div class="header">

                        <?php
                        if (isset($_SESSION["username"])){
                            echo "<div class=\"header-right\">
    <div class=\"edit-tags\">
        <a href=\"index.php\">Home</a>
        <a href=\"add.php\">Add</a>
        <a href=\"edit.php\">Edit</a>
        <a href=\"remove.php\">Remove</a>
    </div>
    <form method=\"post\" action=\"includes/logout.inc.php\">
        <button type=\"submit\" name=\"logout_submit\">Logout</button>
    </form>
</div>";
                        } else {
                            echo "<div class=\"header-left\">
                        <a href=\"register.php\">Register</a>
                        <form method=\"post\" action=\"includes/login.inc.php\">
                            <input type=\"text\" name=\"username\" placeholder=\"Username..\">
                            <input type=\"password\" name=\"password\" placeholder=\"Password..\">
                            <button type=\"submit\" name=\"login_submit\">Login</button>
                        </form>
                    </div>";
                        }
                        ?>


                </div>
            </nav>
        </header>
    </body>

</html>
