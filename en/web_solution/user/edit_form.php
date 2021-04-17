<?php
include_once '../datalink/dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM userType WHERE id=:id && deleted=0");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
}

?>
<style type="text/css">
#dis{
	display:none;
}
</style>

<link href="select2.css" rel="stylesheet"/>
<script src="select2.js"></script>
<script>
        $(document).ready(function() {
         //   $("#cid").select2();   
        });
    </script>
    
    <div id="dis">
    
	</div>
        
 	
	 <form method='post' id='state-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 		<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
        <?php $cid =$row['id'];?>
        <tr>
            <td>User Type Name</td>
            <td><input type='text' name='txtUserType' id='txtUserType' value='<?php echo $row['userTypeName']; ?>'  class='form-control' placeholder='' required /></td>
        </tr>
        
 		 <tr>
            <td>User Type Name in Hindi</td>
            <td><input type='text' name='txtHUserType' id='txtHUserType' value='<?php echo $row['hUserTypeName']; ?>' class='form-control' placeholder='' required /></td>
        </tr>
       
         <tr>
            <td>User Type Name in Gujarati</td>
            <td><input type='text' name='txtGUserType' id='txtGUserType' value='<?php echo $row['gUserTypeName']; ?>' class='form-control' placeholder='' required /></td>
        </tr>	
		
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update" data-loading-text="Loading..." autocomplete="off">
    		<span class="glyphicon glyphicon-plus"></span> Save Updates
			</button>
            </td>
        </tr>
 
    </table>
</form>
     

<!---- Loading Button ---->

<script>
$(function() { 
    $("#btn-update").click(function(){
        $(this).button('loading').delay(1000).queue(function() {
			
	/**/
            $(this).button('reset');
            $(this).dequeue();
        });        
    });
});   
</script>
