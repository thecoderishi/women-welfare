<?php
include_once '../datalink/dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM state WHERE id=:id && deleted=0");
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
            $("#cid").select2();   
        });
    </script>
    
    <div id="dis">
    
	</div>
        
 	
	 <form method='post' id='state-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 		<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
        <?php $cid =$row['countryID'];?>
        <tr>
            <td>State Name</td>
            <td><input type='text' name='txtState' class='form-control' value='<?php echo $row['stateName']; ?>' required></td>
        </tr>
 
        <tr>
            <td>State Name(Hindi)</td>
            <td><input type='text' name='txtHState' class='form-control' value='<?php echo $row['hStateName']; ?>' required></td>
        </tr>
         <tr>
            <td>State Name(Gujarati)</td>
            <td><input type='text' name='txtGState' class='form-control' value='<?php echo $row['gStateName']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Country</td>
            <td><select style="width:100%" name="cid" id="cid">
			<?php
        require_once '../datalink/dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT * FROM country where deleted=0 ORDER BY id");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
		?>
				<option value="<?php echo $row['id']; ?>" <?php if ($row['id'] == $cid ){echo ' selected';} ?> > <?php echo $row['countryName']; ?></option>
		<?php 
		}
		?>
        
        <?php /**/?>
        
      </select></td>
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
