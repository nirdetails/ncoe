$("#certificates1").hide(); // 11, 12, 13, 14, 15
$("#certificates2").hide(); // 11, 12, 13, 14, 15
$("#certificates3").hide(); // 11, 12, 13, 14, 15

$("#box").hide(); // 28, 29
$("#west").hide(); // 25

$("#category1").hide(); //14, 15
$("#category2").hide(); //14, 15
$("#category3").hide(); //14, 15

$("#course1").change(function () {
	var c1 = $("#course1").val();
	var c2 = $("#course2").val();
	var c3 = $("#course3").val();

	var rel = 0;
	var chr = 0;
	var pe = 0;
	var west = 0;
	var git = 0;
	if (c1 == c2 || c1 == c3) {
		alert("Select a different subject");
		$("#course1")[0].selectedIndex = "";
		$("#category1").hide();
		$("#certificates1").hide();
		$("#gitmarks1").hide();
	}
	else{

	if (
		c1 == "11" ||
		c1 == "12" ||
		c1 == "13" ||
		c1 == "14" ||
		c1 == "15" 
	) {
		rel = 1;
	} else {
		rel = 0;
	}

	if (
		c1 == "14" ||
		c1 == "15" 
	) {
		chr = 1;
	} else {
		chr = 0;
	}

	if (
		c1 == "28" ||
		c1 == "29" 
	) {
		pe = 1;
	} else {
		pe = 0;
	}

	if (c1 == "25" ) {
		west = 1;
	} else {
		west = 0;
	}

	if (
		c1 == "42" ||
		c1 == "43" ||
		c1 == "44" 
	) {
		git = 1;
	} else {
		git = 0;
	}

	if (rel == 1) {
		$("#box").show();
	} else {
		$("#box").hide();
	}

	if (chr == 1) {
		$("#category1").show();
	} else {
		$("#category1").hide();
	}

	if (pe == 1) {
		$("#certificates1").show();
	} else {
		$("#certificates1").hide();
	}

	if (west == 1) {
		$("#west").show();
	} else {
		$("#west").hide();
	}

	if (git == 1) {
		$("#gitmarks1").show();
	} else {
		$("#gitmarks1").hide();
	}
	}
	
});

$("#course2").change(function () {
	var c1 = $("#course1").val();
	var c2 = $("#course2").val();
	var c3 = $("#course3").val();

	var rel = 0;
	var chr = 0;
	var pe = 0;
	var west = 0;
	var git = 0;
	if (c2 == c1 || c2 == c3) {
		alert("Select a different subject");
		$("#course2")[0].selectedIndex = "";
		$("#category2").hide();
		$("#certificates2").hide();
		$("#gitmarks2").hide();
	}
	else{

	if (
		
		c2 == "11" ||
		c2 == "12" ||
		c2 == "13" ||
		c2 == "14" ||
		c2 == "15"
	) {
		rel = 1;
	} else {
		rel = 0;
	}

	if (
		
		c2 == "14" ||
		c2 == "15" 
	) {
		chr = 1;
	} else {
		chr = 0;
	}

	if (
		
		c2 == "28" ||
		c2 == "29"
	) {
		pe = 1;
	} else {
		pe = 0;
	}

	if ( c2 == "25" ) {
		west = 1;
	} else {
		west = 0;
	}

	if (
		
		c2 == "42" ||
		c2 == "43" ||
		c2 == "44" 
	) {
		git = 1;
	} else {
		git = 0;
	}

	if (rel == 1) {
		$("#box").show();
	} else {
		$("#box").hide();
	}

	if (chr == 1) {
		$("#category2").show();
	} else {
		$("#category2").hide();
	}

	if (pe == 1) {
		$("#certificates2").show();
	} else {
		$("#certificates2").hide();
	}

	if (west == 1) {
		$("#west").show();
	} else {
		$("#west").hide();
	}

	if (git == 1) {
		$("#gitmarks2").show();
	} else {
		$("#gitmarks2").hide();
	}

}
});

$("#course3").change(function () {
	var c1 = $("#course1").val();
	var c2 = $("#course2").val();
	var c3 = $("#course3").val();

	var rel = 0;
	var chr = 0;
	var pe = 0;
	var west = 0;
	var git = 0;

	if (c3 == c1 || c3 == c2) {
		alert("Select a different subject");
		$("#course3")[0].selectedIndex = "";
		$("#category3").hide();
		$("#certificates3").hide();
		$("#gitmarks3").hide();
	}
	else{

	if (
		
		c3 == "11" ||
		c3 == "12" ||
		c3 == "13" ||
		c3 == "14" ||
		c3 == "15"
	) {
		rel = 1;
	} else {
		rel = 0;
	}

	if (
		
		c3 == "14" ||
		c3 == "15"
	) {
		chr = 1;
	} else {
		chr = 0;
	}

	if (
	
		c3 == "28" ||
		c3 == "29"
	) {
		pe = 1;
	} else {
		pe = 0;
	}

	if (c1 == "25" || c2 == "25" || c3 == "25") {
		west = 1;
	} else {
		west = 0;
	}

	if (
		
		c3 == "42" ||
		c3 == "43" ||
		c3 == "44"
	) {
		git = 1;
	} else {
		git = 0;
	}

	if (rel == 1) {
		$("#box").show();
	} else {
		$("#box").hide();
	}

	if (chr == 1) {
		$("#category3").show();
	} else {
		$("#category3").hide();
	}

	if (pe == 1) {
		$("#certificates3").show();
	} else {
		$("#certificates3").hide();
	}

	if (west == 1) {
		$("#west").show();
	} else {
		$("#west").hide();
	}

	if (git == 1) {
		$("#gitmarks3").show();
	} else {
		$("#gitmarks3").hide();
	}

}
});

