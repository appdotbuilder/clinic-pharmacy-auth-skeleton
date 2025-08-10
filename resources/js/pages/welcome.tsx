import { type SharedData } from '@/types';
import { Head, Link, usePage } from '@inertiajs/react';

export default function Welcome() {
    const { auth } = usePage<SharedData>().props;

    return (
        <>
            <Head title="Welcome">
                <link rel="preconnect" href="https://fonts.bunny.net" />
                <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
            </Head>
            <div className="flex min-h-screen flex-col items-center bg-gradient-to-br from-blue-50 to-green-50 p-6 text-gray-900 lg:justify-center lg:p-8 dark:from-blue-950 dark:to-green-950 dark:text-gray-100">
                <header className="mb-6 w-full max-w-[335px] text-sm not-has-[nav]:hidden lg:max-w-6xl">
                    <nav className="flex items-center justify-end gap-4">
                        {auth.user ? (
                            <Link
                                href={route('dashboard')}
                                className="inline-block rounded-lg bg-blue-600 px-6 py-2.5 text-sm font-medium leading-normal text-white hover:bg-blue-700 transition-colors shadow-lg"
                            >
                                Dashboard
                            </Link>
                        ) : (
                            <>
                                <Link
                                    href={route('login')}
                                    className="inline-block rounded-lg border border-gray-300 px-6 py-2.5 text-sm font-medium leading-normal text-gray-700 hover:bg-gray-50 transition-colors dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-800"
                                >
                                    Log in
                                </Link>
                                <Link
                                    href={route('register')}
                                    className="inline-block rounded-lg bg-green-600 px-6 py-2.5 text-sm font-medium leading-normal text-white hover:bg-green-700 transition-colors shadow-lg"
                                >
                                    Get Started
                                </Link>
                            </>
                        )}
                    </nav>
                </header>
                
                <div className="flex w-full items-center justify-center opacity-100 transition-opacity duration-750 lg:grow starting:opacity-0">
                    <main className="flex w-full max-w-6xl flex-col items-center text-center">
                        {/* Hero Section */}
                        <div className="mb-16 flex flex-col items-center">
                            <div className="mb-6 flex items-center justify-center">
                                <span className="text-6xl">🏥</span>
                                <span className="ml-4 text-6xl">💊</span>
                            </div>
                            <h1 className="mb-6 text-4xl font-bold tracking-tight lg:text-6xl">
                                <span className="bg-gradient-to-r from-blue-600 to-green-600 bg-clip-text text-transparent">
                                    Clinic Pharmacy
                                </span>
                                <br />
                                Management System
                            </h1>
                            <p className="mb-8 max-w-3xl text-xl text-gray-600 leading-relaxed dark:text-gray-300">
                                Streamline your healthcare operations with our comprehensive clinic and pharmacy management platform. 
                                Built for healthcare professionals who demand efficiency and reliability.
                            </p>
                            
                            {!auth.user && (
                                <div className="flex flex-col gap-4 sm:flex-row">
                                    <Link
                                        href={route('register')}
                                        className="inline-flex items-center justify-center rounded-lg bg-gradient-to-r from-blue-600 to-green-600 px-8 py-4 text-lg font-semibold text-white hover:from-blue-700 hover:to-green-700 transition-all duration-300 shadow-xl transform hover:scale-105"
                                    >
                                        Start Free Trial
                                        <span className="ml-2">→</span>
                                    </Link>
                                    <Link
                                        href={route('login')}
                                        className="inline-flex items-center justify-center rounded-lg border-2 border-gray-300 px-8 py-4 text-lg font-semibold text-gray-700 hover:bg-gray-50 transition-colors dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-800"
                                    >
                                        Sign In
                                    </Link>
                                </div>
                            )}
                        </div>

                        {/* Features Grid */}
                        <div className="mb-16 grid gap-8 md:grid-cols-2 lg:grid-cols-3 max-w-5xl">
                            <div className="rounded-xl bg-white p-8 shadow-lg border border-gray-100 dark:bg-gray-800 dark:border-gray-700">
                                <div className="mb-4 text-4xl">👩‍⚕️</div>
                                <h3 className="mb-3 text-xl font-semibold text-gray-900 dark:text-white">Patient Management</h3>
                                <p className="text-gray-600 dark:text-gray-300">
                                    Comprehensive patient records, appointment scheduling, and medical history tracking
                                </p>
                            </div>
                            
                            <div className="rounded-xl bg-white p-8 shadow-lg border border-gray-100 dark:bg-gray-800 dark:border-gray-700">
                                <div className="mb-4 text-4xl">💉</div>
                                <h3 className="mb-3 text-xl font-semibold text-gray-900 dark:text-white">Prescription Management</h3>
                                <p className="text-gray-600 dark:text-gray-300">
                                    Digital prescriptions, drug interaction checking, and automated refill reminders
                                </p>
                            </div>
                            
                            <div className="rounded-xl bg-white p-8 shadow-lg border border-gray-100 dark:bg-gray-800 dark:border-gray-700">
                                <div className="mb-4 text-4xl">📦</div>
                                <h3 className="mb-3 text-xl font-semibold text-gray-900 dark:text-white">Inventory Control</h3>
                                <p className="text-gray-600 dark:text-gray-300">
                                    Real-time stock tracking, automated reordering, and expiration date monitoring
                                </p>
                            </div>
                            
                            <div className="rounded-xl bg-white p-8 shadow-lg border border-gray-100 dark:bg-gray-800 dark:border-gray-700">
                                <div className="mb-4 text-4xl">💳</div>
                                <h3 className="mb-3 text-xl font-semibold text-gray-900 dark:text-white">Billing & Insurance</h3>
                                <p className="text-gray-600 dark:text-gray-300">
                                    Integrated billing system with insurance claim processing and payment tracking
                                </p>
                            </div>
                            
                            <div className="rounded-xl bg-white p-8 shadow-lg border border-gray-100 dark:bg-gray-800 dark:border-gray-700">
                                <div className="mb-4 text-4xl">📊</div>
                                <h3 className="mb-3 text-xl font-semibold text-gray-900 dark:text-white">Analytics & Reports</h3>
                                <p className="text-gray-600 dark:text-gray-300">
                                    Detailed reports on sales, inventory, patient demographics, and financial performance
                                </p>
                            </div>
                            
                            <div className="rounded-xl bg-white p-8 shadow-lg border border-gray-100 dark:bg-gray-800 dark:border-gray-700">
                                <div className="mb-4 text-4xl">🔒</div>
                                <h3 className="mb-3 text-xl font-semibold text-gray-900 dark:text-white">HIPAA Compliance</h3>
                                <p className="text-gray-600 dark:text-gray-300">
                                    Built-in security features ensuring full HIPAA compliance and data protection
                                </p>
                            </div>
                        </div>

                        {/* Benefits Section */}
                        <div className="mb-16 rounded-2xl bg-white p-12 shadow-xl border border-gray-100 max-w-4xl dark:bg-gray-800 dark:border-gray-700">
                            <h2 className="mb-8 text-3xl font-bold text-gray-900 dark:text-white">Why Choose Our Platform?</h2>
                            <div className="grid gap-6 md:grid-cols-2 text-left">
                                <div className="flex items-start gap-4">
                                    <span className="text-2xl">⚡</span>
                                    <div>
                                        <h4 className="mb-2 font-semibold text-gray-900 dark:text-white">Lightning Fast</h4>
                                        <p className="text-gray-600 dark:text-gray-300">Optimized for speed with instant search and real-time updates</p>
                                    </div>
                                </div>
                                <div className="flex items-start gap-4">
                                    <span className="text-2xl">🌐</span>
                                    <div>
                                        <h4 className="mb-2 font-semibold text-gray-900 dark:text-white">Cloud-Based</h4>
                                        <p className="text-gray-600 dark:text-gray-300">Access your data securely from anywhere, anytime</p>
                                    </div>
                                </div>
                                <div className="flex items-start gap-4">
                                    <span className="text-2xl">📱</span>
                                    <div>
                                        <h4 className="mb-2 font-semibold text-gray-900 dark:text-white">Mobile Ready</h4>
                                        <p className="text-gray-600 dark:text-gray-300">Fully responsive design works perfectly on all devices</p>
                                    </div>
                                </div>
                                <div className="flex items-start gap-4">
                                    <span className="text-2xl">🆘</span>
                                    <div>
                                        <h4 className="mb-2 font-semibold text-gray-900 dark:text-white">24/7 Support</h4>
                                        <p className="text-gray-600 dark:text-gray-300">Dedicated support team ready to help when you need it</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {/* CTA Section */}
                        {!auth.user && (
                            <div className="text-center">
                                <h2 className="mb-6 text-3xl font-bold text-gray-900 dark:text-white">Ready to Get Started?</h2>
                                <p className="mb-8 text-xl text-gray-600 dark:text-gray-300">
                                    Join thousands of healthcare professionals who trust our platform
                                </p>
                                <Link
                                    href={route('register')}
                                    className="inline-flex items-center justify-center rounded-lg bg-gradient-to-r from-blue-600 to-green-600 px-12 py-4 text-xl font-bold text-white hover:from-blue-700 hover:to-green-700 transition-all duration-300 shadow-xl transform hover:scale-105"
                                >
                                    Start Your Free Trial Today
                                    <span className="ml-3 text-2xl">🚀</span>
                                </Link>
                            </div>
                        )}
                    </main>
                </div>
                
                <footer className="mt-16 text-sm text-gray-500 dark:text-gray-400">
                    <p>
                        Built with ❤️ for healthcare professionals • 
                        <a 
                            href="https://app.build" 
                            target="_blank" 
                            className="ml-1 font-medium text-blue-600 hover:underline dark:text-blue-400"
                        >
                            Powered by app.build
                        </a>
                    </p>
                </footer>
            </div>
        </>
    );
}