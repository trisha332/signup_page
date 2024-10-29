
document.addEventListener('DOMContentLoaded', function() {
    // Handle form submission
    document.querySelector('.signupbtn').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent actual form submission

        // Get form values
        const email = document.querySelector('input[name="email"]').value;
        const password = document.querySelector('input[name="psw"]').value;
        const passwordRepeat = document.querySelector('input[name="psw-repeat"]').value;

        // Validate passwords
        if (password !== passwordRepeat) {
            alert('Passwords do not match.');
            return;
        }

        // Additional form validation (e.g., email validation) can go here

        // Simulate form submission
        alert(`Form submitted successfully!\nEmail: ${email}`);
    });

    // Handle cancel button click
    document.querySelector('.cancelbtn').addEventListener('click', function() {
        // Optionally, clear the form or redirect
        // For example, clear the form fields:
        document.querySelector('input[name="email"]').value = '';
        document.querySelector('input[name="psw"]').value = '';
        document.querySelector('input[name="psw-repeat"]').value = '';
    });
});
