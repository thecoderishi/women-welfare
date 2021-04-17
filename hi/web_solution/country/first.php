
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Admin-Panel</title>
<link href="../bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="../bootstrap/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="../font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" media="screen"> 
<link href="../DataTables/datatables.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://www.google.com/jsapi"></script>


<style>
	
</style>
<script type="text/javascript" src="../jquery/jquery-2.0.3.js"></script>
<script type="text/javascript" src="crud.js"></script>
  
<script type="text/javascript">
$(document).ready(function(){
	
	$("#btn-view").hide();
	
	$("#state-SaveForm").hide();
	$("#btn-add").click(function(){
		$(".content-loader").fadeIn('slow');
		$(".content-loader").hide();
		$("#state-SaveForm").show();
		$("#btn-add").hide();
		$("#btn-view").show();
	});
	
	$("#btn-view").click(function(){
		
		$("body").fadeOut('slow', function()
		{
			$("body").load('index.php');
			$("body").fadeIn('slow');
			window.location.href="../crud/";
		});
	});
	
});
</script>

</head>

<body>


	<div class="container">
      
        <h5 class="form-signin-heading">State Records</h5><hr />
        <button class="btn btn-info" type="button" id="btn-add"> <span> <i class="fa fa-pencil" aria-hidden="true"></i></span> &nbsp; Add State Detatils</button>
        <button class="btn btn-info" type="button" id="btn-view"> <span><i class="fa fa-eye" aria-hidden="true"></i></span> &nbsp; View Details</button>
        <hr />
        
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="emplyeeTable" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th> ID</th>
        <th> State</th>
        <th> राज्य</th>
		<th> રાજ્ય</th>
		<th> Country</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once '../datalink/dbconfig.php';
        
        $stmt = $db_con->prepare(" SELECT state.id, state.stateName , state.hStateName , state.gStateName , country.countryName from state,country where state.deleted=0 && state.countryId = country.id");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{$temp =$temp+1;
			?>
			<tr>
			<td><?php echo $temp ?></td>
			<td><?php echo $row['stateName']; ?></td>
			<td><?php echo $row['hStateName']; ?></td>
			<td><?php echo $row['gStateName']; ?></td>
			<td><?php echo $row['countryName']; ?></td>
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
    
	 <form method='post' id='state-SaveForm' action="#">
	 <table class='table table-bordered'>
      <tr>
            <td>State Name</td>
            <td><input type='text' name='txtState' id='txtState' class='form-control' placeholder='' required /></td>
        </tr>
        
 		 <tr>
            <td>State Name in Hindi</td>
            <td><input type='text' name='txtHState' id='txtHState' class='form-control' placeholder='' required /></td>
        </tr>
       
         <tr>
            <td>State Name in Gujarati</td>
            <td><input type='text' name='txtGState' id='txtGState' class='form-control' placeholder='' required /></td>
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


   
<script type="text/javascript" src="../DataTables/datatables.min.js"></script>
<script type="text/javascript" src="../bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
	$('#emplyeeTable').DataTable();  

	$('#emplyeeTable')
	.removeClass( 'display' )
	.addClass('table table-bordered');
});

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});

<!---- Loading Button ---->

$(function() { 
    $("#btn-save").click(function(){
        $(this).button('loading').delay(1000).queue(function() {
			
	
            $(this).button('reset');
            $(this).dequeue();
        });        
    });
});   


// Load the Google Transliterate API(For hindi)
    google.load("elements", "1", {
        packages: "transliteration"
    });

    function onLoad() {
        var options = {
            sourceLanguage: 'en', // or google.elements.transliteration.LanguageCode.ENGLISH, en
            destinationLanguage: ['hi'], // or [google.elements.transliteration.LanguageCode.HINDI], hi
            shortcutKey: 'ctrl+q',
            transliterationEnabled: true 
        };
        // Create an instance on TransliterationControl with the required
        // options.
        if (google.elements.transliteration.isBrowserCompatible()) {
            var control = new google.elements.transliteration.TransliterationControl(options);
            // Enable transliteration in the textfields with the given ids.
            var ids = ['txtHState','txtHState'] ;
			//var ids = [document.getElementById("txtTypingGoogle")];
            control.makeTransliteratable(ids);
        }
        // Show the transliteration control which can be used to toggle between
        // English and Hindi.
        control.showControl('FormArea');
    }
    google.setOnLoadCallback(onLoad);
	
	
// Load the Google Transliterate API(for Gujarati)
    google.load("elements", "1", {
        packages: "transliteration"
    });

    function onLoad() {
        var options = {
            sourceLanguage: 'en', // or google.elements.transliteration.LanguageCode.ENGLISH, en
            destinationLanguage: ['gj'], // or [google.elements.transliteration.LanguageCode.GUJARATI], gj
            shortcutKey: 'ctrl+q',
            transliterationEnabled: true 
        };
        // Create an instance on TransliterationControl with the required
        // options.
        if (google.elements.transliteration.isBrowserCompatible()) {
            var control = new google.elements.transliteration.TransliterationControl(options);
            // Enable transliteration in the textfields with the given ids.
            var ids = ["txtGState","txtGState"] ;
			//var ids = [document.getElementById("txtTypingGoogle")];
            control.makeTransliteratable(ids);
        }
        // Show the transliteration control which can be used to toggle between
        // English and Hindi.
        control.showControl('FormArea');
    }
    google.setOnLoadCallback(onLoad);

</script>

</body>
</html>