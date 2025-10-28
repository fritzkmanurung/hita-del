// public/js/auth.js
document.addEventListener('DOMContentLoaded', function() {
    // Form validation
    const loginForm = document.querySelector('form');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            let isValid = true;
            
            // Clear previous errors
            clearErrors();
            
            // Email validation
            if (!emailInput.value.trim()) {
                showError(emailInput, 'Email address is required');
                isValid = false;
            } else if (!isValidEmail(emailInput.value.trim())) {
                showError(emailInput, 'Please enter a valid email address');
                isValid = false;
            }
            
            // Password validation
            if (!passwordInput.value.trim()) {
                showError(passwordInput, 'Password is required');
                isValid = false;
            }
            
            if (!isValid) {
                e.preventDefault();
            }
        });
    }
    
    // Real-time validation
    if (emailInput) {
        emailInput.addEventListener('blur', function() {
            if (this.value.trim() && !isValidEmail(this.value.trim())) {
                showError(this, 'Please enter a valid email address');
            } else {
                clearError(this);
            }
        });
    }
    
    if (passwordInput) {
        passwordInput.addEventListener('blur', function() {
            if (!this.value.trim()) {
                showError(this, 'Password is required');
            } else {
                clearError(this);
            }
        });
    }
    
    // Input focus effects
    const inputs = document.querySelectorAll('.form-input');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.classList.remove('focused');
        });
    });
    
    // Helper functions
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
    function showError(input, message) {
        input.classList.add('error');
        
        let errorElement = input.parentElement.querySelector('.error-message');
        if (!errorElement) {
            errorElement = document.createElement('div');
            errorElement.className = 'error-message';
            input.parentElement.appendChild(errorElement);
        }
        
        errorElement.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
            ${message}
        `;
    }
    
    function clearError(input) {
        input.classList.remove('error');
        const errorElement = input.parentElement.querySelector('.error-message');
        if (errorElement) {
            errorElement.remove();
        }
    }
    
    function clearErrors() {
        inputs.forEach(input => {
            clearError(input);
        });
    }
    
    // Add loading state to submit button
    const submitButton = document.querySelector('.submit-btn');
    if (submitButton && loginForm) {
        loginForm.addEventListener('submit', function() {
            submitButton.disabled = true;
            submitButton.innerHTML = `
                <svg class="animate-spin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" stroke-dasharray="32" stroke-dashoffset="32" transform="rotate(0 12 12)">
                        <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 12 12;360 12 12"/>
                        <animate attributeName="stroke-dashoffset" values="32;0" repeatCount="indefinite" dur="1s"/>
                    </circle>
                </svg>
                Signing In...
            `;
        });
    }
});