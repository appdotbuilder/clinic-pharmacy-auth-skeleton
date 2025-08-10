// Bootstrap utilities for Laravel Blade templates
console.log('Laravel application with Blade templates and Bootstrap 5 loaded successfully!');

// You can add any custom JavaScript utilities here
window.addEventListener('DOMContentLoaded', function() {
    // Initialize Bootstrap tooltips if needed (when Bootstrap is loaded from CDN)
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    if (typeof window.bootstrap !== 'undefined' && tooltipTriggerList.length > 0) {
        tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new window.bootstrap.Tooltip(tooltipTriggerEl);
        });
    }
});