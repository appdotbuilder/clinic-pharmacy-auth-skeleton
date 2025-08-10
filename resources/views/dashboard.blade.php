@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <!-- Welcome Header -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card bg-primary text-white">
                        <div class="card-body p-4">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h1 class="h3 mb-2">👋 Welcome back, {{ Auth::user()->name }}!</h1>
                                    <p class="mb-0 opacity-75">Here's your dashboard overview. Manage your account and explore the features.</p>
                                </div>
                                <div class="col-md-4 text-end">
                                    <div class="display-6">📊</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistics Cards -->
            <div class="row mb-4">
                <div class="col-md-4 mb-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="display-6 text-success mb-3">🎯</div>
                            <h5>Active Projects</h5>
                            <h2 class="text-success">{{ random_int(3, 12) }}</h2>
                            <small class="text-muted">Currently in progress</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="display-6 text-info mb-3">📈</div>
                            <h5>Completed Tasks</h5>
                            <h2 class="text-info">{{ random_int(24, 89) }}</h2>
                            <small class="text-muted">This month</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="display-6 text-warning mb-3">⭐</div>
                            <h5>Achievements</h5>
                            <h2 class="text-warning">{{ random_int(5, 15) }}</h2>
                            <small class="text-muted">Unlocked badges</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="row">
                <div class="col-md-8">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-header bg-white">
                            <h5 class="card-title mb-0">📋 Recent Activity</h5>
                        </div>
                        <div class="card-body">
                            <div class="list-group list-group-flush">
                                <div class="list-group-item d-flex justify-content-between align-items-start border-0">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">✅ Project Setup Completed</div>
                                        <small class="text-muted">Laravel application successfully configured</small>
                                    </div>
                                    <small class="text-muted">2 min ago</small>
                                </div>
                                <div class="list-group-item d-flex justify-content-between align-items-start border-0">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">🎨 UI Components Updated</div>
                                        <small class="text-muted">Bootstrap 5 integration complete</small>
                                    </div>
                                    <small class="text-muted">15 min ago</small>
                                </div>
                                <div class="list-group-item d-flex justify-content-between align-items-start border-0">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">🔒 Authentication System</div>
                                        <small class="text-muted">Laravel Breeze authentication ready</small>
                                    </div>
                                    <small class="text-muted">1 hour ago</small>
                                </div>
                                <div class="list-group-item d-flex justify-content-between align-items-start border-0">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">📱 Responsive Design</div>
                                        <small class="text-muted">Mobile optimization implemented</small>
                                    </div>
                                    <small class="text-muted">2 hours ago</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-white">
                            <h5 class="card-title mb-0">🚀 Quick Actions</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <button class="btn btn-outline-primary w-100">
                                        📝 Create New Project
                                    </button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-outline-success w-100">
                                        📊 View Analytics
                                    </button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-outline-info w-100">
                                        👥 Manage Team
                                    </button>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ route('profile.edit') }}" class="btn btn-outline-warning w-100">
                                        ⚙️ Settings
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-header bg-white">
                            <h5 class="card-title mb-0">👤 Profile Overview</h5>
                        </div>
                        <div class="card-body text-center">
                            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                                 style="width: 80px; height: 80px; font-size: 24px;">
                                {{ substr(Auth::user()->name, 0, 2) }}
                            </div>
                            <h5>{{ Auth::user()->name }}</h5>
                            <p class="text-muted small">{{ Auth::user()->email }}</p>
                            <p class="small text-muted">
                                <strong>Member since:</strong><br>
                                {{ Auth::user()->created_at->format('M d, Y') }}
                            </p>
                            <div class="d-grid gap-2">
                                <a href="{{ route('profile.edit') }}" class="btn btn-outline-primary btn-sm">
                                    👤 Edit Profile
                                </a>
                                <a href="{{ route('password.edit') }}" class="btn btn-outline-secondary btn-sm">
                                    🔒 Change Password
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-white">
                            <h5 class="card-title mb-0">📅 Upcoming</h5>
                        </div>
                        <div class="card-body">
                            <div class="small">
                                <div class="mb-3">
                                    <div class="fw-bold">🎯 Sprint Planning</div>
                                    <div class="text-muted">Tomorrow, 10:00 AM</div>
                                </div>
                                <div class="mb-3">
                                    <div class="fw-bold">📈 Weekly Review</div>
                                    <div class="text-muted">Friday, 3:00 PM</div>
                                </div>
                                <div class="mb-3">
                                    <div class="fw-bold">🚀 Feature Release</div>
                                    <div class="text-muted">Next Monday</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection