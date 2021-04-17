<html lang="en">


<head>


    <title>Jquery Select2 - Select Box with Search Option</title>  

<link href="../assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="../assets/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script type="text/javascript" src="../assets/bootstrap/dist/js/bootstrap.min.js"></script>


</head>


<body>
<div class="container">
<h2>Select Box with Search Option Jquery Select2.js</h2>

<form method="post" action="test.php">
 	     Scheme Search By Name 
		   
<select  class="myselect2" style="width:100%" name="sid[]" multiple="multiple">
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
		   </select>

<br>
<br>

<input class='form-control' type="submit" value="submit">


</form>

</div> <!-- container end -->
<script type="text/javascript">
      $(".myselect").select2();
	      $(".myselect2").select2();
</script>
</body>


</html>