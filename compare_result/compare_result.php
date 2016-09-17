<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
    <title>DreamWheels</title>
  </head><body>
  <?php include('connect.php'); ?>
   <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../index.html"><img height="60" alt="Brand" src="..\logo\logo2.png"></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="../search/search.php">Search</a>
                        </li>
                        <li>
                            <a href="../compare/compare.php">Compare</a>
                        </li>
                        <li>
                            <a href="../CusomBuild/index.html">Custom Build</a>
                        </li>
                        <li>
                            <a href="../360home/360.php">360</a>
                        </li>
                        <li>
                            <a href="../team/team.html">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
     <?php 
            $brand1=$_GET['carbrand1'];
            $name1=$_GET["carname1"];
            $variant1=$_GET["carvariant1"];
            $brand2=$_GET['carbrand2'];
            $name2=$_GET["carname2"];
            $variant2=$_GET["carvariant2"];
            $sql1="select * from `TABLE 1` where brand='$brand1' and name='$name1' and variant='$variant1' ";
            $sqlco1=mysqli_query($con,$sql1);
            $row1=mysqli_fetch_assoc($sqlco1);

            $sql2="select * from `TABLE 1` where brand='$brand2' and name='$name2' and variant='$variant2' ";
            $sqlco2=mysqli_query($con,$sql2);
            $row2=mysqli_fetch_assoc($sqlco2);

            if($_GET["carvariant3"])
              {
                session_start();
                $_SESSION['brand1'] = $brand1;  
                $_SESSION['name1'] = $name1;
                $_SESSION['variant1'] = $variant1;

                $_SESSION['brand2'] = $brand2;
                $_SESSION['name2'] = $name2;
                $_SESSION['variant2'] = $variant2;

                 $_SESSION['brand3'] = $_GET['carbrand3'];
                $_SESSION['name3'] = $_GET['carname3'];
                $_SESSION['variant3'] = $_GET['carvariant3'];

                header("location:../compare 3/compare3.php");
                
              }
            ?>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <br>
          <br>
            <h1>Comparison
              <small>&nbsp;</small>
            </h1>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-4">
            <img src=<?php echo "images/". $row1['image'].".jpg"; ?> class="img-responsive">
            <h1><?php echo "$brand1 $name1 $variant1" ?></h1>
          </div>
          <div class="col-md-1">
            <h1>
              <br>
              <br>
              <br>VS</h1>
          </div>
          <div class="col-md-4">
            <img src=<?php echo "images/". $row2['image'].".jpg"; ?> class="img-responsive">
            <h1><?php echo "$brand2 $name2 $variant2" ?></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
          <table class="table table-bordered table-striped table-hover borderless"> 
            <tr>
               <th class="col-md-3" style="border: none;"><h2>ECONOMY</h2></th>
            </tr>
           
            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Price:</label>
              </td>
              <td class="col-md-4">
                ₹&nbsp;<?php echo $row1['price']?>&nbsp; Lakh
              </td>
              <td class="col-md-1">
              </td>
              <td class="col-md-4">
               ₹&nbsp;<?php echo $row2['price']?>&nbsp; Lakh
              </td>
            </tr>
            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Mileage:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['mileage']?>&nbsp;kmpl
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['mileage']?>&nbsp;kmpl  
             </td>
            </tr>
            <tr>
               <th class="col-md-3" style="border: none;"><h2>PERFORMANCE</h2></th>
            </tr>
            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Transmission:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['transmission']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['transmission']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Top Speed:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['top_speed']?>&nbsp;Kmph
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['top_speed']?> &nbsp;Kmph 
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Acceleration:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['acceleration']?>&nbsp;Seconds
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['acceleration']?> &nbsp;Seconds  
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Engine Displacement:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['engine_displacement']?>&nbsp;cc
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['engine_displacement']?> &nbsp;cc  
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Maximum Power:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['maximum_power']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['maximum_power']?>  &nbsp;  
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Maximum Torque:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['maximum_torque']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['maximum_torque']?>&nbsp;    
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Engine Description:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['engine_description']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['engine_description']?> &nbsp;   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Turning Radius:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['turning_radius']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['turning_radius']?> &nbsp;   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>No of Cylinders:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['no_of_cylinders']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['no_of_cylinders']?> &nbsp;   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Drive Type:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['drive_type']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['drive_type']?>&nbsp;    
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Turbo Charger:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['turbo_charger']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['turbo_charger']?> &nbsp;   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Super Charger:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['super_charger']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['super_charger']?>&nbsp;    
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Valves per Cylinder:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['valves_per_cylinder']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['valves_per_cylinder']?>&nbsp;    
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Compression Ratio:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['compression_ratio']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['compression_ratio']?> &nbsp;   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Fuel Supply System:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['fuel_supply_system']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['fuel_supply_system']?> &nbsp;   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Gear Box:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['gear_box']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['gear_box']?> &nbsp;   
             </td>
            </tr>

               <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Steering Gear Type:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['steering_gear_type']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['steering_gear_type']?> &nbsp;   
             </td>
            </tr>

              <tr>
               <th class="col-md-3 " style="border: none;"><h2>CAPACITY</h2></th>

            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Seating Capacity:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['seating_capacity']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['seating_capacity']?> &nbsp;   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>No of Doors:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['no_of_doors']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['no_of_doors']?>&nbsp;    
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Length:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['length']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['length']?> &nbsp;   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Width:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['width']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['width']?> &nbsp;   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Height:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['height']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['height']?>  &nbsp;  
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Ground Clearance:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['ground_clearance']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['ground_clearance']?> &nbsp;   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Wheel Base:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['wheel_base']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['wheel_base']?> &nbsp;   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Front Tread:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['front_tread']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['front_tread']?> &nbsp;   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Rear Tread:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['rear_tread']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['rear_tread']?>  &nbsp;  
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Kerb Weight:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['kerb_weight']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['kerb_weight']?>&nbsp;    
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Gross Weight:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['gross_weight']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['gross_weight']?>&nbsp;    
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Front Headroom:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['front_headroom']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['front_headroom']?>&nbsp;    
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Front Legroom:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['front_legroom']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['front_legroom']?> &nbsp;   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Rear Headroom:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['rear_headroom']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['rear_headroom']?> &nbsp;   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Rear Legroom:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['rear_legroom']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['rear_legroom']?> &nbsp;   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Fuel Type:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['fuel_type']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['fuel_type']?>&nbsp;    
             </td>
            </tr>

               <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Fuel Tank Capacity:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['fuel_tank_capacity']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['fuel_tank_capacity']?>&nbsp;    
             </td>
            </tr>

               <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Cargo Volume:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['cargo_volume']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['cargo_volume']?>  &nbsp;  
             </td>
            </tr>

               <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Tyre Size:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['tyre_size']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['tyre_size']?> &nbsp;   
             </td>
            </tr>

               <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Tyre Type:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['tyre_type']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['tyre_type']?>   &nbsp; 
             </td>
            </tr>

               <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Wheel Size:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['wheel_size']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['wheel_size']?>&nbsp;    
             </td>
            </tr>

              <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Alloy Wheel Size:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['alloy_wheel_size']?>&nbsp; 
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['alloy_wheel_size']?>  &nbsp;  
             </td>
            </tr>
          </table>

      </div>
    </div>
    <footer class="section section-primary">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h1>DreamWheels</h1>
            <p>Dreamt Not Bought</p>
          </div>
          <div class="col-sm-6">
            <p class="text-info text-right">
              <br>
              <br>
            </p>
            <div class="row">
              <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                
                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 hidden-xs text-right">
                
                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  

</body></html>