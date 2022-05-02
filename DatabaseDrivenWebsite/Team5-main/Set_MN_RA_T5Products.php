<!DOCTYPE html> 
<!--   PrintsSetRecActive - sets RecActive column -->

<!--    LoginPrints.php   
    11/21/2021 JS Original Program 
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

    if (isset($_GET["Model_Number"])){
        $Model_Number = $_GET["Model_Number"];
    }
    else{
        echo "No Model Number specified!";
        Die;
    }

    

    if (isset($_GET["RecActive"])){
        $RecActive = $_GET["RecActive"];
        
    }
    else{
        echo "No Record Activity specified!";
        Die;
    }

    $q = "UPDATE t5_products SET RecActive= '" . $RecActive . "' WHERE Model_Number = '$Model_Number'";
    $r = mysqli_query ($dbc, $q);   

    if ($r){
        echo "<br> <h2>Thank you. The Record with the model number: $Model_Number has been Deleted!</h2>";
        echo "<a href='T5_Products.php' class='button'>RETURN TO PRODUCTS TABLE</a>";
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

        define ("FILE_AUTHOR", "<small> 2021 Shapiro </small>");
        echo "(C)" . FILE_AUTHOR;
        echo "<br> Team 5 Email <br>";
        echo "<a href='mailto:Jacob.Shapiro1@marist.edu'> Shapiro </a>";
    }

    echo "</div>";

    ?>

</body>
</html>