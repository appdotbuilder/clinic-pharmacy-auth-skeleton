import { PlaceholderPattern } from '@/components/ui/placeholder-pattern';
import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/react';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
    },
];

export default function Dashboard() {
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Dashboard" />
            <div className="flex h-full flex-1 flex-col gap-6 rounded-xl p-6 overflow-x-auto">
                {/* Welcome Header */}
                <div className="rounded-xl bg-gradient-to-r from-blue-50 to-green-50 p-6 border border-blue-200 dark:from-blue-950 dark:to-green-950 dark:border-blue-800">
                    <div className="flex items-center gap-3 mb-2">
                        <span className="text-2xl">👋</span>
                        <h1 className="text-2xl font-bold text-gray-900 dark:text-white">Welcome to Your Clinic Pharmacy Dashboard</h1>
                    </div>
                    <p className="text-gray-600 dark:text-gray-300">
                        Overview of your clinic and pharmacy operations for today
                    </p>
                </div>

                {/* Stats Cards */}
                <div className="grid auto-rows-min gap-6 md:grid-cols-3">
                    <div className="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border bg-white dark:bg-gray-800 p-6">
                        <div className="flex items-center justify-between h-full">
                            <div>
                                <div className="text-3xl mb-2">👥</div>
                                <h3 className="text-lg font-semibold text-gray-900 dark:text-white mb-1">Patients Today</h3>
                                <p className="text-3xl font-bold text-blue-600">24</p>
                                <p className="text-sm text-gray-500 dark:text-gray-400">+12% from yesterday</p>
                            </div>
                        </div>
                        <PlaceholderPattern className="absolute inset-0 size-full stroke-neutral-900/10 dark:stroke-neutral-100/10 -z-10" />
                    </div>
                    
                    <div className="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border bg-white dark:bg-gray-800 p-6">
                        <div className="flex items-center justify-between h-full">
                            <div>
                                <div className="text-3xl mb-2">💊</div>
                                <h3 className="text-lg font-semibold text-gray-900 dark:text-white mb-1">Prescriptions</h3>
                                <p className="text-3xl font-bold text-green-600">18</p>
                                <p className="text-sm text-gray-500 dark:text-gray-400">3 pending review</p>
                            </div>
                        </div>
                        <PlaceholderPattern className="absolute inset-0 size-full stroke-neutral-900/10 dark:stroke-neutral-100/10 -z-10" />
                    </div>
                    
                    <div className="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border bg-white dark:bg-gray-800 p-6">
                        <div className="flex items-center justify-between h-full">
                            <div>
                                <div className="text-3xl mb-2">📦</div>
                                <h3 className="text-lg font-semibold text-gray-900 dark:text-white mb-1">Inventory Alerts</h3>
                                <p className="text-3xl font-bold text-orange-600">5</p>
                                <p className="text-sm text-gray-500 dark:text-gray-400">Low stock items</p>
                            </div>
                        </div>
                        <PlaceholderPattern className="absolute inset-0 size-full stroke-neutral-900/10 dark:stroke-neutral-100/10 -z-10" />
                    </div>
                </div>

                {/* Main Content Area */}
                <div className="grid gap-6 lg:grid-cols-2">
                    {/* Recent Activity */}
                    <div className="relative min-h-[400px] overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border bg-white dark:bg-gray-800 p-6">
                        <h2 className="text-xl font-semibold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                            <span>📋</span>
                            Recent Activity
                        </h2>
                        <div className="space-y-4">
                            <div className="flex items-center gap-3 p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                <span className="text-lg">👩‍⚕️</span>
                                <div>
                                    <p className="font-medium text-gray-900 dark:text-white">New patient registration</p>
                                    <p className="text-sm text-gray-500 dark:text-gray-400">Sarah Johnson - 10 minutes ago</p>
                                </div>
                            </div>
                            <div className="flex items-center gap-3 p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                <span className="text-lg">💉</span>
                                <div>
                                    <p className="font-medium text-gray-900 dark:text-white">Prescription filled</p>
                                    <p className="text-sm text-gray-500 dark:text-gray-400">Amoxicillin 500mg - 25 minutes ago</p>
                                </div>
                            </div>
                            <div className="flex items-center gap-3 p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                <span className="text-lg">⚠️</span>
                                <div>
                                    <p className="font-medium text-gray-900 dark:text-white">Inventory alert</p>
                                    <p className="text-sm text-gray-500 dark:text-gray-400">Ibuprofen running low - 1 hour ago</p>
                                </div>
                            </div>
                        </div>
                        <PlaceholderPattern className="absolute inset-0 size-full stroke-neutral-900/5 dark:stroke-neutral-100/5 -z-10" />
                    </div>

                    {/* Quick Actions */}
                    <div className="relative min-h-[400px] overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border bg-white dark:bg-gray-800 p-6">
                        <h2 className="text-xl font-semibold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                            <span>⚡</span>
                            Quick Actions
                        </h2>
                        <div className="grid gap-4">
                            <button className="flex items-center gap-3 p-4 bg-blue-50 hover:bg-blue-100 dark:bg-blue-950 dark:hover:bg-blue-900 rounded-lg transition-colors text-left">
                                <span className="text-2xl">👤</span>
                                <div>
                                    <p className="font-medium text-gray-900 dark:text-white">Add New Patient</p>
                                    <p className="text-sm text-gray-500 dark:text-gray-400">Register a new patient in the system</p>
                                </div>
                            </button>
                            <button className="flex items-center gap-3 p-4 bg-green-50 hover:bg-green-100 dark:bg-green-950 dark:hover:bg-green-900 rounded-lg transition-colors text-left">
                                <span className="text-2xl">📝</span>
                                <div>
                                    <p className="font-medium text-gray-900 dark:text-white">Create Prescription</p>
                                    <p className="text-sm text-gray-500 dark:text-gray-400">Write a new prescription for a patient</p>
                                </div>
                            </button>
                            <button className="flex items-center gap-3 p-4 bg-purple-50 hover:bg-purple-100 dark:bg-purple-950 dark:hover:bg-purple-900 rounded-lg transition-colors text-left">
                                <span className="text-2xl">📋</span>
                                <div>
                                    <p className="font-medium text-gray-900 dark:text-white">Schedule Appointment</p>
                                    <p className="text-sm text-gray-500 dark:text-gray-400">Book a new appointment slot</p>
                                </div>
                            </button>
                            <button className="flex items-center gap-3 p-4 bg-orange-50 hover:bg-orange-100 dark:bg-orange-950 dark:hover:bg-orange-900 rounded-lg transition-colors text-left">
                                <span className="text-2xl">📊</span>
                                <div>
                                    <p className="font-medium text-gray-900 dark:text-white">View Reports</p>
                                    <p className="text-sm text-gray-500 dark:text-gray-400">Access detailed analytics and reports</p>
                                </div>
                            </button>
                        </div>
                        <PlaceholderPattern className="absolute inset-0 size-full stroke-neutral-900/5 dark:stroke-neutral-100/5 -z-10" />
                    </div>
                </div>

                {/* Bottom Section - Today's Schedule */}
                <div className="relative min-h-[300px] overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border bg-white dark:bg-gray-800 p-6">
                    <h2 className="text-xl font-semibold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                        <span>🗓️</span>
                        Today's Schedule
                    </h2>
                    <div className="grid gap-4 md:grid-cols-3">
                        <div className="p-4 bg-blue-50 dark:bg-blue-950 rounded-lg">
                            <h4 className="font-semibold text-blue-900 dark:text-blue-100">Morning (9:00 - 12:00)</h4>
                            <p className="text-sm text-blue-700 dark:text-blue-300 mt-1">8 appointments scheduled</p>
                        </div>
                        <div className="p-4 bg-green-50 dark:bg-green-950 rounded-lg">
                            <h4 className="font-semibold text-green-900 dark:text-green-100">Afternoon (1:00 - 5:00)</h4>
                            <p className="text-sm text-green-700 dark:text-green-300 mt-1">12 appointments scheduled</p>
                        </div>
                        <div className="p-4 bg-purple-50 dark:bg-purple-950 rounded-lg">
                            <h4 className="font-semibold text-purple-900 dark:text-purple-100">Evening (5:00 - 8:00)</h4>
                            <p className="text-sm text-purple-700 dark:text-purple-300 mt-1">4 appointments scheduled</p>
                        </div>
                    </div>
                    <PlaceholderPattern className="absolute inset-0 size-full stroke-neutral-900/5 dark:stroke-neutral-100/5 -z-10" />
                </div>
            </div>
        </AppLayout>
    );
}