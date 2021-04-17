 <?
    include("../header.php");
?> 

<style type="text/css">
#dis{
	display:none;
}
</style>



	
	 <form method='post' id='emp-SaveForm' action="#">
 <a href="../../assets/datalink/dbconfig.php">dfgdfgdfdfd</a>
    <table class='table table-bordered'>
	<tr>
            <td>Department</td>
            <td> <select class="form-control" name="departmentid">
			<?php
        require_once '../../../datalink/dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT * from  scheme ORDER BY id");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
		?>
			<option  value="<?php echo $row['id']; ?>" > <?php echo $row['schemeName']; ?> / <?php echo $row['block']; ?>  </option>
		<?php 
		}
		?>
        
      </select>
			</td>
        </tr>
		<tr>
            <td>Designation</td>
            <td> <select class="form-control" name="designationid">
			<?php
        require_once '../datalink/dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT d.id id,d.post post, d.hpost hpost , o.office office  FROM designation d, office o where d.oid=o.id ;");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
		?>
			<option  value="<?php echo $row['id']; ?>" > <?php echo $row['post']; ?> ( <?php echo $row['hpost']; ?> ) - <?php echo $row['office']; ?> </option>
		<?php 
		}
		?>
        
      </select>
			</td>
        </tr>
		<tr>
            <td> College List Sr. No. </td>
            <td><input type='number' name='collegeSerialno' class=' form-control'  /></td>
        </tr>
 <tr>
            <td colspan="2"> <b>Personal Details :</b></td>
            
        </tr>
        <tr>
            <td> Name</td>
            <td><input type='text' name='Sname' class='form-control' placeholder='Mr./Dr./Ms.' required /></td>
        </tr>
 
        <tr>
            <td>Name (Hindi)</td>
            <td><input type='text' name='hName' class='form-control' placeholder='' required></td>
        </tr>
 
         <tr>
            <td>Father/Husband name</td>
            <td><input type='text' name='fname' class='form-control' placeholder='S/o or W/o' required></td>
        </tr>
  <tr>
            <td>Date of Birth </td>
            <td>
			<input name='birth_date' type="date" class='form-control' value="2018-01-06"  required > 
		</td>
 </tr>
 
 <tr>
            <td>Category</td>
            <td>
			<select class="form-control" name="category">
			<option value="GEN">GEN</option>
		   <option value="OBC">OBC</option>
		   <option value="SC">SC</option>
		   <option value="ST">ST</option>
		  </select>
		</td>
 </tr>
  <tr>
            <td>Caste</td>
            <td><input type='text' name='caste' class='form-control' placeholder=' ' ></td>
        </tr>
		<tr>
            <td>Blood Group</td>
            <td> <select class="form-control" name="bloodgroup_id">
			<?php
        require_once '../datalink/dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT * from  bloodgroup ORDER BY id");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
		?>
			<option  value="<?php echo $row['id']; ?>" > <?php echo $row['bgroup']; ?> </option>
		<?php 
		}
		?>
        
      </select>
			</td>
        </tr>
 <tr>
            <td>Gender</td>
            <td>
			<select class="form-control" name="gender">
			<option value="Male">Male</option>
		   <option value="Female">Female</option>
		  </select>
		</td>
 </tr>
 <tr>   
            <td>Marital Status</td>
            <td>
			<select class="form-control" name="marital_status">
			<option value="Single">Single</option>
		   <option value="Married">Married</option>
		   <option value="Window">Widow</option>
		   <option value="Divorce">Divorcee</option>
		  </select>
		</td>
 </tr>
 <tr>
            <td>Religion</td>
            <td>
			<select class="form-control" name="religion">
			<option value="HINDU">HINDU</option>
		   <option value="MUSLIM">MUSLIM</option>
		   <option value="CHRISTIAN">CHRISTIAN</option>
		   <option value="BUDDHIST">BUDDHIST</option>
		  </select>
		</td>
 </tr>
