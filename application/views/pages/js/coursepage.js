
//initial checkCount of zero 
var checkCount = 0;

//maximum number of allowed checked boxes 
var maxChecks = 53;

$(document).ready(function() {

     $(':checkbox[name=checkbox]').change(function() {

        checkCount = $(':checked').length;

        console.log(checkCount);
        if (checkCount >= maxChecks) {
            $(':checkbox[name=checkbox]').not(':checked').attr('disabled', true);
        } else {
            $(':checkbox[name=checkbox]:disabled').attr('disabled', false);
        }

    });

});


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

$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#two').click(function(){
        if($(this).prop("checked") == true){
          $('#sel2').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel2').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});

$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#three').click(function(){
        if($(this).prop("checked") == true){
          $('#sel3').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel3').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});

$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#four').click(function(){
        if($(this).prop("checked") == true){
          $('#sel4').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel4').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});

$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#five').click(function(){
        if($(this).prop("checked") == true){
          $('#sel5').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel5').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});

$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#six').click(function(){
        if($(this).prop("checked") == true){
          $('#sel6').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel6').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});

$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#seven').click(function(){
        if($(this).prop("checked") == true){
          $('#sel7').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel7').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});

$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#eight').click(function(){
        if($(this).prop("checked") == true){
          $('#sel8').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel8').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});

$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#nine').click(function(){
        if($(this).prop("checked") == true){
          $('#sel9').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel9').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});

$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#ten').click(function(){
        if($(this).prop("checked") == true){
          $('#sel10').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel10').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});

$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#eleven').click(function(){
        if($(this).prop("checked") == true){
          $('#sel11').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel11').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});
$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#twelve').click(function(){
        if($(this).prop("checked") == true){
          $('#sel12').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel12').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});
$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#thirteen').click(function(){
        if($(this).prop("checked") == true){
          $('#sel13').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel13').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});
$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#fourteen').click(function(){
        if($(this).prop("checked") == true){
          $('#sel14').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel14').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});
$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#fifteen').click(function(){
        if($(this).prop("checked") == true){
          $('#sel15').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel15').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});
$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#sixteen').click(function(){
        if($(this).prop("checked") == true){
          $('#sel16').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel16').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});
$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#seventeen').click(function(){
        if($(this).prop("checked") == true){
          $('#sel17').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel17').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});
$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#eighteen').click(function(){
        if($(this).prop("checked") == true){
          $('#sel18').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel18').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});
$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#nineteen').click(function(){
        if($(this).prop("checked") == true){
          $('#sel19').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel19').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});
$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#twenty').click(function(){
        if($(this).prop("checked") == true){
          $('#sel20').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel20').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});

$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#twentyone').click(function(){
        if($(this).prop("checked") == true){
          $('#sel21').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel21').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});

$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#twentytwo').click(function(){
        if($(this).prop("checked") == true){
          $('#sel22').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel22').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});

$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#twentythree').click(function(){
        if($(this).prop("checked") == true){
          $('#sel23').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel23').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});


$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#twentyfour').click(function(){
        if($(this).prop("checked") == true){
          $('#sel24').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel24').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});

$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#twentyfive').click(function(){
        if($(this).prop("checked") == true){
          $('#sel25').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel25').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});

$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#twentyseven').click(function(){
        if($(this).prop("checked") == true){
          $('#sel27').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel27').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});

$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#twentyeight').click(function(){
        if($(this).prop("checked") == true){
          $('#sel28').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel28').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});

$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#twentynine').click(function(){
        if($(this).prop("checked") == true){
          $('#sel29').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel29').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});

$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#thirty').click(function(){
        if($(this).prop("checked") == true){
          $('#sel30').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel30').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});

$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#thirtyone').click(function(){
        if($(this).prop("checked") == true){
          $('#sel31').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel31').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});

$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#thirtytwo').click(function(){
        if($(this).prop("checked") == true){
          $('#sel32').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel32').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});
$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#thirtythree').click(function(){
        if($(this).prop("checked") == true){
          $('#sel33').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel33').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});
$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#thirtyfour').click(function(){
        if($(this).prop("checked") == true){
          $('#sel34').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel34').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});
$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#thirtyfive').click(function(){
        if($(this).prop("checked") == true){
          $('#sel35').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel35').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});
$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#thirtysix').click(function(){
        if($(this).prop("checked") == true){
          $('#sel36').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel36').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});
$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#thirtyseven').click(function(){
        if($(this).prop("checked") == true){
          $('#sel37').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel37').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});
$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#thirtyeight').click(function(){
        if($(this).prop("checked") == true){
          $('#sel38').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel38').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});
$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#thirtynine').click(function(){
        if($(this).prop("checked") == true){
          $('#sel39').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel39').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});
$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#fourty').click(function(){
        if($(this).prop("checked") == true){
          $('#sel40').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel40').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});
$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#fourtyone').click(function(){
        if($(this).prop("checked") == true){
          $('#sel41').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel41').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});
$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#fourtytwo').click(function(){
        if($(this).prop("checked") == true){
          $('#sel42').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel42').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});
$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#fourtythree').click(function(){
        if($(this).prop("checked") == true){
          $('#sel43').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel43').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});
$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#fourtyfour').click(function(){
        if($(this).prop("checked") == true){
          $('#sel44').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel44').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});
$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#fourtyfive').click(function(){
        if($(this).prop("checked") == true){
          $('#sel45').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel45').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});
$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#fourtysix').click(function(){
        if($(this).prop("checked") == true){
          $('#sel46').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel46').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});
$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#fourtyseven').click(function(){
        if($(this).prop("checked") == true){
          $('#sel47').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel47').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});
$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#fourtyeight').click(function(){
        if($(this).prop("checked") == true){
          $('#sel48').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel48').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});
$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#fourtynine').click(function(){
        if($(this).prop("checked") == true){
          $('#sel49').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel49').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});
$(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
      $('#fifty').click(function(){
        if($(this).prop("checked") == true){
          $('#sel50').show();
          // $("#result").html("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
          $('#sel50').hide();
          // $("#result").html("Checkbox is unchecked.");
        }
    });
});

























