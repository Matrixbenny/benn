document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('register-form');
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirm-password');
    const confirmPasswordError = document.getElementById('confirm-password-error');
  
    form.addEventListener('submit', function(e) {
      e.preventDefault(); // prevent form submission by default
      if (passwordInput.value !== confirmPasswordInput.value) {
        confirmPasswordError.textContent = 'Passwords do not match';
        confirmPasswordError.style.color = 'red';
      } else {
        confirmPasswordError.textContent = '';
        form.submit(); // submit the form if passwords match
      }
    });
  });
  