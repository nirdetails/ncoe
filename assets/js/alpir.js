$("#alyear").change(function(){
    var alyear = $(this).val();

    if(alyear == 2018){
        $("#alyear")[0].selectedIndex = "";
        window.location.href = "http://localhost/ncoe/al";

    }
    // alert(alyear);

});