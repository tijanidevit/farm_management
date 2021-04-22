$('#regform').submit(function(e) {
	e.preventDefault()
	var checkform = checkform();

	if (checkform) {
		alert('me');
	}
	else{
		alert('you');
	}
})