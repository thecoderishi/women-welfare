<?php include("../dashboard/header.php");?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript" src="../../../assets/jquery/jquery-2.0.3.js"></script>
<script type="text/javascript" src="crud.js"></script>
  
<script type="text/javascript">
$(document).ready(function(){
	$("#btn-view").hide();
	
	$("#scheme-SaveForm").hide();
	$("#btn-add").click(function(){
		$(".content-loader").fadeIn('slow');
		$(".content-loader").hide();
		$("#scheme-SaveForm").show();
		$("#btn-add").hide();
		$("#btn-view").show();
	});
	
	
	
	$("#btn-view").click(function(){
		
		$("body").fadeOut('slow', function()
		{
			$("body").load('index.php');
			$("body").fadeIn('slow');
			window.location.href="../scheme/";
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
			var ids = ["txtHScheme","txtareaHSchemeDescription"];
			//var ids = [document.getElementById("txtTypingHindi")];
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
			var ids = ["txtGScheme","txtareaGSchemeDescription"];
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
      
        <h5 class="form-signin-heading">Scheme Records</h5><hr />
        <button class="btn btn-info" type="button" id="btn-add"> <span> <i class="fa fa-pencil" aria-hidden="true"></i></span> &nbsp; Add Scheme Detatils</button>
        <button class="btn btn-info" type="button" id="btn-view"> <span><i class="fa fa-eye" aria-hidden="true"></i></span> &nbsp; View Details</button>
      <!--  <button class="btn btn-info" type="button" name="btn-approv" id="btn-approv"> <span><i class="fa fa-eye" aria-hidden="true"></i></span> &nbsp; Approved</button>
        <button class="btn btn-info" type="button" name="btn-pending" id="btn-pending"> <span><i class="fa fa-eye" aria-hidden="true"></i></span> &nbsp; Pending</button> -->
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
        <th> Scheme in Gujarati</th>
 		<th> Scheme Description in Gujarati</th>
        <th> Category</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once '../../../assets/datalink/dbconfig.php';
        
        $stmt = $db_con->prepare(" SELECT  scheme.id,scheme.schemeName,scheme.hSchemeName,scheme.gSchemeName,scheme.schemeDescription,scheme.schemeDescription,scheme.hSchemeDescription,scheme.gSchemeDescription,scheme.categoryId,category.gCategoryName FROM scheme,category where scheme.deleted=0 && scheme.categoryId = category.id");

        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{$temp =$temp+1;
			?>
			<tr>
			<td><?php echo $temp; ?></td>
			<td><?php echo $row['gSchemeName']; ?></td>
			<td><?php echo $row['gSchemeDescription']; ?></td>
           <td><?php echo $row['gCategoryName']; ?></td>
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
			$("#schemeTypeId").select2();   
        });
    </script>
	  
	<div id="dis">
    <!-- here message will be displayed -->
	</div>
    
	 <form method='post' id='scheme-SaveForm' action="#">
	 <table class='table table-bordered'>
      <tr>
            <td>Scheme Name</td>
            <td><input type='text' name='txtScheme' id='txtScheme' class='form-control' placeholder='' required /></td>
        </tr>
        
 		 <tr>
            <td>Scheme Name in Hindi</td>
            <td><input type='text' name='txtHScheme' id='txtHScheme' class='form-control' placeholder='' required /></td>
        </tr>
       
         <tr>
            <td>Scheme Name in Gujarati</td>
            <td><input type='text' name='txtGScheme' id='txtGScheme' class='form-control' placeholder='' required /></td>
        </tr>
        <tr>
            <td>Scheme Description</td>
            <td><textarea row="3" col="5" name='txtareaSchemeDescription' id='txtareaSchemeDescription' class='form-control' placeholder='' required /></textarea></td>
        </tr>
        <tr>
            <td>Scheme Description(Hindi)</td>
            <td><textarea row="3" col="5" name='txtareaHSchemeDescription' id='txtareaHSchemeDescription' class='form-control' placeholder='' required /></textarea></td>
        </tr>
        <tr>
            <td>Scheme Description(Gujarati)</td>
            <td><textarea row="3" col="5" name='txtareaGSchemeDescription' id='txtareaGSchemeDescription' class='form-control' placeholder='' required /></textarea></td>
        </tr>
	 <tr>
            <td>Category</td>
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
		<option value="<?php echo $row['id']; ?>" > <b><?php echo $row['categoryName'].' / '.$row['hCategoryName'].' / '.$row['gCategoryName']; ?></b></option>
		<?php 
		}	
		?>
		   </select>
           </td>
        </tr>
        <tr>
            <td>Scheme Type</td>
            <td> 
        <select style="width:100%" id="schemeTypeId" name="schemeTypeId">
			<option><b>Plz type or select</b></option>
              <?php
					require_once '../../../assets/datalink/dbconfig.php';
					$stmt = $db_con->prepare("SELECT * FROM schemetype where deleted=0");
					$stmt->execute();
					while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
	  		  ?>
		<option value="<?php echo $row['id']; ?>" > <b><?php echo $row['schemeTypeName'].' / '.$row['hSchemeTypeName'].' / '.$row['gSchemeTypeName']; ?></b></option>
		<?php 
		}	
		?>
		   </select>
           </td>
        </tr>
        
        
		<input type="hidden" value="2" name="txtOfficeId" id="txtOfficeId"/>
		
 
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

<?php include("../dashboard/footer.php");?>
