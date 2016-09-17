
<?php
$p1=$_GET['p1'];
$p2=$_GET['p2'];
$p3=$_GET['p3'];
$p4=$_GET['p4'];
$p5=$_GET['p5'];
$p6=$_GET['p6'];
$p7=$_GET['p7'];

$b1=$_GET['b1'];
$b2=$_GET['b2'];
$b3=$_GET['b3'];
$b4=$_GET['b4'];
$b5=$_GET['b5'];
$b6=$_GET['b6'];


$f1=$_GET['f1'];
$f2=$_GET['f2'];
$f3=$_GET['f3'];
$f4=$_GET['f4'];
$f5=$_GET['f5'];


$m1=$_GET['m1'];
$m2=$_GET['m2'];
$m3=$_GET['m3'];

$v1=$_GET['v1'];
$v2=$_GET['v2'];
$v3=$_GET['v3'];
$v4=$_GET['v4'];
$v5=$_GET['v5'];
$v6=$_GET['v6'];
$v7=$_GET['v7'];
$v8=$_GET['v8'];
$v9=$_GET['v9'];
$v10=$_GET['v10'];

$t1=$_GET['t1'];
$t2=$_GET['t2'];

$s1=$_GET['s1'];
$s2=$_GET['s2'];
$s3=$_GET['s3'];
$s4=$_GET['s4'];
$s5=$_GET['s5'];
$s6=$_GET['s6'];
$s7=$_GET['s7'];

$e1=$_GET['e1'];
$e2=$_GET['e2'];
$e3=$_GET['e3'];
$e4=$_GET['e4'];
$e5=$_GET['e5'];
$e6=$_GET['e6'];






$fl=0;


include "connect.php";
$sql="select * from `TABLE 1` WHERE ";
$sql1=" ( ";
$sql2=" ( ";
$sql3=" ( ";
$sql4=" ( ";
$sql5=" ( ";
$sql6=" ( ";
$sql7=" ( ";
$sql8=" ( ";
//price

if($p1 == 1)
   { $sql1 .="    ( `price`>=1 and `price`<=5) or "; $fl=1; }
if($p2 == 2)
   { $sql1 .="    (`price`>=3 and `price`<=5) or ";$fl=1;  }
if($p3 == 3)
   {$sql1 .="    (`price`>=5 and `price`<=10) or ";$fl=1; }
if($p4 == 4)
   {$sql1 .="    (`price`>=10 and `price`<=20) or ";$fl=1;  }
if($p5 == 5)
   {$sql1 .="  (`price`>=20 and `price`<=50) or  ";$fl=1;  }
if($p6 == 6)
   {$sql1 .="   (`price`>=50 and `price`<=100) or ";$fl=1; }
if($p7 == 7)
   {$sql1 .="  (`price`>=100)  or ";$fl=1; }
if( $fl==0)
    { $sql1 .=" (`price`>=0 ) or ";   }

$fl=0;


//brand

    if($b1)
        {$sql2 .='  (`brand` = "Maruti" ) or'; $fl=1;}
    if($b2)
        {$sql2 .=' (`brand` = "Hyundai" ) or '; $fl=1;}
    if($b3)
        {$sql2 .=' (`brand` = "Honda" ) or '; $fl=1;}
    if($b4)
        {$sql2 .=' (`brand` = "Tata") or ';$fl=1; }
    if($b5)
        {$sql2 .=' (`brand` = "Toyota") or ';$fl=1; }
    if($b6)
        {$sql2 .=' (`brand` = "Mahindra") or ';$fl=1; }
    if($fl==0)
        {$sql2 .='  (`brand` LIKE "%") or';$fl=1;}
    

$fl=0;

    $sql.=$sql1 . " (false)) and ".$sql2;
//fuel type

    if($f1)
        {$sql3 .='  (`fuel_type` = "Diesel" ) or'; $fl=1;}
    if($f2)
        {$sql3 .=' (`fuel_type` = "Petrol" ) or '; $fl=1;}
    if($f3)
        {$sql3 .=' (`fuel_type` = "CNG" ) or '; $fl=1;}
    if($f4)
        {$sql3 .=' (`fuel_type` = "LPG") or ';$fl=1; }
    if($f5)
        {$sql3 .=' (`fuel_type` = "Electric") or ';$fl=1; }
    
    if($fl==0)
        {$sql3 .='  (`fuel_type` LIKE "%") or'; }
    

