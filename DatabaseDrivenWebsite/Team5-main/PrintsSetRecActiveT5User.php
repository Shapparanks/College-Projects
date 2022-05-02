<!DOCTYPE html> 
<!--   PrintsSetRecActiveT5User.php 
       11/10/2021 GR Original Program 
       sets RecActive column to "D" (Delete)
       -->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Delteing a Row </title>
    <link rel="stylesheet" href="./CSS/T5.css">
    <script src="https://kit.fontawesome.com/afd6aa68df.js" crossorigin="anonymous"></script>
    <link rel="icon" href="./IMG/Snow-Ply_logo.png">
    <style>
            .button {
            background-color: blue;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            }
    </style>
    
</head>

<body>
<?php 
    include "header.php";

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    require ("../connect_db.php");
    include "ErrorHandler.php";

    if (isset($_GET["User_names"])){
        $User_names = $_GET["User_names"];
    }
    else{
        echo "No User names specified!";
        Die;
    }

    

    if (isset($_GET["RecActive"])){
        $RecActive = $_GET["RecActive"];
        
    }
    else{
        echo "No Record Activity specified!";
        Die;
    }
    

   

    $q = "UPDATE t5_users SET RecActive= '" . $RecActive . "' WHERE User_names = '$User_names'";
    $r = mysqli_query ($dbc, $q);   

    if ($r){
        echo "<br> <h2>Thank you. The User $User_names has been Deleted!</h2>";
        //echo "<button><a href='T5_Users.php'>Return to User Table</a></button><br>";   #----Added----
        //echo "<br> The Record activity field for Record $User_names changed to $RecActive!";
        echo "<a href='T5_Users.php' class='button'>RETURN TO USER TABLE</a>";
    }
    else {
        echo "<br>" . mysqli_error($dbc);
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
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