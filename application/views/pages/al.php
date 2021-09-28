<h2><?= $title; ?></h2>
<span style="color: red;"><?php echo validation_errors(); ?></span>
<?php // echo form_open_multipart('alresults/checkalres'); ?>
<form action="<?php echo site_url(); ?>alresults/checkalres" enctype="multipart/form-data" method="post" accept-charset="utf-8">
	
	<div class="row">
		<div class="col-12 col-sm-6">
			<div class="form-group">
				<label for="year">A\L year: <span style="color:red">* </span></label>
				<input type="text" class="form-control" id="year" placeholder="Enter your A/L year" name="year">
			</div>
		</div>
		<div class="col-12 col-sm-6">
			<div class="form-group">
				<label for="index">A\L index number: <span style="color:red">* </span></label>
				<input type="text" class="form-control" id="index" placeholder="Enter your A\L index number" name="index">
			</div>
		</div>

		<!-- Validation error messages goes here -->
		

	
  <div class="form-group">
    <!-- <label for="git">Sat for the GIT exam: </label>
    <select class="form-control" id="git" name="git" placeholder="Enter the GIT marks">
      <option value="">SELECT</option>
      <option value="yes">YES</option>
      <option value="no">NO</option>
    </select> -->
  </div>
  <!-- <div class="form-group">
    <label for="stream">Stream</label>
    <div class="form-group">
      <select name="sel1" class="form-control" id="sel1">
        <option id="" selected>STREAM</option>
        <option id="maths">MATHS</option>
        <option id="bio">BIO SCIENCE</option>
        <option id="commerce">COMMERCE</option>
        <option id="arts">ARTS</option>
        <option id="tech">TECHNOLOGY</option>
        <option id="comm">COMMON</option>
      </select>
    </div> -->
    <!-- <br>
  </div> -->
  
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>
<div class="row">
  &nbsp;
</div>
<br>
<footer class="footer">
    <div class="container">
        <span><h4>©2020 Data Management Branch, Ministry of Education, Sri Lanka.</h4></span>
    </div>
</footer>
