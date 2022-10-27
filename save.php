<?php
    if(isset($_POST['cmdSubmit']))
    {
        include "connection.php";
        
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];

        $query="insert into messages (Name, Email, Subject, Messages) values ('$name','$email','$subject','$message')";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            echo ", Thank You! Your Message Has Received";

            sleep(5);
            
        }
        else
        {
            echo "Sorry Message Sending Failed";
        }
    }
?>
<br>
<a href="index.html"> Click Here To Move Back</a>
