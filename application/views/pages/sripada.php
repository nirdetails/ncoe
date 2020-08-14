<h2><?= $title; ?></h2>
<span style="color: red;"><?php echo validation_errors(); ?></span>
<?php echo form_open_multipart('students/sripada'); ?>
    <div class="form-group">
      <label for="index1" id="label1" title=" National College of Education">Are you applying for Sripada NCoE? <span style="color:red">* </span></label>
      <select name="sripada"  id="sripada" height="4" class="form-control">
        <option selected value="">SELECT</option>
        <option id="y" >Yes</option>
        <option id="n" >No</option>
    </select>
    </div>
    <br>
   
    <div class="form-group">
    <label for="sworker" id="label2" name="state" style="display :none">Are your parents are State Workers? <span style="color:red">* </span></label>
      <select name="sworker"  id="sworker" height="4" style="display :none" class="form-control">
        <option selected value="">SELECT</option>
        <option id="y">Yes</option>
        <option id="n">No</option>
        </select>
      <br>

    </div>
    
  
    <button type="submit" class="btn btn-info">Submit</button>
  </form>
<script src="<?php echo site_url(); ?>assets/js/sripada.js">

