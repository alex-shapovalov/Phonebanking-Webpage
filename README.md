# Phonebanking portal:
*Phone banking tool + canvassing form*

Created an in-house webpage solution designed to assist volunteers in verifying inaccurate phone numbers.

![image](https://github.com/alex-shapovalov/Phonebanking/blob/main/phonebanking1.PNG)
![image](https://github.com/alex-shapovalov/Phonebanking/blob/main/phonebanking2.PNG)

` JavaScript + SQL Data Fetch / Return

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
 
`
