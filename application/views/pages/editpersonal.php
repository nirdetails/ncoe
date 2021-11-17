<div class="mb-5">
	<h2>Edit Personal Details Form</h2>
</div>

<!-- <h2>Personal Details Form</h2> -->
<?php
  if (!isset($_SESSION["alindex"])){
    redirect('/');
  }
?>
<?php echo validation_errors(); ?>
<?php // echo form_open_multipart('students/personaldetails'); ?>
<form action="<?php echo site_url(); ?>students/personaldetails" enctype="multipart/form-data" method="post" accept-charset="utf-8">
  <div class="form-group">
  <?php // var_dump($_SESSION['sworker']); ?>
      <label for="fullname">Name in Full: </label>
      <input type="text" class="form-control" id="fullname" placeholder="Enter your full name" name="fullname" value="<?php echo $_SESSION['fullname']; ?>">
    </div>
    <div class="form-group">
      <label for="namewithinitials">Name with Initials: </label>
      <input type="text" class="form-control" id="namewithinitials" placeholder="Enter your name with Initials" name="namewithinitials" value="<?php echo $_SESSION['namewithinitials']; ?>">
    </div>
    <div class="form-group">
      <label for="dob">Date of Birth: </label>
      <input type="date" class="form-control" id="dob"  name="dob" value="<?php echo $_SESSION['dob']; ?>">
    </div>
    <div class="form-group">
      <label for="address">Permanent Address: </label>
    <input type="text" class="form-control" id="addressline1" placeholder="Street address / P.O Box / Company name" name="addressline1" value="<?php echo $_SESSION['addressline1']; ?>"><br>
      <input type="text" class="form-control" id="addressline2" placeholder="Apartment / Suite / Unit / Building / Floor" name="addressline2" value="<?php echo $_SESSION['addressline2']; ?>"><br>
      <input type="text" class="form-control" id="addressline3" placeholder="City" name="addressline3" value="<?php echo $_SESSION['addressline3']; ?>"><br>
      <input type="text" class="form-control" id="addressline4" placeholder="Postal Code" name="addressline4" value="<?php echo $_SESSION['addressline4']; ?>"><br>
    </div>
    <div class="form-group">
      <label for="district">Permanent Residence District Name and Number: </label>
      <!-- <input type="text" class="form-control" id="district" placeholder="Enter your district name and number" name="district"> -->
      <?php 
        $districts = array('16' => 'Ampara', "20" => 'Anuradhapura',"22" => 'Badulla',"15" => 'Batticaloa',"01" => 'Colombo',"07" => 'Galle',"02" => 'Gampaha',"09" => 'Hambantota',"10" => 'Jaffna',"03" => 'Kaluthara',"04" => 'Kandy',"25" => 'Kegalle',"11" => 'Kilinochchi',"18" => 'Kurunegala',"12" => 'Mannar',"05" => 'Matale',"08" => 'Matara',"23" => 'Monaragala',"14" => 'Mullaitivu',"06" => 'Nuwara Eliya',"21" => 'Polonnaruwa',"19" => 'Puttalam',"24" => 'Ratnapura',"17" => 'Trincomalee',"13" => 'Vavuniya');
      ?>
      <select class="form-control" id="district" name="district">
        <option value="">Select a District</option>
        <?php 
        foreach ($districts as $key => $value) {
          if ($key == $_SESSION['district']) {
            echo('<option selected="selected" value='.$key.'>'.$value.'</option>');
          } else {
            echo('<option value='.$key.'>'.$value.'</option>');
          }
        }?>
      </select>
    </div>
   
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
             <label for="nic">NIC Number: </label>
             <input type="text" class="form-control" id="nic" placeholder="Enter your NIC" name="nic" value="<?php echo $_SESSION['nic']; ?>">
           </div>
        </div>

        <?php if($_SESSION['gender'] == "female"){ ?>
        <div class="col-sm-6">  
            <div class="form-group">
              <label for="gender">Gender: </label><br>
              <input type="radio" name="gender"
              <?php if (isset($gender) && $gender=="female") echo "checked";?>
              value="female" checked>Female
              <input type="radio" name="gender"
              <?php if (isset($gender) && $gender=="male") echo "checked";?>
              value="male">Male
            </div>
         </div>
        <?php } ?>

        <?php if($_SESSION['gender'] == "male"){ ?>
        <div class="col-sm-6">  
            <div class="form-group">
              <label for="gender">Gender: </label><br>
              <input type="radio" name="gender"
              <?php if (isset($gender) && $gender=="female") echo "checked";?>
              value="female">Female
              <input type="radio" name="gender"
              <?php if (isset($gender) && $gender=="male") echo "checked";?>
              value="male" checked>Male
            </div>
         </div>
        <?php } ?>
    </div>
<?php $titlevals = array('Mr', 'Miss', 'Rev'); ?>
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group"> 
          <label for="title">Title: <span style="color:red">* <?php echo form_error('title'); ?></span></label>
          <select class="form-control" id="title" placeholder="Mr/Mrs/Miss/Rev.." name="title">
          <option value="">Select</option>
          <?php 
          foreach($titlevals as $titleval){
            if($titleval == $_SESSION['title']){
              echo "<option value='$titleval' Selected>$titleval</option>";
            }else{
              echo "<option value='$titleval'>$titleval</option>";
            }
          }
          ?>
          </select>
        </div>
        </div>
        <?php $ethnicvals  = array('Sinhalese', 'Sri Lankan Tamil' , 'Tamil of Indian Origin', 'Muslim', 'Other'); ?>
        <div class="col-sm-6">   
            <div class="form-group">          
            <label for="ethnicity">Race: <span style="color:red">* <?php echo form_error('ethnicity'); ?></span></label>
            <select class="form-control" id="ethnicity" placeholder="Enter your Ethnicity" name="ethnicity">
            <option value="">Select</option>
            <?php
              foreach($ethnicvals as $ethnicval){
                if($ethnicval == $_SESSION['ethnicity']){
                  echo "<option value='$ethnicval' Selected>$ethnicval</option>";
                }else{
                  echo "<option value='$ethnicval'>$ethnicval</option>";
                }
              }
            ?>
            </select>
            </div>
        </div>
    </div>


    <label>Contact Details:</label><br>       
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group"> 
               <label for="mobile">Mobile Number: </label>
                <input type="text" class="form-control" id="mobile" placeholder="0700000000" name="mobile" value="<?php echo $_SESSION['mobile']; ?>">
            </div>
        </div>
        <div class="col-sm-6">  
            <div class="form-group">           
                <label for="home">Landline Number: </label>
                <input type="text" class="form-control" id="home" placeholder="0000000000" name="home" value="<?php echo $_SESSION['home']; ?>"> 
            </div>     
        </div>
    </div>

    <div class="form-group">            
            <label for="home">Email: </label>
            <input type="email" class="form-control" id="email" placeholder="abc@gmail.com" name="email" value="<?php echo $_SESSION['email']; ?>">             
    </div>
    <!-- <button type="submit" name="btnprv" class="btn btn-info"><span class="glyphicon glyphicon-arrow-left"></span> Previous</button> -->
    <!-- <a class="btn btn-primary" href="">Recheck</a> -->
    <button type="submit" name="btnnext" class="btn btn-info"><span  class="glyphicon glyphicon-arrow-right"></span> Next </button>


</form>

