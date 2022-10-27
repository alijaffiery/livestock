<?php
    if(isset($_POST['cmdSubmit']))
    {
        include "connection.php";

        $name=$_POST['name'];
        $gender="";
       
        $value=$_POST['gender'];
        if($value=="Male")
        {
            $gender="Male";
        }
        else if($value=="Female")
        {
            $gender="Female";
        }
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $password=$_POST['password'];

        $query="insert into Customer (Name, Email, Gender, Phone, Password) values ('$name','$email','$gender','$phone','$password')";

        $result=mysqli_query($conn,$query);
        if($result)
        {
            echo "Account Successfully Signed Up";
        }
        else
        {
            echo "Signup Failed";
        }
    }
?>