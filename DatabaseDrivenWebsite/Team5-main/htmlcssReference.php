<!DOCTYPE html>
<!--	L03-Rogers.html		Lab2 Even More HTML		09/15/2021 CR Original Program
	-->
<html lang="en">

	<head>
		<title> My HTML Reference</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="./CSS/MySQL_Reference.css">
    	<script src="https://kit.fontawesome.com/afd6aa68df.js" crossorigin="anonymous"></script>
    	<link rel="icon" href="./IMG/Snow-Ply_logo.png">
		<style>
			table {background-color: darkseagreen; color:black;
					border-collapse: collapse; border: 1px;
					font-family: arial; font-weight: normal;
					margin-right: auto; margin-left: auto;}
			th	{	background-color: grey;
					font-size: 17px; font-weight: bold;}
			td	{	font-size: 15px; padding-left: 5px; padding-right: 5px;}

			h1	{color:red;}
			
			tr:nth-child(even) {background-color: silver;}
		</style>
	</head>

	<body>
		<?php
			include "ErrorHandler.php";
            include "header.php";
        ?>

		<br><br><br><br><br><br>

		<header>
			<h1 style="color:blue;"> My HTML Reference Page </h1>
		</header>
		
		<nav> 
			<ul>
			<a href="https://www.w3schools.com/html/html5_semantic_elements.asp">Structural elements</a>
			<br> 
			<a href="https://www.w3schools.com/html/html_lists.asp">Lists</a> 
			<br>
			<a href="https://www.w3schools.com/html/html_tables.asp">Tables</a> 
			<br>
			<a href="https://validator.w3.org/">HTML Validators</a> 
			<br>
			<a href="https://www.w3schools.com/colors/colors_picker.asp">
				<img src="https://www.usability.gov/sites/default/files/images/color-wheel.png" width="50" height="50"> <a>
			</ul>
		</nav>
		
		<HR>
		
		<main>
			<h2 style="text-align:center;">  HTML Commands </h2>
			
			<table border=1>
				<tr>
					<th> Item </th>
					<th> Description </th>
				</tr>
				<tr>
					<td> Head Tags </td>
					<td> &lt;Head> <br> &lt;Title> <br> &lt;meta charset="utf-8></td>
				</tr>
				<tr>
					<td>Structural Elements</td>
					<td> &lt;header> &lt;nav> &lt;main> &lt;footer></td>
				</tr>
				<tr>
					<td>Hypertext</td>
					<td>Anchor tag : &lt;a href=" "> displayed text &lt;/a></td>
				</tr>
				<tr>
					<td>Horizontal Rule</td>
					<td>&lt;hr></td>
				</tr>
				<tr>
					<td>Breaks</td>
					<td>&lt;p> New Paragraph<br> &lt;br> Line Break </td>
				</tr>
				<tr>
					<td>Formatting</td>
					<td>&lt;b> Bold and &lt;strong> <br>&lt;i> italic and &lt;emphasis><br>&lt;small></td>
				</tr>
				<tr>
					<td>headers</td>
					<td>&lt;h1> - &lt;h5></td>
				</tr>
				<tr>
					<td>Images</td>
					<td>&lt;img src= source of image></td>
			</table>
			
			<h2 style="text-align:center;">  CSS Styles </h2>
			
			<table border=1>
				<tr>
					<th> Item </th>
					<th> Description </th>
				</tr>
				<tr>
					<td> back-ground-color; </td>
					<td> Background color</td>
				</tr>
				<tr>
					<td>color</td>
					<td>Text color</td>
				</tr>
				<tr>
					<td>border-collapse: collapse;</td>
					<td>Single line border</td>
				</tr>
				<tr>
					<td>border: ?px;</td>
					<td>Border weight in pixels</td>
				</tr>
				<tr>
					<td>font:family</td>
					<td>Text font</td>
				</tr>
				<tr>
					<td>font-size:?px</td>
					<td>Font size in pixels</td>
				</tr>
				<tr>
					<td>font-weight:</td>
					<td>Normal or bold font</td>
				</tr>
				<tr>
					<td>margin-right: auto; margin-left: auto;</td>
					<td>Centers table</td>
				</tr>
				<tr>
					<td>padding-left: ?px; padding-right: ?px</td>
					<td>Spaces in table cells</td>
				</tr>
				<tr>
					<td>Text-align:center</td>
					<td>Centers the text</td>
				</tr>
				<tr>
					<td>r:nth-child(even or odd){property}</td>
					<td>Every even/odd row is assigned the property</td>
				</tr>
			</table>
			
			<br>
			
			<h2 style="text-align:center;"> Website Design Best Practices </h2>
			<table border=1>
				<tr>
					<td> Avoid using too many rows </td>
				</tr>
				<tr>
					<td> Avoid using too many different colors </td>
				</tr>
				<tr>
					<td> Have lots of white space </td>
				</tr>
				<tr>
					<td> Minimize text </td>
				</tr>
				<tr>
					<td> Show, don't tell </td>
				</tr>
			</table>
		</main>

		<br><br><br><br><br>
		
		<footer>
			
			<?php
                
                include "footer.php";
				function by_author (){
					echo "<div class='footer'>";
				
						define ("FILE_AUTHOR", "<small> 2021 Roma, Rogers, & Shapiro </small>");
						echo "(C)" . FILE_AUTHOR;
						echo "<br> Team 5 Emails <br>";
						echo "<a href='mailto:christopher.rogers1@marist.edu'> Rogers <a>
						<a href='mailto:gina.roma1@marist.edu'> Roma <a>
						<a href='mailto:jacob.shapiro1@marist.edu'> Shapiro <a>";
				}
				
					echo "</div>";
            ?>
		</footer>
		
	</body>

</html>