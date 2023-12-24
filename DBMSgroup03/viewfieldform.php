<?php 

include "dbcon.php";


$sql = "SELECT fieldid, fieldname cropname, croptype, plantingdate, harvestingdate, fertilizerusage, pesticideusage, irrigationfrequency, soiltype, organicmattercontent, phlevel, nutrientlevel, soilmoisture, soiltemperature FROM field_data_form";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>Field Data Form</h2>

<table class="table">

    <thead>

    <tr>
        <th>Field ID</th>

        <th>Field Name</th>

        <th>Crop Name</th>

        <th>Crop Type</th>

        <th>Planting Date</th>

        <th>Harvesting Date</th>

        <th>Fertilizer Usage</th>

        <th>Pesticide Usage</th>

        <th>Irrigation Frequeuncy</th>

        <th>Soil Type</th>

        <th>Organic Matter</th>

        <th>pH Level</th>

        <th>Nutrient Level</th>

        <th>Soil Moisture</th>

        <th>Soil Temperature</th>

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>

                    <tr>

                    <td><?php echo $row['fieldid']; ?></td>

                    <td><?php echo $row['fieldname']; ?></td>

                    <td><?php echo $row['cropname']; ?></td>

                    <td><?php echo $row['croptype']; ?></td>

                    <td><?php echo $row['plantingdate']; ?></td>

                    <td><?php echo $row['harvestingdate']; ?></td>

                    <td><?php echo $row['fertilizerusage']; ?></td>

                    <td><?php echo $row['pesticideusage']; ?></td>

                    <td><?php echo $row['irrigationfrequency']; ?></td>

                    <td><?php echo $row['soiltype']; ?></td>

                    <td><?php echo $row['organicmattercontent']; ?></td>

                    <td><?php echo $row['phlevel']; ?></td>

                    <td><?php echo $row['nutrientlevel']; ?></td>

                    <td><?php echo $row['soilmoisture']; ?></td>

                    <td><?php echo $row['soiltemperature']; ?></td>

                    <td>
                        <a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;
                        <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                    </td>

                    </tr>                       

        <?php   }
            }
            $conn->close(); 
        ?>              

    </tbody>

</table>
<a style="color:black;" class="btn btn-warning" href="form.php"><b>Add Field Data</b></a>
    </div> 

</body>

</html>