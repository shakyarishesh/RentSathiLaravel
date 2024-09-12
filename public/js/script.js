document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    
    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent the default form submission

        const formData = new FormData(form);

        fetch('/registerPost', {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            // Handle successful response
            if (data.success) {
                showAlert('Form submitted successfully!');
            } else {
                showAlert('There was an error submitting the form. Please try again.');
            }
        })
        .catch(error => {
            // Handle errors
            showAlert('An error occurred: ' + error.message);
        });
    });

    function showAlert(message) {
        const alert = document.createElement('div');
        alert.className = 'custom-alert';
        alert.textContent = message;
        document.body.appendChild(alert);
        alert.style.display = 'block';

        setTimeout(() => {
            alert.style.display = 'none';
            document.body.removeChild(alert);
        }, 3000);
    }
});
