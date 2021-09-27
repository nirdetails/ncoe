var lbl2 = document.getElementById('label2');
var sworker = document.getElementById('sworker');

$("#sripada").change(function(){
    // alert($("#sripada").val());
    if($("#sripada").val() == 'Yes'){
        // alert("Working");
        lbl2.style.display = "block";
        sworker.style.display = "block";
    }else{
        lbl2.style.display = "none";
        sworker.style.display = "none";
    }
})