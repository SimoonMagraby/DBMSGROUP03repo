<?php 
session_start();
include "dbcon.php";




if($_SERVER["REQUEST_METHOD"]=="POST"){
    $useremail=$_POST['userEmail'];
    $pass = $_POST['userPassword'];

    $sql="SELECT * FROM user WHERE userEmail='$useremail' AND userPassword= '$pass'";

    $result= mysqli_query($conn,$sql);

    $row=mysqli_fetch_array($result);

    if (empty($useremail)) {
		header("Location: ../loginPage.php?error=email is Required");
	}else if (empty($pass)) {
		header("Location: ../loginPage.php?error=Password is Required");
    }else{    
        if($row['userEmail']==$useremail && $row['userPassword']==$pass){
            if($row['userType']=="Owner"){
                header("location:ownerhome.php");
            }

            if($row['userType']=="Farmer"){
                header("location:farmerhome.php");
            }
            
            if($row['userType']=="Researcher"){
                header("location:researcherhome.php");
            }
        }

    }

}















?>