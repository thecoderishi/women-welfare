<?php
include_once '../../../assets/datalink/dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM category WHERE id=:id and deleted=0");
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
            $("#bid").select2();   
        });
    </script>
    
    <div id="dis">
    
	</div>
        
 	
	 <form method='post' id='Category-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 		<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
        
        <tr>
            <td>Category Name</td>
            <td><input type='text' name='txtCategory' id='txtCategory' class='form-control' value='<?php echo $row['categoryName']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Category Name(Hindi)</td>
            <td><input type='text' name='txtHCategory' id='txtHCategory' class='form-control' value='<?php echo $row['hCategoryName']; ?>' required></td>
        </tr>
         <tr>
            <td>Category Name(Gujarati)</td>
            <td><input type='text' name='txtGCategory' id='txtGCategory' class='form-control' value='<?php echo $row['gCategoryName']; ?>' required></td>
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



<!-- end the Google Transliteration API -->