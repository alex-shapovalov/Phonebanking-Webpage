function fetchPhoneNumber() {
fetch('fetchPhoneNumber.php')
.then(response => response.json())
.then(data => {
	document.getElementById('id').value = data.id;
	document.getElementById('firstName').textContent = data.firstName;
	document.getElementById('lastName').textContent = data.lastName;
	document.getElementById('address').textContent = data.address;
	document.getElementById('county').textContent = data.county;
	document.getElementById('callButton').href = 'http://voice.google.com/calls?a=nc,%2B1' + data.phone;
	})
.catch(error => console.error('Error fetching user details:', error));
}

window.onload = fetchPhoneNumber;