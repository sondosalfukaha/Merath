<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merath Art - Handcrafted Ceramics & Art</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap"
        rel="stylesheet">

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Custom CSS Variables */
        :root {
            /* Clay Color Palette */
            --clay-50: #FBF8F4;
            --clay-100: #F8F6F2;
            --clay-200: #E8E2D8;
            --clay-300: #D8CEBE;
            --clay-400: #C8B9A4;
            --clay-500: #BFA58A;
            --clay-600: #A68B70;
            --clay-700: #8C7156;
            --clay-800: #73573C;
            --clay-900: #5A3D22;

            /* Terracotta Colors */
            --terracotta-50: #FDF7F3;
            --terracotta-100: #FBEEE7;
            --terracotta-200: #F5D5C3;
            --terracotta-300: #EFBC9F;
            --terracotta-400: #E4A68B;
            --terracotta-500: #D9A679;
            --terracotta-600: #C08A60;
            --terracotta-700: #A76E47;
            --terracotta-800: #8E522E;
            --terracotta-900: #753615;

            /* Charcoal Colors */
            --charcoal-50: #F7F7F7;
            --charcoal-100: #E3E3E3;
            --charcoal-200: #C8C8C8;
            --charcoal-300: #A4A4A4;
            --charcoal-400: #818181;
            --charcoal-500: #666666;
            --charcoal-600: #515151;
            --charcoal-700: #434343;
            --charcoal-800: #383838;
            --charcoal-900: #1A1A1A;
        }

        /* Global Styles */
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            font-weight: 300;
            background-color: var(--clay-100);
            color: var(--charcoal-900);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            line-height: 1.6;
        }

        /* Typography */
        .brand-title {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 600;
            color: var(--charcoal-900);
        }

        .brand-subtitle {
            font-size: 0.875rem;
            color: var(--charcoal-600);
            font-weight: 300;
        }

        .auth-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.25rem;
            font-weight: 600;
            color: var(--charcoal-900);
            margin-bottom: 0.5rem;
        }

        .auth-subtitle {
            color: var(--charcoal-600);
            font-weight: 300;
            font-size: 1rem;
        }

        /* Brand Logo */
        .brand-logo {
            width: 2.5rem;
            height: 2.5rem;
            background-color: var(--clay-500);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.25rem;
        }

        /* Auth Card */
        .auth-card {
            background: white;
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(191, 165, 138, 0.2);
            padding: 2rem;
            animation: slideUp 0.5s ease-out;
        }

        /* Form Styles */
        .form-label {
            font-weight: 500;
            color: var(--charcoal-700);
            margin-bottom: 0.5rem;
            text-align: left;
        }

        .form-control {
            border: 1px solid var(--clay-200);
            background-color: var(--charcoal-50);
            border-radius: 0.5rem;
            padding: 0.75rem 1rem;
            font-weight: 300;
            color: var(--charcoal-900);
            transition: all 0.2s ease;
        }

        .form-control:focus {
            border-color: var(--clay-500);
            box-shadow: 0 0 0 0.2rem rgba(191, 165, 138, 0.25);
            background-color: white;
        }

        .form-control:hover {
            border-color: var(--clay-300);
            transform: translateY(-1px);
        }

        .form-control::placeholder {
            color: var(--charcoal-400);
        }

        .input-group-text {
            background-color: var(--charcoal-50);
            border: 1px solid var(--clay-200);
            color: var(--charcoal-400);
            border-radius: 0.5rem 0 0 0.5rem;
        }

        .input-group .form-control {
            border-radius: 0;
        }

        .input-group .form-control:last-child {
            border-radius: 0 0.5rem 0.5rem 0;
        }

        /* Password Toggle Button */
        .password-toggle {
            border: 1px solid var(--clay-200);
            background-color: var(--charcoal-50);
            color: var(--charcoal-500);
            border-radius: 0 0.5rem 0.5rem 0;
            transition: all 0.2s ease;
        }

        .password-toggle:hover {
            background-color: var(--clay-100);
            color: var(--charcoal-700);
        }

        /* Submit Button */
        .submit-btn {
            background-color: var(--clay-500);
            border: none;
            border-radius: 0.5rem;
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            color: white;
            transition: all 0.2s ease;
            position: relative;
            overflow: hidden;
        }

        .submit-btn:hover {
            background-color: var(--clay-600);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(191, 165, 138, 0.3);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .submit-btn:disabled {
            background-color: var(--clay-400);
            cursor: not-allowed;
            transform: none;
        }

        /* Form Check */
        .form-check-input:checked {
            background-color: var(--clay-500);
            border-color: var(--clay-500);
        }

        .form-check-input:focus {
            box-shadow: 0 0 0 0.2rem rgba(191, 165, 138, 0.25);
        }

        .form-check-label {
            font-weight: 300;
            color: var(--charcoal-600);
            font-size: 0.875rem;
            line-height: 1.5;
        }

        /* Links */
        .forgot-password-link,
        .switch-form-link,
        .terms-link {
            color: var(--clay-600);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s ease;
        }

        .forgot-password-link:hover,
        .switch-form-link:hover,
        .terms-link:hover {
            color: var(--clay-700);
            text-decoration: underline;
        }

        .switch-form-text {
            color: var(--charcoal-600);
            font-weight: 300;
            margin-bottom: 0;
        }

        /* Footer */
        .footer-text {
            color: var(--charcoal-500);
            font-weight: 300;
            font-size: 0.875rem;
        }

        /* Validation Styles */
        .form-control.is-invalid {
            border-color: #dc3545;
            background-color: #fff5f5;
        }

        .form-control.is-invalid:focus {
            border-color: #dc3545;
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
        }

        .invalid-feedback {
            display: block;
            font-size: 0.875rem;
            color: #dc3545;
            margin-top: 0.25rem;
            animation: slideUp 0.3s ease-out;
        }

        /* Animations */
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 0.6s ease-out;
        }

        /* Responsive Design */
        @media (max-width: 576px) {
            .auth-card {
                padding: 1.5rem;
                margin: 1rem;
            }

            .auth-title {
                font-size: 1.875rem;
            }

            .brand-title {
                font-size: 1.75rem;
            }
        }

        @media (max-width: 768px) {
            body {
                padding: 0;
            }

            header {
                padding: 1rem 0;
            }

            main {
                padding: 2rem 0;
            }
        }

        /* Form Transition Effects */
        .auth-card {
            transition: all 0.3s ease;
        }

        .form-floating-effect {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Loading State */
        .btn-spinner {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Success/Error States */
        .success-message {
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
            animation: slideUp 0.3s ease-out;
        }

        .error-message {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
            animation: slideUp 0.3s ease-out;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="py-4">
        <div class="container">
            <div class="d-flex align-items-center">
                <div class="brand-logo me-3">
                    <i class="fas fa-palette"></i>
                </div>
                <div>
                    <h1 class="brand-title mb-0">Merath</h1>
                    <p class="brand-subtitle mb-0">Handcrafted Art</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow-1 d-flex align-items-center justify-content-center py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">



                    <div id="loginForm" class="auth-card">
                        <div class="text-center mb-4">
                            <h2 class="text-2xl font-bold text-center mb-1 auth-title">Join Merath</h2>
                            <p class="text-sm text-center mb-6 text-gray-600 auth-subtitle">Create your account to
                                start your
                                ceramic
                                journey</p>
                        </div>
                        <form id="signupFormElement" method="POST" action="{{ route('register') }}"
                            class="max-w-md mx-auto bg-white p-8 rounded-xl shadow-md">
                            @csrf

                            <!-- Name -->
                            <div class="mb-4">
                                <label for="signupName" class="form-label">Full Name</label>

                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-user text-gray-400"></i>
                                    </span>
                                    <input id="name" name="name" class="form-control" type="text" required
                                        value="{{ old('name') }}"
                                        class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-brown-500"
                                        placeholder="Enter your full name">
                                </div>

                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Email -->
                            <div class="mb-4">
                                <label for="email" class="block mb-1 font-medium form-label">Email
                                    Address</label>
                                <div class="relative">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fas fa-envelope text-gray-400"></i>
                                        </span>
                                        <input id="email" name="email" class="form-control" type="email"
                                            required value="{{ old('email') }}"
                                            class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-brown-500"
                                            placeholder="Enter your email">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Username -->
                            <div class="mb-4">
                                <label for="username" class="block mb-1 font-medium form-label">Username</label>
                                <div class="relative">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fas fa-user-tag text-gray-400"></i>
                                        </span>
                                        <input id="username" name="username" class="form-control" type="text"
                                            required value="{{ old('username') }}"
                                            class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-brown-500"
                                            placeholder="Choose a username">
                                    </div>
                                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mb-4">

                                    <div class="relative">
                                        <label for="password" class="block mb-1 font-medium form-label">Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fas fa-lock text-gray-400"></i>
                                            </span>
                                            <input id="password" name="password" class="form-control" type="password"
                                                required
                                                class="w-full pl-10 pr-10 py-2 border border-gray-300 rounded focus:outline-none focus:border-brown-500"
                                                placeholder="Create a strong password">
                                            <button class="password-toggle btn btn-outline-secondary" type="button">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="mb-4">
                                    <label for="password_confirmation"
                                        class="block mb-1 font-medium form-label">Confirm
                                        Password</label>
                                    <div class="relative">
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fas fa-lock text-gray-400"></i>
                                            </span>
                                            <input id="password_confirmation" name="password_confirmation"
                                                class="form-control" type="password" required
                                                class="w-full pl-10 pr-10 py-2 border border-gray-300 rounded focus:outline-none focus:border-brown-500"
                                                placeholder="Confirm your password">
                                            <button class="btn btn-outline-secondary password-toggle" type="button">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <div class="invalid-feedback"></div>

                                        </div>
                                    </div>

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 invalid-feedback" />
                                </div>

                                <!-- Terms and Conditions -->

                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-primary w-100 submit-btn">
                                    Create Account
                                </button>

                                <!-- Login Link -->
                                <p class="mt-4 text-sm text-center text-gray-600">
                                    Already have an account? <a href="{{ route('login') }}" class="underline">Sign
                                        in
                                        here</a>
                                </p>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
    </main>

    <!-- Footer -->
    <footer class="py-4">
        <div class="container">
            <div class="text-center">
                <p class="footer-text mb-0">
                    © 2025 Merath Art. Crafted with care for ceramic lovers.
                </p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript -->
    <script>
        // Password toggle functionality
        document.querySelectorAll('.password-toggle').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.previousElementSibling;
                const icon = this.querySelector('i');

                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                } else {
                    input.type = 'password';
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                }
            });
        });

        // Form validation
        function validateEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        function validatePassword(password) {
            return password.length >= 8 &&
                /(?=.*[a-z])/.test(password) &&
                /(?=.*[A-Z])/.test(password) &&
                /(?=.*\d)/.test(password);
        }

        function validateName(name) {
            return name.trim().length >= 2;
        }

        function showFieldError(field, message) {
            field.classList.add('is-invalid');
            const feedback = field.parentNode.querySelector('.invalid-feedback') ||
                field.nextElementSibling;
            if (feedback) {
                feedback.textContent = message;
            }
        }

        function clearFieldError(field) {
            field.classList.remove('is-invalid');
            const feedback = field.parentNode.querySelector('.invalid-feedback') ||
                field.nextElementSibling;
            if (feedback) {
                feedback.textContent = '';
            }
        }

        function clearValidation(form) {
            const fields = form.querySelectorAll('.form-control, .form-check-input');
            fields.forEach(field => {
                clearFieldError(field);
            });
        }

        // Real-time validation
        function setupRealTimeValidation() {
            // Login form validation
            const loginEmail = document.getElementById('loginEmail');
            const loginPassword = document.getElementById('loginPassword');

            loginEmail.addEventListener('blur', function() {
                if (!this.value) {
                    showFieldError(this, 'Email is required');
                } else if (!validateEmail(this.value)) {
                    showFieldError(this, 'Please enter a valid email');
                } else {
                    clearFieldError(this);
                }
            });

            loginPassword.addEventListener('blur', function() {
                if (!this.value) {
                    showFieldError(this, 'Password is required');
                } else if (this.value.length < 6) {
                    showFieldError(this, 'Password must be at least 6 characters');
                } else {
                    clearFieldError(this);
                }
            });

            // Signup form validation
            const signupName = document.getElementById('signupName');
            const signupEmail = document.getElementById('signupEmail');
            const signupPassword = document.getElementById('signupPassword');
            const confirmPassword = document.getElementById('confirmPassword');
            const agreeTerms = document.getElementById('agreeTerms');

            signupName.addEventListener('blur', function() {
                if (!validateName(this.value)) {
                    showFieldError(this, 'Full name must be at least 2 characters');
                } else {
                    clearFieldError(this);
                }
            });

            signupEmail.addEventListener('blur', function() {
                if (!this.value) {
                    showFieldError(this, 'Email is required');
                } else if (!validateEmail(this.value)) {
                    showFieldError(this, 'Please enter a valid email');
                } else {
                    clearFieldError(this);
                }
            });

            signupPassword.addEventListener('blur', function() {
                if (!this.value) {
                    showFieldError(this, 'Password is required');
                } else if (!validatePassword(this.value)) {
                    showFieldError(this, 'Password must contain uppercase, lowercase, and number');
                } else {
                    clearFieldError(this);
                }
            });

            confirmPassword.addEventListener('blur', function() {
                if (!this.value) {
                    showFieldError(this, 'Please confirm your password');
                } else if (this.value !== signupPassword.value) {
                    showFieldError(this, 'Passwords do not match');
                } else {
                    clearFieldError(this);
                }
            });

            agreeTerms.addEventListener('change', function() {
                if (!this.checked) {
                    showFieldError(this, 'You must agree to the terms and conditions');
                } else {
                    clearFieldError(this);
                }
            });
        }

        // Form submission
        loginFormElement.addEventListener('submit', function(e) {
            e.preventDefault();

            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            let isValid = true;

            // Validate fields
            if (!email) {
                showFieldError(document.getElementById('email'), 'Email is required');
                isValid = false;
            } else if (!validateEmail(email)) {
                showFieldError(document.getElementById('email'), 'Please enter a valid email');
                isValid = false;
            }

            if (!password) {
                showFieldError(document.getElementById('password'), 'Password is required');
                isValid = false;
            } else if (password.length < 6) {
                showFieldError(document.getElementById('password'), 'Password must be at least 6 characters');
                isValid = false;
            }

            if (isValid) {
                simulateLogin();
            }
        });

        signupFormElement.addEventListener('submit', function(e) {
            e.preventDefault();

            const name = document.getElementById('signupName').value;
            const email = document.getElementById('signupEmail').value;
            const password = document.getElementById('signupPassword').value;
            const confirmPass = document.getElementById('confirmPassword').value;
            const agreeTerms = document.getElementById('agreeTerms').checked;
            let isValid = true;

            // Validate all fields
            if (!validateName(name)) {
                showFieldError(document.getElementById('signupName'), 'Full name must be at least 2 characters');
                isValid = false;
            }

            if (!email) {
                showFieldError(document.getElementById('signupEmail'), 'Email is required');
                isValid = false;
            } else if (!validateEmail(email)) {
                showFieldError(document.getElementById('signupEmail'), 'Please enter a valid email');
                isValid = false;
            }

            if (!password) {
                showFieldError(document.getElementById('signupPassword'), 'Password is required');
                isValid = false;
            } else if (!validatePassword(password)) {
                showFieldError(document.getElementById('signupPassword'),
                    'Password must contain uppercase, lowercase, and number');
                isValid = false;
            }

            if (!confirmPass) {
                showFieldError(document.getElementById('confirmPassword'), 'Please confirm your password');
                isValid = false;
            } else if (password !== confirmPass) {
                showFieldError(document.getElementById('confirmPassword'), 'Passwords do not match');
                isValid = false;
            }

            if (!agreeTerms) {
                showFieldError(document.getElementById('agreeTerms'), 'You must agree to the terms and conditions');
                isValid = false;
            }

            if (isValid) {
                simulateSignup();
            }
        });

        // Simulate API calls
        function simulateLogin() {
            const submitBtn = loginFormElement.querySelector('.submit-btn');
            const btnText = submitBtn.querySelector('.btn-text');
            const btnSpinner = submitBtn.querySelector('.btn-spinner');

            // Show loading state
            submitBtn.disabled = true;
            btnText.classList.add('d-none');
            btnSpinner.classList.remove('d-none');

            // Simulate API call
            setTimeout(() => {
                // Hide loading state
                submitBtn.disabled = false;
                btnText.classList.remove('d-none');
                btnSpinner.classList.add('d-none');

                // Show success message
                showMessage('Login successful! Welcome back to Merath Art.', 'success');

                // Reset form
                loginFormElement.reset();
                clearValidation(loginFormElement);
            }, 1500);
        }

        function simulateSignup() {
            const submitBtn = signupFormElement.querySelector('.submit-btn');
            const btnText = submitBtn.querySelector('.btn-text');
            const btnSpinner = submitBtn.querySelector('.btn-spinner');

            // Show loading state
            submitBtn.disabled = true;
            btnText.classList.add('d-none');
            btnSpinner.classList.remove('d-none');

            // Simulate API call
            setTimeout(() => {
                // Hide loading state
                submitBtn.disabled = false;
                btnText.classList.remove('d-none');
                btnSpinner.classList.add('d-none');

                // Show success message
                showMessage('Account created successfully! Welcome to Merath Art.', 'success');

                // Reset form
                signupFormElement.reset();
                clearValidation(signupFormElement);
            }, 1500);
        }

        function showMessage(message, type) {
            // Remove existing messages
            const existingMessages = document.querySelectorAll('.success-message, .error-message');
            existingMessages.forEach(msg => msg.remove());

            // Create new message
            const messageDiv = document.createElement('div');
            messageDiv.className = type === 'success' ? 'success-message' : 'error-message';
            messageDiv.textContent = message;

            // Insert message at the top of the active form
            const activeForm = document.querySelector('.auth-card:not(.d-none)');
            const form = activeForm.querySelector('form');
            form.insertBefore(messageDiv, form.firstChild);

            // Auto-remove message after 5 seconds
            setTimeout(() => {
                messageDiv.remove();
            }, 5000);
        }

        // Add floating effect to form inputs
        function addFloatingEffects() {
            const formControls = document.querySelectorAll('.form-control');

            formControls.forEach(control => {
                control.addEventListener('focus', function() {
                    this.parentNode.parentNode.classList.add('form-floating-effect');
                });

                control.addEventListener('blur', function() {
                    this.parentNode.parentNode.classList.remove('form-floating-effect');
                });
            });
        }

        // Initialize everything when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            setupRealTimeValidation();
            addFloatingEffects();

            // Add entrance animation to the initial form
            loginForm.classList.add('fade-in');
        });

        // Add smooth transitions between forms
        function addFormTransitions() {
            const authCards = document.querySelectorAll('.auth-card');

            authCards.forEach(card => {
                card.addEventListener('animationend', function() {
                    this.classList.remove('fade-in');
                });
            });
        }

        // Initialize form transitions
        addFormTransitions();
    </script>
</body>

</html>
