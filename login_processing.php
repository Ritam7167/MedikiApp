<?php
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];


    // $connect = mysql_connect('localhost','root','');//Server connection
    // //'Server, User, domain password'
    // mysql_select_db('crudapp', $connect);//Database  connection

    $connect = mysql_connect('sql12.freesqldatabase.com','sql12714946','Nb2pgjW7Pd');//Server connection
    //'Server, User, domain password'
    mysql_select_db('sql12714946', $connect);//Database  connection

    $query = mysql_query("select * from user where email = '$email' and password = '$password'") or die("Query Error");
    $record = mysql_fetch_array($query);


    $email = $record['email'];
    $password = $record['password'];

    
    if($email == '' and $password == ''){
        echo '<script>alert("Unsuccessful login! Please enter correct user and password.")</script>';
        //header('location:Appointment.php');
        
    }else{
        // echo $record['fname']; echo "<br>";
        // echo $record['lname']; echo "<br>";
        // echo $record['email']; echo "<br>";
        // echo $record['password']; echo "<br>";

        echo "Successful login";
        //Set session variables
        session_start();
        $_SESSION['fname'] = $record['fname'];
        $_SESSION['lname'] = $record['lname'];
        $_SESSION['email'] = $record['email'];
        $_SESSION['password'] = $record['password'];

        // echo "session_data"; echo "<br>";
        echo $_SESSION['fname']; echo "<br>";
        echo $_SESSION['lname']; echo "<br>";
        echo $_SESSION['email']; echo "<br>";
        echo $_SESSION['password']; echo "<br>";
        header('location:Appointment.php');
    }

?>