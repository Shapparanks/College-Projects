<!DOCTYPE html>
<!-- 2021/10/06   GR   Original Program 
     Displays the connection status of connecting to the MySQL Server
-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> DB Connection </title>
    <link rel="stylesheet" href="./CSS/MySQL_Reference.css">
    <script src="https://kit.fontawesome.com/afd6aa68df.js" crossorigin="anonymous"></script>
    <link rel="icon" href="./IMG/Snow-Ply_logo.png">
</head>

<body>
    
    <?php
        include "ErrorHandler.php";
        include "header.php";

        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        

        echo "<h1> Gina Roma is Testing Connections </h1>";
        echo "<ol>";
        echo "Calling 'connect_db.php' to connect to the database! ";
        echo "<br>";

        /* this will connect to db; $dbc is a link identifier to database */ 
        require ("../connect_db.php");
        // require ("connect_db.php");

        echo "<br>";

        if ( mysqli_ping( $dbc) )   # good connection!
            {echo "Connected! ";
            echo "MySQL Server " . mysqli_get_server_info( $dbc). 
                 " connected on "          . mysqli_get_host_info( $dbc );}
            echo "</ol>";

        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";

        include "footer.php";
        function by_author (){
            echo "<div class='footer'>";
        
                define ("FILE_AUTHOR", "<small> 2021 Roma </small>");
                echo "(C)" . FILE_AUTHOR;
                echo "<br> Team 5 Email <br>";
                echo "<a href='mailto:gina.roma1@marist.edu'> Roma </a>";
        }
        
            echo "</div>";
    ?>

</body>
</html>