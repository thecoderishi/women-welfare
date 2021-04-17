<!-- CORE CSS -->
        <!-- <link href="../assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../css/essentials.css" rel="stylesheet" type="text/css" />
        <link href="../css/layout.css" rel="stylesheet" type="text/css" />
        <link href="../css/button-hover.css" rel="stylesheet" type="text/css" />
        <link href="../css/header.css" rel="stylesheet" type="text/css" />
        <link href="../css/extra.css" rel="stylesheet" type="text/css" />
		 <link href="../assets/fontawesome/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet" type="text/css" />
     
       <link href="fontawesome-5.0.9/css/fontawesome.css" />-->
		<!--link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous"-->

		
		<?php
		      include("header.php");
if($_GET)
	{  $cid = $_GET['q'];
    
    	include("../assets/datalink/dbconfig.php");
				
    	$select_scheme="select * from category where id =".$cid." && deleted = 0" ;
				$stmt=$db_con->prepare($select_scheme);
				$stmt->execute();
            	$row=$stmt->fetch(PDO::FETCH_ASSOC);
            	$cName = $row['categoryName'];
            	
				include("../assets/datalink/dbconfig.php");
				$select_scheme="select * from scheme where categoryId =".$cid." && deleted = 0" ;
				$stmt=$db_con->prepare($select_scheme);
				$stmt->execute();
				?>
			
 <div class="container"> 
 <?php
 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
            	{ 
					//echo $row['schemeName']; 
        ?>
		
         <!-- item -->
            <div class="clearfix search-result">
                <div class="col-md-2"><!-- shceme logo -->
				  <a href="#"><img src="SIH_2018_logo.jpg" class="img-responsive" /></a>
                </div>
                <div class="col-md-10"><!-- scheme detail -->
                     <a href="<?php echo "schemeDetails.php?q=".$row['id'] ;?>">
                    <h4 class="nomargin-bottom"><?php echo $row['schemeName'];?> </h4><!-- Scheme title -->
					</a>
					<hr>
                    <ul class="list-inline">
                        
                        <li><i class="fas fa-file-pdf"></i> 
							<a href="../mediafile/first.pdf">Detailed Description</a>
                        </li>
                        
                        <li><i class="fas fa-list-ul"></i> 
                            <a href="#" ><?php echo $cName; ?></a> 
                        </li>

                        <li><i class="fas fa-file-pdf"></i> 
                            <a href="../mediafile/second.pdf" >Application Form</a>
                        </li>
						
					

                    </ul>
                    <div><?php echo  $row['schemeDescription'];?></div><!-- Desription -->
            <!-- /item -->
       
				</div>
            <!-- /LEFT COLUMNS -->  
            
			</div><!-- row //-->


				
	<?php		
		}} 
	?>
	</div><!-- container //-->
	<?php include("footer.php"); ?>
	