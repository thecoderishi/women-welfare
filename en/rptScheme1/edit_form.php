<?php
include_once '../datalink/dbconfig.php';

date_default_timezone_set('America/New_York');


if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$Employeeid = $_GET['edit_id'];	/// for update records 
	$stmt=$db_con->prepare("SELECT * FROM employee WHERE id=:id");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
$b1	 =	$row['name'];
$b2	 =	$row['hName'];
$b3	 =	$row['fname'];
$b4	 = date('d,M Y',strtotime($row['birth_date'])); 
$b5	 =	$row['category'];
$b6	 =	$row['caste'];
$b7	 =	$row['bloodgroup_id'];
$b8	 =	$row['gender'];
$b9	 =	$row['marital_status'];
$b10	 =	$row['religion'];
$b11	 =	$row['identitymarks'];
$b12	 =	$row['mobile'];
$b13	 =	$row['telephone'];
$b14	 =	$row['emergency_mobile'];
$b15	 =	$row['email'];
$b16	 =	$row['currentaddress'];
$b17	 =	$row['ca_district_id'];
$b18	 =	$row['ca_pincode'];
$b19	 =	$row['permanentaddress'];
$b20	 =	$row['pa_district_id'];
$b21	 =	$row['pa_pincode'];
$b22	 =	date('d,M Y',strtotime($row['joiningdate'])); 
$b23	 =	$row['trserialno'];
$b24	 =	$row['jobnature_id'];
$b25	 =	$row['pan'];
$b26	 =	$row['pfno'];
$b27	 =	$row['domcity_id'];
$b28	 =	$row['bankaccountno'];
$b29	 =	$row['ifscode'];
$b30	 =	$row['bankname'];
$b31	 =	$row['aadhar'];
$b32	=	$row['designationid'];
$b33	=	$row['departmentid'];
$b34	=	$row['collegeSerialno'];
$b35	=	$row['workingstatus_id'];

}
?>
<style type="text/css">
#dis{
	display:none;
}
</style>

   
    <div id="dis">
    
	</div>
		<table class="table table-responsive">
  <tr>
    <td></td>
      <td rowspan="3"><img src="<?php echo "../Images/".$b23.".png";?>" class="class="rounded float-right" alt="Employee Profile Picture" width="200px" height="200px"> </td>
       </tr>
  <tr>
    <td><center> <h3> Department :<b> <?php
        require_once '../datalink/dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT * from  department where id='".$b33."'");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			  echo $row['Name']; ?> (<?php echo $row['hName']; 
				}
		?>)</b> </h3></center></td>
     
  </tr>
  <tr>
    <td></td>
     </tr>
</table>

<div class="container">
     <table class='table table-bordered'>
	<input type='hidden' name='id' value='<?php echo $row['id']; ?>' />
	<tr>
            <td colspan="3"> <b>Personal Details :</b></td>
            
        </tr>
	<tr>
                 <td> 
			Name : </td><td colspan="2"><b><?php echo $b1; ?></b>
			</td>
        </tr>
		<tr>
        <td>
       Name (Hindi): </td> <td colspan="2"><b> <?php echo $b2; ?></b>
       </td> </tr>
		
		<tr>
        <td>
         Father/Husband Name: </td> <td colspan="2"><b> <?php echo $b3; ?></b>
       </td> </tr>
		<tr>
           <td>   Designation:</td><td colspan="2"> <b>
			<?php
        require_once '../datalink/dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT d.id id,d.post post, d.hpost hpost , o.office office  FROM designation d, office o where d.oid=o.id  and d.id='".$b32."'");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
		 echo $row['post']; 
		}
		?>
        
      </b>
			</td>
        </tr>
		
 
        <tr>
            <td> Date of Birth :<?php echo $b4; ?></td>
            <td>Gender : <?php echo $b8; ?></td>
			 <td> Category :<?php echo $b5; ?></td>
        </tr>
 
        <tr>
		 <td> Marital Status :<?php echo $b9; ?></td>
            <td> Religion :<?php echo $b10; ?></td>
            <td>Caste : <?php echo $b6; ?></td>
			
        </tr>
  <tr>
		 <td> Blood Group :<?php
        require_once '../datalink/dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT * from  bloodgroup where id='".$b7."'");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
		 echo $row['bgroup']; 
		}?></td>
            <td colspan="2"> Identity Mark :<?php echo $b11; ?></td>
             </tr>
 <tr>
 <td colspan="3"> <b>Contact Details :</b></td>
</tr>
        <tr>
            <td> Mobile :<?php echo $b12; ?></td>
            <td>Residence: <?php echo $b13 ; ?></td>
			 <td> Emergency Contact :<?php echo $b14; ?></td>
        </tr>
		 <tr>
 <td colspan="3"> Email Id : <b><?php echo $b15; ?></b></td>
</tr>

</tr>
        <tr>
            <td colspan="3"> Residence Address :<?php echo $b16; ?></td>
			</tr>
		<tr>
            <td>City/State :</td><td> <?php
        require_once '../datalink/dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT d.id id,d.Name dName,d.hName dhName, s.Name sName,s.hName shName from  state s,district d where d.sid=s.id and d.id='".$b17."'");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
		 echo $row['dName']."/ ". $row['sName'];
		}?> </td>
			 <td> Pin Code :<?php echo $b18; ?></td>
        </tr>
		
		 <tr>
            <td colspan="3"> Permanent Address :<?php echo $b16; ?></td>
			</tr>
		<tr>
            <td>City/State :</td><td> <?php
        require_once '../datalink/dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT d.id id,d.Name dName,d.hName dhName, s.Name sName,s.hName shName from  state s,district d where d.sid=s.id and d.id='".$b20."'");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
		 echo $row['dName']."/ ". $row['sName'];
		}?> </td>
			 <td> Pin Code :<?php echo $b18; ?></td>
        </tr>

<tr>
 <td colspan="3"> <b>Service Detail :</b></td>
</tr>	
 <tr>
            <td> First Apointment Date :<?php echo $b22; ?></td>
            <td>Treasury Employee Code : <?php echo $b23; ?></td>
			 <td> PAN No:<?php echo $b25; ?></td>
        </tr>
<tr>
            <td> gpf/cps no :<?php echo $b26; ?></td>
            <td>Domicile City/State  : <?php
        require_once '../datalink/dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT d.id id,d.Name dName,d.hName dhName, s.Name sName,s.hName shName from  state s,district d where d.sid=s.id and d.id='".$b27."'");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
		 echo $row['dName']."/ ". $row['sName'];
		}?></td>
			 <td>Job Nature :<?php
        require_once '../datalink/dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT * from  jobnature where id='".$b24."'");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			  echo $row['nature']; 
				}
		?></td>
        </tr>		
		<tr><td>Bank Account Number :<?php echo $b28; ?></td>
            <td>Bank IFSC Code : <?php echo $b29; ?></td>
			 <td> Bank Name:<?php echo $b30; ?></td>
        </tr>
		<tr>     <td>Aadhaar Number</td>
            <td colspan="2"><?php echo $b31; ?> </td>
        </tr>
		
		 <tr>
            <td colspan="3">Working Status : <?php
        require_once '../datalink/dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT * from  workingstatus where id='".$b35."'");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			  echo $row['status']; 
				}
		?></td>
                   </tr>
		 </table>
</div>
     