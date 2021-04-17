
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
require_once("../dashboard/header.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Admin-Panel</title>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript" src="../jquery/jquery-2.0.3.js"></script>
<script type="text/javascript" src="crud.js"></script>

<script>

    // Load the Google Transliterate API
    google.load("elements", "1", {
        packages: "transliteration"
    });

    function onLoad() {
        var options = {
            sourceLanguage: 'en', // or google.elements.transliteration.LanguageCode.ENGLISH,
            destinationLanguage: ['gu'], // or [google.elements.transliteration.LanguageCode.HINDI],
            shortcutKey: 'ctrl+g',
            transliterationEnabled: true
        };
        // Create an instance on TransliterationControl with the required
        // options.
        if (google.elements.transliteration.isBrowserCompatible()) {
            var control = new google.elements.transliteration.TransliterationControl(options);
            // Enable transliteration in the textfields with the given ids.
            //var ids = ["txt1","txt2","txt3" ]
			var ids = ["txtGVillage"] ;
			//var ids = [document.getElementById("txtTypingGujrati")];
            control.makeTransliteratable(ids);
        }
        // Show the transliteration control which can be used to toggle between
        // English and Hindi.
        control.showControl('FormArea');
    }
    google.setOnLoadCallback(onLoad);
</script>
<script>


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
			var ids = ["txtHVillage"];
			//var ids = [document.getElementById("txtTypingHindi")];
            control.makeTransliteratable(ids);
        }
        // Show the transliteration control which can be used to toggle between
        // English and Hindi.
        control.showControl('FormArea');
    }
    google.setOnLoadCallback(onLoad);

</script>


  
<script type="text/javascript">
$(document).ready(function(){
	$("#btn-view").hide();
	
	$("#village-SaveForm").hide();
	$("#btn-add").click(function(){
		$(".content-loader").fadeIn('slow');
		$(".content-loader").hide();
		$("#village-SaveForm").show();
		$("#btn-add").hide();
		$("#btn-view").show();
	});
	
	
	
	$("#btn-view").click(function(){
		
		$("body").fadeOut('slow', function()
		{
			$("body").load('index.php');
			$("body").fadeIn('slow');
			window.location.href="../village/";
		});
	});
	
});

</script>



</head>

<body>


	<div class="container">
      
        <h5 class="form-signin-heading">Village Records</h5><hr />
        <button class="btn btn-info" type="button" id="btn-add"> <span> <i class="fas fa-pencil" aria-hidden="true"></i></span> &nbsp; Add Village Detatils</button>
        <button class="btn btn-info" type="button" id="btn-view"> <span><i class="fas fa-eye" aria-hidden="true"></i></span> &nbsp; View Details</button>
        <hr />
        
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="emplyeeTable" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th> ID</th>
        <th> Village</th>
        <th>Village in Hindi</th>
		<th>Village in Gujarati</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once '../../../assets/datalink/dbconfig.php';
        
        $stmt = $db_con->prepare(" SELECT * from village where deleted=0");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{$temp =$temp+1;
			?>
			<tr>
			<td><?php echo $temp ?></td>
			<td><?php echo $row['villageName']; ?></td>
			<td><?php echo $row['hVillageName']; ?></td>
			<td><?php echo $row['gVillageName']; ?></td>
			
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
    
	 <form method='post' id='village-SaveForm' action="#">
	 <table class='table table-bordered'>
      <tr>
            <td>Village Name</td>
            <td><input type='text' name='txtVillage' id='txtVillage' class='form-control' placeholder='' required /></td>
        </tr>
        
 		 <tr>
            <td>Village Name in Hindi</td>
            <td><input type='text' name='txtHVillage' id='txtHVillage' class='form-control' placeholder='' required /></td>
        </tr>
       
         <tr>
            <td>Village Name in Gujarati</td>
            <td><input type='text' name='txtGVillage' id='txtGVillage' class='form-control' placeholder='' required /></td>
        </tr>
        <tr>
            <td>Block Name</td>
            <td> 
        <select style="width:100%" id="bid" name="bid">
			<option><b>Plz type or select</b></option>
              <?php
					require_once '../../../assets/datalink/dbconfig.php';
					$stmt = $db_con->prepare("SELECT * FROM block where deleted=0");
					$stmt->execute();
					while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
	  		  ?>
		<option value="<?php echo $row['id']; ?>" > <b><?php echo $row['blockName'].' / '.$row['hBlockName'].' / '.$row['gBlockName']; ?></b></option>
		<?php 
		}	
		?>
		   </select>
           </td>
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

     </div>

   
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

</body>
</html>