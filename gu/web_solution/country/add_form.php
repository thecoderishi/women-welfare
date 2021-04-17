
<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>  
 <title></title>
<link href="../bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="../bootstrap/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="../font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" media="screen"> 
<link href="../DataTables/datatables.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../jquery/jquery-2.0.3.js"></script>-->

<link href="select2.css" rel="stylesheet"/>
<script src="select2.js"></script>
<script>
        $(document).ready(function() {
            $("#cid").select2();   
        });
    </script>
	  
	<div id="dis">
    <!-- here message will be displayed -->
	</div>
    
	 <form method='post' id='emp-SaveForm' action="#">
	 <table class='table table-bordered'>
      <tr>
            <td>State Name</td>
            <td><input type='text' name='txtState' id='txtState' class='form-control' placeholder='' required /></td>
        </tr>
        
 		 <tr>
            <td>State Name in Hindi</td>
            <td><input type='text' name='txtStateH' id='txtStateH' class='form-control' placeholder='' required /></td>
        </tr>
       
         <tr>
            <td>State Name in Gujarati</td>
            <td><input type='text' name='txtStateG' id='txtStateG' class='form-control' placeholder='' required /></td>
        </tr>
	 <tr>
            <td>Country</td>
            <td> 
        <select style="width:100%" id="cid" name="cid">
			<option><b>Plz type or select</b></option>
              <?php
					require_once '../datalink/dbconfig.php';
					$stmt = $db_con->prepare("SELECT * FROM country ORDER BY id");
					$stmt->execute();
					while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
	  		  ?>
		<option value="<?php echo $row['id']; ?>" > <b><?php echo $row['countryName']; ?></b> <?php echo $row['post']; ?></option>
		<?php 
		}	
		?>
		   </select>
           </td>
        </tr>
			
		
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save" data-loading-text="Loading..." autocomplete="off">
    		<span class="glyphicon glyphicon-plus"></span> Save this Record
			</button>  
            </td>
        </tr>
 
		</table>
</form>


<!---- Loading Button ---->

<script>
$(function() { 
    $("#btn-save").click(function(){
        $(this).button('loading').delay(1000).queue(function() {
			
	/**/
            $(this).button('reset');
            $(this).dequeue();
        });        
    });
});   
</script>


 </body>
</html>
