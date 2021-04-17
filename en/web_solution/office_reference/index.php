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
			var ids = ["txtGPerson"] ;
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
			var ids = ["txtHPerson"];
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
	
	$("#country-SaveForm").hide();
	$("#btn-add").click(function(){
		$(".content-loader").fadeIn('slow');
		$(".content-loader").hide();
		$("#country-SaveForm").show();
		$("#btn-add").hide();
		$("#btn-view").show();
	});
	
	
	
	$("#btn-view").click(function(){
		
		$("body").fadeOut('slow', function()
		{
			$("body").load('index.php');
			$("body").fadeIn('slow');
			window.location.href="../country/";
		});
	});
	
});

</script>



</head>

<body>


	<div class="container">
      
        <h5 class="form-signin-heading">office reference  Records</h5><hr />
        <button class="btn btn-info" type="button" id="btn-add"> <span> <i class="fas fa-pencil" aria-hidden="true"></i></span> &nbsp; Office Reference Detatils</button>
        <button class="btn btn-info" type="button" id="btn-view"> <span><i class="fas fa-eye" aria-hidden="true"></i></span> &nbsp; View Details</button>
        <hr />
        
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="emplyeeTable" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th> ID</th>
        <th> Office Details</th>
        <th> Scheme Details </th>
		<th>Contact Person</th>
		<th>Conatct No.</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once '../../../assets/datalink/dbconfig.php';
        
        $stmt = $db_con->prepare("select * from officeReference where deleted =0");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{$temp =$temp+1;
			?>
			<tr>
			<td><?php echo $temp ?></td>
			<td><?php echo $row['officeName']; ?></td>
			<td><?php echo $row['schemeName']; ?></td>
			<td><?php echo $row['contactPerson'].','.$row['hContactPerson'].','.$row['gContactPerson']; ?></td>
			<td><?php echo $row['contactNo']; ?></td>
			
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
   
    
    
    
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script>

         $(document).ready(function() {
            $("#oid").select2(); 
             $("#sid").select2();  
        });
    </script>
	  
	<div id="dis">
    <!-- here message will be displayed -->
	</div>
    
	 <form method='post' id='country-SaveForm' action="#">
	 <table class='table table-bordered'>
      <tr>
            <td>Office Name</td>
            <td> 
        <select style="width:100%" id="oid" name="oid">
			<option><b>Plz type or select</b></option>
              <?php
					require_once '../../../assets/datalink/dbconfig.php';
					$stmt = $db_con->prepare("SELECT office.id id ,officeName,officeAddress,level FROM `office`,typeLevel WHERE office.typeLevelId=typeLevel.id");
					$stmt->execute();
					while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
	  		  ?>
		<option value="<?php echo $row['id']; ?>" > <b><?php echo $row['officeName']."/". $row['officeAddress']."/". $row['level']; ?></b></option>
		<?php 
		}	
		?>
		   </select>
           </td>
        </tr>
        
        
      <tr>
            <td>Scheme Name</td>
            <td> 
        <select style="width:100%" id="sid" name="sid">
			<option><b>Plz type or select</b></option>
              <?php
					require_once '../../../assets/datalink/dbconfig.php';
					$stmt = $db_con->prepare("SELECT * FROM scheme ORDER BY id");
					$stmt->execute();
					while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
	  		  ?>
		<option value="<?php echo $row['id']; ?>" > <b><?php echo $row['schemeName']; ?></b></option>
		<?php 
		}	
		?>
		   </select>
           </td>
        </tr>
        
 		 <tr>
            <td>contact person</td>
            <td><input type='text' name='txtPerson' id='txtPerson' class='form-control' placeholder='' required /></td>
        </tr>
       
         <tr>
            <td>Contact person in Hindi</td>
            <td><input type='text' name='txtHPerson' id='txtHPerson' class='form-control' placeholder='' required /></td>
        </tr>
        
         <tr>
            <td>Contact person in Gujarati</td>
            <td><input type='text' name='txtGPerson' id='txtGPerson' class='form-control' placeholder='' required /></td>
        </tr>
	
	
      	<tr>
            <td>Contact No.</td>
            <td><input type='text' name='txtContact' id='txtContact' class='form-control' placeholder='' required /></td>
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