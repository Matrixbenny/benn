document.getElementById('/Register').addEventListener('submit', function (event) {
    event.preventDefault();

    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirm-password').value;

    var passwordError = document.getElementById('password-error');
    var confirmPasswordError = document.getElementById('confirm-password-error');

    if (password.length < 6 || !/[0-9]/.test(password) || !/[!@#$%^&*(),.?":{}|<>]/.test(password)) {
        passwordError.textContent = 'Password must be at least 6 characters with 1 number and special character.';
        return;
    } else {
        passwordError.textContent = '';
    }

    if (password !== confirmPassword) {
        confirmPasswordError.textContent = 'Passwords do not match.';
        return;
    } else {
        confirmPasswordError.textContent = '';
    }

    // Send the form data to the server using fetch or XMLHttpRequest
    //...

    // Clear the form after successful submission
    document.getElementById('/Register').reset();
});