<link href="../DataTables/datatables.min.css" rel="stylesheet" type="text/css">
 
        <table cellspacing="0" width="100%" id="emplyeeTable" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th> ID</th>
        <th> Category in Gujarati</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once '../datalink/dbconfig.php';
        
        $stmt = $db_con->prepare(" SELECT  category.id,category.categoryName,category.hCategoryName,category.gCategoryName FROM category where category.deleted=0");

        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{$temp =$temp+1;
			?>
			<tr>
			<td><?php echo $temp; ?></td>
			<td><?php echo $row['gCategoryName']; ?></td>
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
        
   <script type="text/javascript" src="crud.js" charset="utf-8"></script>
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