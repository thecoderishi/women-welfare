
<?php session_start(); 
echo $_SESSION['count_wrong_pass'];
?>
<script>
	
$(document).ready(function(){
	  
	  	if( <?php  $_SESSION['count_wrong_pass'] ?>==3)	
{
	function display()
{
	
	
	//setInterval("show();",1000);
	document.getElementById("mytime").innerHTML=m+":"+s;
	/*var minute=document.getElementById("mytime").value;*/
	
	if(m==0 && s==0)
	{
		<?php // header("location:login.php"); ?> 
	}
	if(s==0)
	{
		m=m-1;
		s=59;
	}
	s=s-1;
}
function atimer()
{
		t = setInterval("display();",1000);
}

function tstart()
{
	atimer();
}
function tpause()
{
	clearInterval(t);
}
}
   

});

</script>

































