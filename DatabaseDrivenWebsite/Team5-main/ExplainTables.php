<!DOCTYPE html>
<!-- 2021/10/06   GR   Original Program 
     Explains the tables in T5_Tables.sql file on Webpage
-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Explain Tables </title>
    <link rel="stylesheet" href="./CSS/T5.css">
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
        echo "<br>";

        echo "<h1> Explaining the Tables of Our Users, Products, and Suppliers Tables </h1>";
        echo "<h3> Calling connect_db.php to connect to site_db </h3>";
        echo "<br>";

        require ("../connect_db.php");

        # run a query to show all our tables and display
        echo "<ol>";

        $q = "SHOW TABLES" ;                # We put command in $q
        $r = mysqli_query ( $dbc , $q );    # this runs commands,
        if ($r ) {
            echo "<b> Here is the list of TABLES from the site_db DATABASE </b> ";
            echo "<ol>";
                    
            $table_num = 0;
            while ($row = mysqli_fetch_array( $r, MYSQLI_NUM)) {
                echo "<br> Table: " . $row[0];
                if ($table_num++ == 12) {
                    break;
                }
            }

            echo "</ol>";
        }
        else {
            echo mysqli_error( $dbc );
        }


        echo "<br>";
        # USER TABLE 

        $q = "EXPLAIN t5_users" ;             # We put command in $q
        $r = mysqli_query ( $dbc , $q );      # this runs commands,
        if ($r ) {
            echo " <b> EXPLAINING </b> results from the <b> T5_USERS </b>";
            echo " <br> Query worked.";
            echo " <br> <b> Here is the list of the table EXPLAINED </b> ";
            
            # Format of tables     
            # JS: Made some formating adjustments to make it look a little more condenced and readable.     
            echo "<table border = '2'>";
            echo "<tr>";
            echo " <th> " . "Field" . " </th><th> " . "Type" . 
                 " </th><th> " . "NULL" . " </th><th> " . "Key" . 
                 " </th><th> " . "Defualt" . " </th><th> " . "Extra" . 
                 "</th>";
            echo "</tr>";

            $table_num = 0;
            while ($row = mysqli_fetch_array( $r, MYSQLI_NUM)) {
                echo " <tr>";
                echo " <td> <br> " . $row[0] . " </td><td> " . $row[1] . 
                     " </td><td> " . $row[2] . " </td><td> " . $row[3] . 
                     " </td><td> " . $row[4] . " </td><td> " . $row[5] . 
                     " </td>";
                echo " </tr>";
                if ($table_num++ == 10) {
                    break;
                }
            }

            
        }
        else {
            echo mysqli_error( $dbc );
        }
        echo "</table>";


        echo "<br>";
        # PRODUCTS TABLE
        
        $q = "EXPLAIN t5_products" ;        # We put command in $q
        $r = mysqli_query ( $dbc , $q );       # this runs commands,
        if ($r ) {
            echo " <b> EXPLAINING </b> results from the <b> T5_PRODUCTS </b> table!";
            echo " <br> Query worked.";
            echo " <br> <b> Here is the list of the table EXPLAINED </b> ";
            
            
            # Format of tables  
            echo "<table border = '2'>";
            echo "<tr>";
            echo " <th> " . "Field" . " </th><th> " . "Type" . 
                 " </th><th> " . "NULL" . " </th><th> " . "Key" . 
                 " </th><th> " . "Defualt" . " </th><th> " . "Extra" . 
                 "</th>";
            echo "</tr>";
            $table_num = 0;
            while ($row = mysqli_fetch_array( $r, MYSQLI_NUM)) {
                echo "<tr>";
                echo " <td> <br> " . $row[0] . " </td><td> " . $row[1] . 
                     " </td><td> " . $row[2] . " </td><td> " . $row[3] . 
                     " </td><td> " . $row[4] . " </td><td> " . $row[5] . 
                     "</td>";
                echo "</tr>";
                if ($table_num++ == 10) {
                    break;
                }
            }

            
        }
        else {
            echo mysqli_error( $dbc );
        }
        echo "</table>";

        echo "<br>";
        # SUPPLIERS TABLE 
        
        $q = "EXPLAIN t5_suppliers" ;        # We put command in $q
        $r = mysqli_query ( $dbc , $q );       # this runs commands,
        if ($r ) {
            echo " <b> EXPLAINING </b> results from the <b> T5_SUPPLIERS </b> table! ";
            echo " <br> Query worked.";
            echo " <br> <b> Here is the list of the table EXPLAINED </b> ";
            
            # Format of tables  
            echo "<table border = '2'>";
            echo "<tr>";
            echo " <th> " . "Field" . " </th><th> " . "Type" . 
                 " </th><th> " . "NULL" . " </th><th> " . "Key" . 
                 " </th><th> " . "Defualt" . " </th><th> " . "Extra" . 
                 "</th>";
            echo "</tr>";
            $table_num = 0;
            while ($row = mysqli_fetch_array( $r, MYSQLI_NUM)) {
                echo "<tr>";
                echo " <td> <br> " . $row[0] . " </td><td> " . $row[1] . 
                     " </td><td> " . $row[2] . " </td><td> " . $row[3] . 
                     " </td><td> " . $row[4] . " </td><td> " . $row[5] . 
                     "</td>";
                echo "</tr>";
                if ($table_num++ == 10) {
                    break;
                }
            }

            
        }
        else {
            echo mysqli_error( $dbc );
        }
        echo "</table>";
        echo "</ol>";

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