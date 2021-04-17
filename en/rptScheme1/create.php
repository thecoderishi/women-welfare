<?php
require_once '../datalink/dbconfig.php';

	
	if($_POST)
	{	
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


	try{
			
//$msg=("INSERT INTO employee(name,hName,fname,birth_date,category,caste,bloodgroup_id,gender,marital_status,religion,identitymarks,mobile,telephone,emergency_mobile,email,currentaddress,ca_district_id,ca_pincode,permanentaddress,pa_district_id,pa_pincode,joiningdate,trserialno,jobnature_id,pan,pfno,domicity_id,bankaccountno,ifscode,bankname,aadhar,designationid,departmentid,collegeSerialno)  VALUES ($a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9,$a10,$a11,$a12,$a13,$a14,$a15,$a16,$a17,$a18,$a19,$a20,$a21,$a22,$a23,$a24,$a25,$a26,$a27,$a28,$a29,$a30,$a31,$a32,$a33,$a34)");

	//		echo $msg;
			$stmt = $db_con->prepare("INSERT INTO employee(name,hName,fname,birth_date,category,caste,bloodgroup_id,gender,marital_status,religion,identitymarks,mobile,telephone,emergency_mobile,email,currentaddress,ca_district_id,ca_pincode,permanentaddress,pa_district_id,pa_pincode,joiningdate,trserialno,jobnature_id,pan,pfno,domcity_id,bankaccountno,ifscode,bankname,aadhar,designationid,departmentid,collegeSerialno,workingstatus_id)  VALUES (:A1,:A2,:A3,:A4,:A5,:A6,:A7,:A8,:A9,:A10,:A11,:A12,:A13,:A14,:A15,:A16,:A17,:A18,:A19,:A20,:A21,:A22,:A23,:A24,:A25,:A26,:A27,:A28,:A29,:A30,:A31,:A32,:A33,:A34,:A35 )");
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
				echo "Successfully Added";
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