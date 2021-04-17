<?php
	include("datalink/dbconfig.php");
	
    echo $category_id=$_REQUEST['category'];
    $scheme_name=$_REQUEST['txtSchemeName'];
	 'a';
	 $scheme_name=trim($scheme_name," ");
	 'b';
	$bindArr = explode(" ", $scheme_name);
	//print_r( $bindArr);
        
	$closing_braces = count($bindArr);
		
	$query = "select * from scheme";    
	for($i = 0; $i < count($bindArr); $i++)
	{
		if ($i == 0)
		{
			$query.= '  where category_id=:cid and s_name LIKE :a'.$i;
		} 
		else 
		{        
			$query.= ' or s_name LIKE :a'.$i;
		}
	}
	
	
	
	//echo $query.'<br>';
	
	$stmt = $db_con->prepare($query);
	$stmt->bindParam(":cid",$category_id);
	for($i = 0; $i < count($bindArr); $i++)
	{ 
	'a'.$i;
	$bindArr[$i];
	$tmp[$i]="%".$bindArr[$i]."%";
	//echo '<br>';
	$stmt->bindParam(":a".$i,$tmp[$i]);
	//$stmt->bindParam(":a".$i,$bindArr[$i]);
	}
	
      if($stmt->execute())
	  {
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			
			echo '<div class="row" style="border:solid">';
			echo '<div><h3>'.$row['s_name'].'</h3></div>';
				echo '<div class="col-md-3">ydrtfyui';
				echo '</div>';
				echo '<div class="col-md-9">';		
					echo '<a><span class="glyphicon glyphicon-map-marker"><span>location</a>';
					echo '<div>'.$row['s_description'].'</div>';
				echo '</div>';
			echo '</div>';
		}
	  }
		else
		{
		echo 'error';	
		}


?>