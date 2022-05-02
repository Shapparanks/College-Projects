<!DOCTYPE html>

<!-- 2021/11/21   JS   Original Program -->


<html lang="en">

<head>
    <meta charset="UTF-8">

    <title> Products Table </title>

    <link rel="stylesheet" href="./CSS/T5.css">
    <script src="https://kit.fontawesome.com/afd6aa68df.js" crossorigin="anonymous"></script>
    <link rel="icon" href="./IMG/Snow-Ply_logo.png">
    <style>
        
			table   {   background-color: rgb(0, 153, 153); color:black;
					    border-collapse: collapse; border: 1px;
					    font-family: arial; font-weight: normal;
                        margin-left: auto; margin-right:auto;
			}
			th      {	background-color: grey;
					    font-size: 17px; font-weight: bold;
            }
			td	    {	font-size: 15px; padding-left: 5px; padding-right: 5px;
            }

			h1	    {   color: black;
            }
			
			tr:nth-child(even) {background-color: silver;}

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

            body    {   font-family: arial;
                        text-align: center;
            }
	</style>


</head>

<body>

<?php
    include "ErrorHandler.php";
    include "header.php";

    if (isset($_SESSION['login_type'])){
    $login_type = $_SESSION['login_type']; 
    }
    
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "<h1> Displaying the Data in the Products Table </h1>";

    require ("../connect_db.php");



    #--------------------Setting the Ascending and Descending direction for sorting--------------------

        if ( isset($_POST['direction'])){
            $direction_type = $_POST['direction'];
        }
        else {
            $direction_type = "";
        }
    
        if ( isset($_POST['sort'])){
            $sort_type = " " . $_POST['sort'] . ' ' . $direction_type;
        }
        else {
            $sort_type = " ";
        }
        echo "<br> Currently Sorted by: " . $sort_type;
    
    #--------------------Set query to select from table and also add the sort variable--------------------

    $q = "select * from t5_products". $sort_type;     # We put command in $q
    $r = mysqli_query ( $dbc , $q );       # this runs commands,
    
    if ($r ) {
         echo "<p>";
         echo "<table border = '2'>";

         echo "<tr>";
         echo "<th>"      . "Model_Number" . " </th><th> " . "RecActive" . 
              "</th><th>" . "Quantity"     . " </th><th> " . "Product" . 
              "</th><th>" . "Price"        . " </th><th> " . "Supplier";
        if ($login_type == 'Emp'){
        echo "<th>     Choose a Row to Delete . 
              </th>";
        }
         echo "</tr>";

         $row_num = 0;
         while ($row = mysqli_fetch_array( $r, MYSQLI_NUM)) {
            if ($row[1] != 'S' && $row[1] != 'D'){ 
            echo "<tr>";
             echo "<td> <br> " 
             . $row[0] . " </td><td> " 
             . $row[1] . " </td><td> " 
             . $row[2] . " </td><td> "
             . $row[3] . " </td><td>$"
             . $row[4] . " </td><td> "
             . $row[5] . " </td>";
             if ($login_type == 'Emp'){
                echo "<td><a href=Set_MN_RA_T5Products.php?Model_Number=$row[0]&RecActive=D> Delete </a>" . "</td>";
             }
             echo "</tr>";

             if ($row_num++ == 6) {
                 break;
             }
          }
        }
     }
     else {
         echo mysqli_error( $dbc );
     }
     echo "</table>";
    
    if ($login_type == 'Emp'){
     echo "<br><h3>Would you like to insert a product into the table? <br>Click the link below to insert.</h3>";
     echo "<a href='NewRowT5_Products.php' class='button'>ADD NEW PRODUCT!</a>";
    }
    echo"<br>";

 
     date_default_timezone_set("America/New_York");
     echo "The current time is " . date("h:i:sa");
     echo "<br>";
     echo "<form action='" . $_SERVER['SCRIPT_NAME'] . "' method='POST' >";
 
     #--------------------Input radio buttons to set sorting--------------------
     echo "<br> <b><u>How would you like to sort the Product Table?</u></b>";
     echo "<br> <input type='radio' name='sort' value='Model_Number'> Model Number";
     echo "     <input type='radio' name='sort' value='RecActive'>    Record Active";
     echo "     <input type='radio' name='sort' value='Quantity'>     Quantity ";
     echo "     <input type='radio' name='sort' value='Product'>      Product";
 
     echo "<br><br>";

     echo "<b><u>    Would you like to add an Ascending or Descending to the perviously selected sort option?</u></b>";
     echo "<br>     <input type='radio' name='direction' value='ASC'>     Ascending";
     echo "         <input type='radio' name='direction' value='DESC'>    Descending";
 
     echo "<br><br> <input type='submit' value='Submit!' style='color: white; background: blue;'>";
     echo "</form>";
     echo "<br>";
     echo "<br>";
     echo "<br>";


    
     include "footer.php";
     #--------------------Footer function to show author of page--------------------
     function by_author (){
        echo "<div class='footer'>";
    
            define ("FILE_AUTHOR", "<small> 2021 Shapiro </small>");
            echo "(C)" . FILE_AUTHOR;
            echo "<br> Jacob's Email: <br>";
            echo"<a href='mailto:jacob.shapiro1@marist.edu'> Shapiro <a>";
    }
    
        echo "</div>";
        
 
     ?>
 
 </body>
 </html>


