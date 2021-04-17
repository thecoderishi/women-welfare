<?php
include_once '../../../assets/datalink/dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM scheme WHERE id=:id and deleted=0");
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
             $("#stid").select2();
        });
    </script>
    
    <div id="dis">
    
	</div>
        
 	
	 <form method='post' id='scheme-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 		<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
        <?php $cid =$row['categoryId'];
            $stid =$row['schemeTypeId'];?>
        <tr>
            <td>Scheme Name</td>
            <td><input type='text' name='txtScheme' id='txtScheme' class='form-control' value='<?php echo $row['schemeName']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Scheme Name(Hindi)</td>
            <td><input type='text' name='txtHScheme' id='txtHScheme' class='form-control' value='<?php echo $row['hSchemeName']; ?>' required></td>
        </tr>
         <tr>
            <td>Scheme Name(Gujarati)</td>
            <td><input type='text' name='txtGScheme' id='txtGScheme' class='form-control' value='<?php echo $row['gSchemeName']; ?>' required></td>
        </tr>
         <tr>
            <td>Scheme Description</td>
            <td><textarea row="3" col="5" name='txtareaSchemeDescription' id='txtareaSchemeDescription' class='form-control'  required ><?php echo $row['schemeDescription']; ?> </textarea></td>
        </tr>
        <tr>
            <td>Scheme Description(Hindi)</td>
            <td><textarea row="3" col="5" name='txtareaHSchemeDescription' id='txtareaHSchemeDescription' class='form-control'  required ><?php echo $row['hSchemeDescription']; ?> </textarea></td>
        </tr>
        <tr>
            <td>Scheme Description(Gujarati)</td>
            <td><textarea row="3" col="5" name='txtareaGSchemeDescription' id='txtareaGSchemeDescription' class='form-control' required ><?php echo $row['gSchemeDescription']; ?> </textarea></td>
        </tr>
	 <tr>
        <tr>
            <td>Category Name</td>
            <td> 
        <select style="width:100%" id="cid" name="cid">
			<option><b>Plz type or select</b></option>
              <?php
					require_once '../../../assets/datalink/dbconfig.php';
					$stmt = $db_con->prepare("SELECT * FROM category where deleted=0");
					$stmt->execute();
					while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
	  		  ?>
		<option value="<?php echo $row['id']; ?>" <?php if ($row['id'] == $cid ){echo 'selected';} ?>> <b> <?php echo $row['categoryName'].' / '.$row['hCategoryName'].' / '.$row['gCategoryName']; ?></b></option>
		<?php 
		}	
		?>
		   </select>
           </td>
        </tr>
        
        <tr>
            <td>Scheme Type</td>
            <td> 
        <select style="width:100%" id="stid" name="stid">
			<option><b>Plz type or select</b></option>
              <?php
					require_once '../../../assets/datalink/dbconfig.php';
					$stmt = $db_con->prepare("SELECT * FROM schemeType where deleted=0");
					$stmt->execute();
					while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
	  		  ?>
		<option value="<?php echo $row['id']; ?>" <?php if ($row['id'] == $stid ){echo 'selected';} ?>> <b> <?php echo $row['schemeTypeName'].' / '.$row['hSchemeTypeName'].' / '.$row['gSchemeTypeName']; ?></b></option>
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