<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Figtree', sans-serif;
        }
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .feature-icon {
            width: 64px;
            height: 64px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: white;
            margin: 0 auto 1rem;
        }
        .btn-primary-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            padding: 12px 32px;
            border-radius: 50px;
            font-weight: 600;
            transition: transform 0.2s;
        }
        .btn-primary-custom:hover {
            transform: translateY(-2px);
            background: linear-gradient(135deg, #5a6fd8 0%, #6a4190 100%);
        }
        .btn-outline-custom {
            border: 2px solid white;
            color: white;
            padding: 12px 32px;
            border-radius: 50px;
            font-weight: 600;
            background: transparent;
            transition: all 0.2s;
        }
        .btn-outline-custom:hover {
            background: white;
            color: #667eea;
        }
    </style>
</head>
<body>
    <div class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">🚀 Welcome to {{ config('app.name', 'Laravel') }}</h1>
                    <p class="lead mb-5">
                        A powerful Laravel application built with elegant Blade templates and Bootstrap 5. 
                        Experience modern web development with clean, responsive design and robust functionality.
                    </p>
                    
                    <div class="d-flex gap-3 mb-5">
                        @auth
                            <a href="{{ route('dashboard') }}" class="btn btn-primary-custom btn-lg">
                                📊 Go to Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-primary-custom btn-lg">
                                🔑 Login
                            </a>
                            <a href="{{ route('register') }}" class="btn btn-outline-custom btn-lg">
                                ✨ Register
                            </a>
                        @endauth
                    </div>
                </div>
                
                <div class="col-lg-6 text-center">
                    <div class="p-4">
                        <div class="bg-white bg-opacity-10 rounded-4 p-5">
                            <h3 class="h4 mb-4">✨ Key Features</h3>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="feature-icon">
                                        🎨
                                    </div>
                                    <h5>Beautiful UI</h5>
                                    <p class="small opacity-75">Bootstrap 5 powered responsive design</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-icon">
                                        🔒
                                    </div>
                                    <h5>Secure Auth</h5>
                                    <p class="small opacity-75">Laravel Breeze authentication system</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-icon">
                                        ⚡
                                    </div>
                                    <h5>Fast Performance</h5>
                                    <p class="small opacity-75">Optimized Blade templates</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-icon">
                                        📱
                                    </div>
                                    <h5>Mobile Ready</h5>
                                    <p class="small opacity-75">Fully responsive across all devices</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="h3 mb-4">🔧 Built with Modern Technology</h2>
                    <p class="text-muted mb-5">
                        This application leverages the power of Laravel's elegant syntax combined with Bootstrap's 
                        responsive framework to deliver a seamless user experience.
                    </p>
                    
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body text-center p-4">
                                    <div class="feature-icon mx-auto mb-3">
                                        🏗️
                                    </div>
                                    <h5>Laravel Framework</h5>
                                    <p class="text-muted small">
                                        Robust backend with elegant syntax and powerful features
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body text-center p-4">
                                    <div class="feature-icon mx-auto mb-3">
                                        🎨
                                    </div>
                                    <h5>Bootstrap 5</h5>
                                    <p class="text-muted small">
                                        Modern, responsive CSS framework for beautiful interfaces
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body text-center p-4">
                                    <div class="feature-icon mx-auto mb-3">
                                        📄
                                    </div>
                                    <h5>Blade Templates</h5>
                                    <p class="text-muted small">
                                        Laravel's powerful templating engine for clean, maintainable views
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p class="mb-0">&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Built with ❤️ using Laravel & Bootstrap.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>