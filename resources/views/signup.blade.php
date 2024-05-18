<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')

    <title>Sign up</title>
</head>
<body>
    <main class="relative w-screen h-screen">
        <div class="w-full h-full bg-gradient-to-br from-[#191E29] to-[#696E79] flex justify-center items-center">
            <div class="w-[22%] h-[75%] bg-[#132D46] rounded-2xl p-7 shadow-xl">
                <div class="flex justify-center items-center mb-3">
                    <img class="h-36 w-28" src="{{ asset('storage/logo.png') }}" alt="Logo">
                    <div class="ml-6 text-white">
                        <h1 class="font-bold text-4xl font-poppins mb-1">Sign up</h1>
                        <h3 class="font-quicksand text-md opacity-65">Create an account</h3>
                    </div>
                </div>
                <form class="w-full flex flex-col justify-center items-center" action="" method="">
                    <div class="w-full flex flex-col">
                        <label class="ml-1 mb-1 text-white font-poppins text-xs" for="name">Username</label>
                        <input class="mb-3 py-3 px-4 text-xs font-quicksand rounded-md" id="name" name="name" type="text" placeholder="Enter username">

                        <label class="ml-1 mb-1 text-white font-poppins text-xs" for="email">Email</label>
                        <input class="mb-3 py-3 px-4 text-xs font-quicksand rounded-md" id="email" name="email" type="text" placeholder="Enter email">

                        <label class="ml-1 mb-1 text-white font-poppins text-xs" for="password">Password</label>
                        <input class="mb-3 py-3 px-4 text-xs font-quicksand rounded-md" id="password" name="password" type="password" placeholder="Enter password">

                        <label class="ml-1 mb-1 text-white font-poppins text-xs" for="password_confirmation">Confirm Password</label>
                        <input class="mb-3 py-3 px-4 text-xs font-quicksand rounded-md" id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm your password">
                    </div>

                    <input class="w-[45%] h-9 font-bold bg-[#01C38D] font-quicksand text-xs cursor-pointer mt-4 rounded-md text-white hover:bg-white hover:text-[#191E29] hover:scale-100 hover:translate-y-1 transition duration-300" type="submit" value="Register">
                </form>
            </div>
        </div>
    </main>
</body>
</html>