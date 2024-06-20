<?php
    session_start();
    echo $_SESSION['fname']; echo "<br>";
    echo $_SESSION['lname']; echo "<br>";
    echo $_SESSION['email']; echo "<br>";
    echo $_SESSION['password']; echo "<br>";
    session_destroy();

    echo $_SESSION['fname'] = ''; echo "<br>";
    echo $_SESSION['lname'] = ''; echo "<br>";
    echo $_SESSION['email'] = ''; echo "<br>";
    echo $_SESSION['password'] = ''; echo "<br>";

    header('location:index.php');

?>