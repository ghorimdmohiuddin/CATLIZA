<?php 
if(isset($_POST['submit'])){
    $to = "ghorimdmohiuddin@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "subject";
    $message = $name . " " . $subject . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<?php
include ("connection.php");

if(isset($_POST["submit"]))
{
  $naam=$_POST['name'];
   $mail=$_POST['email'];
    $sub=$_POST['subject'];
     $msg=$_POST['message'];

     if ($naam !="" && $mail !="" && $sub !="" && $msg !="") 
     {
        $query = "INSERT INTO `form`(`naam`, `pata`, `mudda`, `paighaam`) VALUES ('$naam','$mail','$sub','$msg')";
         $data = mysqli_query($link,$query);
         if($data)
         {
         echo "data inserted into database";
         header('Location:index.php');
         }
         else{
            echo "fail to insert data into database";
         }

    }

}
?>