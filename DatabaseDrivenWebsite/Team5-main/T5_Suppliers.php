<!DOCTYPE html>

<!-- 2021/11/2   CR   Original Program -->

<html lang="en">

<head>
    <meta charset="UTF-8">

    <title> Suppliers Table </title>

    <link rel="stylesheet" href="./CSS/MySQL_Reference.css">
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
	
	echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
	echo "<br>";
    echo "<br>";
	
	echo "<h1> Displaying the Suppliers Table </h1>";
	
	require ("../connect_db.php");
    echo "<br>";

	if ( isset($_POST['direction'])){
        $direction_type = $_POST['direction'];
    }
    else {
        $direction_type = "";
    }

	if (isset($_POST['sort'])){
		$sort_type = " ORDER BY " . $_POST['sort'] . ' ' . $direction_type;
	}
	else {
		$sort_type = " ";
	}
	if ($sort_type != " ")
		echo "<br> " . $sort_type;


    $q = "select * from t5_suppliers" . $sort_type;
    $r = mysqli_query ( $dbc , $q );
    if ($r ) {
		
		echo "<table border = '2'>";
        echo "<tr>";
        echo " <th> " . "RecNum" . " </th><th> " . "RecActive" . " </th><th> " . "Supplier" . " </th><th> " . "Address" . "</th><th> " . "PhoneNum" . "</th>";
        echo "</tr>";
        $table_num = 0;
        while ($row = mysqli_fetch_array( $r, MYSQLI_NUM)) {
			if ($row[1] != 'H' && $row[1] != 'D'){ 
				echo "<tr>";
				echo " <td> <br> " . $row[0] . " </td><td> " . $row[1] . 
                     " </td><td> " . $row[2] . " </td><td> " . $row[3] . 
                     "</td><td> " . $row[5]  . " </td>";
					 if ($login_type== 'Emp') {
						 echo "<td><a href=Set_RN_RA_T5Suppliers.php?RecNum=$row[0]&RecActive=D> Delete </a>" . "</td>";
					 }
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
	
	echo "<form action='T5_Suppliers.php' method='POST'>";
	
	echo "<br>";
    echo "<b><u>How would you like to sort the Suppliers Table?</u></b> <br>";
	echo "<input type = 'radio' name = 'sort' value = 'RecNum'>		Record Number";
	echo "<input type = 'radio' name = 'sort' value = 'RecActive'>	Record Active";
	echo "<input type = 'radio' name = 'sort' value = 'Supplier'>	Supplier Name";
	echo "<input type = 'radio' name = 'sort' value = 'Address'>	Address";
	echo "<input type = 'radio' name = 'sort' value = 'PhoneNum'>	Phone Number";
	
	echo "<br>";
	echo "<br>";
	
	echo "<b><u>Ascending or Descending?</u></b>";
    echo "<br> <input type='radio' name='direction' value='ASC'>    Ascending";
    echo "<input type='radio' name='direction' value='DESC'>    Descending";
	
	echo "<br>";
	
	echo "<br> <input type = 'submit' value='sorted' style='color: white; background: blue;'>";

    echo "<br>";
	echo "<br>";
	
	if ($login_type == 'Emp'){
		echo "<a href='InsertIntoSuppliers.php' class='button'>Insert new supplier</a>";
	}
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
    
            define ("FILE_AUTHOR", "<small> 2021 Rogers </small>");
            echo "(C)" . FILE_AUTHOR;
            echo "<br> Team 5 Emails <br>";
            echo "<a href='mailto:christopher.rogers1@marist.edu'> Rogers <a>";
    }
    
        echo "</div>";
       
    ?>

</body>
</html>