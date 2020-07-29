<script>
function myFunction() {
  alert("Your Application is submitted. Thank you!");
}
</script>

  <h2><?= $title; ?></h2>
  <?php echo form_open_multipart('submission/submit'); ?>
    <input type="hidden" value="<?php echo $_SESSION['alindex']; ?>" name="alindex">
    <input type="hidden" value="<?php echo $_SESSION['olindex1']; ?>" name="olindex1">
    <input type="hidden" value="<?php echo $_SESSION['olindex2']; ?>" name="olindex2">
    <input type="hidden" value="<?php echo $_SESSION['olindex3']; ?>" name="olindex3">
    <input type="hidden" value="<?php echo $_SESSION['sripada']; ?>" name="sripada">
    <input type="hidden" value="<?php echo $_SESSION['sworker']; ?>" name="sworker">

    <input type="hidden" value="<?php echo $_SESSION['fullname']; ?>" name="fullname">
    <input type="hidden" value="<?php echo $_SESSION['namewithinitials']; ?>" name="namewithinitials">
    <input type="hidden" value="<?php echo $_SESSION['dob']; ?>" name="dob">
    <input type="hidden" value="<?php echo $_SESSION['addressline1']; ?>" name="addressline1">
    <input type="hidden" value="<?php echo $_SESSION['addressline2']; ?>" name="addressline2">
    <input type="hidden" value="<?php echo $_SESSION['addressline3']; ?>" name="addressline3">
    <input type="hidden" value="<?php echo $_SESSION['addressline4']; ?>" name="addressline4">

    <input type="hidden" value="<?php echo $_SESSION['district']; ?>" name="district">
    <input type="hidden" value="<?php echo $_SESSION['nic']; ?>" name="nic">
    <input type="hidden" value="<?php echo $_SESSION['gender']; ?>" name="gender">
    <input type="hidden" value="<?php echo $_SESSION['title']; ?>" name="title">
    <input type="hidden" value="<?php echo $_SESSION['ethnicity']; ?>" name="ethnicity">
    <input type="hidden" value="<?php echo $_SESSION['mobile']; ?>" name="mobile">
    <input type="hidden" value="<?php echo $_SESSION['home']; ?>" name="home">
    <input type="hidden" value="<?php echo $_SESSION['email']; ?>" name="email">
    <input type="hidden" value="<?php echo $_SESSION['pirivena']; ?>" name="pirivena">

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group"> 
                <div style="text-align :left">
                  <!-- <button style= "padding:20px;font-size:20px" type="submit" name="btnprv" class="btn btn-info"><span class="glyphicon glyphicon-arrow-left"></span> Recheck</button> -->
                  <a href="" class="btn btn-primary">Recheck</a>
                </div>      
         </div>
        </div>
        <div class="col-sm-6">   
            <div class="form-group">  
                <div style="text-align :right">
                  <button style= "padding:20px;font-size:20px" type="submit" name="btnprv" class="btn btn-info"><span class="glyphicon glyphicon-arrow-left"></span> Submit</button>
                </div> 
             </div>
        </div>
    </div>

    <p style="text-align :center"><b>Download your application here:</b></br></br>
        <a href="#" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-save-file"></span> Save File 
        </a>
      </p> 



  </form>
