<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
    rel="stylesheet" type="text/css">
    <link href="css\style.css" rel="stylesheet" type="text/css">
    <title>DreamWheels</title>
  </head>
  
  <body>
    <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand"><img height="60" alt="Brand" src="..\logo\logo2.png"></a>
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
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <br>
          <br>
            <h1>Comparison</h1>
          </div>
        </div>
      </div>
    </div>
    <?php 
    		session_start();
    		include('connect.php');
            $brand1=$_SESSION['brand1'];
            $name1=$_SESSION["name1"];
            $variant1=$_SESSION["variant1"];
            $brand2=$_SESSION['brand2'];
            $name2=$_SESSION["name2"];
            $variant2=$_SESSION["variant2"];
            $brand3=$_SESSION['brand3'];
            $name3=$_SESSION["name3"];
            $variant3=$_SESSION["variant3"];

            $sql1="select * from `TABLE 1` where brand='$brand1' and name='$name1' and variant='$variant1' ";
            $sqlco1=mysqli_query($con,$sql1);
            $row1=mysqli_fetch_assoc($sqlco1);

            $sql2="select * from `TABLE 1` where brand='$brand2' and name='$name2' and variant='$variant2' ";
            $sqlco2=mysqli_query($con,$sql2);
            $row2=mysqli_fetch_assoc($sqlco2);

             $sql3="select * from `TABLE 1` where brand='$brand3' and name='$name3' and variant='$variant3' ";
            $sqlco3=mysqli_query($con,$sql3);
            $row3=mysqli_fetch_assoc($sqlco3);
    ?>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            
          </div>
          <div class="col-md-3">
            <img src=<?php echo "images/". $row1['image'].".jpg";?> class="img-responsive">
            <h3><?php echo "$brand1 $name1 $variant1" ?></h3>
          </div>
          <div class="col-md-3">
            <img src=<?php echo "images/". $row2['image'].".jpg";?> class="img-responsive img-rounded">
            <h3><?php echo "$brand2 $name2 $variant2" ?></h3>
          </div>
          <div class="col-md-3">
            <img src=<?php echo "images/". $row3['image'].".jpg";?>  class="img-responsive">
            <h3><?php echo "$brand3 $name3 $variant3" ?></h3>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <table class="table table-bordered table-hover table-striped">
              <tbody>
                <tr>
                  <th>Price</th>
                  &nbsp;<td>₹&nbsp;<?php echo $row1['price']?></td>&nbsp;
                  &nbsp;<td>₹&nbsp;<?php echo $row2['price']?></td>&nbsp;
                  &nbsp;<td>₹&nbsp;<?php echo $row3['price']?></td>&nbsp;
                </tr>
                <tr>
                  <th>Mileage</th>
                  <td><?php echo $row1['mileage']?>&nbsp;Kmpl</td>&nbsp;
                  <td><?php echo $row2['mileage']?>&nbsp;Kmpl</td>&nbsp;
                  <td><?php echo $row3['mileage']?>&nbsp;Kmpl</td>&nbsp;
                </tr>
                <tr>
                	<th style="border: none;"><h2> PERFORMANCE</h2></th>
                </tr>
                 <tr>
                  <th>Transmission</th>
                  <td><?php echo $row1['transmission']?></td>&nbsp;
                  <td><?php echo $row2['transmission']?></td>&nbsp;
                  <td><?php echo $row3['transmission']?></td>&nbsp;
                </tr>
                 <tr>
                  <th>Top Speed</th>
                  <td><?php echo $row1['top_speed']?>&nbsp;Kmph</td>&nbsp;
                  <td><?php echo $row2['top_speed']?>&nbsp;Kmph</td>&nbsp;
                  <td><?php echo $row3['top_speed']?>&nbsp;Kmph</td>&nbsp;
                </tr>
                 <tr>
                  <th>Acceleration</th>
                  <td><?php echo $row1['acceleration']?>&nbsp;Seconds</td>&nbsp;
                  <td><?php echo $row2['acceleration']?>&nbsp;Seconds</td>&nbsp;
                  <td><?php echo $row3['acceleration']?>&nbsp;Seconds</td>&nbsp;
                </tr>
                 <tr>
                  <th>Engine Displacement</th>
                  <td><?php echo $row1['engine_displacement']?>&nbsp;cc</td>&nbsp;
                  <td><?php echo $row2['engine_displacement']?>&nbsp;cc</td>&nbsp;
                  <td><?php echo $row3['engine_displacement']?>&nbsp;cc</td>&nbsp;
                </tr>
                 <tr>
                  <th>Maximum Power</th>
                  <td><?php echo $row1['maximum_power']?></td>&nbsp;
                  <td><?php echo $row2['maximum_power']?></td>&nbsp;
                  <td><?php echo $row3['maximum_power']?></td>&nbsp;
                </tr>
                 <tr>
                  <th>Maximum Torque</th>
                  <td><?php echo $row1['maximum_torque']?></td>&nbsp;
                  <td><?php echo $row2['maximum_torque']?></td>&nbsp;
                  <td><?php echo $row3['maximum_torque']?></td>&nbsp;
                </tr>
                 <tr>
                  <th>Engine Description</th>
                  <td><?php echo $row1['engine_description']?></td>&nbsp;
                  <td><?php echo $row2['engine_description']?></td>&nbsp;
                  <td><?php echo $row3['engine_description']?></td>&nbsp;
                </tr>
                 <tr>
                  <th>Turning Radius</th>
                  <td><?php echo $row1['turning_radius']?></td>&nbsp;
                  <td><?php echo $row2['turning_radius']?></td>&nbsp;
                  <td><?php echo $row3['turning_radius']?></td>&nbsp;
                </tr>
                 <tr>
                  <th>No of Cylinders</th>
                  <td><?php echo $row1['no_of_cylinders']?></td>&nbsp;
                  <td><?php echo $row2['no_of_cylinders']?></td>&nbsp;
                  <td><?php echo $row3['no_of_cylinders']?></td>&nbsp;
                </tr>
                 <tr>
                  <th>Drive Type</th>
                  <td><?php echo $row1['drive_type']?></td>&nbsp;
                  <td><?php echo $row2['drive_type']?></td>&nbsp;
                  <td><?php echo $row3['drive_type']?></td>&nbsp;
                </tr>
                 <tr>
                  <th>Turbo Charger</th>
                  <td><?php echo $row1['turbo_charger']?></td>&nbsp;
                  <td><?php echo $row2['turbo_charger']?></td>&nbsp;
                  <td><?php echo $row3['turbo_charger']?></td>&nbsp;
                </tr>
                 <tr>
                  <th>Super Charger</th>
                  <td><?php echo $row1['super_charger']?></td>&nbsp;
                  <td><?php echo $row2['super_charger']?></td>&nbsp;
                  <td><?php echo $row3['super_charger']?></td>&nbsp;
                </tr>
                 <tr>
                  <th>Valves per Cylinder</th>
                  <td><?php echo $row1['valves_per_cylinder']?></td>&nbsp;
                  <td><?php echo $row2['valves_per_cylinder']?></td>&nbsp;
                  <td><?php echo $row3['valves_per_cylinder']?></td>&nbsp;
                </tr>
                 <tr>
                  <th>Compression Ratio</th>
                  <td><?php echo $row1['compression_ratio']?></td>&nbsp;
                  <td><?php echo $row2['compression_ratio']?></td>&nbsp;
                  <td><?php echo $row3['compression_ratio']?></td>&nbsp;
                </tr>
                 <tr>
                  <th>Fuel Supply System</th>
                  <td><?php echo $row1['fuel_supply_system']?></td>&nbsp;
                  <td><?php echo $row2['fuel_supply_system']?></td>&nbsp;
                  <td><?php echo $row3['fuel_supply_system']?></td>&nbsp;
                </tr>
                 <tr>
                  <th>Gear Box</th>
                  <td><?php echo $row1['gear_box']?></td>&nbsp;
                  <td><?php echo $row2['gear_box']?></td>&nbsp;
                  <td><?php echo $row3['gear_box']?></td>&nbsp;
                </tr>	
                  <tr>
                  <th>Steering Gear Type</th>
                  <td><?php echo $row1['steering_gear_type']?></td>&nbsp;
                  <td><?php echo $row2['steering_gear_type']?></td>&nbsp;
                  <td><?php echo $row3['steering_gear_type']?></td>&nbsp;
                </tr>
                <tr>
                	<td style="border: none;"><h2>CAPACITY</h2>
                	</td>
                </tr>
                <tr>
                  <th>Seating Capacity</th>
                  <td><?php echo $row1['seating_capacity']?></td>&nbsp;
                  <td><?php echo $row2['seating_capacity']?></td>&nbsp;
                  <td><?php echo $row3['seating_capacity']?></td>&nbsp;
                </tr>
                <tr>
                  <th>No of Doors</th>
                  <td><?php echo $row1['no_of_doors']?></td>&nbsp;
                  <td><?php echo $row2['no_of_doors']?></td>&nbsp;
                  <td><?php echo $row3['no_of_doors']?></td>&nbsp;
                </tr>
                <tr>
                  <th>Length</th>
                  <td><?php echo $row1['length']?></td>&nbsp;
                  <td><?php echo $row2['length']?></td>&nbsp;
                  <td><?php echo $row3['length']?></td>&nbsp;
                </tr>
                <tr>
                  <th>Width</th>
                  <td><?php echo $row1['width']?></td>&nbsp;
                  <td><?php echo $row2['width']?></td>&nbsp;
                  <td><?php echo $row3['width']?></td>&nbsp;
                </tr>
                <tr>
                  <th>Height</th>
                  <td><?php echo $row1['height']?></td>&nbsp;
                  <td><?php echo $row2['height']?></td>&nbsp;
                  <td><?php echo $row3['height']?></td>&nbsp;
                </tr>
                <tr>
                  <th>Ground Clearance</th>
                  <td><?php echo $row1['ground_clearance']?></td>&nbsp;
                  <td><?php echo $row2['ground_clearance']?></td>&nbsp;
                  <td><?php echo $row3['ground_clearance']?></td>&nbsp;
                </tr>
                <tr>
                  <th>Wheel Base</th>
                  <td><?php echo $row1['wheel_base']?></td>&nbsp;
                  <td><?php echo $row2['wheel_base']?></td>&nbsp;
                  <td><?php echo $row3['wheel_base']?></td>&nbsp;
                </tr>
                <tr>
                  <th>Front Tread</th>
                  <td><?php echo $row1['front_tread']?></td>&nbsp;
                  <td><?php echo $row2['front_tread']?></td>&nbsp;
                  <td><?php echo $row3['front_tread']?></td>&nbsp;
                </tr>
                <tr>
                  <th>Rear Tread</th>
                  <td><?php echo $row1['rear_tread']?></td>&nbsp;
                  <td><?php echo $row2['rear_tread']?></td>&nbsp;
                  <td><?php echo $row3['rear_tread']?></td>&nbsp;
                </tr>
                <tr>
                  <th>Kerb Weight</th>
                  <td><?php echo $row1['kerb_weight']?></td>&nbsp;
                  <td><?php echo $row2['kerb_weight']?></td>&nbsp;
                  <td><?php echo $row3['kerb_weight']?></td>&nbsp;
                </tr>
                <tr>
                  <th>Gross Weight</th>
                  <td><?php echo $row1['gross_weight']?></td>&nbsp;
                  <td><?php echo $row2['gross_weight']?></td>&nbsp;
                  <td><?php echo $row3['gross_weight']?></td>&nbsp;
                </tr>
                <tr>
                  <th>Front Headroom</th>
                  <td><?php echo $row1['front_headroom']?></td>&nbsp;
                  <td><?php echo $row2['front_headroom']?></td>&nbsp;
                  <td><?php echo $row3['front_headroom']?></td>&nbsp;
                </tr>
                <tr>
                  <th>Front Legroom</th>
                  <td><?php echo $row1['front_legroom']?></td>&nbsp;
                  <td><?php echo $row2['front_legroom']?></td>&nbsp;
                  <td><?php echo $row3['front_legroom']?></td>&nbsp;
                </tr>
                <tr>
                  <th>Rear Headroom</th>
                  <td><?php echo $row1['rear_headroom']?></td>&nbsp;
                  <td><?php echo $row2['rear_headroom']?></td>&nbsp;
                  <td><?php echo $row3['rear_headroom']?></td>&nbsp;
                </tr>
                <tr>
                  <th>Rear Legroom</th>
                  <td><?php echo $row1['rear_legroom']?></td>&nbsp;
                  <td><?php echo $row2['rear_legroom']?></td>&nbsp;
                  <td><?php echo $row3['rear_legroom']?></td>&nbsp;
                </tr>
                <tr>
                  <th>Fuel Type</th>
                  <td><?php echo $row1['fuel_type']?></td>&nbsp;
                  <td><?php echo $row2['fuel_type']?></td>&nbsp;
                  <td><?php echo $row3['fuel_type']?></td>&nbsp;
                </tr>
                <tr>
                  <th>Fuel Tank Capacity</th>
                  <td><?php echo $row1['fuel_tank_capacity']?></td>&nbsp;
                  <td><?php echo $row2['fuel_tank_capacity']?></td>&nbsp;
                  <td><?php echo $row3['fuel_tank_capacity']?></td>&nbsp;
                </tr>
                <tr>
                  <th>Cargo Volume</th>
                  <td><?php echo $row1['cargo_volume']?></td>&nbsp;
                  <td><?php echo $row2['cargo_volume']?></td>&nbsp;
                  <td><?php echo $row3['cargo_volume']?></td>&nbsp;
                </tr>
                <tr>
                  <th>Tyre Size</th>
                  <td><?php echo $row1['tyre_size']?></td>&nbsp;
                  <td><?php echo $row2['tyre_size']?></td>&nbsp;
                  <td><?php echo $row3['tyre_size']?></td>&nbsp;
                </tr>
                <tr>
                  <th>Tyre Type</th>
                  <td><?php echo $row1['tyre_type']?></td>&nbsp;
                  <td><?php echo $row2['tyre_type']?></td>&nbsp;
                  <td><?php echo $row3['tyre_type']?></td>&nbsp;
                </tr>
                <tr>
                  <th>Wheel Size</th>
                  <td><?php echo $row1['wheel_size']?></td>&nbsp;
                  <td><?php echo $row2['wheel_size']?></td>&nbsp;
                  <td><?php echo $row3['wheel_size']?></td>&nbsp;
                </tr>
                <tr>
                  <th>Alloy Wheel Size</th>
                  <td><?php echo $row1['alloy_wheel_size']?></td>&nbsp;
                  <td><?php echo $row2['alloy_wheel_size']?></td>&nbsp;
                  <td><?php echo $row3['alloy_wheel_size']?></td>&nbsp;
                </tr>
                
              </tbody>
              <thead>
                <tr>
                  <th ><h2>ECONOMY</h2></th>
                
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>