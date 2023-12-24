<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm Manage</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1 class = "webTitle"> Digital Farm Obvserving Hub </h1>
        <nav class ="navigation">
            <a href="ownerhome">Home</a>
            <a href="#">Weather Update</a>
            <a href="farmManage.php">Farm</a>
            <a href="#">Contact</a>
	    
            
        </nav>
        <nav class ="regLog">
            <a href="index.php"><button class ="btnLogin-popup">Logout</button></a> 
	    
            
            
        </nav>
        
    </header> 

    
    
    <div class="wrapper">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="userID" aria-label="user ID" 
            aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
        </div>
    
        
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">farm ID</th>
                    <th scope="col">farm Name</th>
                    <th scope="col">Plot(count)</th>
                    <th scope="col">City</th>
                    <th scope="col">State</th>
                    <th scope="col">Country</th>
                </tr>
            </thead>
            <tbody>
                <?php 
    
                    include "dbcon.php";
                    
                    
                    $sql = "SELECT * FROM farm_t WHERE farmOwnerID";
                    $result = mysqli_query($conn, $sql);
                    
                    if(!$result){
                        die("Invalid query: ". $connection->error);
                    } 

                    
                        
                    while($row= $result->fetch_assoc()){
                        echo 
                        "<tr>
                            <td>$row[farmID]</td>
                            <td>$row[farmName]</td>
                            <td>$row[farmingPlotCount]</td>
                            <td>$row[farmCity]</td>
                            <td>$row[farmState]</td>
                            <td>$row[farmCountry]</td>
                      </tr>";
                    }
                ?>
            </tbody>
            </table>
        
        
    </div>
    <div class="update">
        <a href="farmUpdate.php"><button type="submit" class="btn btn-outline-light" >Update Farm</button></a>

    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>