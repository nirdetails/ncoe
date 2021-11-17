<?php // var_dump($courses); ?>
<?php
  if (!isset($_SESSION["alindex"])){
    redirect('/');
  }
?>

<div class="mb-5">
	<h2>Select Your Courses</h2>
</div>

  <span style="color: red;"><?php echo validation_errors(); ?></span>
  <?php // echo form_open_multipart('courses/select'); ?>

<form action="<?php echo site_url(); ?>courses/select" enctype="multipart/form-data" method="post" accept-charset="utf-8">
  <div class="form-group">
    <label for="preference1">Select Your Course Preference 1: </label>
    <select class="form-control" id="course1" name="course1">
			<option value="">Select</option>
			<?php foreach($courses as $course): ?>
        <option value="<?php echo $course['course_no']?>"><?php echo $course['course_no']?> - <?php echo ucfirst($course['name']); ?></option>
      <?php endforeach; ?>                                                   
    </select>
  </div>
  <div class="form-group">
    <label for="preference2">Select Your Course Preference 2: </label>
    <select class="form-control" id="course2" name="course2">
      <option value="">Select</option>
      <?php foreach($courses as $course): ?>
        <option value="<?php echo $course['course_no']?>"><?php echo $course['course_no']?> - <?php echo ucfirst($course['name']); ?></option>
      <?php endforeach; ?>                                                   
    </select>
  </div>
  <div class="form-group">
    <label for="preference3">Select Your Course Preference 3: </label>
    <select class="form-control" id="course3" name="course3">
      <option value="">Select</option>
      <?php foreach($courses as $course): ?>
        <option value="<?php echo $course['course_no']?>"><?php echo $course['course_no']?> - <?php echo ucfirst($course['name']); ?></option>
      <?php endforeach; ?>                                                   
    </select>
  </div>


	<?php if($_SESSION['alindex'] != ""){ ?>
  <input type="hidden" name="alindex" value="<?php echo $_SESSION['alindex']; ?>">
<?php } ?>
  <!-- <div class="row" > -->
    <div id="certificates" style="display :none;">
      <div class="col-sm-12" style="background-color: #ddffff; border-radius: 5px;">
			<label for="coursename"><b>Physical Education: </b></label><br>
				<div class="form-row">
					<div class="form-group col-md-4">
						<label><p><span style="color:red">* </span><i>G.C.E. (O/L) Examination Marks</i></p></label><br>
						<input type="number" class="form-control col-sm-4" id="peolmarks" onBlur="calcSum();" name="peolmarks" /> 
					</div>
					<div class="form-group col-md-4">
						<label><p><span style="color:red">* </span><i>Marks According to the Gazette</i></p></label><br>
						<input type="number" class="form-control col-sm-4" id="pencoemarks" onBlur="calcSum();" name="pencoemarks" /> 
					</div>
					<div class="form-group col-md-4">
						<label><p><span style="color:red">* </span><i>Total Marks</i></p></label><br>
						<input type="number" class="form-control col-sm-4" id="pemarks1" name="pemarks1" max=80 value="" /> 
					</div>
				</div>

				<script>
					function calcSum()
					{
							var num1 = parseInt(document.getElementById("peolmarks").value);
							var num2 = parseInt(document.getElementById("pencoemarks").value);
							document.getElementById("pemarks1").value = num1 + num2;

					}
    		</script>

