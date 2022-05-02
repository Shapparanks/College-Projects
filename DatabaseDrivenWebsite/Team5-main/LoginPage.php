<!DOCTYPE html>
<!--    LoginPrints.php   
    11/10/2021 GR Original Program 
    Checks with MySQL Database if user can login into Website 
    -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Login Page </title>
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
    //session_start();
    include "ErrorHandler.php";

    include "header2.php";

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
   
    
    

    echo "<h1> Login Page </h1>";

    require ("../connect_db.php");

    #-----------Session Variables --------------
    if (isset($_GET["option"])){
        $option = $_GET["option"];
        

    } else {
        $option = 'IN';
    }
    if ($option == 'OUT'){
        echo "<h1> You have been Logged out.
        <br><br><a href='Team5WithoutLinks.php' class='button'>RETURN TO HOME</a><br>";   #----Added----"
        $_SESSION["logins_status"] = "<div style='color: white;'>NOT LOGGED IN</div>";
        die; 
    }
   
   
    // if (isset($_SESSION["logins_status"])){
    //     $logins_status = $_SESSION["logins_status"];
    // }
    // else {
    //     $logins_status = "<div style='color: white;'> NOT LOGGED IN </div>";
    // }
    // echo "<br>" . $logins_status;
    
    #---------- Initialize some varibales ---------#

    $error_message="";                         # set this variable during input validation 

    if (isset($_POST['User_names'])){
        $User_names = $_POST['User_names'];
    }
    else {
        $User_names = "";
    }

    if (isset($_POST['Password'])){
        $Password = $_POST['Password'];
    }
    else {
        $Password = "";
    }
    if (isset($_SESSION['login_type'])){
        $login_type = $_SESSION['login_type'];                //Added
    }
    else {
        $login_type = "";
    }


    #-----------Input Validation ------------
    // Input Validation for User name
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        if (trim($User_names) == ""){
            $error_message = 'Username must not be blank!';
        }
        else if ( !ctype_alnum($User_names)){
            $error_message = ' This is not a alphanumeric Username.';
        }
        // Input Validation for password
        else if (trim($Password) == ""){
            $error_message = 'Password must not be blank!';
        }
        else if ( !ctype_alnum($Password)){
            $error_message = ' This is not a alphanumeric password.';
        }
        
        #----------Verifying with MYSQL DB--------------
        if ($error_message == "") {
            $q = "select * from t5_users where user_names='$User_names'
                            and Password='$Password'";
            $r = mysqli_query ( $dbc , $q ); # this runs commands,
            if ($r){
                if (mysqli_num_rows($r) == 0) {
                    $error_message = "Invalid user name/password combination.";
                }
                else {
                    $row = mysqli_fetch_array( $r, MYSQLI_NUM);
                    $_SESSION['login_type'] = $row[2];
                }
            }
            else {
                $error_message = "Invalid user name/password combination.";
            }
        }
    } 

    // error meassages for user name and password 
    echo "<p style='color:red;'> " . $error_message . "</p>";

    
    if ($_SERVER['REQUEST_METHOD'] == "GET" || $error_message != ""){
        //Form to process differnet sort options 
        echo "<form action='" . $_SERVER['SCRIPT_NAME'] . "' method='POST'>";
        echo "<br> Enter your Username <input type='text' name='User_names' maxlength='8' value=''>";
        echo "<br> Enter your Password <input type='password' name='Password' maxlength='8'>";
        
    

        echo     "<br><br> <input type='submit' value='Login!' style='color: white; background: blue;'>";
        

    
        
        echo "</form>";
    }

    else {
        echo "<h3>Succussful Login</h3> ";

        #----- action handler: all validations passed!-----
        echo "<h4>User $User_names successfully logged in!</h4>";
        $_SESSION["logins_status"] = "<div style='color: white;'>LOGGED IN AS ". $_SESSION['login_type'] . " </div>";

        echo "<a href='Team5.php' class='button'>RETURN TO HOME</a><br>";   #----Added----

        echo "<br>";
        echo "<br>";
        echo "<br>";

        
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
    
    



   
    
    include "footer2.php";
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