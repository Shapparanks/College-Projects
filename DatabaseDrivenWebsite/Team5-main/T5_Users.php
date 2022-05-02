<!DOCTYPE html>
<!-- 2021/10/29   GR   Original Program 
     Displays the User Table in the MySQL Database with Additional features
-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Users Table </title>
    <link rel="stylesheet" href="./CSS/T5.css">
    <script src="https://kit.fontawesome.com/afd6aa68df.js" crossorigin="anonymous"></script>
    <link rel="icon" href="./IMG/Snow-Ply_logo.png">
    <style>
			table {background-color: rgb(0, 153, 153); color:black;
					border-collapse: collapse; border: 1px;
					font-family: arial; font-weight: normal;
                    margin-left: auto; margin-right:auto;
					}
			th	{	background-color: grey;
					font-size: 17px; font-weight: bold;}
			td	{	font-size: 15px; padding-left: 5px; padding-right: 5px;}

			h1	{color: black;}
			
			tr:nth-child(even) {background-color: silver;}
            
            body    {   font-family: arial; text-align: center;}
	</style>
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
    //session_start();
    include "ErrorHandler.php";
    include "header.php";

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "<h1> Displaying the Users Table </h1>";

    

    require ("../connect_db.php");
    echo "<br>";

    #-----------Session Variables --------------
    // if (isset($_SESSION["logins_status"])){
    //     $logins_status = $_SESSION["logins_status"];
    // }
    // else {
    //     $logins_status = "<div style='color: white;'>NOT LOGGED IN</div>";
    // }
    // echo "<br>" . $logins_status;

  

    // echo "<b> <br>SELECTING </b> and <b> DISPLAYING </b> the results from the <b> USERS </b> table! ";
    // echo " <br> Here is the list of the table <b> SELECTING </b> and <b> DISPLAYING </b> 
    // the <b> DATA </b> for <b> User name, Record Activity, First name, and Last name </b>";

    
    // echo "<br>";
    // echo "<br>";


    // Setting the Ascending and Descending
    if ( isset($_POST['direction'])){
        $direction_type = $_POST['direction'];
    }
    else {
        $direction_type = "";
    }

    //Get the passed sort type from input form (This is under the comment "For Sorting the User Table" )
    if ( isset($_POST['sort'])){
        $sort_type = " ORDER BY " . $_POST['sort'] . ' ' . $direction_type;
    }
    else {
        $sort_type = "";
    }
    // echo "<br> Query : " . $sort_type;



    $q = "select * from t5_users" . $sort_type;        # We put command in $q
    $r = mysqli_query ( $dbc , $q );                   # this runs commands,
    if ($r ) {
        
        # Table Begins here
        echo "<table border = '2'>";
        echo "<tr>";
        echo " <th> " . "Username" 
        . " </th><th> " . "Record Active" 
        . " </th><th> " . "User type"
        . " </th><th> " . "First Name" 
        . " </th><th> " . "Last Name" 
        . " </th><th> " . "Phone Number"
        . " </th><th> " . "Email"
        . "</th><th>" . "Choose a User to Delete" . "</th>";
        echo "</tr>";
        $table_num = 0;
        while ($row = mysqli_fetch_array( $r, MYSQLI_NUM)) {
            if ($row[1] != 'S' && $row[1] != 'D'){
            echo "<tr>";
            echo " <td> <br> " . $row[0] . " </td><td> " 
            . $row[1] . " </td><td> " 
            . $row[2] . " </td><td> "
            . $row[3] . " </td><td> " 
            . $row[4] . "</td><td>" 
            . $row[5] . "</td><td>"
            . $row[6] . "</td><td>"
            . "<a href=PrintsSetRecActiveT5User.php?User_names=$row[0]&RecActive=D> Delete </a>" . "</td>";
            echo "</tr>";
            if ($table_num++ == 10) {
                break;
            }
        }
        
        }

        
    }
    else {
        echo mysqli_error( $dbc );
    }
    echo "</table>";


    echo "<br><h3>Would you like to insert a new User into the table? <br>Click the link below to insert User.</h3>";
    // echo "<button style='background-color:red; border-color:blue; color:white;'>
    // <a href='InsertingANewRowIntoT5_Users.php'>ADD NEW USER</a></button><br>";

    echo "<a href='InsertingANewRowIntoT5_Users.php' class='button'>ADD NEW USER</a>";

    # For Sorting the User Table
    echo "<br><br> <h3>Let's Sort the User Table!</h3>";

    date_default_timezone_set("America/New_York");
    echo "The current time is " . date("h:i:sa");

    echo "<form action='" . $_SERVER['SCRIPT_NAME'] . "' method='POST' >";

    echo "<br> <b><u>How would you like to sort the User Table?</u></b>";
    echo "<br> <input type='radio' name='sort' value='User_names'>     User name";
    echo "<input type='radio' name='sort' value='RecActive'>     Record Active";
    echo "<input type='radio' name='sort' value='F_name'>   First name";
    echo "<input type='radio' name='sort' value='L_name'>    Last name";

    echo "<br><br> <b><u>Would you like to add an Ascending or Descending to the perviously selected sort option?</u></b>";
    echo "<br> <input type='radio' name='direction' value='ASC'>    Ascending";
    echo "<input type='radio' name='direction' value='DESC'>    Descending";

    echo "<br><br> <input type='submit' value='Submit Me' style='color: white; background: blue;'>";
    echo "</form>";

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