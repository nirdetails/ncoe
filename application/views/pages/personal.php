<div class="mb-5">
	<h2><?= $title; ?></h2>
</div>
<!-- <h2>Personal Details Form</h2> -->
<?php
  if (!isset($_SESSION["alindex"])){
    redirect('/');
  }
  // print_r($_SESSION);
?>
<span style="color: red;"><?php // echo validation_errors(); ?></span>
<?php //echo form_open_multipart('students/personaldetails'); ?>
<form action="<?php echo site_url(); ?>students/personaldetails" enctype="multipart/form-data" method="post" accept-charset="utf-8">
  <div class="form-group">
  <?php // var_dump($_SESSION['sworker']); ?>
      <label for="fullname">Name in Full: <span style="color:red">* <?php echo form_error('fullname'); ?></span></label>
      <input type="text" class="form-control" id="fullname" placeholder="Enter Your Full Name" name="fullname" value="<?=set_value('fullname')?>" />
      <label><i>Ex: Wasala Arachchilage Saman Kumara Rajapaksha</i></label>
    </div>
    <div class="form-group">
      <label for="namewithinitials">Name with Initials: <span style="color:red">* <?php echo form_error('namewithinitials'); ?></span></label>
      <input type="text" class="form-control" id="namewithinitials" placeholder="Enter Your Name with Initials" name="namewithinitials" value="<?=set_value('namewithinitials')?>" />
      <label><i>Ex: Rajapaksha W.A.S.K. </i></label>
    </div>
    <div class="form-group">
      <label for="dob">Date of Birth: <span style="color:red">*<?php echo form_error('dob');?> </span></label>
      <input type="date" class="form-control" id="dob"  name="dob" min="1997-01-01" max="2022-01-01" value="<?=set_value('dob')?>" / >
    </div>
    <div class="form-group">
      <label for="address">Permanent Address: <span style="color:red">* <?php echo form_error('addressline1'); echo form_error('addressline2'); echo form_error('addressline3'); echo form_error('addressline4');?></span></label>
    <input type="text" class="form-control" id="addressline1" placeholder="Street Address / P.O Box / Company Name" name="addressline1" value="<?=set_value('addressline1')?>" /><br>
      <input type="text" class="form-control" id="addressline2" placeholder="Apartment / Suite / Unit / Building / Floor" name="addressline2" value="<?=set_value('addressline2')?>" /><br>
      <input type="text" class="form-control" id="addressline3" placeholder="City" name="addressline3" value="<?=set_value('addressline3')?>" /><br>
      <input type="text" class="form-control" id="addressline4" placeholder="Postal Code" name="addressline4" value="<?=set_value('addressline4')?>" /><br>
    </div>
 





    <div class="form-group">
      <label for="district">Permanent Residence District Name and Number: <span style="color:red">* <?php echo form_error('district'); ?></span></label>
      <label><i>(<span style="color:red">*</span>Applicant’s permanent address according to section <b>“6.2 Determination of Permanent Residence”</b> of the gazette notification.)</i></label>
      <!-- <input type="text" class="form-control" id="district" placeholder="Enter your district name and number" name="district"> -->
      <select class="form-control" id="district" placeholder="Select a district" name="district" >
      <option value="16" <?php if(isset($_POST['district']) && $_POST['district'] == "16") echo 'selected="selected"';?>>D16 - Ampara</option>
      <option value="20" <?php if(isset($_POST['district']) && $_POST['district'] == "20") echo 'selected="selected"';?>>D20 - Anuradhapura</option>
      <option value="22" <?php if(isset($_POST['district']) && $_POST['district'] == "22") echo 'selected="selected"';?>>D22 - Badulla</option>
      <option value="15" <?php if(isset($_POST['district']) && $_POST['district'] == "15") echo 'selected="selected"';?>>D15 - Batticaloa</option>
      <option value="01" <?php if(isset($_POST['district']) && $_POST['district'] == "01") echo 'selected="selected"';?>>D01 - Colombo</option>
      <option value="07" <?php if(isset($_POST['district']) && $_POST['district'] == "07") echo 'selected="selected"';?>>D07 - Galle</option>
      <option value="02" <?php if(isset($_POST['district']) && $_POST['district'] == "02") echo 'selected="selected"';?>>D02 - Gampaha</option> 
      <option value="09" <?php if(isset($_POST['district']) && $_POST['district'] == "09") echo 'selected="selected"';?>>D09 - Hambantota</option>
      <option value="10" <?php if(isset($_POST['district']) && $_POST['district'] == "10") echo 'selected="selected"';?>>D10 - Jaffna</option> 
      <option value="03" <?php if(isset($_POST['district']) && $_POST['district'] == "03") echo 'selected="selected"';?>>D03 - Kaluthara</option> 
      <option value="04" <?php if(isset($_POST['district']) && $_POST['district'] == "04") echo 'selected="selected"';?>>D04 - Kandy</option>  
      <option value="25" <?php if(isset($_POST['district']) && $_POST['district'] == "25") echo 'selected="selected"';?>>D25 - Kegalle</option>  
      <option value="11" <?php if(isset($_POST['district']) && $_POST['district'] == "11") echo 'selected="selected"';?>>D11 - Kilinochchi</option> 
      <option value="18" <?php if(isset($_POST['district']) && $_POST['district'] == "18") echo 'selected="selected"';?>>D18 - Kurunegala</option> 
      <option value="12" <?php if(isset($_POST['district']) && $_POST['district'] == "12") echo 'selected="selected"';?>>D12 - Mannar</option> 
      <option value="05" <?php if(isset($_POST['district']) && $_POST['district'] == "05") echo 'selected="selected"';?>>D05 - Matale</option> 
      <option value="08" <?php if(isset($_POST['district']) && $_POST['district'] == "08") echo 'selected="selected"';?>>D08 - Matara</option> 
      <option value="23" <?php if(isset($_POST['district']) && $_POST['district'] == "23") echo 'selected="selected"';?>>D23 - Monaragala</option>
      <option value="14" <?php if(isset($_POST['district']) && $_POST['district'] == "14") echo 'selected="selected"';?>>D14 - Mullaitivu</option> 
      <option value="06" <?php if(isset($_POST['district']) && $_POST['district'] == "06") echo 'selected="selected"';?>>D06 - Nuwara Eliya</option> 
      <option value="21" <?php if(isset($_POST['district']) && $_POST['district'] == "21") echo 'selected="selected"';?>>D21 - Polonnaruwa</option> 
      <option value="19" <?php if(isset($_POST['district']) && $_POST['district'] == "19") echo 'selected="selected"';?>>D19 - Puttalam</option> 
      <option value="24" <?php if(isset($_POST['district']) && $_POST['district'] == "24") echo 'selected="selected"';?>>D24 - Ratnapura</option> 
      <option value="17" <?php if(isset($_POST['district']) && $_POST['district'] == "17") echo 'selected="selected"';?>>D17 - Trincomalee</option> 
      <option value="13" <?php if(isset($_POST['district']) && $_POST['district'] == "13") echo 'selected="selected"';?>>D13 - Vavuniya</option> 
        
      </select>
    </div>
   
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
             <label for="nic">NIC Number: <span style="color:red">* <?php echo form_error('nic'); ?></span></label>
             <input type="text" class="form-control" id="nic" placeholder="Enter Your NIC" name="nic" value="<?=set_value('nic')?>" />
           </div>
        </div>

        <div class="col-sm-6">  
            <div class="form-group">
              <label for="gender">Gender: <span style="color:red">* <?php echo form_error('gender'); ?></span></label><br>
              <input type="radio" name="gender"
              <?php if (isset($gender) && $gender=="female") echo "checked";?>
              value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == "female") echo "checked";?>> Female
              <input type="radio" name="gender"
              <?php if (isset($gender) && $gender=="male") echo "checked";?>
              value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == "male") echo "checked";?>> Male
            </div>
         </div>

    </div>




    

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group"> 
                <label for="title">Title: <span style="color:red">* <?php echo form_error('title'); ?></span></label>
                <select class="form-control" id="title" placeholder="Mr/Mrs/Miss/Rev.." name="title">
                <option value="Mr" <?php if(isset($_POST['title']) && $_POST['title'] == "Mr") echo 'selected="selected"';?>>Mr</option>
                <option value="Miss" <?php if(isset($_POST['title']) && $_POST['title'] == "Miss") echo 'selected="selected"';?>>Miss</option>
                <option value="Rev" <?php if(isset($_POST['title']) && $_POST['title'] == "Rev") echo 'selected="selected"';?>>Rev</option>
                 
                </select>
             </div>
        </div>
        <div class="col-sm-6">   
            <div class="form-group">          
                <label for="ethnicity">Race: <span style="color:red">* <?php echo form_error('ethnicity'); ?></span></label>
                <select class="form-control" id="ethnicity" placeholder="Enter your Ethnicity" name="ethnicity" >
                <option value="Sinhalese" <?php if(isset($_POST['ethnicity']) && $_POST['ethnicity'] == "Sinhalese") echo 'selected="selected"';?>>Sinhalese</option>
                <option value="Sri Lankan Tamil" <?php if(isset($_POST['ethnicity']) && $_POST['ethnicity'] == "Sri Lankan Tamil") echo 'selected="selected"';?>>Sri Lankan Tamil</option>  
                <option value="Tamil of Indian Origin" <?php if(isset($_POST['ethnicity']) && $_POST['ethnicity'] == "Tamil of Indian Origin") echo 'selected="selected"';?>>Tamil of Indian Origin</option>  
                <option value="Muslim" <?php if(isset($_POST['ethnicity']) && $_POST['ethnicity'] == "Muslim") echo 'selected="selected"';?>>Muslim</option>  
                <option value="Other" <?php if(isset($_POST['ethnicity']) && $_POST['ethnicity'] == "Other") echo 'selected="selected"';?>>Other</option>   
          
                </select>      
             </div>
        </div>
    </div>


    <label>Contact Details:</label><br>       
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group"> 
               <label for="mobile">Mobile Number: </label>
                <input type="text" class="form-control" id="mobile" placeholder="0700000000" name="mobile" value="<?=set_value('mobile')?>" />
            </div>
        </div>
        <div class="col-sm-6">  
            <div class="form-group">           
                <label for="home">Landline Number: </label>
                <input type="text" class="form-control" id="home" placeholder="0000000000" name="home" value="<?=set_value('home')?>" /> 
            </div>     
        </div>
    </div>

    <div class="form-group">            
            <label for="home">Email: </label>
            <input type="email" class="form-control" id="email" placeholder="abc@gmail.com" name="email" value="<?=set_value('email')?>" />             
    </div>
   
    <input type="hidden" value="<?php echo $_SESSION['alindex']; ?>" name="alindex">
    <input type="hidden" value="<?php echo $_SESSION['year']; ?>" name="year">
    <input type="hidden" value="<?php echo $_SESSION['olindex1']; ?>" name="olindex1">
    <input type="hidden" value="<?php echo $_SESSION['year1']; ?>" name="year1">
    <input type="hidden" value="<?php echo $_SESSION['olindex2']; ?>" name="olindex2">
    <input type="hidden" value="<?php echo $_SESSION['year2']; ?>" name="year2">
    <input type="hidden" value="<?php echo $_SESSION['olindex3']; ?>" name="olindex3">
    <input type="hidden" value="<?php echo $_SESSION['year3']; ?>" name="year3">
    <input type="hidden" value="<?php echo $_SESSION['sripada']; ?>" name="sripada">
    <input type="hidden" value="<?php echo $_SESSION['sworker']; ?>" name="sworker">
    <!-- <button type="submit" name="btnprv" class="btn btn-info"><span class="glyphicon glyphicon-arrow-left"></span> Previous</button> -->
    <!-- <a class="btn btn-primary" href="">Recheck</a> -->
  
    <button type="submit" name="btnnext" class="btn btn-info"><span  class="glyphicon glyphicon-arrow-right"></span> Next </button>


</form>
</div>
<br>

