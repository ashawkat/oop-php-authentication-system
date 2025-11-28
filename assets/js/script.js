document.addEventListener('DOMContentLoaded', function() {
    // Login Form Validation
    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            let isValid = true;
            const emailInput = document.getElementById('emailusername');
            const passwordInput = document.getElementById('password');

            // Reset previous errors
            removeError(emailInput);
            removeError(passwordInput);

            if (!emailInput.value.trim()) {
                showError(emailInput, 'Please enter your username or email.');
                isValid = false;
            }

            if (!passwordInput.value.trim()) {
                showError(passwordInput, 'Please enter your password.');
                isValid = false;
            }

            if (!isValid) {
                e.preventDefault();
            }
        });
    }

    // Registration Form Validation
    const registerForm = document.getElementById('registerForm');
    if (registerForm) {
        registerForm.addEventListener('submit', function(e) {
            let isValid = true;
            const fullnameInput = document.getElementById('fullname');
            const unameInput = document.getElementById('uname');
            const uemailInput = document.getElementById('uemail');
            const upassInput = document.getElementById('upass');

            // Reset previous errors
            [fullnameInput, unameInput, uemailInput, upassInput].forEach(removeError);

            if (!fullnameInput.value.trim()) {
                showError(fullnameInput, 'Please enter your full name.');
                isValid = false;
            }

            if (!unameInput.value.trim()) {
                showError(unameInput, 'Please enter a username.');
                isValid = false;
            }

            if (!uemailInput.value.trim()) {
                showError(uemailInput, 'Please enter your email address.');
                isValid = false;
            } else if (!isValidEmail(uemailInput.value.trim())) {
                showError(uemailInput, 'Please enter a valid email address.');
                isValid = false;
            }

            if (!upassInput.value.trim()) {
                showError(upassInput, 'Please enter a password.');
                isValid = false;
            } else if (upassInput.value.length < 6) {
                showError(upassInput, 'Password must be at least 6 characters long.');
                isValid = false;
            }

            if (!isValid) {
                e.preventDefault();
            }
        });
    }

    // Helper functions
    function showError(input, message) {
        input.classList.add('is-invalid');
        // Check if feedback element already exists
        let feedback = input.nextElementSibling;
        if (!feedback || !feedback.classList.contains('invalid-feedback')) {
            feedback = document.createElement('div');
            feedback.className = 'invalid-feedback';
            input.parentNode.appendChild(feedback);
        }
        feedback.textContent = message;
    }

    function removeError(input) {
        input.classList.remove('is-invalid');
        const feedback = input.nextElementSibling;
        if (feedback && feedback.classList.contains('invalid-feedback')) {
            feedback.remove();
        }
    }

    function isValidEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
});
