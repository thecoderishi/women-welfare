<!-- CORE CSS -->
        <link href="../assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../css/essentials.css" rel="stylesheet" type="text/css" />
        <link href="../css/layout.css" rel="stylesheet" type="text/css" />
        <link href="../css/button-hover.css" rel="stylesheet" type="text/css" />
        <link href="../css/header.css" rel="stylesheet" type="text/css" />
        <link href="../css/extra.css" rel="stylesheet" type="text/css" />
		 <link href="../assets/fontawesome/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet" type="text/css" />
     
        <!--<link href="fontawesome-5.0.9/css/fontawesome.css" />-->
		<!--link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous"-->


		
		<?php
if($_POST)
	{  $cid = $_POST['sid'];
	// $cid = array(1,2,3);
		$where="";
		//$schemeId = $_POST['sid'];
		if(count($cid)>0)
		{   
	       $where=" where id in(";
			foreach($cid as $a => $b){
				/*if($cid[$a]==-1)
				{  $where=" where 1";
					break;
				}*/
			$where=$where. $cid[$a].",";
				}
				$where = substr($where,0,strlen($where)-1);
				$where=$where.")";
		}
		else 
		{  
			$where=" where 1";
		}
	
				include("../assets/datalink/dbconfig.php");
				$select_scheme="select * from scheme".$where;
				$stmt=$db_con->prepare($select_scheme);
				$stmt->execute();
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{ 
					//echo $row['schemeName']; 
        ?>
 <div class="container">
            
		
         <!-- item -->
            <div class="clearfix search-result">
                <div class="col-md-2"><!-- shceme logo -->
				  <a href="#"><img src="SIH_2018_logo.jpg" class="img-responsive" /></a>
                </div>
                <div class="col-md-10"><!-- scheme detail -->
                    <a href="">
                    <h4 class="nomargin-bottom"><?php echo $row['schemeName'];?> </h4><!-- Scheme title -->
					</a>
					<hr>
                    <ul class="list-inline">
                        
                        <li><i class="fas fa-map-marker-alt"></i> 
							<a href="#">Location</a>
                        </li>
                        
                        <li><i class="fas fa-list-ul"></i> 
                            <a href="#" >Category</a> 
                        </li>

                        <li><i class="fas fa-file-pdf"></i> 
                            <a href="#" >PDF Document</a>
                        </li>
						
						<li><i class="fas fa-share-square"></i> 
                            <a href="#" >Share to Friend</a>
                        </li>

                    </ul>
                    <div><?php echo  $row['schemeDescription'];?></div><!-- Desription -->
            <!-- /item -->
       
				</div>
            <!-- /LEFT COLUMNS -->  
            
			</div><!-- row //-->
</div><!-- container //-->

				
	<?php		
		}} 
		count($row);
	?>
			<div class="clearfix search-result">
		</div>
	