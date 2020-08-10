$("#certificates").hide();
$("#box").hide();

var c1 = $( "#course1" ).val()
var c2 = $( "#course2" ).val()
var c3 = $( "#course3" ).val()

  $( "#course1" ).change(function() {
    if($( "#course1" ).val() == '28' || $( "#course1" ).val() == '29'){
      // alert($( "#course1" ).val());
      $("#certificates").show();
      // $("#box").hide();
    }else if($( "#course1" ).val() == '11' || $( "#course1" ).val() == '12' || $( "#course1" ).val() == '13' || $( "#course1" ).val() == '14' || $( "#course1" ).val() == '15' || $( "#course1" ).val() == '25'){
      $("#box").show();
      // $("#certificates").hide();
    }else{
      $("#certificates").hide();
      // $("#box").hide();
    }
      
  });

  $("#course2" ).change(function() {
    if($( "#course2" ).val() == '28' || $( "#course2" ).val() == '29' || $( "#course1" ).val() == '28' || $( "#course1" ).val() == '29'){
      $("#certificates").show();
      // $("#box").hide();
    }else if($( "#course2" ).val() == '11' || $( "#course2" ).val() == '12' || $( "#course2" ).val() == '13' || $( "#course2" ).val() == '14' || $( "#course2" ).val() == '15' || $( "#course2" ).val() == '25' || $( "#course1" ).val() == '11' || $( "#course1" ).val() == '12' || $( "#course1" ).val() == '13' || $( "#course1" ).val() == '14' || $( "#course1" ).val() == '15' || $( "#course1" ).val() == '25'){
        $("#box").show();
        // $("#certificates").hide();
    }else{
      $("#certificates").hide();
      // $("#box").hide();
    }
      
  });

  $("#course3" ).change(function() {
    if($( "#course3" ).val() == '28' || $( "#course3" ).val() == '29' || $( "#course2" ).val() == '28' || $( "#course2" ).val() == '29' || $( "#course1" ).val() == '28' || $( "#course1" ).val() == '29'){
      $("#certificates").show();
      // $("#box").hide();
    }else if($( "#course3" ).val() == '11' || $( "#course3" ).val() == '12' || $( "#course3" ).val() == '13' || $( "#course3" ).val() == '14' || $( "#course3" ).val() == '15' || $( "#course3" ).val() == '25' || $( "#course2" ).val() == '11' || $( "#course2" ).val() == '12' || $( "#course2" ).val() == '13' || $( "#course2" ).val() == '14' || $( "#course2" ).val() == '15' || $( "#course2" ).val() == '25' || c1 == '11' || c1 == '12' || c1 == '13' || c1 == '14' || c1 == '15' || c1 == '25'){
      $("#box").show();
      // $("#certificates").hide();
    }else{
      $("#certificates").hide();
      // $("#box").hide();
    }
      
  });
