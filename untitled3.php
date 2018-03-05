<?php
$link = mysqli_connect("localhost", "root", "root", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// attempt insert query execution
$sql = "INSERT INTO ints (one, two) VALUES ('1', '2')";
if(mysqli_query($link, $sql)){
    echo "even";
} else{
    echo "odd. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>
