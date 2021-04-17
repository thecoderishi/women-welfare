<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script>
var t;
 var s=59;
 var m=100075324;
function display()
{
	
	//setInterval("show();",1000);
	document.getElementById("mytime").innerHTML=m+":"+s;
	/*var minute=document.getElementById("mytime").value;*/
	
	if(m==0 && s==0)
	{
		 alert("hello"); /* header("location:login.php"); */
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

</script>

</head>

<body>
	<div id="mytime"> </div>
	<script> var a = display(); </script>
</body>
</html>