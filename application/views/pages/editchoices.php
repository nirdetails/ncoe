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
<?php if($_SESSION['alindex'] != ""){ ?>
  <input type="hidden" name="alindex" value="<?php echo $_SESSION['alindex']; ?>">
<?php } ?>
<div id="certificates" style="display :none;">
      <div class="col-sm-12" style="background-color: #ddffff; border-radius: 5px;">
        <div class="form-group">
          <label for="coursename"><b>Physical Education Marks: </b></label><br>
          <label><p><span style="color:red">* </span><i>Calculate the final score manually and enter here. When calculating do not miss the marks for G.C E O/L health science</i></p></label>
          <br>

          <div class="form-row">
					<div class="form-group col-md-4">
						<label><p><span style="color:red">* </span><i>O/L Examination Marks</i></p></label><br>
						<input type="number" class="form-control col-sm-4" id="peolmarks" onBlur="calcSum();" name="peolmarks" /> 
					</div>
					<div class="form-group col-md-4">
						<label><p><span style="color:red">* </span><i>Marks According to the Gazette</i></p></label><br>
						<input type="number" class="form-control col-sm-4" id="pencoemarks" onBlur="calcSum();" name="pencoemarks" /> 
					</div>
					<div class="form-group col-md-4">
						<label><p><span style="color:red">* </span><i>Total</i></p></label><br>
						<input type="number" value="<?php echo $_SESSION['pemarks1']; ?>" class="form-control col-sm-4" id="pemarks1" name="pemarks1" max=80 value="" /> 
					</div>
				</div>
          <!-- <input type="number" value="<?php// echo $_SESSION['pemarks1']; ?>" class="form-control col-sm-4" id="pemarks1" name="pemarks1" >   -->
          &nbsp;  
        </div>
      </div>
    </div>
    
  <div class="col-sm-12" id="category"  style="display :none; background-color: #ddffff; border-radius: 5px;">  
    <div class="form-group">
      <label for="category"><b>Select Catholicism or Christianity: </b></label><br>
      <?php if($_SESSION['category'] == "Catholic" ){ ?>
        <input type="radio" name="category" value="Catholic" checked> Catholicism
        <br>
        <input type="radio" name="category" value="Christianity"> Christianity
      <?php }elseif($_SESSION['category'] == "Christianity" ){ ?>
        <input type="radio" name="category" value="Catholic"> Catholicism
        <br>
        <input type="radio" name="category" value="Christianity" checked> Christianity
        <?php } else{ ?>
        <input type="radio" name="category" value="Catholic">Catholicism
        <br>
        <input type="radio" name="category" value="Christianity"> Christianity
      <?php } ?>
      <br>
      &nbsp;
    </div>
  </div>


  <?php $gitgrades = array('A','B','C','S','F','+','X','N'); ?>
  <div class="col-sm-12" style="display :none; background-color: #ddffff; border-radius: 5px;" id="gitmarks">
    <div class="form-group">
    <label for="gitmk"><b>GIT Grades: </b></label><br>
      <!-- <input type="number" class="form-control" id="gitmk" name="gitmk" >     -->
      <select class="form-control"  id="gitmk" name="gitmk" placeholder="Grade">
        <option value="0" selected disabled>Select your Grade</option>
        <?php
          foreach($gitgrades as $gitgrade){
            if($gitgrade == $_SESSION['gitmk']){
              echo "<option value='$gitgrade' selected>$gitgrade</option>";
            }else{
              echo "<option value='$gitgrade'>$gitgrade</option>";
            }
          }
        ?>
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
  <script>
function calcSum()
{
	var num1 = parseInt(document.getElementById("peolmarks").value);
	var num2 = parseInt(document.getElementById("pencoemarks").value);
	document.getElementById("pemarks1").value = num1 + num2;
}
</script>