$fl=0;
	$sql.=" (false)) and ".$sql3;

//Mileage

    if($m1==1)
        {$sql4 .='  (`mileage`<10) or'; $fl=1;}
    if($m2==2)
        {$sql4 .=' (`mileage`>=10 and `mileage`<15 ) or '; $fl=1;}
    if($m3==3)
        {$sql4 .=' (`mileage`>=15) or '; $fl=1;}
    
    
    if($fl==0)
        {$sql4 .='  (`mileage` >= 0) or'; }
    

$fl=0;
	$sql.= " (false)) and ".$sql4;

  
 //Vehicle Type

   

    if($v1)
        {$sql5 .='  (`type` = "Hatchback" ) or'; $fl=1;}
    if($v2)
        {$sql5 .=' (`type` = "Sedan" ) or '; $fl=1;}
    if($v3)
        {$sql5 .=' (`type` = "SUV" ) or '; $fl=1;}
    if($v4)
        {$sql5 .=' (`type` = "MUV") or ';$fl=1; }
    if($v5)
        {$sql5 .=' (`type` = "Luxury") or ';$fl=1; }
    if($v6)
        {$sql5 .='  (`type` = "convertible" ) or'; $fl=1;}
    if($v7)
        {$sql5 .=' (`type` = "Hybrid" ) or '; $fl=1;}
    if($v8)
        {$sql5 .=' (`type` = "Coupe" ) or '; $fl=1;}
    if($v9)
        {$sql5 .=' (`type` = "Mini-Van") or ';$fl=1; }
    if($v10)
        {$sql5 .=' (`type` = "Electric") or ';$fl=1; }
    
    if($fl==0)
        {$sql5 .='  (`type` LIKE "%") or' ; $fl=1; }
    



$fl=0;
	$sql.= " (false)) and ".$sql5;

  
 //Transmission

   

    if($t1)
        {$sql6 .='  (`transmission` = "Automatic" ) or'; $fl=1;}
    if($t2)
        {$sql6 .=' (`transmission` = "Manual" ) or '; $fl=1;}
    
    
    if($fl==0)
        {$sql6 .='  (`transmission` LIKE "%") or' ; $fl=1; }


$fl=0;
	$sql.= " (false)) and ".$sql6;

//Seatng

if($s1 == 1)
   { $sql7 .="    ( `seating_capacity`=2) or "; $fl=1; }
if($s2 == 2)
   { $sql7 .="    (`seating_capacity`= 4) or ";$fl=1;  }
if($s3 == 3)
   {$sql7.="    (`seating_capacity`=5) or ";$fl=1; }
if($s4 == 4)
   {$sql7 .="    (`seating_capacity` = 6) or ";$fl=1;  }
if($s5 == 5)
   {$sql7 .="  (`seating_capacity`=7) or  ";$fl=1;  }
if($s6 == 6)
   {$sql7 .="   (`seating_capacity`= 8) or ";$fl=1; }
if($s7 == 7)
   {$sql7 .="  (`seating_capacity`= 9)  or "; $fl=1; }
if( $fl==0)
    { $sql7.=" (`seating_capacity`>= 0 ) or ";   }


$fl=0;
	$sql.= " (false)) and ".$sql7;

//Engine displacement

if($e1 == 1)
   { $sql8.="    ( `engine_displacement`<800) or "; $fl=1; }
if($e2 == 2)
   { $sql8 .="    (`engine_displacement`>=800 and `engine_displacement`<=1000) or ";$fl=1;  }
if($e3 == 3)
   {$sql8.="    (`engine_displacement`>=1000 and `engine_displacement`<=2000) or ";$fl=1; }
if($e4 == 4)
   {$sql8.="    (`engine_displacement`>=2000 and `engine_displacement`<=3000) or ";$fl=1;  }
