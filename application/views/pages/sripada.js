var disp1 = document.getElementById('label2');
var disp2 = document.getElementById('lb2');


$("#lb1").change(function(){
    //alert($("#sel1").val());
    //$(this).css("background-color", "#D6D6FF");
    //alert("dd");

    if($("#lb1").val() == Yes){
        //alert($("#sel1").val());
        disp1.style.display = "block";
        disp2.style.display = "block";
        // one.style.display = "block";

    }else if($("#lb1").val() == No){
        disp1.style.display = "none";
        disp2.style.display = "none";

    }
    // else if($("#sel1").val() == 2){
    //     index1.style.display = "block";
    //     index2.style.display = "block";
    // }
    // else if($("#sel1").val() == 3){
    //     index1.style.display = "block";
    //     index2.style.display = "block";
    //     index3.style.display = "block";

    // }

    
  });


// $("#sel1").change()
// if($("#sel1").val == 1){
//     alert("1111");
// }