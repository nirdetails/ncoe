// alert("OL works");
var index1 = document.getElementById('index1');
var index2 = document.getElementById('index2');
var index3 = document.getElementById('index3');

$(document).ready(function () {
    $("#sel1").change(function () {
    alert("This");

    if($("#sel1").val() == 1){
        // alert($("#sel1").val());
        index1.style.display = "block";
    }
    else if($("#sel1").val() == 2){
        index1.style.display = "block";
        index2.style.display = "block";
    }
    else if($("#sel1").val() == 3){
        index1.style.display = "block";
        index2.style.display = "block";
        index3.style.display = "block";
    }
    else{
        index1.style.display = "none";
        index2.style.display = "none";
        index3.style.display = "none";

    }

    
  });

});
// $("#sel1").change()
// if($("#sel1").val == 1){
//     alert("1111");
// }