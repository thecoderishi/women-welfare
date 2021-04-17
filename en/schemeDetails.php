<!-- CORE CSS -->
<?php include('header.php')?>
        <link href="../css/essentials.css" rel="stylesheet" type="text/css" />
        <link href="../css/layout.css" rel="stylesheet" type="text/css" />
        <link href="../css/button-hover.css" rel="stylesheet" type="text/css" />
        <link href="../css/header.css" rel="stylesheet" type="text/css" />
        <link href="../css/extra.css" rel="stylesheet" type="text/css" />
	  	<?php
		if( isset($_GET["q"]))
        {
             $schemeId=$_GET["q"];
 	            include("../assets/datalink/dbconfig.php");
				$select_scheme="select * from scheme where id='".$schemeId."'" ;
				$stmt=$db_con->prepare($select_scheme);
				$stmt->execute();
				$row=$stmt->fetch(PDO::FETCH_ASSOC);
				   
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
                        
                        <li><i class="fas fa-file-pdf"></i> 
							<a href="../mediafile/first.pdf">Detailed Description</a>
                        </li>
                        
                        <li><i class="fas fa-list-ul"></i> 
                            <a href="#" >Eduction</a> 
                        </li>

                        <li><i class="fas fa-file-pdf"></i> 
                            <a href="../mediafile/second.pdf" >Application Form</a>
                        </li>
						
					

                    </ul>
                     <div> <?php	include("../assets/datalink/dbconfig.php");
				$select_scheme="select * from schemeDescription where schemeId='".$schemeId."'" ;
				$stmt1=$db_con->prepare($select_scheme);
				$stmt1->execute();
			while(	$row=$stmt1->fetch(PDO::FETCH_ASSOC) ){
			echo "<br/><b>".$row['fieldName']."</b><br/><p align='justify'>".$row['feildDescription']."</p>";
			
			} }?></div>
       
				</div>
            <!-- /LEFT COLUMNS -->  
            
			</div><!-- row //-->
</div><!-- container //-->

		<div class="clearfix search-result">
		</div>
	<?php include("footer.php"); ?>