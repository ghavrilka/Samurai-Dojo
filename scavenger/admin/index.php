<?php
    function displayform($username = "") {
        echo "<html><head><title>Admin page -- Don't log in unless you should!</title><head><body>";
        echo "<h1>Admin Log In</h1><hr><form method='POST' action='index.php?key06=03c6b06952c750899bb03d998e631860'>";
        echo "Username: <input type='text' name='username' value='$username'><br>";
        echo "Password: <input type='password' name='password'><br>";
        echo "<input type='submit'>";
        echo "</form></body></html>";
    }

    $username = "";
    if (isset($_POST["username"])) {
        if ($_POST["username"] == "admin") {
            // allows for username harvesting
            $username="admin";
            if ($_POST["password"] == "abc123") {
                // password can be cracked with john.txt
                echo base64_decode("S2V5IDE5ID0gOWUzY2ZjNDhlY2NmODFhMGQ1NzY2M2UxMjlhZWYzY2I=");
                exit;
            }
        }
    }

    displayform($username);
?>
