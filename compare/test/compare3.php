<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
    rel="stylesheet" type="text/css">
    <link href="css\style.css" rel="stylesheet" type="text/css">
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
                    <a class="navbar-brand" href="../../index.html"><img height="60" alt="Brand" src="..\..\logo\logo2.png"></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="../../search/search.php">Search</a>
                        </li>
                        <li>
                            <a href="../../compare/compare.php">Compare</a>
                        </li>
                        <li>
                            <a href="../../CusomBuild/index.html">Custom Build</a>
                        </li>
                        <li>
                            <a href="../../360home/360.php">360</a>
                        </li>
                        <li>
                            <a href="../../team/team.html">About</a>
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
          <br>
            <h1>Compare </h1>
          </div>
        </div>
      </div>
    </div>
    <?php 
    		session_start();
    		include('connect.php');
           

            $sql1="select * from `TABLE 1` where brand='Hyundai' and name='Creta'  ";
            $sqlco1=mysqli_query($con,$sql1);
            $row1=mysqli_fetch_assoc($sqlco1);

            $sql2="select * from `TABLE 1` where brand='Maruti' and name='Vitara' ";
            $sqlco2=mysqli_query($con,$sql2);
            $row2=mysqli_fetch_assoc($sqlco2);

             $sql3="SELECT * FROM `TABLE 1` WHERE brand='Renault' and name='Duster'";
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
            <h3><?php echo "Hyundai Creta" ?></h3>
          </div>
          <div class="col-md-3">
            <img src=<?php echo "images/". $row2['image'].".jpg";?> class="img-responsive img-rounded">
            <h3><?php echo "Maruti Vitara Brezza" ?></h3>
          </div>
          <div class="col-md-3">
            <img src=<?php echo "images/". $row3['image'].".jpg";?>  class="img-responsive">
            <h3><?php echo "Renault Duster" ?></h3>
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
                  <th>price</th>
                  <td><?php echo $row1['price']?></td>
                  <td><?php echo $row2['price']?></td>
                  <td><?php echo $row3['price']?></td>
                </tr>
                <tr>
                  <th>mileage</th>
                  <td><?php echo $row1['mileage']?></td>
                  <td><?php echo $row2['mileage']?></td>
                  <td><?php echo $row3['mileage']?></td>
                </tr>
                <tr>
                	<th> PERFORMANCE</th>
                </tr>
                 <tr>
                  <th>transmission</th>
                  <td><?php echo $row1['transmission']?></td>
                  <td><?php echo $row2['transmission']?></td>
                  <td><?php echo $row3['transmission']?></td>
                </tr>
                 <tr>
                  <th>top_speed</th>
                  <td><?php echo $row1['top_speed']?></td>
                  <td><?php echo $row2['top_speed']?></td>
                  <td><?php echo $row3['top_speed']?></td>
                </tr>
                 <tr>
                  <th>acceleration</th>
                  <td><?php echo $row1['acceleration']?></td>
                  <td><?php echo $row2['acceleration']?></td>
                  <td><?php echo $row3['acceleration']?></td>
                </tr>
                 <tr>
                  <th>engine_displacement</th>
                  <td><?php echo $row1['engine_displacement']?></td>
                  <td><?php echo $row2['engine_displacement']?></td>
                  <td><?php echo $row3['engine_displacement']?></td>
                </tr>
                 <tr>
                  <th>maximum_power</th>
                  <td><?php echo $row1['maximum_power']?></td>
                  <td><?php echo $row2['maximum_power']?></td>
                  <td><?php echo $row3['maximum_power']?></td>
                </tr>
                 <tr>
                  <th>maximum_torque</th>
                  <td><?php echo $row1['maximum_torque']?></td>
                  <td><?php echo $row2['maximum_torque']?></td>
                  <td><?php echo $row3['maximum_torque']?></td>
                </tr>
                 <tr>
                  <th>engine_description</th>
                  <td><?php echo $row1['engine_description']?></td>
                  <td><?php echo $row2['engine_description']?></td>
                  <td><?php echo $row3['engine_description']?></td>
                </tr>
                 <tr>
                  <th>turning_radius</th>
                  <td><?php echo $row1['turning_radius']?></td>
                  <td><?php echo $row2['turning_radius']?></td>
                  <td><?php echo $row3['turning_radius']?></td>
                </tr>
                 <tr>
                  <th>no_of_cylinders</th>
                  <td><?php echo $row1['no_of_cylinders']?></td>
                  <td><?php echo $row2['no_of_cylinders']?></td>
                  <td><?php echo $row3['no_of_cylinders']?></td>
                </tr>
                 <tr>
                  <th>drive_type</th>
                  <td><?php echo $row1['drive_type']?></td>
                  <td><?php echo $row2['drive_type']?></td>
                  <td><?php echo $row3['drive_type']?></td>
                </tr>
                 <tr>
                  <th>turbo_charger</th>
                  <td><?php echo $row1['turbo_charger']?></td>
                  <td><?php echo $row2['turbo_charger']?></td>
                  <td><?php echo $row3['turbo_charger']?></td>
                </tr>
                 <tr>
                  <th>super_charger</th>
                  <td><?php echo $row1['super_charger']?></td>
                  <td><?php echo $row2['super_charger']?></td>
                  <td><?php echo $row3['super_charger']?></td>
                </tr>
                 <tr>
                  <th>valves_per_cylinder</th>
                  <td><?php echo $row1['valves_per_cylinder']?></td>
                  <td><?php echo $row2['valves_per_cylinder']?></td>
                  <td><?php echo $row3['valves_per_cylinder']?></td>
                </tr>
                 <tr>
                  <th>compression_ratio</th>
                  <td><?php echo $row1['compression_ratio']?></td>
                  <td><?php echo $row2['compression_ratio']?></td>
                  <td><?php echo $row3['compression_ratio']?></td>
                </tr>
                 <tr>
                  <th>fuel_supply_system</th>
                  <td><?php echo $row1['fuel_supply_system']?></td>
                  <td><?php echo $row2['fuel_supply_system']?></td>
                  <td><?php echo $row3['fuel_supply_system']?></td>
                </tr>
                 <tr>
                  <th>gear_box</th>
                  <td><?php echo $row1['gear_box']?></td>
                  <td><?php echo $row2['gear_box']?></td>
                  <td><?php echo $row3['gear_box']?></td>
                </tr>	
                  <tr>
                  <th>steering_gear_type</th>
                  <td><?php echo $row1['steering_gear_type']?></td>
                  <td><?php echo $row2['steering_gear_type']?></td>
                  <td><?php echo $row3['steering_gear_type']?></td>
                </tr>
                <tr>
                	<td>CAPACITY
                	</td>
                </tr>
                <tr>
                  <th>seating_capacity</th>
                  <td><?php echo $row1['seating_capacity']?></td>
                  <td><?php echo $row2['seating_capacity']?></td>
                  <td><?php echo $row3['seating_capacity']?></td>
                </tr>
                <tr>
                  <th>no_of_doors</th>
                  <td><?php echo $row1['no_of_doors']?></td>
                  <td><?php echo $row2['no_of_doors']?></td>
                  <td><?php echo $row3['no_of_doors']?></td>
                </tr>
                <tr>
                  <th>length</th>
                  <td><?php echo $row1['length']?></td>
                  <td><?php echo $row2['length']?></td>
                  <td><?php echo $row3['length']?></td>
                </tr>
                <tr>
                  <th>width</th>
                  <td><?php echo $row1['width']?></td>
                  <td><?php echo $row2['width']?></td>
                  <td><?php echo $row3['width']?></td>
                </tr>
                <tr>
                  <th>height</th>
                  <td><?php echo $row1['height']?></td>
                  <td><?php echo $row2['height']?></td>
                  <td><?php echo $row3['height']?></td>
                </tr>
                <tr>
                  <th>ground_clearance</th>
                  <td><?php echo $row1['ground_clearance']?></td>
                  <td><?php echo $row2['ground_clearance']?></td>
                  <td><?php echo $row3['ground_clearance']?></td>
                </tr>
                <tr>
                  <th>wheel_base</th>
                  <td><?php echo $row1['wheel_base']?></td>
                  <td><?php echo $row2['wheel_base']?></td>
                  <td><?php echo $row3['wheel_base']?></td>
                </tr>
                <tr>
                  <th>front_tread</th>
                  <td><?php echo $row1['front_tread']?></td>
                  <td><?php echo $row2['front_tread']?></td>
                  <td><?php echo $row3['front_tread']?></td>
                </tr>
                <tr>
                  <th>rear_tread</th>
                  <td><?php echo $row1['rear_tread']?></td>
                  <td><?php echo $row2['rear_tread']?></td>
                  <td><?php echo $row3['rear_tread']?></td>
                </tr>
                <tr>
                  <th>kerb_weight</th>
                  <td><?php echo $row1['kerb_weight']?></td>
                  <td><?php echo $row2['kerb_weight']?></td>
                  <td><?php echo $row3['kerb_weight']?></td>
                </tr>
                <tr>
                  <th>gross_weight</th>
                  <td><?php echo $row1['gross_weight']?></td>
                  <td><?php echo $row2['gross_weight']?></td>
                  <td><?php echo $row3['gross_weight']?></td>
                </tr>
                <tr>
                  <th>front_headroom</th>
                  <td><?php echo $row1['front_headroom']?></td>
                  <td><?php echo $row2['front_headroom']?></td>
                  <td><?php echo $row3['front_headroom']?></td>
                </tr>
                <tr>
                  <th>front_legroom</th>
                  <td><?php echo $row1['front_legroom']?></td>
                  <td><?php echo $row2['front_legroom']?></td>
                  <td><?php echo $row3['front_legroom']?></td>
                </tr>
                <tr>
                  <th>rear_headroom</th>
                  <td><?php echo $row1['rear_headroom']?></td>
                  <td><?php echo $row2['rear_headroom']?></td>
                  <td><?php echo $row3['rear_headroom']?></td>
                </tr>
                <tr>
                  <th>rear_legroom</th>
                  <td><?php echo $row1['rear_legroom']?></td>
                  <td><?php echo $row2['rear_legroom']?></td>
                  <td><?php echo $row3['rear_legroom']?></td>
                </tr>
                <tr>
                  <th>fuel_type</th>
                  <td><?php echo $row1['fuel_type']?></td>
                  <td><?php echo $row2['fuel_type']?></td>
                  <td><?php echo $row3['fuel_type']?></td>
                </tr>
                <tr>
                  <th>fuel_tank_capacity</th>
                  <td><?php echo $row1['fuel_tank_capacity']?></td>
                  <td><?php echo $row2['fuel_tank_capacity']?></td>
                  <td><?php echo $row3['fuel_tank_capacity']?></td>
                </tr>
                <tr>
                  <th>cargo_volume</th>
                  <td><?php echo $row1['cargo_volume']?></td>
                  <td><?php echo $row2['cargo_volume']?></td>
                  <td><?php echo $row3['cargo_volume']?></td>
                </tr>
                <tr>
                  <th>tyre_size</th>
                  <td><?php echo $row1['tyre_size']?></td>
                  <td><?php echo $row2['tyre_size']?></td>
                  <td><?php echo $row3['tyre_size']?></td>
                </tr>
                <tr>
                  <th>tyre_type</th>
                  <td><?php echo $row1['tyre_type']?></td>
                  <td><?php echo $row2['tyre_type']?></td>
                  <td><?php echo $row3['tyre_type']?></td>
                </tr>
                <tr>
                  <th>wheel_size</th>
                  <td><?php echo $row1['wheel_size']?></td>
                  <td><?php echo $row2['wheel_size']?></td>
                  <td><?php echo $row3['wheel_size']?></td>
                </tr>
                <tr>
                  <th>alloy_wheel_size</th>
                  <td><?php echo $row1['alloy_wheel_size']?></td>
                  <td><?php echo $row2['alloy_wheel_size']?></td>
                  <td><?php echo $row3['alloy_wheel_size']?></td>
                </tr>
                
              </tbody>
              <thead>
                <tr>
                  <th>ECONOMY</th>
                
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>