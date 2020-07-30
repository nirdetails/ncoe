<?php include ('header.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Course Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <!-- <script>
	$(document).ready(function(){
        // $('input[type="checkbox"]').click(function(){
          $('#one').click(function(){
            if($(this).prop("checked") == true){
              $('#sel1').show();
              // $("#result").html("Checkbox is checked.");
            }
            else if($(this).prop("checked") == false){
              $('#sel1').hide();
              // $("#result").html("Checkbox is unchecked.");
            }
        });
    });
</script> -->
<script><?php include ('js/coursepage.js') ?> 
$(document).ready(function(){
    $('input[type="checkbox"]').click(function(){
        if($(this).prop("checked") == 3){
          $('input[type="checkbox').disable();
          // $("#result").html("Checkbox is checked.");
        }
        else{
          $('input[type="checkbox').enable();
          // $('#sel20').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});



</script>
<style> 
input:checked {
  height: 50px;
  width: 50px;
}
</style>


</head>
<body>

<div class="container">
<div id="result" style="background: yellow;"></div>
  <h2>Course Table</h2>           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Course Number</th>
        <th>Course Name</th>
        <th>Medium</th>
        <th>Select Field</th>
        <th>Preference Order</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="one" type="checkbox"> Select</td></div>
        <td><select name="sel1" class="form-control" id="sel1" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
     
    <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <td> <input type="checkbox" id="two"> Select</td>
        <td><select name="sel2" class="form-control" id="sel2" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <td> <input type="checkbox" id= "three"> Select</td>
        <td><select name="sel3" class="form-control" id="sel3" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <td> <input type="checkbox"  id="four" value="Car"> Select</td>
        <td><select name="sel4" class="form-control" id="sel4" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <td> <input type="checkbox" id="five" value="Car"> Select</td>
        <td><select name="sel5" class="form-control" id="sel5" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <td>  <input type="checkbox" id="six" value="Car"> Select</td>
        <td><select name="sel6" class="form-control" id="sel6" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="seven" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel7" class="form-control" id="sel7" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
     
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="eight" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel8" class="form-control" id="sel8" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
     
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="nine" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel9" class="form-control" id="sel9" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
     
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="ten" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel10" class="form-control" id="sel10" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
     
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="eleven" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel11" class="form-control" id="sel11" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
     
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="twelve" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel12" class="form-control" id="sel12" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
     
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="thirteen" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel13" class="form-control" id="sel13" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
     
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="fourteen" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel14" class="form-control" id="sel14" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
     
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="fifteen" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel15" class="form-control" id="sel15" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
     
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="sixteen" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel16" class="form-control" id="sel16" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
     
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="seventeen" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel17" class="form-control" id="sel17" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
     
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="eighteen" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel18" class="form-control" id="sel18" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
     
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="nineteen" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel19" class="form-control" id="sel19" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
     
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="twenty" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel20" class="form-control" id="sel20" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="twentyone" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel21" class="form-control" id="sel21" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
     
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="twentytwo" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel22" class="form-control" id="sel22" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="twentythree" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel23" class="form-control" id="sel23" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="twentyfour" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel24" class="form-control" id="sel24" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="twentyfive" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel25" class="form-control" id="sel25" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="twentysix" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel26" class="form-control" id="sel26" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="twentyseven" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel27" class="form-control" id="sel27" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="twentyeight" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel28" class="form-control" id="sel28" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="twentynine" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel29" class="form-control" id="sel29" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="thirty" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel30" class="form-control" id="sel30" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="thirtyone" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel31" class="form-control" id="sel31" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="thirtytwo" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel32" class="form-control" id="sel32" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>033</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="thirtythree" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel33" class="form-control" id="sel33" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="thirtyfour" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel34" class="form-control" id="sel34" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="thirtyfive" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel35" class="form-control" id="sel35" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="thirtysix" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel36" class="form-control" id="sel36" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="thirtyseven" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel37" class="form-control" id="sel37" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="thirtyeight" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel38" class="form-control" id="sel38" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="thirtynine" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel39" class="form-control" id="sel39" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="fourty" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel40" class="form-control" id="sel40" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="fourtyone" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel41" class="form-control" id="sel41" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="fourtytwo" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel42" class="form-control" id="sel42" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="fourtythree" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel43" class="form-control" id="sel43" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="fourtyfour" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel44" class="form-control" id="sel44" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="fourtyfive" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel45" class="form-control" id="sel45" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="fourtysix" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel46" class="form-control" id="sel46" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="fourtyseven" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel47" class="form-control" id="sel47" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="fourtyeight" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel48" class="form-control" id="sel48" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
     
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="fourtynine" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel49" class="form-control" id="sel49" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
     
      <tr>
        <td>000</td>
        <td>Arts</td>
        <td>English</td>
        <div style="text-align : center"><td> <input id="fifty" type="checkbox" value="Car"> Select</td></div>
        <td><select name="sel50" class="form-control" id="sel50" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
            </select></td>
      </tr>
     
    
    </tbody>
  </table>
</div>

</body>
</html>
