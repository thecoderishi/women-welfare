<?php
include_once '../datalink/dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM Country WHERE id=:id && deleted=0");
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
        });
    </script>
    
    <div id="dis">
    
	</div>
        
 	
	 <form method='post' id='Country-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 		<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
        <?php $cid =$row['countryID'];?>
        <tr>
            <td>Country Name</td>
            <td><input type='text' name='txtCountry' id='txtCountry' class='form-control' value='<?php echo $row['countryName']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Country Name(Hindi)</td>
            <td><input type='text' name='txtHCountry' id='txtHCountry' class='form-control' value='<?php echo $row['hCountryName']; ?>' required></td>
        </tr>
         <tr>
            <td>Country Name(Gujarati)</td>
            <td><input type='text' name='txtGCountry' id='txtGCountry' class='form-control' value='<?php echo $row['gCountryName']; ?>' required></td>
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

<script>
$(function() { 
    $("#btn-update").click(function(){
        $(this).button('loading').delay(1000).queue(function() {
			
	/**/
            $(this).button('reset');
            $(this).dequeue();
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
            shortcutKey: 'ctrl+g',
            transliterationEnabled: true
        };
        // Create an instance on TransliterationControl with the required
        // options.
        if (google.elements.transliteration.isBrowserCompatible()) {
            var control = new google.elements.transliteration.TransliterationControl(options);
            // Enable transliteration in the textfields with the given ids.
            //var ids = ["txt1","txt2","txt3" ]
			var ids = ["txtGCountry"] ;
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
			var ids = ["txtHCountry"];
			//var ids = [document.getElementById("txtTypingHindi")];
            control.makeTransliteratable(ids);
        }
        // Show the transliteration control which can be used to toggle between
        // English and Hindi.
        control.showControl('FormArea');
    }
    google.setOnLoadCallback(onLoad);

</script>


<!-- end the Google Transliteration API -->