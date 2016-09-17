<html><head>
        <meta charset="utf-8" lang="en">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="css\style.css" rel="stylesheet" type="text/css">
        <title>DreamWheels</title>
        <script>
            function show (toBlock){
                setDisplay(toBlock, 'block');
             							 }
              	function hide (toNone) {
                setDisplay(toNone, 'none');
              							}
              	function setDisplay (target, str) {
                document.getElementById(target).style.display = str;
              									  }
        </script>
        <script src="jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#country').on('change',function(){
                    var countryID = $(this).val();
                    if(countryID){
                        $.ajax({
                            type:'POST',
                            url:'ajaxData.php',
                            data:'country_id='+countryID,
                            success:function(html){
                                $('#state').html(html);
                                $('#city').html('<option value="">Select brand first</option>'); 
                            }
                        }); 
                    }else{
                        $('#state').html('<option value="">Select brand first</option>');
                        $('#city').html('<option value="">Select name first</option>'); 
                    }
                });
                
                $('#state').on('change',function(){
                    var stateID = $(this).val();
                    if(stateID){
                        $.ajax({
                            type:'POST',
                            url:'ajaxData.php',
                            data:'state_id='+stateID,
                            success:function(html){
                                $('#city').html(html);
                            }
                        }); 
                    }else{
                        $('#city').html('<option value="">Select name first</option>'); 
                    }
                });
            });
        </script>
        <!-- select ajax for car2 -->
        <script type="text/javascript">
            $(document).ready(function(){
                $('#country1').on('change',function(){
                    var countryID = $(this).val();
                    if(countryID){
                        $.ajax({
                            type:'POST',
                            url:'ajaxData.php',
                            data:'country_id='+countryID,
                            success:function(html){
                                $('#state1').html(html);
                                $('#city1').html('<option value="">Select brand first</option>'); 
                            }
                        }); 
                    }else{
                        $('#state1').html('<option value="">Select brand first</option>');
                        $('#city1').html('<option value="">Select name first</option>'); 
                    }
                });
                
                $('#state1').on('change',function(){
                    var stateID = $(this).val();
                    if(stateID){
                        $.ajax({
                            type:'POST',
                            url:'ajaxData.php',
                            data:'state_id='+stateID,
                            success:function(html){
                                $('#city1').html(html);
                            }
                        }); 
                    }else{
                        $('#city1').html('<option value="">Select name first</option>'); 
                    }
                });
            });
        </script>
        <!-- select ajax for car2 closed -->
        <!-- select ajax for car3 -->
        <script type="text/javascript">
            $(document).ready(function(){
                $('#country2').on('change',function(){
                    var countryID = $(this).val();
                    if(countryID){
                        $.ajax({
                            type:'POST',
                            url:'ajaxData.php',
                            data:'country_id='+countryID,
                            success:function(html){
                                $('#state2').html(html);
                                $('#city2').html('<option value="">Select brand first</option>'); 
                            }
                        }); 
                    }else{
                        $('#state2').html('<option value="">Select brand first</option>');
                        $('#city2').html('<option value="">Select name first</option>'); 
                    }
                });
                
                $('#state2').on('change',function(){
                    var stateID = $(this).val();
                    if(stateID){
                        $.ajax({
                            type:'POST',
                            url:'ajaxData.php',
                            data:'state_id='+stateID,
                            success:function(html){
                                $('#city2').html(html);
                            }
                        }); 
                    }else{
                        $('#city2').html('<option value="">Select name first</option>'); 
                    }
                });
            });
        </script>
        <!-- select ajax for car3 closed -->
        <style>
            #mydiv { display: none } 
            #thirdsection { display: none }
        </style>
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
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <h1>Compare Cars
                                <!-- <small>Subtext</small> -->
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3>Car1</h3>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <img src="images\compare-dummy-img-car.png" class="img-responsive">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <form role="form" method="get" action="../compare_result/compare_result.php">
                                                                    <div class="form-group">
                                                                        <?php
																	    //Include database configuration file
																	    include('dbConfig.php');
																	    
																	    //Get all country data
																	    $query = $db->query("SELECT * FROM `TABLE 1` group by brand ");
																	    
																	    //Count total number of rows
																	    $rowCount = $query->num_rows;
																	    ?>
																	    <select name="carbrand1" class="form-control" id="country" required	>
																	        <option value="">Select Brand</option>
																	        <?php
																	        if($rowCount > 0){
																	            while($row = mysqli_fetch_assoc($query)){ 
																	                echo '<option value="'.$row['brand'].'">'.$row['brand'].'</option>';
																	            }
																	        }else{
																	            echo '<option value="">Car not available</option>';
																	        }
																	        ?>
																	    </select>
																	    
																	    <select class="form-control" name="carname1" id="state" required>
																	        <option value="">Select brand first</option>
																	    </select>
																	    
																	    <select class="form-control" name="carvariant1" id="city" required>
																	        <option value="">Select name first</option>
																	    </select>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Car2</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="images\compare-dummy-img-car.png" class="img-responsive">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                     <?php
													    //Include database configuration file
													    include('dbConfig.php');
													    
													    //Get all country data
													    $query = $db->query("SELECT * FROM `TABLE 1` group by brand ");
													    
													    //Count total number of rows
													    $rowCount = $query->num_rows;
													    ?>
													    <select class="form-control" name="carbrand2" id="country1" required>
													        <option value="">Select Brand</option>
													        <?php
													        if($rowCount > 0){
													            while($row = mysqli_fetch_assoc($query)){ 
													                echo '<option value="'.$row['brand'].'">'.$row['brand'].'</option>';
													            }
													        }else{
													            echo '<option value="">Car not available</option>';
													        }
													        ?>
													    </select>
													    
													    <select class="form-control" name="carname2" id="state1" required>
													        <option value="">Select brand first</option>
													    </select>
													    
													    <select  class="form-control" name="carvariant2" id="city1" required>
													        <option value="">Select name first</option>
													    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-2 text-right col-md-offset-10 " id="mydiv">
                                <a href="#"><img src="images\close.png" class="img-responsive" onclick="hide('mydiv'); show('addme'); hide('thirdsection'); "></a>
                            </div>
                        </div>
                        <div id="thirdsection">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Car3</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="images\compare-dummy-img-car.png" class="img-responsive">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <?php
														    //Include database configuration file
														    include('dbConfig.php');
														    
														    //Get all country data
														    $query = $db->query("SELECT * FROM `TABLE 1` group by brand ");
														    
														    //Count total number of rows
														    $rowCount = $query->num_rows;
														    ?>
														    <select class="form-control" name="carbrand3" id="country2">
														        <option value="">Select Brand</option>
														        <?php
														        if($rowCount > 0){
														            while($row = mysqli_fetch_assoc($query)){ 
														                echo '<option value="'.$row['brand'].'">'.$row['brand'].'</option>';
														            }
														        }else{
														            echo '<option value="">Car not available</option>';
														        }
														        ?>
														    </select>
														    
														    <select class="form-control" name="carname3" id="state2">
														        <option value="">Select brand first</option>
														    </select>
														    
														    <select  class="form-control" name="carvariant3" id="city2">
														        <option value="">Select name first</option>
														    </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end od add -->
                        <a href="#" id="addme"><img src="images\Capture.jpg" class="center-block img-responsive" onclick="show('mydiv'); hide('addme'); show('thirdsection'); "></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <input type="submit" class="btn btn-danger btn-lg" data-toggle="modal" value="Compare Cars">
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="section">
            <div class="background-image" style=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Most popular car comparisons</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="images\creta.jpg" class="img-responsive">
                        <h2>Hyundai Creta</h2>
                        
                    </div>
                    <div class="col-md-4">
                        <img src="images\Maruti_Vitara.jpg" class="img-responsive">
                        <h2>Maruti Vitara Brezza</h2>
                        
                    </div>
                    <div class="col-md-4">
                        <img src="images\duster.jpg" class="img-responsive">
                        <h2>Renault Duster</h2>
                        
                    </div>
                </div>
                <div class="row"><div class="col-md-12"><a class="btn btn-block btn-warning" href="./test/compare3.php">Compare</a></div></div>
            </div>
        </div><div class="section section-danger"><div class="container">
        
        </div>
        </div>
        <div class="section">
        <div class="container">
        <div class="row">
        <div class="col-md-12">
        <div class="section"> 
        <div class="container">
         <div class="row">
          <div class="col-md-6">
           <img src="images\kwid.jpg" class="img-responsive">
            <h1>Renault KWID</h1> <p></p><p></p>
            </div><div class="col-md-6">
             <img src="images\zest.jpg" class="img-responsive">
              <h1>Tata Zest </h1> <p></p><p></p></div></div>
              <div class="row"><div class="col-md-12">
              <a class="btn btn-block btn-warning" href="./test1/compare_result.php">Compare</a></div></div></div></div></div></div></div></div>

              <footer class="section section-primary"> 
              <div class="container"> <div class="row"> <div class="col-sm-6">
               <h1>Dream Wheels</h1> <p>Dreamt Not Bought</p></div>
                <div class="col-sm-6"> <p class="text-info text-right"> <br><br></p><div class="row"> <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left"> 
                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a> <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a> <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a> <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a> </div></div><div class="row"> <div class="col-md-12 hidden-xs text-right">    <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a> </div></div></div></div></div></footer>
        <script src="js/jquery-2.1.4.js"></script>
    

</body></html>