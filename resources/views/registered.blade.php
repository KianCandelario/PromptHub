<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')

    <title>Registered</title>
</head>
<body>
    <div class="h-screen w-screen bg-dark-grey flex flex-col justify-center items-center">
        <div class="font-poppins text-white font-bold text-5xl mb-10">
            <h1><span class="text-neon-green">Prompt</span>Hub</h1>
        </div>
        <div class="h-[45%] w-[30%] bg-dark-blue rounded-lg shadow-xl">
            <div class="h-full w-full text-white flex flex-col justify-center items-center p-5">
                <h1 class="font-poppins font-bold text-3xl text-center">You have <span class="text-neon-green">successfully</span> <br /> registered!</h1>
                <hr class="w-[70%] my-7" />
                <h2 class="font-quicksand text-lg text-center">Click the login button below <br /> and sign in to your account to proceed.</h2>
                <a href="{{url('/login')}}" class="bg-neon-green py-2 px-6 rounded-md font-quicksand text-sm mt-7 border-neon-green border-2 hover:bg-dark-grey transition-all">Login</a>
            </div>
        </div>
    </div>
</body>
</html>