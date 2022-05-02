!DOCTYPE html>

<!-- 2021/11/21   CR   Original Program -->

<html lang="en">

<head>
    <meta charset="UTF-8">

    <title> Suppliers Table </title>

    <link rel="stylesheet" href="./CSS/T5.css">
    <script src="https://kit.fontawesome.com/afd6aa68df.js" crossorigin="anonymous"></script>
    <link rel="icon" href="./IMG/Snow-Ply_logo.png">
    <style>
        
			table   {background-color: rgb(0, 153, 153); color:black;
					 border-collapse: collapse; border: 1px;
					 font-family: arial; font-weight: normal;}
					 
			th      {background-color: grey;
					 font-size: 17px; font-weight: bold;}
					 
			td	  	{font-size: 15px; padding-left: 5px; padding-right: 5px;}

			h1	    {color: black;}
			
			tr:nth-child(even) {background-color: silver;}

            body    {   font-family: arial;
                        font-size: 17px;   
            }
	</style>
</head>

<body>
	<main>
	
<?php
	include "ErrorHandler.php";
    include "header.php";
	
	echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
	
	require ("..\connect_db.php");
	
	echo "<h1> Disable a supplier </h1>";
	
	$error_message="";
	
	if (isset($_POST['RecNum'])){
        $RecNum = $_POST['RecNum'];
    }
    else {
        $RecNum = "";
    }
	
	if ($_SERVER['REQUEST_METHOD'] == "POST"){
        if (trim($RecNum) == ""){
            $error_message = 'RecNum must not be blank!';
        }
	}
	
	echo "<p style='color:red;'> " . $error_message . "</p>";
	
	if ($_SERVER['REQUEST_METHOD'] == "GET" || $error_message != ""){
		echo "<form action='" . $_SERVER['SCRIPT_NAME'] . "' method='POST'>";
        echo "<br> Enter the supplier number you would like to disable <input type='text' name='RecNum' value=''>";
		
		echo "<br><br> <input type='submit' value='Submit!' style='color: white; background: blue;'>";
	}
	else if ($_SERVER['REQUEST_METHOD'] == "POST" || $error_message == ""){
        $q = "UPDATE t5_suppliers SET RecActive= 'D' WHERE RecNum = '$RecNum'";
        $r = mysqli_query ($dbc, $q);   

        if ($r){
            echo " <h3> This supplier has been set to disabled. </h3>";
        }
        else {
            echo "<br>" . mysqli_error($dbc);
        }
	}
	
	echo "<a href='t5_suppliers.php' class='button'>Back</a>";
	echo "<br><br><br>"; 
    include "footer.php";
    function by_author (){
        echo "<div class='footer'>";
    
            define ("FILE_AUTHOR", "<small> 2021 Rogers </small>");
            echo "(C)" . FILE_AUTHOR;
            echo "<br> Team 5 Emails <br>";
            echo "<a href='mailto:christopher.rogers1@marist.edu'> Rogers <a>";
    }
    
        echo "</div>";
	
?>