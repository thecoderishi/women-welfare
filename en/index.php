

<?php include("header.php") ?>

<!---carousel-->
	
   <div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
  	
    <div class="item active">
      <img src="../img/dddd.png" style="width:100%;height:26em" class="img-responsive" alt="First">
    </div>
  
    <div class="item">
      <img src="../img/fin1852.png" class="img-responsive" style="width:100%;height:26em" alt="Second">
    </div>

    <div class="item">
      <img src="../img/betinew1.png" style="width:100%;height:26em" class="img-responsive" alt="Third">
    </div>
    
    <div class="item">
      <img src="../img/fin_simple-wallpaper-20.png" style="width:100%;height:26em" class="img-responsive" alt="Fourth">
    </div>
 

  </div>
  
<!---End of carousel-->


<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


<link type="text/css" rel="stylesheet" href="../css/index_style.css">
 <div>
	
	<div class="container" style="margin-bottom:-25px;">

                         <!-- SEARCH -->

                    <form id="searchForm" method="post" action="searchResult.php" >
                        	
	<p align="center" id="main"> Search Scheme by Name </p> 

                        <div class="row">
                        <div class="col-sm-9">
 <select  class="myselect2 form-control" style="width:100%" name="sid[]" multiple="multiple">
<option value="-1" > <b>All</b></option>
	
			     <?php
					require_once '../assets/datalink/dbconfig.php';
					$stmt = $db_con->prepare("SELECT * FROM scheme ORDER BY lastUpdate");
					$stmt->execute();
					while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
	  		  ?>
		<option value="<?php echo $row['id']; ?>" > <b><?php echo $row['schemeName']; ?></option>
		<?php 
		}	
		?>
		   </select></div><div class="col-sm-3">
                          
                                <input type="submit" class="form-control" value="Search">
                                </input>
                           
                        </div>
</div>

                    </form>
                    <!-- /SEARCH -->
                    

          
         <!-- end wrapper -->


         <!-- schemes info -->
         
	<div class="row">
    	<div class="col-md-7 col-xs-12 gu-map-schme">
        	<div class="heading-title text-left heading-line-single">
					<h3><i class="fas fa-globe" aria-hidden="true"></i> Offices Per Region </h3>
			</div>
        	<?php include("Gujaratmap.php"); ?>
        </div>
        <div class="col-md-5 col-xs-12">
        	
				<div class="heading-title text-left heading-line-single">
					<h3 style="margin-top:15px;"><i class="fas fa-list-ul" aria-hidden="true"></i> Schemes Per Category </h3>
				</div> 
					<div class="row schm_ctgr">
						<?php 
							 require_once('../assets/datalink/dbconfig.php');
							 require_once('../assets/datalink/myFunction.php');
							 $schm_ctgr = $db_con->prepare(" SELECT * from category");
                             $schm_ctgr->execute();
                             $i=0;
							 while($row = $schm_ctgr->fetch(PDO::FETCH_ASSOC))
							 {  if($i%2==0) { echo '<div class="row">';}?> 
							 
							 
					 <div class="col-sm-6"><h4> <a href="#" class="category-home" style="padding-bottom:20px"> <i class="fas fa-angle-right margin-right-6"></i> <?php $cid = $row['id']; echo "<a href='select_scheme.php?q=".$cid."'>".$row['categoryName']; //echo " (".countRow("scheme","categoryId=".$cid."&& deleted=0").") </a>";  
					 $i++; echo '</a></h4> </div>';if($i%2==0) { echo "</div>";}} ?> </a> </h4> 
					 
					 </div>
					</div> <!--- closing of schm_ctgr --->
				
		
                </div>	
       
    </div>
</div> 
<script type="text/javascript">
      $(".myselect").select2();
	      $(".myselect2").select2();
</script>

<?php include("footer.php"); ?>>>