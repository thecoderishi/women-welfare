  <script src="crud_pending.js" type="text/javascript"></script>

 <link href="../DataTables/datatables.min.css" rel="stylesheet" type="text/css">

        <table cellspacing="0" width="100%" id="emplyeeTable" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th> ID</th>
        <th> Category in Hindi</th>
        <th> Approved</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once '../datalink/dbconfig.php';
        
        $stmt = $db_con->prepare(" SELECT  categorytemp.id,categorytemp.categoryName,categorytemp.hCategoryName,categorytemp.gCategoryName FROM categorytemp where categorytemp.deleted=0 && categorytemp.requestedUser=1");

        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{$temp =$temp+1;
			?>
			<tr>
			<td><?php echo $temp; ?></td>
			<td><?php echo $row['hCategoryName']; ?></td>
			<td align="center">
			<input type="checkbox" name="approved" class="approved" value="<?php echo $row['id'];?>">
            </td>
            <td align="center">
			<a id="<?php echo $row['id']; ?>" class="edit-link" href="#" title="Edit">
			 <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            </a></td>
			<td align="center"><a id="<?php echo $row['id'];?>" class="delete-link" href="#"  title="Delete" data-toggle="tooltip" data-placement="right">
			<i class="fa fa-window-close" aria-hidden="true"></i>
            </a></td>
			</tr>
			<?php
		}
		?>
        </tbody>
        </table>
        
        <script type="text/javascript" src="../DataTables/datatables.min.js"></script>
		<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
	$('#emplyeeTable').DataTable();  

	$('#emplyeeTable')
	.removeClass( 'display' )
	.addClass('table table-bordered');
});
$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>