<?php
include_once '../../../assets/datalink/dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM officeReference WHERE id=:id and deleted=0");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
}

?>
<style type="text/css">
#dis{
	display:none;
}
</style>
   
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script>

         $(document).ready(function() {
            $("#oid").select2(); 
             $("#sid").select2();  
        });
    </script>
    
    <div id="dis">
    
	</div>
        
 	
	 <form method='post' id='Country-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
           <?php $oid =$row1['officeId'];?>
         <?php $sid =$row1['schemeId'];?>
 		<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
         <tr>
            <td>Office Name</td>
            <td> 
        <select style="width:100%" id="oid" name="oid">
			<option><b>Plz type or select</b></option>
              <?php
					require_once '../../../assets/datalink/dbconfig.php';
					$stmt = $db_con->prepare("SELECT office.id id ,officeName,officeAddress,level FROM `office`,typeLevel WHERE office.typeLevelId=typeLevel.id");
					$stmt->execute();
					while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
	  		  ?>
		<option value="<?php echo $row['id']; ?>" > <b><?php echo $row['officeName']."/". $row['officeAddress']."/". $row['level']; ?></b></option>
		<?php 
		}	
		?>
		   </select>
           </td>
        </tr>
        
        <tr>
            <td>District</td>
            <td> 
        <select style="width:100%" id="sid" name="sid">
			<option><b>Plz type or select</b></option>
              <?php
					require_once '../../../assets/datalink/dbconfig.php';
					$stmt = $db_con->prepare("SELECT * FROM scheme ORDER BY id");
					$stmt->execute();
					while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
	  		  ?>
		<option value="<?php echo $row['id']; ?>" <?php  if ($row['id'] == $sid ) echo 'selected'; ?> > <?php echo $row['schemeName']; ?></option>
		<?php 
		}	
		?>
	
           </td>
        </tr>
 		 <tr>
            <td>contact person</td>
            <td><input type='text' name='txtPerson' id='txtPerson 'value='<?php echo $row1['contactPerson']; ?>' class='form-control' placeholder='' required /></td>
        </tr>
       
         <tr>
            <td>Contact person in Hindi</td>
            <td><input type='text' name='txtHPerson' id='txtHPerson' 'value='<?php echo $row1['hContactPerson']; ?>' class='form-control' placeholder='' required /></td>
        </tr>
        
         <tr>
            <td>Contact person in Gujarati</td>
            <td><input type='text' name='txtGPerson' id='txtGPerson' 'value='<?php echo $row1['gContactPerson']; ?>' class='form-control' placeholder='' required /></td>
        </tr>
	
	
      	<tr>
            <td>Contact No.</td>
            <td><input type='text' name='txtContact' id='txtContact''value='<?php echo $row1['contactNo']; ?>' class='form-control' placeholder='' required /></td>
        </tr>
	
			
		
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save" >
    		<span class="glyphicon glyphicon-plus"></span> Save this Record
			</button>  
            </td>
        </tr>
 
	
    </table>
</form>
     

<!---- Loading Button ---->



<!-- end the Google Transliteration API -->