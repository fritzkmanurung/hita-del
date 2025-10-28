<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Modern Design</title>
    <style>
        :root {
            --primary: #4f46e5;
            --primary-dark: #4338ca;
            --secondary: #f3f4f6;
            --text: #1f2937;
            --text-light: #6b7280;
            --white: #ffffff;
            --error: #ef4444;
            --success: #10b981;
            --border: #d1d5db;
            --shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }

        body {
            background-color: #f9fafb;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .login-container {
            display: flex;
            width: 100%;
            max-width: 900px;
            background-color: var(--white);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .login-left {
            flex: 1;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: var(--white);
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .login-left::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
        }

        .login-left h1 {
            font-size: 2.5rem;
            margin-bottom: 16px;
            font-weight: 700;
            position: relative;
            z-index: 1;
        }

        .login-left p {
            font-size: 1.1rem;
            opacity: 0.9;
            line-height: 1.6;
            position: relative;
            z-index: 1;
        }

        .login-right {
            flex: 1;
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .login-header h2 {
            font-size: 2rem;
            color: var(--text);
            margin-bottom: 8px;
        }

        .login-header p {
            color: var(--text-light);
            font-size: 1rem;
        }

        .form-group {
            margin-bottom: 24px;
            position: relative;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--text);
            font-size: 0.95rem;
        }

        .form-input {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid var(--border);
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.2s ease;
            background-color: var(--white);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }

        .form-input.error {
            border-color: var(--error);
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .remember-me {
            display: flex;
            align-items: center;
        }

        .remember-me input {
            margin-right: 8px;
            width: 18px;
            height: 18px;
            accent-color: var(--primary);
        }

        .remember-me label {
            font-size: 0.95rem;
            color: var(--text-light);
        }

        .forgot-password {
            color: var(--primary);
            text-decoration: none;
            font-size: 0.95rem;
            transition: color 0.2s ease;
        }

        .forgot-password:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }

        .submit-btn {
            background-color: var(--primary);
            color: var(--white);
            border: none;
            border-radius: 8px;
            padding: 14px 24px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s ease;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .submit-btn:hover {
            background-color: var(--primary-dark);
        }

        .submit-btn:active {
            transform: translateY(1px);
        }

        .submit-btn svg {
            margin-right: 8px;
        }

        .error-message {
            color: var(--error);
            font-size: 0.875rem;
            margin-top: 6px;
            display: flex;
            align-items: center;
        }

        .error-message svg {
            margin-right: 6px;
        }

        .success-message {
            color: var(--success);
            font-size: 0.875rem;
            margin-top: 6px;
            display: flex;
            align-items: center;
        }

        .success-message svg {
            margin-right: 6px;
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 30px 0;
            color: var(--text-light);
            font-size: 0.875rem;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background-color: var(--border);
        }

        .divider::before {
            margin-right: 16px;
        }

        .divider::after {
            margin-left: 16px;
        }

        .social-login {
            display: flex;
            gap: 16px;
            margin-bottom: 30px;
        }

        .social-btn {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 12px;
            border: 1px solid var(--border);
            border-radius: 8px;
            background-color: var(--white);
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .social-btn:hover {
            background-color: var(--secondary);
        }

        .social-btn svg {
            margin-right: 8px;
        }

        .signup-link {
            text-align: center;
            margin-top: 30px;
            color: var(--text-light);
            font-size: 0.95rem;
        }

        .signup-link a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .login-container {
                flex-direction: column;
            }
            
            .login-left {
                padding: 40px 30px;
            }
            
            .login-right {
                padding: 40px 30px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-left">
            <h1>Welcome Back</h1>
            <p>Sign in to your account to continue your journey with us. Access all your personalized content and settings.</p>
        </div>
        
        <div class="login-right">
            <div class="login-header">
                <h2>Sign In</h2>
                <p>Enter your credentials to access your account</p>
            </div>
            
            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <!-- Email Address -->
                <div class="form-group">
                    <label class="form-label" for="email">Email Address</label>
                    <input id="email" class="form-input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Enter your email">
                    <!-- Error messages would appear here -->
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <input id="password" class="form-input" type="password" name="password" required autocomplete="current-password" placeholder="Enter your password">
                    <!-- Error messages would appear here -->
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="form-options">
                    <div class="remember-me">
                        <input id="remember_me" type="checkbox" name="remember">
                        <label for="remember_me">Remember me</label>
                    </div>
                    <a class="forgot-password" href="{{ route('password.request') }}">
                        Forgot password?
                    </a>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="submit-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                    </svg>
                    Sign In
                </button>
            </form>
            
            <div class="divider">Or continue with</div>
            
            <div class="social-login">
                <button class="social-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                    </svg>
                    Google
                </button>
                <button class="social-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                    </svg>
                    LinkedIn
                </button>
            </div>
            
            <div class="signup-link">
                Don't have an account? <a href="#">Sign up</a>
            </div>
        </div>
    </div>
</body>
</html>