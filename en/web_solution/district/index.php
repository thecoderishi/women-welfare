
<?php include("../dashboard/header.php"); ?>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript" src="crud.js"></script>
  
<script type="text/javascript">
$(document).ready(function(){
	$("#btn-view").hide();
	
	$("#district-SaveForm").hide();
	$("#btn-add").click(function(){
		$(".content-loader").fadeIn('slow');
		$(".content-loader").hide();
		$("#district-SaveForm").show();
		$("#btn-add").hide();
		$("#btn-view").show();
	});
	
	
	
	$("#btn-view").click(function(){
		
		$("body").fadeOut('slow', function()
		{
			$("body").load('index.php');
			$("body").fadeIn('slow');
			window.location.href="../district/";
		});
	});
	
});

</script>
<script>

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
			var ids = ["txtGDistrict"] ;
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
			var ids = ["txtHDistrict"];
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
      
        <h5 class="form-signin-heading">District Records</h5><hr />
        <button class="btn btn-info" type="button" id="btn-add"> <span> <i class="fas fa-pencil-alt" aria-hidden="true"></i></span> &nbsp; Add District Detatils</button>
        <button class="btn btn-info" type="button" id="btn-view"> <span><i class="fas fa-eye" aria-hidden="true"></i></span> &nbsp; View Details</button>
        <hr />
        
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="emplyeeTable" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th> ID</th>
        <th> District</th>
        <th> District in Hindi</th>
		<th> District in Gujarati</th>
		<th> State</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once '../../../assets/datalink/dbconfig.php';
        
        $stmt = $db_con->prepare(" SELECT district.id, district.districtName , district.hDistrictName , district.gDistrictName , state.stateName from district,state where district.deleted=0 && district.stateId = state.id");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{$temp =$temp+1;
			?>
			<tr>
			<td><?php echo $temp ?></td>
			<td><?php echo $row['districtName']; ?></td>
			<td><?php echo $row['hDistrictName']; ?></td>
			<td><?php echo $row['gDistrictName']; ?></td>
			<td><?php echo $row['stateName']; ?></td>
            <td align="center">
			<a id="<?php echo $row['id']; ?>" class="edit-link" href="#" title="Edit">
			 <i class="fas fa-pencil-square-o" aria-hidden="true"></i>
            </a></td>
			<td align="center"><a id="<?php echo $row['id'];?>" class="delete-link" href="#"  title="Delete" data-toggle="tooltip" data-placement="right">
			<i class="fas fa-window-close" aria-hidden="true"></i>
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
    
	 <form method='post' id='district-SaveForm' action="#">
	 <table class='table table-bordered'>
      <tr>
            <td>District Name</td>
            <td><input type='text' name='txtDistrict' id='txtDistrict' class='form-control' placeholder='' required /></td>
        </tr>
        
 		 <tr>
            <td>District Name in Hindi</td>
            <td><input type='text' name='txtHDistrict' id='txtHDistrict' class='form-control' placeholder='' required /></td>
        </tr>
       
         <tr>
            <td>District Name in Gujarati</td>
            <td><input type='text' name='txtGDistrict' id='txtGDistrict' class='form-control' placeholder='' required /></td>
        </tr>
	 <tr>
            <td>State</td>
            <td> 
        <select style="width:100%" id="cid" name="cid">
			<option><b>Plz type or select</b></option>
              <?php
					require_once '../../../assets/datalink/dbconfig.php';
					$stmt = $db_con->prepare("SELECT * FROM state ORDER BY id");
					$stmt->execute();
					while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
	  		  ?>
		<option value="<?php echo $row['id']; ?>" > <b><?php echo $row['stateName']; ?></b></option>
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



</script>




<?php include("../dashboard/footer.php"); ?>
