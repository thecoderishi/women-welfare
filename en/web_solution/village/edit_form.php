<?php
include_once '../../../assets/datalink/dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM village WHERE id=:id and deleted=0");
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
        
 	
	 <form method='post' id='village-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 		<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
        <?php $bid =$row['blockId'];?>
        <tr>
            <td>Village Name</td>
            <td><input type='text' name='txtVillage' id='txtVillage' class='form-control' value='<?php echo $row['villageName']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Village Name(Hindi)</td>
            <td><input type='text' name='txtHVillage' id='txtHVillage' class='form-control' value='<?php echo $row['hVillageName']; ?>' required></td>
        </tr>
         <tr>
            <td>Village Name(Gujarati)</td>
            <td><input type='text' name='txtGVillage' id='txtGVillage' class='form-control' value='<?php echo $row['gVillageName']; ?>' required></td>
        </tr>
        
         <tr>
            <td>Block Name</td>
            <td> 
        <select style="width:100%" id="bid" name="bid">
			<option><b>Plz type or select</b></option>
              <?php
					require_once '../../../assets/datalink/dbconfig.php';
					$stmt = $db_con->prepare("SELECT * FROM block");
					$stmt->bindParam(':bid',$bid);
					$stmt->execute();
					while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
	  		  ?>
		<option value="<?php echo $row['id']; ?>" <?php if ($row['id'] == $bid ){echo 'selected';} ?>> <b><?php echo $row['blockName'].' / '.$row['hBlockName'].' / '.$row['gBlockName']; ?></b></option>
		<?php 
		}	
		?>
		   </select>
           </td>
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