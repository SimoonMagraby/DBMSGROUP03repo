<?php
include "dbcon.php";


if(isset($_POST{`submit`})){

    $field_id = $_POST[`fieldid`];

    $field_name = $_POST[`fieldname`];

    $crop_name = $_POST[`cropname`];

    $crop_type = $_POST[`croptype`];

    $planting_date = $_POST[`plantingdate`];

    $harvesting_date = $_POST[`harvestingdate`];

    $fertilizer_usage = $_POST[`fertilizerusage`];

    $pesticide_usage = $_POST[`pesticideusage`];

    $irrigation_frequency = $_POST[`irrigationfrequency`];

    $soil_type = $_POST[`soiltype`];

    $organic_matter = $_POST[`organicmattercontent`];

    $ph_level = $_POST[`phlevel`];

    $nutrient_level = $_POST[`nutrientlevel`];

    $soil_moisture = $_POST[`soilmoisture`];

    $soil_temp = $_POST[`soiltemperature`];


    $sql = "INSERT INTO `field_data_form` ( `fieldid`,`fieldname`,`cropname`,`croptype`,`plantingdate`,`harvestingdate`,`fertilizerusage`,`pesticideusage`,`irrigationfrequency`,`soiltype`,`organicmattercontent`,`phlevel`,`nutrientlevel`,`soilmoisture`,`soiltemperature`) VALUES ( `$field_id`,`$field_name`,`$crop_name`,`$crop_type`,`$planting_date`,`$harvesting_date`,`$fertilizer_usage`,`$pesticide_usage`,`$irrigation_frequency`,`$soil_type`,`$organic_matter`,`$ph_level`,`$nutrient_level`,`$soil_moisture`,`$soil_temperature`)";

    $result = $conn->query($sql);

    if($result == TRUE) {

        echo "New Record Added Successfully!";
    }


}

?>


<!DOCTYPE html>

<html lang="en">
<head>
<body>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Field Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

  
<head>
<body>
    <div class="container-md">
    <!-- Content here -->
        <form action = "" method = "POST">
            <div class="mb-3">
                <label class="form-label">Field ID</label>
                <input type="FieldID" class="form-control" id="formGroupExampleInput" placeholder="" name = "fieldid">
            </div>
            <div class="mb-3">
                <label class="form-label">Field Name</label>
                <input type="FieldName" class="form-control" id="formGroupExampleInput" placeholder="" name = "fieldname">
            </div>
            <div class="mb-3">
                <label class="form-label">Crop Name</label>
                <input type="CropName" class="form-control" id="formGroupExampleInput" placeholder="" name = "cropname">
            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle crop-dropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name = "croptype">
                    Select Crop Type
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Vegetables</a>
                    <a class="dropdown-item" href="#">Fruits</a>
                    <a class="dropdown-item" href="#">Legumes</a>
                    <a class="dropdown-item" href="#">Cereals</a>
                    <a class="dropdown-item" href="#">Fodder Crops</a>
                    <a class="dropdown-item" href="#">Cash Crops</a>
                    <a class="dropdown-item" href="#">Others</a>
                </div>
            </div>
            <br>
            <div class="mb-3">
                <label class="form-label">Planting Date</label>
                <div class="input-group date" data-provide="datepicker">
                    <input type="text" class="form-control" name = "plantingdate">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                    </div>
                </div>
            </div>
            <br>
            <div class="mb-3">
                <label class="form-label">Harvesting Date</label>
                <div class="input-group date" data-provide="datepicker">
                    <input type="text" class="form-control" name = "harvestingdate">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate" name = "fertilizerusage">
                <label class="form-check-label">
                    Fertilizer Used?
                </label>
            </div>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate" name = "pesticideusage">
                <label class="form-check-label">
                    Pesticide Used?
                </label>
            </div>
            <br>
            <div class="mb-3">
                <label class="form-label">Irrigation Frequency</label>
                <input type="CropName" class="form-control" id="formGroupExampleInput" placeholder="" name = "irrigationfrequency">
            </div>
            <div class="dropdown mt-3">
                <button class="btn btn-secondary dropdown-toggle soil-dropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name = "soiltype">
                    Select Soil Type
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Sandy</a>
                    <a class="dropdown-item" href="#">Clay</a>
                    <a class="dropdown-item" href="#">Loamy</a>
                    <a class="dropdown-item" href="#">Silty</a>
                    <a class="dropdown-item" href="#">Peaty</a>
                </div>
            </div>
            <br>
            <div class="mb-3">
                <label class="form-label">Organic Matter Content</label>
                <input type="CropName" class="form-control" id="formGroupExampleInput" placeholder="" name = "organicmattercontent">
            </div>
            <br>
            <div class="mb-3">
                <label class="form-label">pH Level</label>
                <input type="CropName" class="form-control" id="formGroupExampleInput" placeholder="" name = "phlevel">
            </div>
            <br>
            <div class="mb-3">
                <label class="form-label">Nutrient levels</label>
                <input type="CropName" class="form-control" id="formGroupExampleInput" placeholder="" name = "nutrientlevel">
            </div>
            <br>
            <div class="mb-3">
                <label class="form-label">Soil Moisture</label>
                <input type="CropName" class="form-control" id="formGroupExampleInput" placeholder="" name = "soilmoisture">
            </div>
            <br>
            <div class="mb-3">
                <label class="form-label">Soil Temperature</label>
                <input type="CropName" class="form-control" id="formGroupExampleInput" placeholder="" name = "soiltemperature">
            </div>
            <br>
            <input type = "submit" class = "btn btn-primary" name = "submit" value = "submit">
            </div>
            <br>
            <br>
        <form>
    </div>

<script>
    $(document).ready(function(){
        $('.datepicker').datepicker();
    });
</script>

<script>
  $(document).ready(function(){
    // Crop Type Dropdown
    $('.crop-dropdown .dropdown-item').click(function(){
      var selectedCrop = $(this).text();
      $('.crop-dropdown').find('.btn-secondary').text(selectedCrop);
    });

    // Soil Type Dropdown
    $('.soil-dropdown .dropdown-item').click(function(){
      var selectedSoil = $(this).text();
      $('.soil-dropdown').find('.btn-secondary').text(selectedSoil);
    });
  });
</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>