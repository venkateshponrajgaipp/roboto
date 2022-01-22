<?php 

include ('db.php');

if (isset($_POST['contactdata'])) {
    
    $name = trim($_POST['name']);
    $Email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $country = trim($_POST['country']);
    $msg = trim($_POST['msg']);   


   $sql = "INSERT INTO contact_us (name, contact_no, email, country, message) 
   VALUES ('$name', '$phone', '$Email','$country','$msg')";

if ($conn->query($sql) === TRUE) {
 
    $to = "mathan.gaipp@gmail.com";
    $subject = "Roboto360 contactus";
    $txt = $msg;
    $headers ="From: $Email";
    
    $send = mail($to,$subject,$txt,$headers);
    if($send)
    {?>

<script> if(confirm("We Will Contact Soon")) document.location = 'index.html'; </script>

<?php
    }else
    {
        echo "mail not send try again!!!";
    }
    
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();


}   

?>