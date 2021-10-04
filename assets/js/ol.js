var index1 = document.getElementById('index1');
var index2 = document.getElementById('index2');
var index3 = document.getElementById('index3');
var year1 = document.getElementById('year1');
var year2 = document.getElementById('year2');
var year3 = document.getElementById('year3');


$("#sel1").change(function(){
    // alert($("#sel1").val());
    //$(this).css("background-color", "#D6D6FF");
    //alert("dd");

    if($("#sel1").val() == 1){
        // alert($("#sel1").val());
        index1.style.display = "block";
        index2.style.display = "none";
        index3.style.display = "none";

        year1.style.display = "block";
        year2.style.display = "none";
        year3.style.display = "none";

    }
    else if($("#sel1").val() == 2){
        index1.style.display = "block";
        index2.style.display = "block";
        index3.style.display = "none";

        year1.style.display = "block";
        year2.style.display = "block";
        year3.style.display = "none";

    }
    else if($("#sel1").val() == 3){
        index1.style.display = "block";
        index2.style.display = "block";
        index3.style.display = "block";

        year1.style.display = "block";
        year2.style.display = "block";
        year3.style.display = "block";

    }
    else{
        index1.style.display = "none";
        index2.style.display = "none";
        index3.style.display = "none";

        year1.style.display = "none";
        year2.style.display = "none";
        year3.style.display = "none";
    }

    
  });


// $("#sel1").change()
// if($("#sel1").val == 1){
//     alert("1111");
// }