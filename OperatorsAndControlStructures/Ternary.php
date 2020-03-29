<?php
//Ternary Operator
$authors = ["Charles Dickens", "Jane Austin", "William Shakespeare", "Mark Twain", "Louisa May Alcott"];
$count = count($authors);

// if($count > 0){
//     echo "There is a total of ".$count." author(s).";
// }else{
//     echo "There are no authors.";
// }


$outcome = ($count > 0) ? "Author Total: ".$count : "There are no authors."; 
echo $outcome;