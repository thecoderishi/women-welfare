<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>employee basic entry</title>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="../bootstrap/css/font-awesome.min.css" rel="stylesheet" media="screen"> 
<link href="../assets/datatables.min.css" rel="stylesheet" type="text/css">
<link href="../css/customeCss.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../assets/jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	
	$("#btn-view").hide();
	
	$("#btn-add").click(function(){
		$(".content-loader").fadeOut('slow', function()
		{
			$(".content-loader").fadeIn('slow');
			$(".content-loader").load('add_form.php');
			$("#btn-add").hide();
			$("#btn-view").show();
		});
	});
	
	$("#btn-view").click(function(){
		
		$("body").fadeOut('slow', function()
		{
			$("body").load('index.php');
			$("body").fadeIn('slow');
			window.location.href="../ReportEmployee/";
		});
	});

    });
</script>

</head>

<body>
    <?
    include("../header.php")
?> 



	<div class="container">
      
        <h4 class="form-signin-heading"><center>कार्यालय प्राचार्य उदय प्रसाद उदय शासकीय पाॅलीटेक्निक, दुर्ग (छत्तीसगढ़) </center></h4><hr/>
		<h4><center>// सूची  //</center></h4>
        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-search"></span> &nbsp; Search Employee</button>
               
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="emplyeeTable1" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
		<th>S.no.</th>
		 <th>Name</th>
         <th> Designation</th>
        <th>Mobile</th>
		<th></th>
       
          </tr>
        </thead>
        <tbody>
        <?php
        require_once '../datalink/dbconfig.php';
        $serial=1;
        $stmt = $db_con->prepare("SELECT e.trserialno serialno,e.collegeSerialno sn,e.hName name,d1.hpost designation,d.hName department,e.mobile FROM `employee` e, department d, designation d1 WHERE e.departmentid=d.id and e.designationid=d1.id ORDER BY e.collegeSerialno ");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>
			<tr>
			<td><?php echo $serial++; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['designation']; ?></td>
			<td><?php echo $row['department']; ?></td>
			
			<td></td>
			</tr>
			<?php
		}
		?>
        </tbody>
        </table>
        </div>

    </div>
    
    <br />
    
    <?
    include("../footer.php")
?> 

    

    
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/datatables.min.js"></script>
<script type="text/javascript" src="crud.js"></script>  
<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
	$('#emplyeeTable').DataTable();  

	$('#emplyeeTable')
	.removeClass( 'display' )
	.addClass('table table-bordered');
});
</script>
</body>
</html>