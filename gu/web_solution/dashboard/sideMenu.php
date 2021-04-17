

<section id="main">

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2 col-sm-12 side-menu-block">
		  
            <div class="list-group side-menu">
              <a href="../admin" class="list-group-item active">
                <i class="fas fa-cogs" aria-hidden="true"></i> Dashboard
              </a>
              <a href="../category" class="list-group-item"> <i class="fas fa-list-ul"></i> Category<span class="badge">
			  <?php require_once '../../../assets/datalink/myFunction.php';?>
			  <?php echo countRow("category","deleted = 0 "); ?> </span></a>
              <a href="../scheme" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Scheme <span class="badge"> 
			  <?php  echo countRow("scheme","deleted = 0 ") ; ?></span></a>
			  <a href="../office" class="list-group-item"><i class="fas fa-building" aria-hidden="true"></i> Office <span class="badge"><?php  echo countRow("office","deleted = 0  "); ?></span></a>
              <a href="../user" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> User <span class="badge"><?php echo countRow("usertype,loginmaster"," loginmaster.userTypeId = usertype.id && loginmaster.deleted = 0"); ?></span></a>
              <a href="../district" class="list-group-item"><span class="glyphicon glyphicon-map-marker"></span> District <span class="badge"><?php echo countRow("district","deleted = 0 "); ?></span></a>
			  <a href="../crud" class="list-group-item"><i class="fas fa-map-marker" aria-hidden="true"></i> State <span class="badge"><?php echo countRow("state","deleted = 0  ");?></span></a>
            </div>
      </div>