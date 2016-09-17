<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
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
     <?php 
            $sql1="select * from `TABLE 1` where brand='Renault ' and name='KWID' ";
            $sqlco1=mysqli_query($con,$sql1);
            $row1=mysqli_fetch_assoc($sqlco1);

            $sql2="select * from `TABLE 1` where brand='Tata ' and name='Zest'  ";
            $sqlco2=mysqli_query($con,$sql2);
            $row2=mysqli_fetch_assoc($sqlco2);

            
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
            <h1><?php echo "Renault KWID" ?></h1>
          </div>
          <div class="col-md-1">
            <h1>
              <br>
              <br>
              <br>VS</h1>
          </div>
          <div class="col-md-4">
            <img src=<?php echo "images/". $row2['image'].".jpg"; ?> class="img-responsive">
            <h1><?php echo "Tata Zest " ?></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
          <table class="table table-bordered table-striped table-hover"> 
            <tr>
               <th class="col-md-3">ECONOMY</th>
            </tr>
           
            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Price:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['price']?>
              </td>
              <td class="col-md-1">
              </td>
              <td class="col-md-4">
               <?php echo $row2['price']?>
              </td>
            </tr>
            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>Mileage:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['mileage']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['mileage']?>   
             </td>
            </tr>
            <tr>
               <th class="col-md-3">PERFORMANCE</th>
            </tr>
            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>transmission:</label>
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
                <label>top_speed:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['top_speed']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['top_speed']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>acceleration:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['acceleration']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['acceleration']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>engine_displacement:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['engine_displacement']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['engine_displacement']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>maximum_power:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['maximum_power']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['maximum_power']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>maximum_torque:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['maximum_torque']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['maximum_torque']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>engine_description:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['engine_description']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['engine_description']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>turning_radius:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['turning_radius']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['turning_radius']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>no_of_cylinders:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['no_of_cylinders']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['no_of_cylinders']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>drive_type:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['drive_type']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['drive_type']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>turbo_charger:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['turbo_charger']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['turbo_charger']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>super_charger:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['super_charger']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['super_charger']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>valves_per_cylinder:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['valves_per_cylinder']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['valves_per_cylinder']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>compression_ratio:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['compression_ratio']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['compression_ratio']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>fuel_supply_system:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['fuel_supply_system']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['fuel_supply_system']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>gear_box:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['gear_box']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['gear_box']?>   
             </td>
            </tr>

               <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>steering_gear_type:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['steering_gear_type']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['steering_gear_type']?>   
             </td>
            </tr>

              <tr>
               <th class="col-md-3">CAPACITY</th>
            </tr>
            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>seating_capacity:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['seating_capacity']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['seating_capacity']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>no_of_doors:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['no_of_doors']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['no_of_doors']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>length:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['length']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['length']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>width:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['width']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['width']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>height:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['height']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['height']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>ground_clearance:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['ground_clearance']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['ground_clearance']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>wheel_base:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['wheel_base']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['wheel_base']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>front_tread:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['front_tread']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['front_tread']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>rear_tread:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['rear_tread']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['rear_tread']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>kerb_weight:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['kerb_weight']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['kerb_weight']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>gross_weight:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['gross_weight']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['gross_weight']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>front_headroom:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['front_headroom']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['front_headroom']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>front_legroom:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['front_legroom']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['front_legroom']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>rear_headroom:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['rear_headroom']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['rear_headroom']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>rear_legroom:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['rear_legroom']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['rear_legroom']?>   
             </td>
            </tr>

            <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>fuel_type:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['fuel_type']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['fuel_type']?>   
             </td>
            </tr>

               <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>fuel_tank_capacity:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['fuel_tank_capacity']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['fuel_tank_capacity']?>   
             </td>
            </tr>

               <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>cargo_volume:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['cargo_volume']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['cargo_volume']?>   
             </td>
            </tr>

               <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>tyre_size:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['tyre_size']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['tyre_size']?>   
             </td>
            </tr>

               <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>tyre_type:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['tyre_type']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['tyre_type']?>   
             </td>
            </tr>

               <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>wheel_size:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['wheel_size']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['wheel_size']?>   
             </td>
            </tr>

              <tr>
              <td class="field-label col-xs-3  col-md-3">
                <label>alloy_wheel_size:</label>
              </td>
              <td class="col-md-4">
                <?php echo $row1['alloy_wheel_size']?>
              </td>
              <td class="col-md-1">
                
              </td>
              <td class="col-md-4">
              <?php echo $row2['alloy_wheel_size']?>   
             </td>
            </tr>
          </table>

      </div>
    </div>
    <footer class="section section-primary">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h1>Dream Wheels</h1>
            <p>Dreamt Not Bought</p>
          </div>
          <div class="col-sm-6">
            <p class="text-info text-right">
              <br>
              <br>
            </p>
            <div class="row">
              <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 hidden-xs text-right">
                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  

</body></html>