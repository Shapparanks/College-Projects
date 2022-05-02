<!DOCTYPE html>

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

            body    {   font-family: Arial;
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
	
	require ("../connect_db.php");
	
	echo "<h1> Insert a new supplier </h1>";
	
	$error_message="";
	
	if (isset($_POST['RecActive'])){
        $RecActive = $_POST['RecActive'];
    }
    else {
        $RecActive = "";
    }
	
	if (isset($_POST['Supplier'])){
        $Supplier = $_POST['Supplier'];
    }
    else {
        $Supplier = "";
    }
	
	if (isset($_POST['Address'])){
        $Address = $_POST['Address'];
    }
    else {
        $Address = "";
    }
	
	if (isset($_POST['ZipCode'])){
        $ZipCode = $_POST['ZipCode'];
    }
    else {
        $ZipCode = "";
    }
	
	if (isset($_POST['PhoneNum'])){
        $PhoneNum = $_POST['PhoneNum'];
    }
    else {
        $PhoneNum = "";
    }
	
	if (isset($_POST['Email'])){
        $Email = $_POST['Email'];
    }
    else {
        $Email = "";
    }
	
	if ($_SERVER['REQUEST_METHOD'] == "POST"){
		if (trim($RecActive) == ""){
            $error_message = 'RecActive must not be blank!';
        }
		if (trim($Supplier) == ""){
            $error_message = 'Supplier must not be blank!';
        }
		if (trim($Address) == ""){
            $error_message = 'Address must not be blank!';
        }
		if (trim($ZipCode) == ""){
            $error_message = 'ZipCode must not be blank!';
        }
		if (trim($PhoneNum) == ""){
            $error_message = 'Phone Number must not be blank!';
        }
		if (trim($Email) == ""){
            $error_message = 'Email must not be blank!';
        }
	}
	
	echo "<p style='color:red;'> " . $error_message . "</p>";
	
	if ($_SERVER['REQUEST_METHOD'] == "GET" || $error_message != ""){
		echo "<form action='" . $_SERVER['SCRIPT_NAME'] . "' method='POST'>";
		echo "<br> Enter the supplier status (A, D, H) <input type='text' name='RecActive' value='$RecActive'>";
		echo "<br> (A = Active, D = Disabled, H = Hold)";
		echo "<br> Enter the supplier name <input type='text' name='Supplier' value='$Supplier'>";
		echo "<br> Enter the supplier address <input type='text' name='Address' value='$Address'>";
		echo "<br> Enter the supplier zip code <input type='text' name='ZipCode' value='$ZipCode'>";
		echo "<br> Enter the supplier phone number <input type='text' name='PhoneNum' value='$PhoneNum'>";
		echo "<br> Enter the supplier email <input type='text' name='Email' value='$Email'>";
		
		echo "<br><br> <input type='submit' value='Submit!' style='color: white; background: blue;'>";
	}
	else if ($_SERVER['REQUEST_METHOD'] == "POST" || $error_message == ""){
        $q = "insert into t5_suppliers values (NULL, '$RecActive', '$Supplier', '$Address', '$ZipCode', '$PhoneNum', '$Email')";
        $r = mysqli_query ($dbc, $q);   

        if ($r){
            echo " <h3> The supplier has been added. </h3>";
        }
        else {
            echo "<br>" . mysqli_error($dbc);
        }
	}
	echo "    ";
	echo "<a href='T5_Suppliers.php' class='button'>Back</a>";
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