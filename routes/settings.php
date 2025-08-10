<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

Route::middleware('auth')->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', function () {
        return view('settings.profile');
    })->name('profile.edit');

    Route::patch('settings/profile', function (Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:users,email,' . auth()->id(),
        ]);

        $user = auth()->user();
        
        // If email changed, reset email verification
        if ($user->email !== $request->email) {
            $user->email_verified_at = null;
        }
        
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully.');
    })->name('profile.update');

    Route::delete('settings/profile', function (Request $request) {
        $validated = $request->validate([
            'password' => ['required', 'current_password'],
        ]);

        $user = auth()->user();
        auth()->logout();
        $user->delete();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    })->name('profile.destroy');

    Route::get('settings/password', function () {
        return view('settings.password');
    })->name('password.edit');

    Route::put('settings/password', function (Request $request) {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        auth()->user()->update([
            'password' => Hash::make($request->password),
        ]);

        return back()->with('success', 'Password updated successfully.');
    })->name('password.update');

    Route::get('settings/appearance', function () {
        return view('settings.appearance');
    })->name('appearance');
});