//Onload
$("#course1").ready(function () {
	var c1 = $("#course1").val();


	var rel = 0;
	var chr = 0;
	var pe = 0;
	var west = 0;
	var git = 0;

	if (
		c1 == "11" ||
		c1 == "12" ||
		c1 == "13" ||
		c1 == "14" ||
		c1 == "15" 
	) {
		rel = 1;
	} else {
		rel = 0;
	}

	if (
		c1 == "14" ||
		c1 == "15" 
	) {
		chr = 1;
	} else {
		chr = 0;
	}

	if (
		c1 == "28" ||
		c1 == "29" 
	) {
		pe = 1;
	} else {
		pe = 0;
	}

	if (c1 == "25") {
		west = 1;
	} else {
		west = 0;
	}

	if (
		c1 == "42" ||
		c1 == "43" ||
		c1 == "44" 
	) {
		git = 1;
	} else {
		git = 0;
	}

	if (rel == 1) {
		$("#box").show();
	} else {
		$("#box").hide();
	}

	if (chr == 1) {
		$("#category1").show();
	} else {
		$("#category1").hide();
	}

	if (pe == 1) {
		$("#certificates1").show();
	} else {
		$("#certificates1").hide();
	}

	if (west == 1) {
		$("#west").show();
	} else {
		$("#west").hide();
	}

	if (git == 1) {
		$("#gitmarks1").show();
	} else {
		$("#gitmarks1").hide();
	}
});

$("#course2").ready(function () {
	
	var c2 = $("#course2").val();


	var rel = 0;
	var chr = 0;
	var pe = 0;
	var west = 0;
	var git = 0;

	if (
		
		c2 == "11" ||
		c2 == "12" ||
		c2 == "13" ||
		c2 == "14" ||
		c2 == "15"
	) {
		rel = 1;
	} else {
		rel = 0;
	}

	if (
	
		c2 == "14" ||
		c2 == "15" 
	) {
		chr = 1;
	} else {
		chr = 0;
	}

	if (
	
		c2 == "28" ||
		c2 == "29" 
	) {
		pe = 1;
	} else {
		pe = 0;
	}

	if ( c2 == "25") {
		west = 1;
	} else {
		west = 0;
	}

	if (
		
		c2 == "42" ||
		c2 == "43" ||
		c2 == "44" 
	) {
		git = 1;
	} else {
		git = 0;
	}

	if (rel == 1) {
		$("#box").show();
	} else {
		$("#box").hide();
	}

	if (chr == 1) {
		$("#category2").show();
	} else {
		$("#category2").hide();
	}

	if (pe == 1) {
		$("#certificates2").show();
	} else {
		$("#certificates2").hide();
	}

	if (west == 1) {
		$("#west").show();
	} else {
		$("#west").hide();
	}

	if (git == 1) {
		$("#gitmarks2").show();
	} else {
		$("#gitmarks2").hide();
	}
});

$("#course3").ready(function () {
	
	var c3 = $("#course3").val();

	var rel = 0;
	var chr = 0;
	var pe = 0;
	var west = 0;
	var git = 0;

	if (
		
		c3 == "11" ||
		c3 == "12" ||
		c3 == "13" ||
		c3 == "14" ||
		c3 == "15"
	) {
		rel = 1;
	} else {
		rel = 0;
	}

	if (
		
		c3 == "14" ||
		c3 == "15"
	) {
		chr = 1;
	} else {
		chr = 0;
	}

	if (
		
		c3 == "28" ||
		c3 == "29"
	) {
		pe = 1;
	} else {
		pe = 0;
	}

	if (c3 == "25") {
		west = 1;
	} else {
		west = 0;
	}

	if (
		
		c3 == "42" ||
		c3 == "43" ||
		c3 == "44"
	) {
		git = 1;
	} else {
		git = 0;
	}

	if (rel == 1) {
		$("#box").show();
	} else {
		$("#box").hide();
	}

	if (chr == 1) {
		$("#category3").show();
	} else {
		$("#category3").hide();
	}

	if (pe == 1) {
		$("#certificates3").show();
	} else {
		$("#certificates3").hide();
	}

	if (west == 1) {
		$("#west").show();
	} else {
		$("#west").hide();
	}

	if (git == 1) {
		$("#gitmarks3").show();
	} else {
		$("#gitmarks3").hide();
	}
});

function calcSum() {
	var num1 = parseInt(document.getElementById("peolmarks").value);
	var num2 = parseInt(document.getElementById("pencoemarks").value);
	document.getElementById("pemarks1").value = num1 + num2;
}

function calcSum1() {
	var num1 = parseInt(document.getElementById("peolmarks1").value);
	var num2 = parseInt(document.getElementById("pencoemarks1").value);
	document.getElementById("pemarks2").value = num1 + num2;
}

function calcSum2() {
	var num1 = parseInt(document.getElementById("peolmarks2").value);
	var num2 = parseInt(document.getElementById("pencoemarks2").value);
	document.getElementById("pemarks3").value = num1 + num2;
}

