<?php
$safe = $_GET['safe'];
$loc = $_GET['loc'];
if (!isset($safe)) {
    header("Location: $loc");
    die;
}
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$bdd = $_GET['bdd'];
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$prix = mysqli_real_escape_string($link, $_REQUEST['prix']);

// Attempt insert query execution
$sql = "INSERT INTO $bdd (url, txt, Prix) VALUES ('$first_name', '$last_name','$prix')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
header("Location: $loc");
?>
