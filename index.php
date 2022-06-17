<?php
    $server = "localhost";                    //server name
    $user = "root";                           //user name
    $password = "";                           //password is empty for sql
    $db = "db_movies";                              //type database name

    $conn = mysqli_connect($server,$user,$password,$db);    //connecting to database

    if(!$conn)                                //incase connection fails
    {
        echo "connection failed";       //exits the program
    }
    $sql = "INSERT INTO movie (name , actor , actress , director , year ) VALUES ('kirik party' , 'rakshith' , 'rashmika' , 'cora' , 2005),('chamak' , 'ganesh' , 'rashmika' , 'karthik' , 2006),('jolly days' , 'vishwas' , 'neha' , 'nila' , 2012),('galipata' , 'ganesh' , 'nima' , 'navin' , 2002),('bahubali' , 'prabhas' , 'shruthi' , 'namin' , 2000);       //query

             $insert = mysqli_query($conn,$sql);                     //executing query
             echo '<script type="text/javascript">';
                echo 'alert("movies added successfully");';
                echo 'window.location.href="display.php";';
                echo "</script>";
?>
