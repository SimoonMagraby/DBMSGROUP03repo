<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="wrapper">
        <a href="index.php">
            <span class="icon-close"><ion-icon name="close"></ion-icon></span>
        </a>
        <form class= "form-box" action="login_check.php" method="post">
            <h2>Login</h2>
            <?php if (isset($_GET['error'])) { ?>
      	      <div class="alert alert-danger" role="alert">
				  <?=$_GET['error']?>
			  </div>
			<?php } ?>
            <div class="mb-3">
                <label for="userEmail" class="form-label">Email address</label>
                <input type="text" name="userEmail" class="form-control" id="userEmail" >
                
            </div>
            <div class="mb-3">
                <label for="userPassword" class="form-label">Password</label>
                <input type="text" name="userPassword" class="form-control" id="userPassword" >
                
            </div>
            <div class="mb-1">
		        <label class="form-label">Select User Type:</label>
		    </div>
		    <select class="form-select form-select mb-3"
		          name="role" 
		          aria-label="Default select example">
			    <option selected value="Owner">Owner</option>
			    <option value="Farmer">Farmer</option>
                <option value="Researcher">Researcher</option>
		    </select>
            
            
            <button type="submit" class="btn btn-outline-light">Login</button>
            <div class="Login-register">
                <p><a href="registrationPage.php" class="login-link"> Create new user</a></p>
            </div>
        </form>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>