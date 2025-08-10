@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">🎨 Appearance Settings</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">
                        {{ __('Customize the appearance and theme of your application.') }}
                    </p>

                    <div class="row g-4">
                        <!-- Theme Selection -->
                        <div class="col-12">
                            <h5 class="mb-3">Theme</h5>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="card h-100">
                                        <div class="card-body text-center">
                                            <div class="mb-3">
                                                <div class="bg-light border rounded p-3 mb-2">
                                                    <div class="bg-white border rounded p-2 mb-1"></div>
                                                    <div class="bg-primary rounded" style="height: 4px;"></div>
                                                </div>
                                            </div>
                                            <h6>☀️ Light</h6>
                                            <p class="text-muted small">Clean and bright interface</p>
                                            <button class="btn btn-outline-primary btn-sm" onclick="setTheme('light')">
                                                Select
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card h-100">
                                        <div class="card-body text-center">
                                            <div class="mb-3">
                                                <div class="bg-dark border rounded p-3 mb-2">
                                                    <div class="bg-secondary border rounded p-2 mb-1"></div>
                                                    <div class="bg-primary rounded" style="height: 4px;"></div>
                                                </div>
                                            </div>
                                            <h6>🌙 Dark</h6>
                                            <p class="text-muted small">Easy on the eyes</p>
                                            <button class="btn btn-outline-primary btn-sm" onclick="setTheme('dark')">
                                                Select
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card h-100">
                                        <div class="card-body text-center">
                                            <div class="mb-3">
                                                <div class="bg-gradient border rounded p-3 mb-2">
                                                    <div class="bg-white bg-opacity-75 border rounded p-2 mb-1"></div>
                                                    <div class="bg-primary rounded" style="height: 4px;"></div>
                                                </div>
                                            </div>
                                            <h6>🔄 System</h6>
                                            <p class="text-muted small">Follow system preference</p>
                                            <button class="btn btn-outline-primary btn-sm" onclick="setTheme('system')">
                                                Select
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Color Scheme (Future Feature) -->
                        <div class="col-12">
                            <hr>
                            <h5 class="mb-3">Color Scheme</h5>
                            <p class="text-muted mb-3">Choose your preferred color scheme (coming soon).</p>
                            
                            <div class="row g-2">
                                <div class="col-auto">
                                    <button class="btn btn-primary btn-sm" disabled>
                                        <span class="badge bg-primary rounded-pill me-1">&nbsp;</span>
                                        Blue (Current)
                                    </button>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-outline-secondary btn-sm" disabled>
                                        <span class="badge bg-success rounded-pill me-1">&nbsp;</span>
                                        Green
                                    </button>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-outline-secondary btn-sm" disabled>
                                        <span class="badge bg-warning rounded-pill me-1">&nbsp;</span>
                                        Orange
                                    </button>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-outline-secondary btn-sm" disabled>
                                        <span class="badge bg-info rounded-pill me-1">&nbsp;</span>
                                        Cyan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>
                    
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">
                            Changes are applied immediately
                        </small>
                        
                        <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary">
                            {{ __('Back to Dashboard') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function setTheme(theme) {
    // Simple theme switching logic
    // In a real application, this would save to the backend
    if (theme === 'light') {
        document.documentElement.classList.remove('dark');
        localStorage.setItem('theme', 'light');
        showAlert('Light theme applied!', 'success');
    } else if (theme === 'dark') {
        document.documentElement.classList.add('dark');
        localStorage.setItem('theme', 'dark');
        showAlert('Dark theme applied!', 'success');
    } else if (theme === 'system') {
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        if (prefersDark) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
        localStorage.setItem('theme', 'system');
        showAlert('System theme preference applied!', 'success');
    }
}

function showAlert(message, type) {
    const alertDiv = document.createElement('div');
    alertDiv.className = `alert alert-${type} alert-dismissible fade show`;
    alertDiv.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;
    
    const container = document.querySelector('.container');
    container.insertBefore(alertDiv, container.firstChild);
    
    // Auto-dismiss after 3 seconds
    setTimeout(() => {
        alertDiv.remove();
    }, 3000);
}
</script>
@endsection