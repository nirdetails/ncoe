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

<table style="width: 75vw;">
	<form action="<?php echo site_url(); ?>courses/select" enctype="multipart/form-data" method="post" accept-charset="utf-8">
	<!-- 1st row -->
	<tr>
		<td>
			<div class="form-group">
				<label for="preference1">Select Your Course Preference 1: </label>
				<select class="form-control" id="course1" name="course1">
					<option value="">Select</option>
					<?php foreach($courses as $course): ?>
						<option value="<?php echo $course['course_no']?>"><?php echo $course['course_no']?> - <?php echo ucfirst($course['name']); ?></option>
					<?php endforeach; ?>                                                   
				</select>
			</div>

			<div id="certificates1" style="display :none;">
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
					<br>
					&nbsp;
				</div>
			</div>

			<div class="col-sm-12" id="category1"  style="display :none; background-color: #ddffff; border-radius: 5px;">  
				<div class="form-group">
					<label for="category"><b>Select Catholicism or Christianity: </b></label><br>
					<input type="radio" name="category1" value="Catholic"> Catholicism
					<br>
					<input type="radio" name="category1" value="Christianity"> Christianity
					<br>
					&nbsp;
				</div>
			</div>

			<div class="col-sm-12" style="display :none; background-color: #ddffff; border-radius: 5px;" id="gitmarks1">
				<div class="form-group">
					<label for="gitmk"><b>Select Your General Information Technology (G.I.T.) Examination Grade: </b></label><br>
					<!-- <input type="number" class="form-control" id="gitmk" name="gitmk" >     -->
					<select class="form-control col-sm-4"  id="gitmk1" name="gitmk1" placeholder="Grade">
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

		</td>
	</tr>

	<!-- 2nd row -->
	<tr>
		<td>
			<div class="form-group">
				<label for="preference2">Select Your Course Preference 2: </label>
				<select class="form-control" id="course2" name="course2">
					<option value="">Select</option>
					<?php foreach($courses as $course): ?>
						<option value="<?php echo $course['course_no']?>"><?php echo $course['course_no']?> - <?php echo ucfirst($course['name']); ?></option>
					<?php endforeach; ?>                                                   
				</select>
			</div>

			<div id="certificates2" style="display :none;">
				<div class="col-sm-12" style="background-color: #ddffff; border-radius: 5px;">
					<label for="coursename"><b>Physical Education: </b></label><br>
						<div class="form-row">
							<div class="form-group col-md-4">
								<label><p><span style="color:red">* </span><i>G.C.E. (O/L) Examination Marks</i></p></label><br>
								<input type="number" class="form-control col-sm-4" id="peolmarks1" onBlur="calcSum1();" name="peolmarks1" /> 
							</div>
							<div class="form-group col-md-4">
								<label><p><span style="color:red">* </span><i>Marks According to the Gazette</i></p></label><br>
								<input type="number" class="form-control col-sm-4" id="pencoemarks1" onBlur="calcSum1();" name="pencoemarks1" /> 
							</div>
							<div class="form-group col-md-4">
								<label><p><span style="color:red">* </span><i>Total Marks</i></p></label><br>
								<input type="number" class="form-control col-sm-4" id="pemarks2" name="pemarks2" max=80 value="" /> 
							</div>
						</div>

						<script>
							function calcSum1()
							{
									var num1 = parseInt(document.getElementById("peolmarks1").value);
									var num2 = parseInt(document.getElementById("pencoemarks1").value);
									document.getElementById("pemarks2").value = num1 + num2;

						}
					</script>
				</div>
			</div>

			<div class="col-sm-12" id="category2"  style="display :none; background-color: #ddffff; border-radius: 5px;">  
				<div class="form-group">
					<label for="category"><b>Select Catholicism or Christianity: </b></label><br>
					<input type="radio" name="category2" value="Catholic"> Catholicism
					<br>
					<input type="radio" name="category2" value="Christianity"> Christianity
					<br>
					&nbsp;
				</div>
			</div>

			<div class="col-sm-12" style="display :none; background-color: #ddffff; border-radius: 5px;" id="gitmarks2">
				<div class="form-group">
					<label for="gitmk"><b>Select Your General Information Technology (G.I.T.) Examination Grade: </b></label><br>
					<!-- <input type="number" class="form-control" id="gitmk" name="gitmk" >     -->
					<select class="form-control col-sm-4"  id="gitmk2" name="gitmk2" placeholder="Grade">
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

		</td>
	</tr>

	<!-- 3rd row -->
	<tr>
		<td>
			<div class="form-group">
				<label for="preference3">Select Your Course Preference 3: </label>
				<select class="form-control" id="course3" name="course3">
					<option value="">Select</option>
					<?php foreach($courses as $course): ?>
						<option value="<?php echo $course['course_no']?>"><?php echo $course['course_no']?> - <?php echo ucfirst($course['name']); ?></option>
					<?php endforeach; ?>                                                   
				</select>
			</div>

			<div id="certificates3" style="display :none;">
				<div class="col-sm-12" style="background-color: #ddffff; border-radius: 5px;">
					<label for="coursename"><b>Physical Education: </b></label><br>
						<div class="form-row">
							<div class="form-group col-md-4">
								<label><p><span style="color:red">* </span><i>G.C.E. (O/L) Examination Marks</i></p></label><br>
								<input type="number" class="form-control col-sm-4" id="peolmarks2" onBlur="calcSum2();" name="peolmarks2" /> 
							</div>
							<div class="form-group col-md-4">
								<label><p><span style="color:red">* </span><i>Marks According to the Gazette</i></p></label><br>
								<input type="number" class="form-control col-sm-4" id="pencoemarks2" onBlur="calcSum2();" name="pencoemarks2" /> 
							</div>
							<div class="form-group col-md-4">
								<label><p><span style="color:red">* </span><i>Total Marks</i></p></label><br>
								<input type="number" class="form-control col-sm-4" id="pemarks3" name="pemarks3" max=80 value="" /> 
							</div>
						</div>

						<script>
							function calcSum2()
							{
									var num1 = parseInt(document.getElementById("peolmarks2").value);
									var num2 = parseInt(document.getElementById("pencoemarks2").value);
									document.getElementById("pemarks3").value = num1 + num2;

						}
					</script>
				</div>
			</div>

			<div class="col-sm-12" id="category3"  style="display :none; background-color: #ddffff; border-radius: 5px;">  
				<div class="form-group">
					<label for="category"><b>Select Catholicism or Christianity: </b></label><br>
					<input type="radio" name="category3" value="Catholic"> Catholicism
					<br>
					<input type="radio" name="category3" value="Christianity"> Christianity
					<br>
					&nbsp;
				</div>
			</div>

			<div class="col-sm-12" style="display :none; background-color: #ddffff; border-radius: 5px;" id="gitmarks3">
				<div class="form-group">
					<label for="gitmk"><b>Select Your General Information Technology (G.I.T.) Examination Grade: </b></label><br>
					<!-- <input type="number" class="form-control" id="gitmk" name="gitmk" >     -->
					<select class="form-control col-sm-4"  id="gitmk3" name="gitmk3" placeholder="Grade">
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

		</td>
	</tr>

	<tr>
		<td>
			<div style="text-align :left">     
				<input type="submit" name="btnnext" class="btn btn-info" value="Submit">
			</div>
		</td>
	</tr>
	</form>
</table>

<script src="<?php echo site_url(); ?>assets/js/prefer.js"></script>


