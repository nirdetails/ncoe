<?php include "header.php" ?>
<html>
<head>
<script>


$(function(){
  $("input[type='submit']").click(function(){
      var $fileUpload = $("input[type='file']");
      if (parseInt($fileUpload.get(0).files.length)>3){
       alert("You can only upload a maximum of 3 certificates");
      }
  });    
});


</script>
<style>	
	body{
		background: #aaa;
	}
	.container{
		background: #fff;
		padding: 10px;
		margin-top: 10px;
		border-radius: 10px;
		max-width: 700px;
	}
</style>
</head>
<body>
<div class="container">
  <h2>Select your Courses Here..... </h2>
  <form name="courseform" action="/action_page.php">
  <div class="form-group">
      <label for="preference1">Select Your First Preference: </label>
      <select class="form-control" id="course1" name="course1"  onchange = "ShowHideDiv()" required>
            <option >First course</option>                        
            <option >Primary Education (Sinhala)</option>                        
            <option >Primary Education (Tamil)</option>
            <option >Science (Sinhala)</option>
            <option >Science (Tamil)</option>
            <option >Science (English)</option>
            <option >Mathematics (Sinhala)</option>
            <option >Mathematics (Tamil)</option>
            <option >Mathematics (English)</option>
            <option >Social Science (Sinhala)</option>
            <option >Social Science (Tamil)</option>
            <option value="A">Buddhism</option>
            <option value="B">Hinduism</option>
            <option value="C">Islam</option>
            <option value="D">Catholicism / Christianity (Sinhala)</option>
            <option value="E">Catholicism / Christianity (Tamil)</option>
            <option >First Language (Sinhala)</option>
            <option >FirstLanguage(Tamil)</option>
            <option >English</option>
            <option >Art (Sinhala)</option>
            <option >Art (Tamil)</option>
            <option >Dance (Oriental)</option>
            <option >Dance ( Bharatha)</option>
            <option >Music (Oriental)</option>
            <option >Music (Carnatic)</option>
            <option value="F">Western Music</option>
            <option >Drama andTheatre (Sinhala)</option>
            <option >Drama andTheatre (Tamil)</option>
            <option value="Y">Physical Education (Sinhala)</option>
            <option value="N">Physical Education (Tamil)</option>
            <option >Home Economics (Sinhala)</option>
            <option >Home Economics (Tamil)</option>
            <option >Agriculture and Food Technology (Sinhala)</option>
            <option >Agriculture and Food Technology (Tamil)</option>
            <option >Technical Studies – Crafts and Art (Sinhala)</option>
            <option >Technical Studies – Crafts and Art (Tamil)</option>
            <option >Design and Construction Technology (Sinhala)</option>
            <option >Design and Mechanical Technology (Sinhala)</option>
            <option >Design and Electrical and Electronic Technology (Sinhala)</option>
            <option >Design and Construction Technology (Tamil)</option>
            <option >Design and Mechanical Technology (Tamil)</option>
            <option >Design and Electrical and Electronic Technology (Tamil)</option>
            <option >Information Communication Technology (Sinhala)</option>
            <option >Information Communication Technology (Tamil)</option>
            <option >Information Communication Technology (English)</option>
            <option >Second Language (Sinhala)</option>
            <option >Second Language (Tamil)</option>
            <option >Special Education (Sinhala)</option>
            <option >Special Education (Tamil)</option>
            <option >Buisness & Accounting Studies  (Sinhala)</option>
            <option >Buisness  & Accounting Studies (Tamil)</option>                                              </select>
    </div>

  <div class="row" >
    <div id="certificates" style="display :none">
      <div class="col-sm-6">
      <div class="form-group">
        <label for="coursename"><b>Physical Education Marks: </b></label>
        <input type="number" class="form-control" id="marks" name="fullname" >    
      </div>
    </div>

    <div id="div2" class="col-sm-6">
    <form action="/action_page.php">
      <label for="myfile"  ><b>Upload your Certificates:</b></label>
      <input title="you can upload 3 Certificates only" type="file" id="myfile" name="myfile" multiple><br><br>
    </form>
    </div>
    </div>
</div>

<div id="box" style="display :none">
  <form action="/action_page.php">
     <label for="myfile"><b>Upload your Certificates:</b></label>
     <input title="you can upload 3 Certificates only" type="file" id="myfile" name="myfile" multiple><br><br>
  </form>
