@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-5/12 bg-white shadow rounded-md mt-3 p-4 flex flex-col items-center">
            <img src="{{ asset('img/logo.svg') }}" alt="Blogy" class="w-1/4"/>
            <p class="text-lg font-light tracking-widest text-blue-700 mb-2">BLOGY</p>
            <p class="text-md mb-4">Binge-worthy reads.</p>
            <p class="text-sm mb-3 font-semibold">Let's create your account</p>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="flex flex-row">
                    <div class="px-4">
                        <div class="mb-4 flex flex-col">
                            <label for="username" class="text-xs font-bold m-1">Username</label>
                            <input type="text" name="username" id="username" class="bg-clip-padding focus:ring-2 focus:ring-blue-600 outline-none focus:border-transparent rounded-3xl border px-4 py-2 @error('username') border-red-600 @enderror" placeholder="Choose a username" value="{{ old('username') }}"/>
                            
                            @error('username')
                            <span class="text-xs text-red-600">{{ $message }}</span>
                            @enderror
                            
                        </div>
                        
                        <div class="mb-4 flex flex-col">
                            <label for="name" class="text-xs font-bold m-1">Your name</label>
                            <input type="text" name="name" id="name" class="bg-clip-padding focus:ring-2 focus:ring-blue-600 outline-none focus:border-transparent rounded-3xl border px-4 py-2 @error('name') border-red-600 @enderror" placeholder="Your name" value="{{ old('name') }}"/>
                            
                            @error('name')
                                <span class="text-xs text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4 flex flex-col">
                            <label for="email" class="text-xs font-bold m-1">Email address</label>
                            <input type="email" name="email" id="email" class="bg-clip-padding focus:ring-2 focus:ring-blue-600 outline-none focus:border-transparent rounded-3xl border px-4 py-2 @error('email') border-red-600 @enderror" placeholder="Your email" value="{{ old('email') }}"/>
                            
                            @error('email')
                                <span class="text-xs text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
        
                        <div class="mb-4 flex flex-col">
                            <label for="password" class="text-xs font-bold m-1">Password</label>
                            <input type="password" name="password" id="password" class="bg-clip-padding focus:ring-2 focus:ring-blue-600 outline-none focus:border-transparent rounded-3xl border px-4 py-2 @error('password') border-red-600 @enderror" placeholder="Choose a password" value="{{ old('password') }}"/>
                            
                            @error('password')
                                <span class="text-xs text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
        
                        <div class="mb-4 flex flex-col">
                            <label for="password_confirmation" class="text-xs font-bold m-1">Confirm the password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="bg-clip-padding focus:ring-2 focus:ring-blue-600 outline-none focus:border-transparent rounded-3xl border px-4 py-2 @error('password') border-red-600 @enderror" placeholder="Repeat the password"/>

                            @error('password')
                                <span class="text-xs text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-col justify-around px-4">
                        <p class="font-light text-lg text-gray-400 mb-5">By creating the account you agree to our Privacy Policy and Terms and Conditions</p>
                        <button type="submit" class="bg-blue-600 text-white rounded-3xl bg-clip-padding px-4 py-2 w-full focus:ring-4 focus:ring-blue-500 focus:outline-none focus:ring-opacity-50">Create account</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection