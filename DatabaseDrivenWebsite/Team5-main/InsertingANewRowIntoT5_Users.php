<!DOCTYPE html>
<!--    InsertingANewRowIntoT5_Users.php   
    11/10/2021 GR Original Program 
    This page adds a new user to the User Table
    -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Users Table - Insert</title>
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
   

    <main>

<?php
    
    include "ErrorHandler.php";
    include "header.php";

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "<h1> Adding a New User to the Users Table </h1>";

    require ("../connect_db.php");

    
    #---------- Initialize some varibales ---------#

    $error_message="";                         # set this variable during input validation 

    if (isset($_POST['User_names'])){
        $User_names = $_POST['User_names'];
    }
    else {
        $User_names = "";
    }

    // if (isset($_POST['RecActive'])){
    //     $RecActive = $_POST['RecActive'];
    // }
    // else {
    //     $RecActive = "";
    // }
    if (isset($_POST['User_type'])){
        $User_type = $_POST['User_type'];
    }
    else {
        $User_type = "";
    }
    if (isset($_POST['F_name'])){
        $F_name = ucwords($_POST['F_name']);
    }
    else {
        $F_name = "";
    }

    if (isset($_POST['L_name'])){
        $L_name = ucwords($_POST['L_name']);
    }
    else {
        $L_name = "";
    }
    if (isset($_POST['Phone_num'])){
        $Phone_num = $_POST['Phone_num'];
    }
    else {
        $Phone_num = "";
    }
    if (isset($_POST['Email'])){
        $Email = $_POST['Email'];
    }
    else {
        $Email = "";
    }
    if (isset($_POST['Password'])){
        $Password = $_POST['Password'];
    }
    else {
        $Password = "";
    }

    $hash = sha1($Password);
    $duplicate=mysqli_query($dbc,"select * from t5_users where User_names='$User_names'");
    
    
    #-----------Input Validation ------------
    // Input Validation for User name
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        if (trim($User_names) == ""){
            $error_message = 'Username must not be blank!';
        }
        else if ( !ctype_alnum($User_names)){
            $error_message = ' This is not a alphanumeric Username.';
        } 
        else if (strlen($User_names) < 7){
            $error_message = "Username is too short, must be exactly 8 Characters.";
        }
        else if(strlen($User_names) > 9){
            $error_message = "Username is too long, must be exactly 8 Characters.";
        }
        else if (mysqli_num_rows($duplicate)>0){
            $error_message ="This Username already exists. Please select another Username.";
        }

        // Input Validation for Record Activty 
        // else if (trim($RecActive) == ""){
        //     $error_message = 'Record Activity must not be blank!';
        // }

        // Input Validation for User type  
        else if (trim($User_type) == ""){
            $error_message = 'User type must not be blank!';
        }

        // Input Validation for First Name
        else if (trim($F_name) == ""){
            $error_message = 'First name must not be blank!';
        }
        else if(!preg_match("/^([a-zA-Z' ]+)$/",$F_name)){
            $error_message = 'First name can only be letter characters';
        
        }

        // Input Validation for Last Name
        else if (trim($L_name) == ""){
            $error_message = 'Last name must not be blank!';
        }
        else if(!preg_match("/^([a-zA-Z' ]+)$/",$L_name)){
            $error_message = 'Last name can only be letter characters';
        
        }
       
        

        // Input Validation for Phone number 
        else if (trim($Phone_num) == ""){
            $error_message = "Phone number must not be blank!";
        }
        else if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $Phone_num)){
            $error_message = "Phone number must be in this format: 123-456-7890
                              <br> And it may only have numbers and dashes in the format above";
        }
        
        
        // Input Validation for Email
        else if (trim($Email) == ""){
            $error_message = "Email must not be blank!";
        }
        else if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
            $error_message = "Invalid email format";
        }
        

        // Input Validation for password
        else if (trim($Password) == ""){
            $error_message = 'Password must not be blank!';
        }
        else if (!ctype_alnum($Password)){
            $error_message = ' This is not a alphanumeric password.';
        }
        else if (strlen($Password) < 7){
            $error_message = "Password is too short, must be exactly 8 Characters.";
        }
        else if(strlen($Password) > 9){
            $error_message = "Password is too long, must be exactly 8 Characters.";
        }
        

        
    }
    

    // error meassages  
    echo "<p style='color:red;'> " . $error_message . "</p>";

    //-------------Form action for users to input values ------------------------------
    if ($_SERVER['REQUEST_METHOD'] == "GET" || $error_message != ""){
        //Form to process differnet sort options 
        echo "<form action='" . $_SERVER['SCRIPT_NAME'] . "' method='POST'>";
        echo "<br> 
        Enter your Username (Must be exactly 8 Characters) <br> 
        <input type='text' name='User_names' maxlength='8' autofocus='autofocus' value='$User_names' 
        style='text-align: center;'>";

        // echo "<br> Enter your Record Activity <select name='RecActive'>";
        // echo "      <option value='A'> Active </option>";
        // echo "      <option value='S'> Suspended </option>";
        // echo "      <option value='D'> Deleted </option>";
        // echo "     </select>";

        echo "<br><br> 
        Are you an Administrator or Employee? <br> <select name='User_type'>";
        echo "      <option value='Admin'> Administrator </option>";
        echo "      <option value='Emp'> Employee </option>";
        echo "     </select>";

        echo "<br><br> 
        What is your First Name? <br> <input type='text' name='F_name' maxlength='20' autofocus='autofocus' 
        value='$F_name' style='text-align: center;'>";

        echo "<br><br> 
        What is your Last Name? <br> <input type='text' name='L_name' maxlength='20' autofocus='autofocus' 
        value='$L_name' style='text-align: center;'>";

        echo "<br><br>
        Enter your Phone number <br> <input type='text' name='Phone_num' placeholder='123-456-7890' autofocus='autofocus' 
        value= '$Phone_num' style='text-align: center;'>";

        echo "<br><br>
        Enter your Email <br> <input type='email' name='Email' placeholder='bob.kate1@marist.edu' autofocus='autofocus' 
        value='$Email' style='text-align: center;'>";

        echo "<br><br>
        Enter your Password <br> <input type='password' name='Password' maxlength='8' autofocus='autofocus' 
        value='$Password' style='text-align: center;'>";
        

        echo     "<br><br><br> <input type='submit' value='Submit!' style='color: white; background: blue;'>";

        echo "                                   
        <input type = 'button' style='color: white; background: blue;' value = 'Go Back' onclick='history.go(-1)'>";

        
            
        echo "</form>";

        //------------------Inserts values into the Table -----------------------------------
    } else if ($_SERVER['REQUEST_METHOD'] == "POST" || $error_message == ""){
        $q = "insert into t5_users values ('$User_names', 'A', '$User_type', '$F_name', '$L_name', '$Phone_num', '$Email', '$Password', '$hash')";
        $r = mysqli_query ($dbc, $q);   

        if ($r){
            echo " <h3> Success! Thank you for creating the User $User_names! </h3>";
            // echo "<br><button><a href='T5_Users.php'>Return to User Table</a></button><br>";   #----Added----
            echo "<a href='T5_Users.php' class='button'>RETURN TO USER TABLE</a>";
        }
        else {
            echo "<br>" . mysqli_error($dbc);
        }
    }
    

   
    
   
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

    </main>
    
</body>
</html>