<tr>
            <td>Indentity Mark</td>
            <td><input type='text' name='identitymarks' class='form-control' placeholder=' ' ></td>
        </tr>
		 <tr>
            <td colspan="2"> <b>Contact Details :</b></td>
                </tr>
 
 <tr>
            <td>Mobile Number </td>
            <td><input type='tel' name='mobile' class='form-control' pattern=".{10}" size='10' > </td>
        </tr>
        <tr>
            <td>Residence Phone</td>
            <td><input type='number' name='telephone' class='form-control'  size='11' > </td>
        </tr>
		<tr>
            <td>Emergency Contact</td>
            <td><input type='number' name='emergency_mobile' class='form-control'  size='10' > </td>
        </tr>
		<tr>
            <td>Personal Email</td>
            <td><input type='email' name='emailid' class='form-control' > </td>
        </tr>
		<tr>
            <td>Current Address</td>
            <td><input type='text' name='currentaddress' class='form-control' required> </td>
        </tr>
		<tr>
            <td>State/District</td>
            <td><select class="form-control" name="ca_district_id">
			<?php
        require_once '../datalink/dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT d.id id,d.Name dName,d.hName dhName, s.Name sName,s.hName shName from  state s,district d where d.sid=s.id ORDER BY d.id");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
		?>
			<option  value="<?php echo $row['id']; ?>" > <?php echo $row['dName']; ?> (<?php echo $row['dhName']; ?>) / <?php echo $row['sName']; ?> (<?php echo $row['shName']; ?>)</option>
		<?php 
		}
		?>
        
      </select>
			</td>
        </tr>
		<tr>
            <td>Pin Code</td>
            <td><input type='number' name='ca_pincode' class='form-control' pattern=".{6}" max="999999"> </td>
        </tr>
				<tr>
            <td>Permanent Address</td>
            <td><input type='text' name='permanentaddress' class='form-control' required> </td>
        </tr>
		<tr>
            <td>State/District</td>
            <td><select class="form-control" name="pa_district_id">
			<?php
        require_once '../datalink/dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT d.id id,d.Name dName,d.hName dhName, s.Name sName,s.hName shName from  state s,district d where d.sid=s.id ORDER BY d.id");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
		?>
			<option  value="<?php echo $row['id']; ?>" > <?php echo $row['dName']; ?> (<?php echo $row['dhName']; ?>) / <?php echo $row['sName']; ?> (<?php echo $row['shName']; ?>)</option>
		<?php 
		}
		?>
        
      </select>
			</td>
        </tr>
		<tr>
            <td>Pin Code</td>
            <td><input type='number' name='pa_pincode' class='form-control' pattern=".{6}" max="999999"> </td>
        </tr>
		<tr>
            <td colspan="2"> <b>Service Details :</b></td>
         </tr>
		  <tr>
            <td>Date of First Apointment</td>
            <td>
			<input name="joiningdate" type="date" class='form-control' value="2018-01-06"  required > 
		</td>
 </tr>
 <tr>     <td>Treasury Employee Code</td>
            <td><input type='number' name='trserialno' class='form-control' pattern=".{11}" > </td>
        </tr>
 <tr>
            <td>Job Nature</td>
            <td> <select class="form-control" name="jobnature_id">
			<?php
        require_once '../datalink/dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT * from  jobnature ORDER BY id");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
		?>
			<option  value="<?php echo $row['id']; ?>" > <?php echo $row['nature']; ?>  / <?php echo $row['hnature']; ?> </option>
		<?php 
		}
		?>
        
      </select>
			</td>
        </tr>
		<tr>     <td>PAN No.</td>
            <td><input type='text' name='pan' class='form-control' > </td>
        </tr>
		<tr>     <td>GPF/PRAN/DPF/EPF No.</td>
            <td><input type='text' name='pfno' class='form-control' > </td>
        </tr>
		<tr>
            <td>Domicile State/District</td>
            <td><select class="form-control" name="domicity_id">
			<?php
        require_once '../datalink/dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT d.id id,d.Name dName,d.hName dhName, s.Name sName,s.hName shName from  state s,district d where d.sid=s.id ORDER BY d.id");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
		?>
			<option  value="<?php echo $row['id']; ?>" > <?php echo $row['dName']; ?> (<?php echo $row['dhName']; ?>) / <?php echo $row['sName']; ?> (<?php echo $row['shName']; ?>)</option>
		<?php 
		}
		?>
        
      </select>
			</td>
        </tr>
		<tr>     <td>Bank Account Number </td>
            <td><input type='number' name='bankaccountno' class='form-control' > </td>
        </tr>
		<tr>     <td>Bank IFSC Code</td>
            <td><input type='text' name='ifscode' class='form-control' > </td>
        </tr>
		<tr>     <td>Bank Name</td>
            <td><input type='text' name='bankname' class='form-control' > </td>
        </tr>
		<tr>     <td>Aadhaar Number</td>
            <td><input type='number' name='aadhar' class='form-control'  max='999999999999' > </td>
        </tr>
		 <tr>
            <td>Working Status</td>
            <td> <select class="form-control" name="workingid">
			<?php
        require_once '../datalink/dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT * from  workingstatus ORDER BY id");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
		?>
			<option  value="<?php echo $row['id']; ?>" > <?php echo $row['status']; ?>  / <?php echo $row['hstatus']; ?> </option>
		<?php 
		}
		?>
        
      </select>
			</td>
        </tr>
		<tr>
		  <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Save this Record
			</button>  
            </td>
        </tr>
     </table>
</form>
  
  <div id="dis">
    <!-- here message will be displayed -->
	</div>
     
