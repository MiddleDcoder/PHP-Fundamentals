<?php

include 'assets/include.php';

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

//echo $_POST['author'];

if(isset($_SESSION['formPostData'])){
    $postedData = $_SESSION['formPostData'];

    //adding the code below will destroy the session after posting the form data through session
   // session_destroy(); //destroy entire session
   unset($_SESSION['formPostData']);
    //unset() other way to destroy data only works if the variable has ben isset or set
}
else{   
    header('Location: index.php');
}

$author = '';
$comments = '';
$name = '';
$email = '';
$newsletter = '';

if(isset($postedData['submit'])){
    if(!isset($postedData['author']) || $postedData['author'] === ''){
        $author = '';
    }else {
        $author = $postedData['author']; 
    };
    if(!isset($postedData['comments']) || $postedData['comments'] === ''){
        $comments = '';
    }else {
        $comments = $postedData['comments']; 
    };
    if(!isset($postedData['name']) || $postedData['name'] === ''){
        $name = '';
    }else {
        $name = $postedData['name']; 
    };
    if(!isset($postedData['email']) || $postedData['email'] === ''){
        $email = '';
    }else {
        $email = $postedData['email']; 
    };
    if(!isset($postedData['newsletter']) || $postedData['newsletter'] === ''){
        $newsletter = '';
    }else {
        $newsletter = $postedData['newsletter']; 
    };

}

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
                <span><?=$author?>&nbsp;</span>
            </div>		
            <div>
                <label>Favorite Century:</label>
                <span><?php
   
               if(isset($postedData['submit'])){                
                 if(!empty($postedData['century'])){ //the empty() function is the carrier if there is no empty string will throw the posted data empty string
                        foreach($postedData['century'] as $value){
                            echo $value. ' '; //this is the better pattern than implode if you don't want to have error when there is no value
                        }
                    } 
                }                         
                // echo implode(', ', $postedData['century']); //the problem of this implode is will throw an error if no value ?>&nbsp;</span>
            </div>
            <div>
                <label>Comments:</label>
                <span><?=$comments?>&nbsp;</span>
            </div>
            <div>
                <label>Name:</label>
                <span><?=$name?>&nbsp;</span>
            </div>
            <div>
                <label>E-mail Address:</label>
                <span><?=$email?>&nbsp;</span>
            </div>
            <div>
                <label>Receive Newsletter:</label>
                <span><?=$newsletter?>&nbsp;</span>
            </div>
        </div>
	</body>
</html>