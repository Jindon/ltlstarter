@extends('layouts.master')

@section('content')
    <div class="flex justify-center md:mt-6">
        <div class="w-full max-w-xs">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('password.email') }}">
                @csrf

                <p class="font-bold text-lg mb-2 text-blue-500">{{ __('Reset Password') }}</p>

                @if (session('status'))
                    <div class="text-red-500 text-xs italic">
                        {{ session('status') }}
                    </div>
                @endif

                <hr>
                <div class="mb-4 mt-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        {{ __('E-Mail Address') }}
                    </label>
                    <input class="shadow appearance-none border @error('email') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="text" value="{{ old('email') }}" placeholder="Email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
            </form>
            <p class="text-center text-gray-500 text-xs">
                &copy; {{ now()->year }}. All rights reserved.
            </p>
        </div>
    </div>
@endsection
