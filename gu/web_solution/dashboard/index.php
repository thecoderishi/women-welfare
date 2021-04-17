<?php include("header.php") ?>
<?php include("sideMenu.php") ?>
<?php require_once '../../../assets/datalink/myFunction.php'; ?>

 <div class="col-md-9">
 
			<div class="heading-title heading-line-single">
            <h3><i class="fas fa-cogs" aria-hidden="true"></i> Admin Dashboard</h3>
          </div>
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title"> Function Overview</h3>
              </div>
              <div class="panel-body">
			  
                <div class="col-md-4">
				<a href="../category/">
                  <div class="well dash-box">
                    <h2><i class="fas fa-list-ul"></i> <?php echo countRow("category","deleted = 0 ") ;?></h2>
                    <h4>Category</h4>
                  </div>
				</a>
                </div>
                <div class="col-md-4">
				<a href="../scheme/">
                  <div class="well dash-box">
                    <h2><i class="fas fa-list-alt"></i> <?php echo countRow("scheme","deleted = 0 ") ;?></h2>
                    <h4>Scheme</h4>
                  </div>
				  </a>
                </div>
				<div class="col-md-4">
				<a href="../user/">
                  <div class="well dash-box">
                    <h2><i class="fas fa-users"></i>  <?php echo countRow("usertype,loginmaster"," loginmaster.userTypeId = usertype.id && loginmaster.deleted = 0") ;?></h2>
                    <h4>Users</h4>
                  </div>
				  </a>
                </div>
                <div class="col-md-4">
				<a href="../district/">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-map-marker" style="color:#000"></span>  <?php echo countRow("district","deleted = 0 ") ;?></h2>
                    <h4>District</h4>
                  </div>
				  </a>
                </div>
				<div class="col-md-4">
				<a href="../office/">
                  <div class="well dash-box">
                    <h2><i class="fas fa-building" aria-hidden="true"></i>  <?php echo countRow("office","deleted = 0 ") ;?></h2>
                    <h4>Office</h4>
                  </div>
				  </a>
                </div>
				<div class="col-md-4">
				<a href="../state/">
                  <div class="well dash-box">
                    <h2><i class="fas fa-map-marker" aria-hidden="true"></i>  <?php echo countRow("state","deleted = 0 ") ;?></h2>
                    <h4>State</h4>
                  </div>
				  </a>
                </div>
                
              </div><!---panel-body-->
              </div><!---panel-default-->
	</div></div><!-- end of col-md-9 -->
	</div> <!--container-->
	</section> <!--section-->
<?php include("footer.php") ?>