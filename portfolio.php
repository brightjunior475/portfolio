<?php
if (isset ($_POST['submit'])) {
 # code...
 $name = trim ($_POST['name']);
 $email = trim ($_POST['email']);
 $subject = trim ($_POST['subject']);
 $message = trim ($_POST['message']);

 $myMail = "brightjunior475@.com";
 $header = "from: " .$email ;
 $message2 = "you have received a message from " .$name . " . \n\n" .$message;

 mail($myMail, $subject, $message2, $header);
 header("Location : index.html?mailsentsuccessfully");
}
?>