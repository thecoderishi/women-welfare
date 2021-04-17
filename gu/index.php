

<?php include("header.php") ?>
<link href="../assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="../css/header_style.css" rel="stylesheet" media="screen">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script type="text/javascript" src="../assets/bootstrap/dist/js/bootstrap.min.js"></script>

<link type="text/css" rel="stylesheet" href="../css/index_style.css">
 <div>
	
	<div class="container" style="margin-bottom:-25px;">
	<div class="heading-title text-center heading-line-single">
		<h4> Search </h4>
	</div>
     </div>                 
     <section class="11padding-xs alternate">
                <div class="container">

                    <!-- SEARCH -->

                    <form id="searchForm" method="post" action="searchResult.php" class="clearfix well well-sm search-big nomargin form-control input-lg">
                        <div class="input-group">

                            

                           <select  class="myselect2" style="width:100%" name="sid[]" multiple="multiple">
<option value="-1" > <b>બધા</b></option>
	
			     <?php
					require_once '../assets/datalink/dbconfig.php';
					$stmt = $db_con->prepare("SELECT * FROM scheme ORDER BY lastUpdate");
					$stmt->execute();
					while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
	  		  ?>
		<option value="<?php echo $row['id']; ?>" > <b><?php echo $row['gSchemeName']; ?></option>
		<?php 
		}	
		?>
		   </select>
                            <div class="input-group-btn">
                                <button class="btn btn-default noborder-left">
                                    <i class="fas fa-search nopadding"></i>
                                </button>
                            </div>
                        </div>

                    </form>
                    <!-- /SEARCH -->
                    

                </div>
            </section>   

        </div> <!-- end wrapper -->



<div class="container gu-map-schme">
	<div class="row">
    	<div class="col-md-7 col-xs-12">
        	<div class="heading-title text-left heading-line-single">
					<h3><i class="fas fa-globe" aria-hidden="true"></i> Schemes Per Region </h3>
			</div>
        	<?php include("Gujaratmap.php"); ?>
        </div>
        <div class="col-md-5 col-xs-12">
        	
				<div class="heading-title text-left heading-line-single ">
					<h3><i class="fas fa-list-ul" aria-hidden="true"></i> Schemes Per Category </h3>
				</div> 
					<div class="schm-ctgr" style="padding-bottom:20px">
						<?php 
							 require_once('../assets/datalink/dbconfig.php');
							 $schm_ctgr = $db_con->prepare(" SELECT * from category");
                             $schm_ctgr->execute();
							 while($row = $schm_ctgr->fetch(PDO::FETCH_ASSOC))
							 { ?>
					 <div class="ctgr-block"> <a href="#" class="category-home"> <i class="fas fa-angle-right margin-right-6">	</i> <?php echo $row['gCategoryName']; } ?> </a> </div> <!--- closing of category --->		
					</div> <!--- closing of schm_ctgr --->
				
			
        </div>
    </div>
</div> 
<script type="text/javascript">
      $(".myselect").select2();
	      $(".myselect2").select2();
</script>

<?php //include("footer.php"); ?>