var container1 = document.getElementById('con1');
var container2 = document.getElementById('con2');
var container3 = document.getElementById('con3');



$("#sel1").change(function(){
    //alert($("#sel1").val());
    //$(this).css("background-color", "#D6D6FF");
    //alert("dd");

    if($("#sel1").val() == 1){
        // alert($("#sel1").val());
        container1.style.display = "block";
    }
    else if($("#sel1").val() == 2){
        container1.style.display = "block";
        container2.style.display = "block";
    }
    else if($("#sel1").val() == 3){
        container1.style.display = "block";
        container2.style.display = "block";
        container3.style.display = "block";
    }
    else{
        container1.style.display = "none";
        container2.style.display = "none";
        container3.style.display = "none";

    }

    
  });


// $("#sel1").change()
// if($("#sel1").val == 1){
//     alert("1111");
// }