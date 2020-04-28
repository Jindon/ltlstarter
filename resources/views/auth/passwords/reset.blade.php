@extends('layouts.master')

@section('content')
    <div class="flex justify-center md:mt-6">
        <div class="w-full max-w-xs">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('password.update') }}">
                @csrf
                <p class="font-bold text-lg mb-2 text-blue-500">{{ __('Reset Password') }}</p>
                <hr>
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="mb-4 mt-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        {{ __('E-Mail Address') }}
                    </label>
                    <input class="shadow appearance-none border @error('email') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="text" value="{{ $email ?? old('email') }}" placeholder="Email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        {{ __('Password') }}
                    </label>
                    <input class="shadow appearance-none border @error('password') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="Password" autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password-confirm">
                        {{ __('Confirm Password') }}
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password-confirm" name="password_confirmation" type="password" placeholder="Confirm password" autocomplete="new-password">
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </form>
            <p class="text-center text-gray-500 text-xs">
                &copy; {{ now()->year }}. All rights reserved.
            </p>
        </div>
    </div>

@endsection
