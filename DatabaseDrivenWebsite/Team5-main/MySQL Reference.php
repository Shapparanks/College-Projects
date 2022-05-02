<!DOCTYPE html>
<!--    MySQL Reference.php   Webpage for MySQL Reference
    10/10/2021 GR Original Program 
    -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Webpage for MySQL Reference</title>
    <link rel="stylesheet" href="./CSS/MySQL_Reference.css">
    <script src="https://kit.fontawesome.com/afd6aa68df.js" crossorigin="anonymous"></script>
    <link rel="icon" href="./IMG/Snow-Ply_logo.png">
    <style>
        table {background-color: darkseagreen;  color:black;
                border-collapse: collapse; border: 1px;
                font-family: arial; font-weight: normal; margin-right: auto; margin-left: auto;
                    }
        th   { background-color: grey;
                font-size: 17px; font-weight: bold;
                    }
        td   { font-size: 15px; padding-left: 5px;  padding-right: 5px;
                }
        h1   { color: red; }
        tr:nth-child(even) {background-color: silver;}
    </style>
</head>

<body>
    <!-- Top navigational bar -->
    <?php
        include "ErrorHandler.php";
        include "header.php";
    ?>

    <br> <br> <br> <br> <br> <br> 
    
    <header>
        <h1 style="color: blue;"> My MYSQL Reference Page </h1>
    </header>

    <main>
        <h2 style="text-align: center;">DATABASE COMMANDS</h2>
        <table border="1"> 
            <tr>
                <th> Commands </th>
                <th> Syntax </th>
                <th> Notes </th>
            </tr>
            <tr>
                <td> Show Databases </td>
                <td> SHOW DATABASES ;</td>
                <td> Displays a list of all databases in MySQL <br> (SQL Syntax does not have to be in all Capitals) </td>
            </tr>
            <tr>
                <td> Use Databases </td>
                <td> USE database-name ;</td>
                <td> Tells MySQL server which database to use </td>
            </tr>
            <tr>
                <td> Show Tables </td>
                <td> SHOW TABLES ;</td>
                <td> Possibly view a list of tables in selected database </td>
            </tr>  
        </table>

        <h2 style="text-align: center;"> TABLE COLUMN COMMANDS </h2>
        <table border="1"> 
            <tr>
                <th> Commands </th>
                <th> Syntax </th>
                <th> Notes </th>
            </tr>
            <tr> 
                <td> Integer </td>
                <td> INT </td>
                <td> Sets number as an integer </td>
            </tr>
            <tr> 
                <td> Decimal </td>
                <td> DECIMAL </td>
                <td> EX: DECIMAL(5,2) permits -999.99 to 999.99</td>
            </tr>
            <tr> 
                <td> Double </td>
                <td> DOUBLE </td>
                <td> Long double-percision floating point number </td>
            </tr>
            <tr> 
                <td> Date </td>
                <td> DATE </td>
                <td> YYYY-MM-DD format </td>
            </tr>
            <tr> 
                <td> Time </td>
                <td> TIME </td>
                <td> HH:MM:SS format </td>
            </tr>
            <tr> 
                <td> Date and Time </td>
                <td> DATETIME </td>
                <td> YYYY-MM-DD HH:MM:SS format</td>
            </tr>
            <tr> 
                <td> Year </td>
                <td> YEAR </td>
                <td> Between 1901-2155 in either YY or YYYY format </td>
            </tr>
            <tr> 
                <td> Automatic Date and Time </td>
                <td> TIMESTAMP </td>
                <td> Last recorded entry of date and time </td>
            </tr>
            <tr> 
                <td> Fixed Length of Characters </td>
                <td> CHAR() </td>
                <td> EX: CHAR(100) set the length to 100 characters </td>
            </tr>
            <tr> 
                <td> Variable Length of Characters </td>
                <td> VARCHAR() </td>
                <td> This is without padding </td>
            </tr>
            <tr> 
                <td> Text </td>
                <td> TEXT </td>
                <td> A string up to 65,535 characters long </td>
            </tr>
            <tr> 
                <td> Binary Data </td>
                <td> BLOB </td>
                <td> A binary type for variable data </td>
            </tr>
            <tr> 
                <td> A Single String Defined List </td>
                <td> ENUM </td>
                <td> EX: ENUM("red", "green", "blue") &lt;-- only these colors can be entered </td>
            </tr>
            <tr> 
                <td> A Multiple String Defined List </td>
                <td> SET </td>
                <td> EX: ENUM("red", "green", "blue") &lt;-- can allow multiple entries of colors that are defined </td>
            </tr>
            <tr> 
                <td> Insist Data be Displayed </td>
                <td> NOT NULL </td>
                <td> Insists that each record must include a data value in this column </td>
            <tr> 
                <td> Unique Entry </td>
                <td> UNIQUE </td>
                <td> Makes it so records don't duplicate any entry in a column </td>
            </tr>
            <tr> 
                <td> Auto Increment Numericly </td>
                <td> AUTO_INCREMENT </td>
                <td> Available only for numeric columns; automatically generates the next entry </td>
            </tr>
            <tr> 
                <td> Default Value </td>
                <td> DEFAULT </td>
                <td> Specifies a value to be used when no other value is stated </td>
            </tr>
            <tr> 
                <td> Primary Key </td>
                <td> PRIMARY KEY </td>
                <td> Specifies the columns or columns are the primary key </td>
            </tr>
        </table>

        <h2 style="text-align: center;"> TABLE DATA COMMANDS </h2>
        <table border="1"> 
            <tr>
                <th> Commands </th>
                <th> Syntax </th>
                <th> Notes </th>
            </tr>
            <tr> 
                <td> Create a Table </td>
                <td> CREATE TABLE IF NOT EXISTS table-name (col type, col type) ; </td>
                <td> Creates a new table </td>
            </tr>
            <tr> 
                <td> Format of Table </td>
                <td> EXPLAIN table-name ; </td>
                <td> Discover format of table </td>
            </tr>
            <tr> 
                <td> Delete Table </td>
                <td> DROP TABLE IF EXISTS table-name ; </td>
                <td> Delete table from database </td>
            </tr>
            <tr> 
                <td> Running Code From a File </td>
                <td> SOURCE File Path </td>
                <td> runs a file from system </td>
            </tr>
            <tr> 
                <td> Inserting Data </td>
                <td> INSERT INTO table-name <br> VALUES (value, value) ; </td>
                <td> Inserts one row into the database table </td>
            </tr>
            <tr> 
                <td> Retrieving All Data in Table </td>
                <td> SELECT * FROM table-name ; </td>
                <td> Displaying all data </td>
            </tr>
            <tr> 
                <td> Altering Tables (Add Column) </td>
                <td> ALTER TABLE table-name ; <br> ADD COLUMN column-name data-type optional-modifier/s ; </td>
                <td> Adds a column <br> (Ex: ADD COLUMN passing ENUM("Y","N");) </td>
            </tr>
            <tr> 
                <td> Altering Tables (Change Column) </td>
                <td> ALTER TABLE table-name ; <br> CHANGE old-column-name new-column-name data-type optional-modifier/s ; </td>
                <td> Changes name of existing column </td>
            </tr>
            <tr> 
                <td> Altering Tables (Drop Column) </td>
                <td> ALTER TABLE table-name ; <br> DROP COLUMN column-name</td>
                <td> Permanently deletes an entire column </td>
            </tr>
        </table>

    </main>

    <!-- Footer for the website to house listed items-->
    <footer>

        <br>
        <br>                        <!--GR: just for spacing purposes, can be deleted if you need to. -->
        <br>
        <br>

        <nav>
            <?php
                
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
        </nav>
    </footer>
</body>

</html>