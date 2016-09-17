<?php include "connect.php";
$a=$_GET['id'];
$sql="select * from `TABLE 1` where id='$a'";
$sqlco=mysqli_query($con,$sql);

while($row=mysqli_fetch_assoc($sqlco))
{
?>


<html><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="css\style.css" rel="stylesheet" type="text/css">
        <title>DreamWheels</title>
    </head><body>




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
        <div class="section"><div class="container"><div class="row"></div></div></div><div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h1><?php echo $row['brand'] ;?>&nbsp;<?php echo $row['name'];?>&nbsp;&nbsp;<?php echo $row['variant'];?>  </h1>
                        <h2><?php echo $row['price']; ?>&nbsp;&nbsp;Lakhs</h2>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section"></div>
                            </div>
                        </div>
                        <a class="btn btn-block btn-lg btn-primary" href="../404/404.html">Buy Now</a>
                    </div>
                    <div class="col-md-5"><?php $img=$row['image'] ;?>
                        <a href="#"><?php echo '<img src="images';echo"\\";echo $img.'.jpg" class="img-responsive">';?></a>
                    </div>
                    <div class="col-md-4">
                        <h2 class="text-left">Fuel Type &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp;<?php echo $row['fuel_type'] ;?></h2>
                        <h2>Mileage &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<?php echo $row['mileage'];?></h2>
                        <h2>Engine CC &nbsp; &nbsp; &nbsp; :<?php echo $row['engine_displacement'];?></h2>
                        <h2>Transmission :<?php echo $row['transmission'];?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <h1>Specifications</h1>
                <div role="tabpanel">
                    <div class="col-sm-4">
                        <ul class="nav nav-pills brand-pills nav-stacked" role="tablist">
                            <li role="presentation" class="brand-nav active">
                                <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">ECONOMY</a>
                            </li>
                            <li role="presentation" class="brand-nav">
                                <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">PERFORMANCE</a>
                            </li>
                            <li role="presentation" class="brand-nav">
                                <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">CAPACITY</a>
                            </li>
                        </ul>
                    </div>
 <div class="col-sm-8" style="margin-bottom: 150px;">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="tab1">
                                <table class="table table-hover table-striped table-bordered" >
                                    <thead></thead>
                                    <tbody>
                                        <tr>
                                            <th>Price</th>
                                            <td><?php echo $row['price'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Mileage</th>
                                            <td><?php echo $row['mileage'];?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab2">
                                <table class="table table-hover table-striped table-bordered">
                                    <thead></thead>
                                    <tbody>
                                        <tr>
                                            <th>Transmission</th>
                                            <td><?php echo $row['transmission'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Top Speed</th>
                                            <td><?php echo $row['top_speed'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Acceleration</th>
                                            <td><?php echo $row['acceleration'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Engine Displacement</th>
                                            <td><?php echo $row['engine_displacement'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Maximum Power</th>
                                            <td><?php echo $row['maximum_power'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Maximum Torque</th>
                                            <td><?php echo $row['maximum_torque'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Engine Description</th>
                                            <td><?php echo $row['engine_description'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Turning Radius</th>
                                            <td><?php echo $row['turning_radius'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Number of Cylinders</th>
                                            <td><?php echo $row['no_of_cylinders'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Drive Type</th>
                                            <td><?php echo $row['drive_type'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Turbo Charger</th>
                                            <td><?php echo $row['turbo_charger'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Super Charger</th>
                                            <td><?php echo $row['super_charger'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Valves per Cylinder</th>
                                            <td><?php echo $row['valves_per_cylinder'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Compression Ratio</th>
                                            <td><?php echo $row['compression_ratio'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Fuel Supply System</th>
                                            <td><?php echo $row['fuel_supply_system'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Gear Box</th>
                                            <td><?php echo $row['gear_box'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Steering Gear Type</th>
                                            <td><?php echo $row['steering_gear_type'];?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab3">
                                <table class="table table-hover table-striped table-bordered">
                                    <thead></thead>
                                    <tbody>
                                        <tr>
                                            <th>Seating Capacity</th>
                                            <td><?php echo $row['seating_capacity'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Number of Doors</th>
                                            <td><?php echo $row['no_of_doors'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Length</th>
                                            <td><?php echo $row['length'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Width</th>
                                            <td><?php echo $row['width'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Height</th>
                                            <td><?php echo $row['height'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Ground Clearance</th>
                                            <td><?php echo $row['ground_clearance'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Wheel Base</th>
                                            <td><?php echo $row['wheel_base'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Front Tread</th>
                                            <td><?php echo $row['front_tread'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Rear Tread</th>
                                            <td><?php echo $row['rear_tread'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Kerb Weight</th>
                                            <td><?php echo $row['kerb_weight'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Gross Weight</th>
                                            <td><?php echo $row['gross_weight'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Front Headroom</th>
                                            <td><?php echo $row['front_headroom'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Front Legroom</th>
                                            <td><?php echo $row['front_legroom'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Rear Headroom</th>
                                            <td><?php echo $row['rear_headroom'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Rear Legroom</th>
                                            <td><?php echo $row['rear_legroom'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Fuel Type</th>
                                            <td><?php echo $row['fuel_type'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Fuel Tank Capacity</th>
                                            <td><?php echo $row['fuel_tank_capacity'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Cargo Volume</th>
                                            <td><?php echo $row['cargo_volume'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Tyre Size</th>
                                            <td><?php echo $row['tyre_size'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Tyre Type</th>
                                            <td><?php echo $row['tyre_type'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Wheel Size</th>
                                            <td><?php echo $row['wheel_size'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Alloy Wheel Size</th>
                                            <td><?php echo $row['alloy_wheel_size'];?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <a href="https://github.com/MalayaliRobs/MutantTechies"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 hidden-xs text-right">
                                <a href="https://github.com/MalayaliRobs/MutantTechies"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
   <?php  } ?>

</body></html>