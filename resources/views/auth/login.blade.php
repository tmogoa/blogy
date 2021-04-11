@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-5/12 bg-white shadow rounded-md mt-3 p-4 flex flex-col items-center">
            <img src="{{ asset('img/logo.svg') }}" alt="Blogy" class="w-1/4"/>
            <p class="text-lg font-light tracking-widest text-blue-700 mb-2">BLOGY</p>
            <p class="text-md mb-4">Binge-worthy reads.</p>
            <p class="text-sm mb-3 font-semibold">Let's create your account</p>

            <form action="{{ route('login') }}" method="POST">
                @csrf
               
                @if ($errors->any())
                    <div class="bg-red-400 text-white text-xs font-bold mb-2 rounded-3xl p-3 text-center">
                        {{ $errors->first('login') }}
                    </div>
                @endif

                <div class="mb-4 flex flex-col">
                    <label for="email" class="text-xs font-bold m-1">Email address</label>
                    <input type="email" name="email" id="email" class="bg-clip-padding focus:ring-2 focus:ring-blue-600 outline-none focus:border-transparent rounded-3xl border px-4 py-2" placeholder="Your email" value="{{ old('email') }}"/>
                </div>

                <div class="mb-4 flex flex-col">
                    <label for="password" class="text-xs font-bold m-1">Password</label>
                    <input type="password" name="password" id="password" class="bg-clip-padding focus:ring-2 focus:ring-blue-600 outline-none focus:border-transparent rounded-3xl border px-4 py-2" placeholder="Choose a password" value="{{ old('password') }}"/>
                </div>

                <div class="mb-4">
                    <button type="submit" class="bg-blue-600 text-white rounded-3xl bg-clip-padding px-4 py-2 w-full focus:ring-4 focus:ring-blue-500 focus:outline-none focus:ring-opacity-50">Log in</button>
                </div>
            
            </form>
        </div>
    </div>
@endsection