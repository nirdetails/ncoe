<?php // var_dump($courses); ?>
<?php
  if (!isset($_SESSION["alindex"])){
    redirect('/');
  }

  $block = "display: block";
  $none = "display:none";

  
?>

<div class="mb-5">
  <h2>Edit your Selections</h2>
</div>
  <span style="color: red;"><?php echo validation_errors(); ?></span>
  <?php //echo form_open_multipart('courses/editsubmit'); ?>
<form action="<?php echo site_url(); ?>courses/editsubmit" enctype="multipart/form-data" method="post" accept-charset="utf-8">
  <div class="form-group">
    <label for="preference1">Select Your First Preference: </label>
    <select class="form-control" id="course1" name="course1">
      <option value="">SELECT</option>
      <?php foreach($courses as $course): ?>
        <?php if($course['course_no'] == $_SESSION['course1']){?>
        <option selected="selected" value="<?php echo $course['course_no']?>"><?php echo $course['course_no']?> - <?php echo ucfirst($course['name']); ?></option>
        <?php }else{ ?> 
          <option value="<?php echo $course['course_no']?>"><?php echo $course['course_no']?> - <?php echo ucfirst($course['name']); ?></option>
        <?php } ?>
      <?php endforeach; ?>                                                   
    </select>
  </div>

  <?php if($_SESSION['alindex'] != ""){ ?>
  <input type="hidden" name="alindex" value="<?php echo $_SESSION['alindex']; ?>">
<?php } ?>


  <div id="certificates1" style="display :none;">
				<div class="col-sm-12" style="background-color: #ddffff; border-radius: 5px;">
					<label for="coursename"><b>Physical Education: </b></label><br>
						<div class="form-row">
							<div class="form-group col-md-4">
								<label><p><span style="color:red">* </span><i>G.C.E. (O/L) Examination Marks</i></p></label><br>
								<input type="number" class="form-control col-sm-4" id="peolmarks" onBlur="calcSum();" name="peolmarks"  /> 
							</div>
							<div class="form-group col-md-4">
								<label><p><span style="color:red">* </span><i>Marks According to the Gazette</i></p></label><br>
								<input type="number" class="form-control col-sm-4" id="pencoemarks" onBlur="calcSum();" name="pencoemarks" /> 
							</div>
							<div class="form-group col-md-4">
								<label><p><span style="color:red">* </span><i>Total Marks</i></p></label><br>
								<input type="number" class="form-control col-sm-4" id="pemarks1" name="pemarks1" max=80 value="<?php echo $_SESSION['pemarks1']; ?>" /> 
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
					<label for="category1"><b>Select Catholicism or Christianity: </b></label><br>
          <?php if($_SESSION['category1'] == "Catholic" ){ ?>
        <input type="radio" name="category1" value="Catholic" checked> Catholicism
        <br>
        <input type="radio" name="category1" value="Christianity"> Christianity
      <?php }elseif($_SESSION['category1'] == "Christianity" ){ ?>
        <input type="radio" name="category1" value="Catholic"> Catholicism
        <br>
        <input type="radio" name="category1" value="Christianity" checked> Christianity
        <?php } else{ ?>
        <input type="radio" name="category1" value="Catholic">Catholicism
        <br>
        <input type="radio" name="category1" value="Christianity"> Christianity
      <?php } ?>
					<br>
					&nbsp;
				</div>
			</div>

			<div class="col-sm-12" style="display :none; background-color: #ddffff; border-radius: 5px;" id="gitmarks1">
				<div class="form-group">
					<label for="gitmk"><b>Select Your General Information Technology (G.I.T.) Examination Grade: </b></label><br>
					<!-- <input type="number" class="form-control" id="gitmk" name="gitmk" >     -->
					<select class="form-control col-sm-4"  id="gitmk1" name="gitmk1" placeholder="Grade">
					<option value="<?php echo $_SESSION['gitmk1']?>"><?php echo $_SESSION['gitmk1']?></option>
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














  
  <div class="form-group">
    <label for="preference2">Select Your Second Preference: </label>
    <select class="form-control" id="course2" name="course2">
      <option value="">SELECT</option>
      <?php foreach($courses as $course): ?>
        <?php if($course['course_no'] == $_SESSION['course2']){?>
          <option selected="selected" value="<?php echo $course['course_no']?>"><?php echo $course['course_no']?> - <?php echo ucfirst($course['name']); ?></option>
        <?php }else{ ?> 
          <option value="<?php echo $course['course_no']?>"><?php echo $course['course_no']?> - <?php echo ucfirst($course['name']); ?></option>
        <?php } ?>
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
								<input type="number" class="form-control col-sm-4" id="pencoemarks1" onBlur="calcSum1();" name="pencoemarks1"/> 
							</div>
							<div class="form-group col-md-4">
								<label><p><span style="color:red">* </span><i>Total Marks</i></p></label><br>
								<input type="number" class="form-control col-sm-4" id="pemarks2" name="pemarks2" max=80 value="<?php echo $_SESSION['pemarks2']; ?>" /> 
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
					<label for="category2"><b>Select Catholicism or Christianity: </b></label><br>
					<?php if($_SESSION['category2'] == "Catholic" ){ ?>
        <input type="radio" name="category2" value="Catholic" checked> Catholicism
        <br>
        <input type="radio" name="category2" value="Christianity"> Christianity
      <?php }elseif($_SESSION['category2'] == "Christianity" ){ ?>
        <input type="radio" name="category2" value="Catholic"> Catholicism
        <br>
        <input type="radio" name="category2" value="Christianity" checked> Christianity
        <?php } else{ ?>
        <input type="radio" name="category2" value="Catholic"> Catholicism
        <br>
        <input type="radio" name="category2" value="Christianity"> Christianity
      <?php } ?>
					<br>
					&nbsp;
				</div>
			</div>

			<div class="col-sm-12" style="display :none; background-color: #ddffff; border-radius: 5px;" id="gitmarks2">
				<div class="form-group">
					<label for="gitmk"><b>Select Your General Information Technology (G.I.T.) Examination Grade: </b></label><br>
					<!-- <input type="number" class="form-control" id="gitmk" name="gitmk" >     -->
					<select class="form-control col-sm-4"  id="gitmk2" name="gitmk2" placeholder="Grade">
					<option value="<?php echo $_SESSION['gitmk2']?>"><?php echo $_SESSION['gitmk2']?></option>
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











  <div class="form-group">
    <label for="preference3">Select Your Third Preference: </label>
    <select class="form-control" id="course3" name="course3">
      <option value="">SELECT</option>
      <?php foreach($courses as $course): ?>
        <?php if($course['course_no'] == $_SESSION['course3']){?>
          <option selected="selected" value="<?php echo $course['course_no']?>"><?php echo $course['course_no']?> - <?php echo ucfirst($course['name']); ?></option>
          <?php }else{ ?> 
            <option value="<?php echo $course['course_no']?>"><?php echo $course['course_no']?> - <?php echo ucfirst($course['name']); ?></option>
          <?php } ?>
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
								<input type="number" class="form-control col-sm-4" id="pemarks3" name="pemarks3" max=80 value="<?php echo $_SESSION['pemarks3']; ?>" /> 
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
					<label for="category3"><b>Select Catholicism or Christianity: </b></label><br>
          <?php if($_SESSION['category3'] == "Catholic" ){ ?>
        <input type="radio" name="category3" value="Catholic" checked> Catholicism
        <br>
        <input type="radio" name="category3" value="Christianity"> Christianity
      <?php }elseif($_SESSION['category3'] == "Christianity" ){ ?>
        <input type="radio" name="category3" value="Catholic"> Catholicism
        <br>
        <input type="radio" name="category3" value="Christianity" checked> Christianity
        <?php } else{ ?>
        <input type="radio" name="category3" value="Catholic">Catholicism
        <br>
        <input type="radio" name="category3" value="Christianity"> Christianity
      <?php } ?>
					<br>
					&nbsp;
				</div>
			</div>

			<div class="col-sm-12" style="display :none; background-color: #ddffff; border-radius: 5px;" id="gitmarks3">
				<div class="form-group">
					<label for="gitmk"><b>Select Your General Information Technology (G.I.T.) Examination Grade: </b></label><br>
					<!-- <input type="number" class="form-control" id="gitmk" name="gitmk" >     -->
					<select class="form-control col-sm-4"  id="gitmk3" name="gitmk3" placeholder="Grade">
						<option value="<?php echo $_SESSION['gitmk3']?>"><?php echo $_SESSION['gitmk3']?></option>
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

  <div style="text-align :right">     
    <input type="submit" name="btnnext" class="btn btn-info" value="Submit">
  </div>

  </form>
  <script src="<?php echo site_url(); ?>assets/js/prefer.js"></script>
  <script>
function calcSum()
{
	var num1 = parseInt(document.getElementById("peolmarks").value);
	var num2 = parseInt(document.getElementById("pencoemarks").value);
	document.getElementById("pemarks1").value = num1 + num2;
}


function calcSum1() {
	var num1 = parseInt(document.getElementById("peolmarks1").value);
	var num2 = parseInt(document.getElementById("pencoemarks1").value);
	document.getElementById("pemarks2").value = num1 + num2;
}

function calcSum2() {
	var num1 = parseInt(document.getElementById("peolmarks2").value);
	var num2 = parseInt(document.getElementById("pencoemarks2").value);
	document.getElementById("pemarks3").value = num1 + num2;
}
</script>
