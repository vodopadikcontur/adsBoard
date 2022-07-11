<?php

    namespace App\Http\Controllers;


    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Testing\Fluent\Concerns\Has;

    class AuthController
    {
        public function login(Request $request)
        {
            $credentials = $request->validate([
                'username' => ['required', 'min:3', 'max:255'],
                'password' => ['required', 'min:3', 'max:255']
            ]);

            $user = User::query()
                ->where('username', '=', $credentials['username'])
                ->first();

            if ($user === null) {
                $user = User::create([
                    'username' => $credentials['username'],
                    'password' => Hash::make($credentials['password'])
                ]);
            } elseif (!Hash::check($credentials['password'], $user->password)) {
                    return back()->withErrors(['username' => 'You have account, check you login or password']);
                }

            Auth::login($user);

            $request->session()->regenerate();

            return back();
        }

        public function logout(Request $request)
        {
            Auth::logout();

            $request->session()->invalidate();

            return back();
        }
    }
