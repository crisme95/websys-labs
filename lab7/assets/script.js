function openSelection(choice) {
	var i;
	var x = document.getElementsByClassName("choice");
	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
	}
	document.getElementById(choice).style.display = "block";
}
