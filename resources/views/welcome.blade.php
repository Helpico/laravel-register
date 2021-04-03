<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Yeda Project</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body class="antialiased">
    <div class=" min-h-screen bg-gradient-to-r from-blue-400 to-purple-500 flex items-center justify-center">
<!-- Login form -->
<div class="bg-white p-16 shadow-2xl w-1/2">
<h1 class="text-3xl font-bold mb-10 text-gray-600">Send us a message!</h1>
    




<form class="space-y-4 " action="">

<div>
<lable class="block mb-2 font-bold text-gray-500" for="name">Name</lable>
<input type="text" id="name" class="outline-none focus:border-purple-500 w-full border-2 border-gray-400 p-2">
</div>

<div>
<lable class="block mb-2 font-bold text-gray-500" for="email">Email</lable>
<input type="text" class="outline-none focus:border-purple-500  w-full border-2 border-gray-400 p-2">
</div>

<div>
<lable class="block mb-2 font-bold text-gray-500" for="password">Password</lable>
<input type="text" class="outline-none focus:border-purple-500 w-full border-2 border-gray-400 p-2">
</div>
 
<div class="flex items-center">
<input type="checkbox">
<label for="agree" class="ml-2 text-sm text-gray-700">I agree to the temrs & privacy</label>
</div>

<button class=" bg-blue-400
 hover:bg-blue-500 transition duration-300 w-full text-white 
 font-bold p-4 shadow-md">Send a message</button>



</form>

</div>
</div>

    </body>
</html>
