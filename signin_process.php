<?php
    session_start();
    if(isset($_POST['cmdSubmit']))
    {
        include "connection.php";

        $name=$_POST['name'];
        $email=$_POST['email'];
		$password=$_POST['password'];

        $query="select * from Customer where Name='$name' and Password='$password' and Email='$email'";

        $result=mysqli_query($conn, $query);
		
        if(mysqli_num_rows ($result) >0)
        {
			$_SESSION['name']=$name;
            header ("Location: loginPage.php");
        }
        else
		{
			echo "Name, Email Or Password is invalid";
		}
    }
?>