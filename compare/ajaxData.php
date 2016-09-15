<?php
//Include database configuration file
include('dbConfig.php');

if(isset($_POST["country_id"]) && !empty($_POST["country_id"])){
    //Get all state data
	$a=$_POST['country_id'];
    $query = $db->query("SELECT * FROM `TABLE 1` WHERE brand = '$a' group by name");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select model</option>';
        while($row = mysqli_fetch_assoc($query)){ 
            echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
        }
    }else{
        echo '<option value="">model not available</option>';
    }
}

if(isset($_POST["state_id"]) && !empty($_POST["state_id"])){
    //Get all city data
	$b=$_POST['state_id'];
    $query = $db->query("SELECT * FROM `TABLE 1` WHERE name = '$b'");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display cities list
    if($rowCount > 0){
        echo '<option value="">Select variant</option>';
        while($row = mysqli_fetch_assoc($query)){ 
            echo '<option value="'.$row['variant'].'">'.$row['variant'].'</option>';
        }
    }else{
        echo '<option value="">varient not available</option>';
    }
}
?>