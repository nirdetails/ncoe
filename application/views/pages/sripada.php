<h2><?= $title; ?></h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="index1" id="label1" title=" National College of Education">Are you applying for Sripada NCoE?</label>
      <select name="sri1"  id="l1" height="4">
         <option id="def1" selected>SELECT</option>
        <option id="yes">Yes</option>
        <option id="no">No</option>
    </select>
    </div>
    <br>
   
    <div class="form-group">
    <label for="index2" id="label2" name="state" style="display :none">Are your parents are State Workers?</label>
      <select name="sri2"  id="l2" height="4" style="display :none">
         <option id="def2" selected>SELECT</option>
        <option id="yes2">Yes</option>
        <option id="no2">No</option>
        </select>
      <br>

    </div>
    
  
    <button type="submit" class="btn btn-info">Submit</button>
  </form>
<script src="<?php echo site_url(); ?>assets/js/sripada.js">

