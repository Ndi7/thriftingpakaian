<link rel="stylesheet" href="{{ asset('styles/style.css') }}">
@extends('layout.login')

@section ('title', 'Login.')
@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
  </head>
  <body>
    <div class="flex items-center justify-center min-h-screen bg-gray-0">
      <div class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
        
        <div class="flex flex-col justify-center p-8 md:p-14">
          <span class="mb-3 text-4xl font-bold">Welcome back</span>
          <span class="font-light text-gray-400 mb-8">
            Welcom back! Please enter your details1.
        </span>

        


        <form action=""{{ route('login') }}" method="POST">

          @csrf 
          <!-- pesan gagal berhasil -->
        @if (isset($message) && $message === 'sukses')
        <div class="alert alert-success">Login berhasil!</div>
        @elseif (isset($message) && $message === 'gagal')
        <div class="alert alert-danger">Login gagal!</div>
        @endif

          <div class="py-4">
            <label for="email" class="form-label mb-2 text-md">Email</label>
            <input
              type="email"
              class="form-control w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
              name="email"
              id="email"
            />
          </div>
          <div class="py-4">
            <label for="password" class="form-label mb-2 text-md">Password</label>
            <input
              type="password"
              name="pass"
              id="pass"
              class="from-control w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
            />
          </div>
          
          <div class="flex justify-between w-full py-4">
            <!-- <div class="mr-24">
              <input type="checkbox" name="ch" id="ch" class="mr-2" />
              <span class="text-md">Remember for 30 days</span>
            </div> -->
            <span class="font-bold text-md">Forgot password</span>
          </div>

          <button
            name="login" type="submit" class="w-full border border-gray-300 text-md p-2 rounded-lg mb-6 hover:bg-white hover:text-black"
          >
            Sign in
          </button>

          <button
            class="w-full border border-gray-300 text-md p-2 rounded-lg mb-6 hover:bg-white hover:text-black"
          >
            <img src="{{ asset('images/google1.png')}}" alt="img" class="w-6 h-6 inline mr-2" />
            Sign in with Google
          </button>
          <div class="text-center text-gray-400">
            Dont'have an account?
            <span class="font-bold text-black">Sign up for free</span>
          </div>
        </div>
        </form>
        <!-- {/* right side */} -->
        <div class="relative">
          <img
            src="{{ asset('images/image.jpg')}}"
            alt="img"
            class="w-[400px] h-full hidden rounded-r-2xl md:block object-cover"
          />
          <!-- text on image  -->
          <div
            class="absolute hidden bottom-5 right-5 p-6 bg-white bg-opacity-20 backdrop-blur-sm rounded drop-shadow-lg md:block"
          >
           
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
@endsection