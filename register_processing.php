<?php
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $cpassword = $_REQUEST['cpassword'];

    echo $fname; echo "<br>";
    echo $lname; echo "<br>";
    echo $email; echo "<br>";
    echo $password; echo "<br>";
    echo $cpassword; echo "<br>";

    // $connect = mysql_connect('localhost','root','');//Server connection
    // //'Server, User, domain password'
    // mysql_select_db('crudapp', $connect);//Database  connection

    $connect = mysql_connect('sql12.freesqldatabase.com','sql12714946','Nb2pgjW7Pd');//Server connection
    //'Server, User, domain password'
    mysql_select_db('sql12714946', $connect);//Database  connection

    //Create Insert Query
    if ($password == $cpassword){
        $query="insert into user values('$fname', '$lname', '$email', '$password')";
        mysql_query($query)or die("Query Error");
        header('location:index.php');
    }else{
        
        //header('location:index.php');
        echo "alert('password and confirm password should be same')";
    }
    
    
    
    //After click button then back main page.
?>