</div>


    <div class="form-group">
      <label for="preference2">Select Your Second Preference: </label>
      <select class="form-control" id="course2" name="course2" onchange = "ShowHideDiv2()" required>
      <option >First course</option>                        
            <option >Primary Education (Sinhala)</option>                        
            <option >Primary Education (Tamil)</option>
            <option >Science (Sinhala)</option>
            <option >Science (Tamil)</option>
            <option >Science (English)</option>
            <option >Mathematics (Sinhala)</option>
            <option >Mathematics (Tamil)</option>
            <option >Mathematics (English)</option>
            <option >Social Science (Sinhala)</option>
            <option >Social Science (Tamil)</option>
            <option value="A">Buddhism</option>
            <option value="B">Hinduism</option>
            <option value="C">Islam</option>
            <option value="D">Catholicism / Christianity (Sinhala)</option>
            <option value="E">Catholicism / Christianity (Tamil)</option>
            <option >First Language (Sinhala)</option>
            <option >FirstLanguage(Tamil)</option>
            <option >English</option>
            <option >Art (Sinhala)</option>
            <option >Art (Tamil)</option>
            <option >Dance (Oriental)</option>
            <option >Dance ( Bharatha)</option>
            <option >Music (Oriental)</option>
            <option >Music (Carnatic)</option>
            <option value="F">Western Music</option>
            <option >Drama andTheatre (Sinhala)</option>
            <option >Drama andTheatre (Tamil)</option>
            <option value="Y">Physical Education (Sinhala)</option>
            <option value="N">Physical Education (Tamil)</option>
            <option >Home Economics (Sinhala)</option>
            <option >Home Economics (Tamil)</option>
            <option >Agriculture and Food Technology (Sinhala)</option>
            <option >Agriculture and Food Technology (Tamil)</option>
            <option >Technical Studies – Crafts and Art (Sinhala)</option>
            <option >Technical Studies – Crafts and Art (Tamil)</option>
            <option >Design and Construction Technology (Sinhala)</option>
            <option >Design and Mechanical Technology (Sinhala)</option>
            <option >Design and Electrical and Electronic Technology (Sinhala)</option>
            <option >Design and Construction Technology (Tamil)</option>
            <option >Design and Mechanical Technology (Tamil)</option>
            <option >Design and Electrical and Electronic Technology (Tamil)</option>
            <option >Information Communication Technology (Sinhala)</option>
            <option >Information Communication Technology (Tamil)</option>
            <option >Information Communication Technology (English)</option>
            <option >Second Language (Sinhala)</option>
            <option >Second Language (Tamil)</option>
            <option >Special Education (Sinhala)</option>
            <option >Special Education (Tamil)</option>
            <option >Buisness & Accounting Studies  (Sinhala)</option>
            <option >Buisness  & Accounting Studies (Tamil)</option>                                             </select>
    </div>

  <div class="row">
  <div id="certificates2" style="display :none">
    <div class="col-sm-6">
    <div class="form-group">
      <label for="coursename"><b>Physical Education Marks: </b></label>
      <input type="number" class="form-control" id="marks" name="fullname" >    
    </div>
  </div>

  <div class="col-sm-6">
  <form action="/action_page.php">
     <label for="myfile"  ><b>Upload your Certificates:</b></label>
     <input title="you can upload 3 Certificates only" type="file" id="myfile" name="myfile" multiple><br><br>
  </form>
  </div>
  </div>
