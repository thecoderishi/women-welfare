<?php
require_once '../datalink/dbconfig.php';

	
	if($_POST)
{ $id = $_POST['id'];
$a1	 =	trim($_POST['Sname']);
$a2	 =	trim($_POST['hName']);
$a3	 =	trim($_POST['fname']);
$a4	 =	$_POST['birth_date'];
$a5	 =	$_POST['category'];
$a6	 =  (!empty($_POST['caste'])) ? trim($_POST['caste'] ): null;
$a7	 =	$_POST['bloodgroup_id'];
$a8	 =	$_POST['gender'];
$a9	 =	$_POST['marital_status'];
$a10	 =	$_POST['religion']; 
$a11	 =	(!empty($_POST['identitymarks'])) ? trim($_POST['identitymarks'] ): null;
$a12	 =	(!empty($_POST['mobile'])) ? trim($_POST['mobile'] ): null;
$a13	 =	(!empty($_POST['telephone'])) ? trim($_POST['telephone'] ): null;
$a14	 =	(!empty($_POST['emergency_mobile'])) ? trim($_POST['emergency_mobile'] ): null;
$a15	 =	(!empty($_POST['emailid'])) ? trim($_POST['emailid'] ): null;
$a16	 = (!empty($_POST['currentaddress'])) ? trim($_POST['currentaddress'] ): null;
$a17	 =	$_POST['ca_district_id'];
$a18	 =	(!empty($_POST['ca_pincode'])) ? trim($_POST['ca_pincode'] ): null;
$a19	 =	(!empty($_POST['permanentaddress'])) ? trim($_POST['permanentaddress'] ): null;
$a20	 =	$_POST['pa_district_id'];
$a21	 =	(!empty($_POST['pa_pincode'])) ? trim($_POST['pa_pincode'] ): null;
$a22	 =	$_POST['joiningdate'];
$a23	 =	(!empty($_POST['trserialno'])) ? trim($_POST['trserialno'] ): null;
$a24	 =	$_POST['jobnature_id'];
$a25	 =	(!empty($_POST['pan'])) ? trim($_POST['pan'] ): null;
$a26	 =	(!empty($_POST['pfno'])) ? trim($_POST['pfno'] ): null;
$a27	 =	$_POST['domicity_id'];
$a28	 =	(!empty($_POST['bankaccountno'])) ? trim($_POST['bankaccountno'] ): null;
$a29	 =	 (!empty($_POST['ifscode'])) ? trim($_POST['ifscode'] ): null;
$a30	 =	 (!empty($_POST['bankname'])) ? trim($_POST['bankname'] ): null;
$a31	 =  (!empty($_POST['aadhar'])) ? trim($_POST['aadhar'] ): null;
$a32	=	$_POST['designationid'];
$a33	=	$_POST['departmentid'];
$a34	=	(!empty($_POST['collegeSerialno'])) ? trim($_POST['collegeSerialno'] ): null;
$a35	=	$_POST['workingid'];

/*$msg="UPDATE employee SET  name=".$a1.", hName=".$a2.", fname=".$a3.", birth_date=".$a4.", category=".$a5.", caste=".$a6.", bloodgroup_id=".$a7.", gender=".$a8.", marital_status=".$a9.", religion=".$a10.", identitymarks=".$a11.", mobile=".$a12.", telephone=".$a13.", emergency_mobile=".$a14.", email=".$a15.", currentaddress".$a16.", ca_district_id=".$a17.", ca_pincode=".$a18.", permanentaddress=".$a19.", pa_district_id=".$a20.", pa_pincode=".$a21.", joiningdate=".$a22.", trserialno=".$a23.", jobnature_id=".$a24.", pan=".$a25.", pfno=".$a26.", domcity_id=".$a27.", bankaccountno=".$a28.", ifscode=".$a29.", bankname=".$a30.", aadhar=".$a31.", designationid=".$a32.", departmentid=".$a33.", collegeSerialno=".$a34.", workingstatus_id=".$a35." WHERE id=".$id;;
echo '<script language="javascript">';
echo 'alert("'. $msg.'")';
echo '</script>';
*/
	try{
	
	 $stmt = $db_con->prepare("UPDATE employee SET  name=:A1, hName=:A2, fname=:A3, birth_date=:A4, category=:A5, caste=:A6, bloodgroup_id=:A7, gender=:A8, marital_status=:A9, religion=:A10, identitymarks=:A11, mobile=:A12, telephone=:A13, emergency_mobile=:A14, email=:A15, currentaddress=:A16, ca_district_id=:A17, ca_pincode=:A18, permanentaddress=:A19, pa_district_id=:A20, pa_pincode=:A21, joiningdate=:A22, trserialno=:A23, jobnature_id=:A24, pan=:A25, pfno=:A26, domcity_id=:A27, bankaccountno=:A28, ifscode=:A29, bankname=:A30, aadhar=:A31, designationid=:A32, departmentid=:A33, collegeSerialno=:A34, workingstatus_id=:A35 WHERE id=:id");
$stmt->bindParam(":id", $id);		
$stmt->bindParam(":A1",$a1);
$stmt->bindParam(":A2",$a2);
$stmt->bindParam(":A3",$a3);
$stmt->bindParam(":A4",$a4);
$stmt->bindParam(":A5",$a5);
$stmt->bindParam(":A6",$a6);
$stmt->bindParam(":A7",$a7);
$stmt->bindParam(":A8",$a8);
$stmt->bindParam(":A9",$a9);
$stmt->bindParam(":A10",$a10);
$stmt->bindParam(":A11",$a11);
$stmt->bindParam(":A12",$a12);
$stmt->bindParam(":A13",$a13);
$stmt->bindParam(":A14",$a14);
$stmt->bindParam(":A15",$a15);
$stmt->bindParam(":A16",$a16);
$stmt->bindParam(":A17",$a17);
$stmt->bindParam(":A18",$a18);
$stmt->bindParam(":A19",$a19);
$stmt->bindParam(":A20",$a20);
$stmt->bindParam(":A21",$a21);
$stmt->bindParam(":A22",$a22);
$stmt->bindParam(":A23",$a23);
$stmt->bindParam(":A24",$a24);
$stmt->bindParam(":A25",$a25);
$stmt->bindParam(":A26",$a26);
$stmt->bindParam(":A27",$a27);
$stmt->bindParam(":A28",$a28);
$stmt->bindParam(":A29",$a29);
$stmt->bindParam(":A30",$a30);
$stmt->bindParam(":A31",$a31);
$stmt->bindParam(":A32",$a32);
$stmt->bindParam(":A33",$a33);
$stmt->bindParam(":A34",$a34);
$stmt->bindParam(":A35",$a35);
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
	}
		catch(PDOException $e){
			echo $e->getMessage();
		}
}
?>