<HTML>
<head>
<style>

</style>
<meta charset="utf-8">
<title>Untitled Document</title>
<?php
 $time=10;
 ?>


<script>
var m=10;
 var t;
 var s=59;
 
function display()
{
	//setInterval("show();",1000);
	document.getElementById("mytime").innerHTML= m+":"+s;
	if(m==0 && s==0)
	{
		document.form1.submit();
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
		t= setInterval("display();",1000);
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
<body onLoad="atimer();">
<div id="mytime"></div>

</body>
</HTML>