if($e5 == 5)
   {$sql8.="  (`engine_displacement`>=3000 and `engine_displacement`<=4000) or  ";$fl=1;  }
if($e6 == 6)
   {$sql8.="   (`engine_displacement`>=4000) or ";$fl=1; }

if( $fl==0)
    { $sql8.=" (`engine_displacement`>=0 ) or ";   }

$fl=0;
	$sql.= " (false)) and ".$sql8;



    






$sql .= " false) group by name";

$sqlco=mysqli_query($con,$sql);
$num=mysqli_num_rows($sqlco);

while($row=mysqli_fetch_assoc($sqlco))
{                $img=$row['image'];
                 $name=$row['name'];
                 $variant=mysqli_query($con,"select * from `TABLE 1` where name='$name'");


                   ?>
 <div >
                  
                        <div class="row">
                            <div class="col-md-5 text-center" style="padding:0px;">
                                <?php echo '<img src="images';echo"\\";echo $img.'.jpg" class="img-responsive">';?>
                            </div>
                            <div class="col-md-4">
                                <h2 class="text-left"><?php echo $row['brand']; echo ' '.$row['name']; ?></h2>
                                <i class="fa fa-3x fa-mobile pull-left text-muted"></i>
                                <h3 class="text-left text-muted"><?php echo $row['mileage'];?>&nbsp;kmpl</h3>
                                <i class="fa fa-3x fa-mobile pull-left text-muted"></i>
                                <h3 class="text-left text-muted"><?php echo $row['engine_displacement'];?>&nbsp;cc</h3>
                                <i class="fa fa-3x fa-mobile pull-left text-muted"></i>
                                <h3 class="text-left text-muted"><?php echo $row['seating_capacity'];?>&nbsp;seats</h3>
                                <ul class="list-group"></ul>
                            </div>
                            <div class="col-md-3">
                                <h3 class="text-left text-muted">Price <?php echo $row['price']." Lakhs";?> </h3>
                                <a class="btn btn-block btn-danger btn-lg" href ="../404/404.html">Buy now</a>
                            </div>
                        </div>
                        <div class="row">
                           <div class="panel panel-default clearfix">
                            <div class="col-xs-12 toggle-header">
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-primary btn-sm hidden-xs" data-toggle="collapse" data-target="#<?php echo $row['id']?>">
                                        View Variants
                                    </button>
                                    <button type="button" class="btn btn-primary btn-xs visible-xs" data-toggle="collapse" data-target="#<?php echo $row['id']?>">
                                        <i class="glyphicon glyphicon-resize-vertical"></i>Toggle Set
                                    </button>
                                </div>
                                <div class="col-xs-2 text-center">
                                    <span class="hidden-xs">Price</span>
                                    <span class="visible-xs">S</span>
                                </div>
                                <div class="col-xs-2 text-center">
                                     <span class="hidden-xs">Mileage</span>
                                    <span class="visible-xs">M</span>
                                </div>
                                <div class="col-xs-2 text-center">
                                     <span class="hidden-xs">Engine </span>
                                    <span class="visible-xs">L</span>
                                </div>
                            </div>
                            
                                <div id="<?php echo $row['id']?>" class="collapse ">
                                		<?php while($inside=mysqli_fetch_assoc($variant))  { ?>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                   <a href="../product_info/car.php?id=<?php echo$inside['id']; ?>"> <?php echo $inside['brand'] ;?>&nbsp;<?php echo $inside['name'];?>&nbsp;&nbsp;<?php echo $inside['variant'];?>       </a>                                
                                                </div>
                                                <div class="col-xs-2 text-center">
                                                    <?php echo $inside['price'];?>&nbsp;Lakhs
                                                </div>
                                                <div class="col-xs-2 text-center">
                                                    <?php echo $inside['mileage'];?>&nbsp;kmpl
                                                </div>
                                                <div class="col-xs-2 text-center">
                                                   <?php echo $inside['engine_displacement'];?>&nbsp;cc
                                                </div>
                                            </div>
                                        </div>  <?php } ?>
                                         
                                     </div>
                            </div>
						 </div>
			</div>
			<?php } ?>