</div>
<div id="box2" style="display :none">
  <form action="/action_page.php">
     <label for="myfile"  ><b>Upload your Certificates:</b></label>
     <input title="you can upload 3 Certificates only" type="file" id="myfile" name="myfile" multiple><br><br>
  </form>
  </div>

    <div class="form-group">
      <label for="preference3">Select Your Third Preference: </label>
      <select class="form-control" id="course3" name="course3" onchange = "ShowHideDiv3()" required>
      <option >Primary Education (Sinhala)</option>                        
            <option >Primary Education (Tamil)</option>
            <option >Science (Sinhala)</option>
            <option >Science (Tamil)</option>
            <option >Science (English)</option>
            <option >Mathematics (Sinhala)</option>
            <option >Mathematics (Tamil)</option>
            <option >Mathematics (English)</option>
            <option >Social Science (Sinhala)</option>
            <option >Social Science (Tamil)</option>
            <option value="A">Buddhism</option>
            <option value="B">Hinduism</option>
            <option value="C">Islam</option>
            <option value="D">Catholicism / Christianity (Sinhala)</option>
            <option value="E">Catholicism / Christianity (Tamil)</option>
            <option >First Language (Sinhala)</option>
            <option >FirstLanguage(Tamil)</option>
            <option >English</option>
            <option >Art (Sinhala)</option>
            <option >Art (Tamil)</option>
            <option >Dance (Oriental)</option>
            <option >Dance ( Bharatha)</option>
            <option >Music (Oriental)</option>
            <option >Music (Carnatic)</option>
            <option value="F">Western Music</option>
            <option >Drama andTheatre (Sinhala)</option>
            <option >Drama andTheatre (Tamil)</option>
            <option value="Y">Physical Education (Sinhala)</option>
            <option value="N">Physical Education (Tamil)</option>
            <option >Home Economics (Sinhala)</option>
            <option >Home Economics (Tamil)</option>
            <option >Agriculture and Food Technology (Sinhala)</option>
            <option >Agriculture and Food Technology (Tamil)</option>
            <option >Technical Studies – Crafts and Art (Sinhala)</option>
            <option >Technical Studies – Crafts and Art (Tamil)</option>
            <option >Design and Construction Technology (Sinhala)</option>
            <option >Design and Mechanical Technology (Sinhala)</option>
            <option >Design and Electrical and Electronic Technology (Sinhala)</option>
            <option >Design and Construction Technology (Tamil)</option>
            <option >Design and Mechanical Technology (Tamil)</option>
            <option >Design and Electrical and Electronic Technology (Tamil)</option>
            <option >Information Communication Technology (Sinhala)</option>
            <option >Information Communication Technology (Tamil)</option>
            <option >Information Communication Technology (English)</option>
            <option >Second Language (Sinhala)</option>
            <option >Second Language (Tamil)</option>
            <option >Special Education (Sinhala)</option>
            <option >Special Education (Tamil)</option>
            <option >Buisness & Accounting Studies  (Sinhala)</option>
            <option >Buisness  & Accounting Studies (Tamil)</option>                                             </select>
    </div>

  <div class="row">
  <div id="certificates3" style="display :none">
    <div class="col-sm-6">
    <div class="form-group">
      <label for="coursename"><b>Physical Education Marks: </b></label>
      <input type="number" class="form-control" id="marks" name="fullname" >    
    </div>
  </div>

  <div class="col-sm-6">
  <form action="/action_page.php">
     <label for="myfile"  ><b>Upload your Certificates:</b></label>
     <input title="you can upload 3 Certificates only" type="file" id="myfile" name="myfile" multiple><br><br>
  </form>
  </div>
  </div>
</div>
<div id="box3" style="display :none">
  <form action="/action_page.php">
     <label for="myfile"  ><b>Upload your Certificates:</b></label>
     <input title="you can upload 3 Certificates only" type="file" id="myfile" name="myfile" multiple><br><br>
  </form>
  </div>

    <div style="text-align :right">     
      <input type="submit" value="Next" class="btn btn-info" />      
    </div>
  </form>
</div>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
$("#certificates").hide();
$("#box").hide();

  $( "#course1" ).change(function() {
    if($( "#course1" ).val() == "Y" || $( "#course1" ).val() == "N"){
      $("#certificates").show();
      $("#box").hide();
    }else if($( "#course1" ).val() == "A" || $( "#course1" ).val() == "B" || $( "#course1" ).val() == "C" || $( "#course1" ).val() == "D" || $( "#course1" ).val() == "E" || $( "#course1" ).val() == "F"){
      $("#box").show();
      $("#certificates").hide();
    }else{
      $("#certificates").hide();
      $("#box").hide();
    }
      
  });

  $( "#course2" ).change(function() {
    if($( "#course2" ).val() == "Y" || $( "#course2" ).val() == "N"){
      $("#certificates2").show();
      $("#box2").hide();
    }else if($( "#course2" ).val() == "A" || $( "#course2" ).val() == "B" || $( "#course2" ).val() == "C" || $( "#course2" ).val() == "D" || $( "#course2" ).val() == "E" || $( "#course2" ).val() == "F"){
      $("#box2").show();
      $("#certificates2").hide();
    }else{
      $("#certificates2").hide();
      $("#box2").hide();
    }
      
  });

  $( "#course3" ).change(function() {
    if($( "#course3" ).val() == "Y" || $( "#course3" ).val() == "N"){
      $("#certificates3").show();
      $("#box3").hide();
    }else if($( "#course3" ).val() == "A" || $( "#course3" ).val() == "B" || $( "#course3" ).val() == "C" || $( "#course3" ).val() == "D" || $( "#course3" ).val() == "E" || $( "#course3" ).val() == "F"){
      $("#box3").show();
      $("#certificates3").hide();
    }else{
      $("#certificates3").hide();
      $("#box3").hide();
    }
      
  });

</script>
<script src="js/prefer.js">