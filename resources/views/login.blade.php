<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="{{ asset('image/logo.png') }}">
    <title>Kesiswaan Login</title>
</head>

<body class="bg-cover" style="background-image: url({{ asset('image/bg-wikrama.png') }})">
    @include('sweetalert::alert')
    <div class="h-screen grid font-custome">
        <div class="m-auto ">
            <div class="flex h-96 bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="grid rounded-l-lg h-full w-52 md:w-80 bg-[#223787]">
                    <img class="m-auto pt-4 w-40" src="{{ asset('image/logo.png') }}" alt="">
                    <p class="text-white text-center mx-16">A P L I K A S I &nbsp; S I M A P &nbsp; K E S I S W A A N</p>
                </div>
                <div class="sm:pt-10 sm:px-6 w-52 md:w-80">
                    <form class="space-y-6" action="/login/submit" method="POST">
                        @csrf
                        <h3 class="flex justify-center text-xl font-medium text-gray-900 dark:text-white">FORM LOGIN</h3>
                        <div>
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Username</label>
                            <input type="text" name="username" id="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Username" required>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
                            <input type="password" name="password" id="password" placeholder="Fill The Password!"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required>
                        </div>
                        <button type="submit"
                            class="w-10 h-10 justify-center float-right text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-full text-lg px-3 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i class='bx bx-right-arrow-alt'></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
@extends('layout.script')

</html>
