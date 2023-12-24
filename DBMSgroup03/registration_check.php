
<?php 
    $showAlert = false;  
    $showError = false;  
    $exists=false; 
    include "dbcon.php";
    
    if($_SERVER["REQUEST_METHOD"] == "POST") { 
          
           
        
        $username = $_POST["userName"];  
        $password = $_POST["userPassword"];
        $useremail = $_POST["userEmail"];
        $usertype = $_POST["role"];        
                
        $errors = array();
    
           $sql = "SELECT * FROM user WHERE userEmail = '$useremail'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Account already exists!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            
            $sql = "INSERT INTO `user` (`userName`, `userPassword`, `userType`, `userID`, `userEmail`) 
            VALUES ('$username', '$password', '$usertype', NULL, '$useremail')";
            $result = $conn->query($sql);
            
            if ($result) {
               
                if($usertype=='Owner'){
                    echo "Owner Registered";
                }else if($usertype=='Farmer'){
                    echo "Farmer Registered";
                }
                else if($usertype=='Researcher'){
                    echo "Researcher Registered";
                }

            }else{
                die("Something went wrong");
            }
           }
          

    }
        
?> 