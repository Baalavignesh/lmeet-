/*jslint browser: true*/
/*global $, jQuery, alert*/





$(document).ready(function () {
	$(".subint").on("click", function () {
		console.log("toggle_subintmar");
		$(this).toggleClass("subintmargin");
	});
});


$(document).ready(function () {
	$(".nosubcat").on("click", function () {
		console.log("toggle_nosub");
		$(this).toggleClass("nosubcatmargin");
	});
});






function str(name,lat,lng) {
	console.log("final_fun");
	var subintmargin = document.getElementsByClassName("subintmargin");
	var nosubcat = document.getElementsByClassName("nosubcatmargin");
	var maincat = document.getElementsByClassName("subintmargin").length;
	var string1 = '';
	var string2 = '';
	var mainstr = '';
	for (var i = 0; i < maincat; i++) {
		mainstr += document.getElementsByClassName("subintmargin")[i].getAttribute("data-name") + ',';
	}
	for (var i = 0; i < subintmargin.length; i++) {
		string1 += subintmargin[i].innerText + ',';
	}
	for (var i = 0; i < nosubcat.length; i++) {
		string2 += nosubcat[i].innerText + ',';
	}
	string1 = string1 + string2;
	mainstr = Array.from(new Set(mainstr.split(','))).toString();
	console.log(mainstr);
	console.log("It is " + name);

	$.post('includes/handlers/ajax_interest.php', { interests: string1, maininterests: mainstr, username: name },
		function () {
			window.location.href = "index.php";
		}
	);

	
	//console.log(string2.replace(/\s/g, ""));
}



//"UPDATE interests SET username='$name', sub_interests='$interest',main_interests='$maininterest'"