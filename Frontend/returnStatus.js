document.querySelector('form').addEventListener('submit', function(event) {
	event.preventDefault();
	const formData = new FormData(this);
	const selectedOption = formData.get('options');
	if (selectedOption === 'default') {
		alert('Please select a valid option before submitting.');
	}
	else {
		fetch('updatePhoneBanking.php', {
			method: 'POST',
			body: formData
		})
		window.location.reload();
	}
});