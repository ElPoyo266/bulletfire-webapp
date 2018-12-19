function openPlayerMenu (event) {
	event.stopPropagation();
	document.getElementById("playerMenu").style.display = "flex";
}

function closePlayerMenu (event) {
	event.preventDefault();
	document.getElementById("playerMenu").style.display = "none";
}