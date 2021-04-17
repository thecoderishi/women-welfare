
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Admin-Panel</title>
<link href="../bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="../bootstrap/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="../font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" media="screen"> 
<link href="../DataTables/datatables.min.css" rel="stylesheet" type="text/css">
<link href="crud_style.css" rel="stylesheet" type="text/css">


<style>
	
</style>-->
<?php require_once("../dashboard/header.php");?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript" src="../jquery/jquery-2.0.3.js"></script>
<script type="text/javascript" src="crud_pending.js"></script>
  
<script type="text/javascript">
$(document).ready(function(){
	$("#btn-view").hide();
	
	$("#category-SaveForm").hide();
	$("#btn-add").click(function(){
		$(".content-loader").fadeIn('slow');
		$(".content-loader").hide();
		$("#category-SaveForm").show();
		$("#btn-add").hide();
		$("#btn-view").show();
	});
	
	
	
	$("#btn-view").click(function(){
		
		$("body").fadeOut('slow', function()
		{
			$("body").load('index.php');
			$("body").fadeIn('slow');
			window.location.href="../category/";
		});
	});
	
	/*
	function check(cb)
	{
		
		if ($(this).is(':checked')){
			
			$.getScript("approved.php");
			
		});	
	}*/
	
});


    // Load the Google Transliterate API
    google.load("elements", "1", {
        packages: "transliteration"
    });

    function onLoad() {
        var options = {
            sourceLanguage: 'en', // or google.elements.transliteration.LanguageCode.ENGLISH,
            destinationLanguage: ['gu'], // or [google.elements.transliteration.LanguageCode.HINDI],
            //shortcutKey: 'ctrl+g',
            transliterationEnabled: true
        };
        // Create an instance on TransliterationControl with the required
        // options.
        if (google.elements.transliteration.isBrowserCompatible()) {
            var control = new google.elements.transliteration.TransliterationControl(options);
            // Enable transliteration in the textfields with the given ids.
            //var ids = ["txt1","txt2","txt3" ]
			var ids = ["txtGCategory"] ;
			//var ids = [document.getElementById("txtTypingGujrati")];
            control.makeTransliteratable(ids);
        }
        // Show the transliteration control which can be used to toggle between
        // English and Hindi.
        control.showControl('FormArea');
    }
    google.setOnLoadCallback(onLoad);



    // Load the Google Transliterate API
    google.load("elements", "1", {
        packages: "transliteration"
    });

    function onLoad() {
        var options = {
            sourceLanguage: 'en', // or google.elements.transliteration.LanguageCode.ENGLISH,
            destinationLanguage: ['hi'], // or [google.elements.transliteration.LanguageCode.HINDI],
            shortcutKey: 'ctrl+g',
            transliterationEnabled: true
        };
        // Create an instance on TransliterationControl with the required
        // options.
        if (google.elements.transliteration.isBrowserCompatible()) {
            var control = new google.elements.transliteration.TransliterationControl(options);
            // Enable transliteration in the textfields with the given ids.
            //var ids = ["txt1","txt2","txt3" ] 
			var ids = ["txtHCategory"];
			//var ids = [document.getElementById("txtTypingHindi")];
            control.makeTransliteratable(ids);
        }
        // Show the transliteration control which can be used to toggle between
        // English and Hindi.
        control.showControl('FormArea');
    }
    google.setOnLoadCallback(onLoad);
</script>



</head>

<body>


	<div class="container">
      
      <h5 class="form-signin-heading">Category Records</h5><hr />
        <button class="btn btn-info" type="button" id="btn-add"> <span> <i class="fa fa-pencil" aria-hidden="true"></i></span> &nbsp; Add Category Detatils</button>
        <button class="btn btn-info" type="button" id="btn-view"> <span><i class="fa fa-eye" aria-hidden="true"></i></span> &nbsp; View Details</button>
        <button class="btn btn-info" type="button" name="btn-approv" id="btn-approv"> <span><i class="fa fa-eye" aria-hidden="true"></i></span> &nbsp; Approved</button>
        <button class="btn btn-info" type="button" name="btn-pending" id="btn-pending"> <span><i class="fa fa-eye" aria-hidden="true"></i></span> &nbsp; Pending</button>
        <hr />	
        
            <div class="tab-lng">
            	<button type="button" class="btn btn-default btn-lng" name="btn-lng-gu" id="btn-lng-gu"> Gujarati </button>           	
                <button type="button" class="btn btn-default btn-lng" name="btn-lng-hi" id="btn-lng-hi"> Hindi </button>
            	<button type="button" class="btn btn-default btn-lng" name="btn-lng-en" id="btn-lng-en"> English </button>
            </div>
        
        
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="emplyeeTable" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th> ID</th>
        <th> Category</th>
        <th> Approved</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once '../../../assets/datalink/dbconfig.php';
        
        $stmt = $db_con->prepare(" SELECT  categorytemp.id,categorytemp.categoryName,categorytemp.hCategoryName,categorytemp.gCategoryName FROM categorytemp where categorytemp.deleted=0 && categorytemp.requestedUser=1");

        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{$temp =$temp+1;
			?>
			<tr>
			<td><?php echo $temp; ?></td>
			<td><?php echo $row['categoryName']; ?></td>
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
        
        </div>
    </div>
    
    
    
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
    
	 <form method='post' id='category-SaveForm' action="#">
	 <table class='table table-bordered'>
      <tr>
            <td>Category Name</td>
            <td><input type='text' name='txtCategory' id='txtCategory' class='form-control' placeholder='' required /></td>
        </tr>
        
 		 <tr>
            <td>Category Name in Hindi</td>
            <td><input type='text' name='txtHCategory' id='txtHCategory' class='form-control' placeholder='' required /></td>
        </tr>
       
         <tr>
            <td>Category Name in Gujarati</td>
            <td><input type='text' name='txtGCategory' id='txtGCategory' class='form-control' placeholder='' required /></td>
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

    

   
<script type="text/javascript" src="../DataTables/datatables.min.js"></script>
<script type="text/javascript" src="../bootstrap/bootstrap.min.js"></script>
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


<!---- Loading Button ---->

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




<!-- end the Google Transliteration API -->
<!--
</body>
</html>-->
<?php require_once("../dashboard/header.php");?>