<!-- 
				<div class="form-group">
          <label for="coursename"><b>Physical Education Marks: </b></label><br>
          <label><p><span style="color:red">* </span><i>Calculate the final score manually and enter here. When calculating do not miss the marks for G.C E O/L health science</i></p></label><br>
          <input type="number" class="form-control col-sm-4" id="pemarks1" name="pemarks1" >  
          &nbsp;  
        </div> -->

      </div>
      <!-- <div id="div2" class="col-sm-12">
        <label for="myfile"  ><b>Upload your Physical Education Certificates:</b></label><br>
        <label><p><span style="color:red">* </span><i>Rename your files with NIC number "_" and file order<br><b>Ex: 90167236V_1.pdf</b></i></label><br>
        <label><span style="color:red">* </span><i>Use esch button to upload one file. You can upload upto 3 files<br></i></label><br>
        <label><span style="color:red">* </span><i>Only pdf files are accepted.<br></i></p></label><br>
        <input title="you can upload 3 Certificates only" type="file" id="peupload1" name="peupload1" multiple><br><br>
        <input title="you can upload 3 Certificates only" type="file" id="peupload2" name="peupload2" multiple><br><br>
        <input title="you can upload 3 Certificates only" type="file" id="peupload3" name="peupload3" multiple><br><br>
      </div> -->
    </div>
    <br>
  <!-- </div> -->
  <div class="col-sm-12" id="category"  style="display :none; background-color: #ddffff; border-radius: 5px;">  
    <div class="form-group">
      <label for="category"><b>Select Catholicism or Christianity: </b></label><br>
      <input type="radio" name="category" value="Catholic"> Catholicism
      <br>
      <input type="radio" name="category" value="Christianity"> Christianity
      <br>
      &nbsp;
    </div>
  </div>
  <!-- <div id="box" style="display :none">
    <label for="myfile"><b>Upload your religion Certificates:</b></label><br>
    <label><p><span style="color:red">* </span><i>Rename your files with NIC number "_" and file order<br><b>Ex: 90167236V_1.pdf</b></i></label><br>
    <label><span style="color:red">* </span><i>Use esch button to upload one file. You can upload upto 3 files<br></i></label><br>
    <label><span style="color:red">* </span><i>Only pdf files are accepted.<br></i></p></label><br>
    <input title="you can upload 3 Certificates only" type="file" id="rupload1" name="rupload1" multiple><br><br>
    <input title="you can upload 3 Certificates only" type="file" id="rupload2" name="rupload2" multiple><br><br>
    <input title="you can upload 3 Certificates only" type="file" id="rupload3" name="rupload3" multiple><br><br>
  </div>

  <div id="west" style="display :none">
    <label for="myfile"><b>Upload your Western Music Certificates:</b></label><br>
    <label><p><span style="color:red">* </span><i>Rename your files with NIC number "_" and file order<br><b>Ex: 90167236V_1.pdf</b></i></label><br>
    <label><span style="color:red">* </span><i>Use esch button to upload one file. You can upload upto 3 files<br></i></label><br>
    <label><span style="color:red">* </span><i>Only pdf files are accepted.<br></i></p></label><br>
    <input title="you can upload 3 Certificates only" type="file" id="wupload1" name="wupload1" multiple><br><br>
    <input title="you can upload 3 Certificates only" type="file" id="wupload2" name="wupload2" multiple><br><br>
    <input title="you can upload 3 Certificates only" type="file" id="wupload3" name="wupload3" multiple><br><br>
  </div> -->

  <div class="col-sm-12" style="display :none; background-color: #ddffff; border-radius: 5px;" id="gitmarks">
    <div class="form-group">
      <label for="gitmk"><b>Select Your General Information Technology (G.I.T.) Examination Grade: </b></label><br>
      <!-- <input type="number" class="form-control" id="gitmk" name="gitmk" >     -->
      <select class="form-control col-sm-4"  id="gitmk" name="gitmk" placeholder="Grade">
        <option value="0" selected disabled>Select Your Grade</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="S">S</option>
        <option value="F">F</option>
        <option value="+">+</option>
        <option value="X">X</option>
        <option value="N">N</option>
      </select>
    </div>
    <br>
    &nbsp;
  </div>
  <br>
    &nbsp;
  <div style="text-align :right">     
    <input type="submit" name="btnnext" class="btn btn-info" value="Submit">
  </div>

</form>

<script src="<?php echo site_url(); ?>assets/js/prefer.js"></script>
