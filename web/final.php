<?php

include 'assets/include.php';

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

//echo $_POST['author'];

$postedData = $_SESSION['formPostData'];

?> 

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Fundamentals</title>
		<link href="assets/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
		<div id="Header">
			<img src="assets/Dickens_Gurney_head.jpg" border="0" alt="">
			<h2>
				Mailing List Information
			</h2>
		</div>        
        <div id="Body">
            <div>
                <label>Favorite Author:</label> 
                <span><?=$postedData['author']?>&nbsp;</span>
            </div>		
            <div>
                <label>Favorite Century:</label>
                <span><?php echo implode(', ', $postedData['century']);?>&nbsp;</span>
            </div>
            <div>
                <label>Comments:</label>
                <span><?=$postedData['comments']?>&nbsp;</span>
            </div>
            <div>
                <label>Name:</label>
                <span><?=$postedData['name']?>&nbsp;</span>
            </div>
            <div>
                <label>E-mail Address:</label>
                <span><?=$postedData['email']?>&nbsp;</span>
            </div>
            <div>
                <label>Receive Newsletter:</label>
                <span><?=$postedData['newsletter']?>&nbsp;</span>
            </div>
        </div>
	</body>
</html>