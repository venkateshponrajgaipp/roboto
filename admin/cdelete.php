<?php include ('doc/db.php');
session_start();
if($_SESSION['login'] == ""){
    header("Location: login.php");
	die();

    echo $_SESSION['login'];
}
?>
<?php
if($_GET['id']){
     $delid = $_GET['id'];

    // sql to delete a record
$sql = "DELETE FROM contact_us WHERE id = $delid";

if ($conn->query($sql) === TRUE) {
    header("Location: contact.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
}


?>