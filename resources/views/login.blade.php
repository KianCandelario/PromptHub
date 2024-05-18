<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')

    <title>Login</title>
</head>
<body>
    <div class="w-screen h-screen flex">
        <div class="w-[75%] h-full bg-dark-grey">
            <div class="flex flex-col justify-center items-center h-full w-full">
                <img class="mb-7 h-[40%]" src="{{ asset('storage/logo.png') }}" alt="Logo">
                <div class="flex flex-col justify-center items-center">
                    <h1 class="text-neon-green font-poppins font-bold text-6xl mb-5">Prompt<span class="text-white">Hub</span></h1>
                    <div class="w-[60%]">
                        <p class="text-white text-center font-quicksand">Welcome to <span class="text-neon-green">PromptHub</span>, where creativity thrives! Share and discover AI prompts from a vibrant community of creators. Explore endless inspiration or contribute your own ideas. Join us at <span class="text-neon-green">PromptHub</span> and unleash your imagination!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-[25%] h-full bg-dark-blue flex flex-col justify-center items-center">
            <div class="bg-light-grey h-[50%] w-[88%] rounded-xl">
                <form class="w-full h-full flex flex-col justify-center items-center" action="" method="">
                    <div class="w-[80%] mb-5">
                        <div class="flex items-center w-full">
                            <img class="h-14 mr-2" src="{{ asset('storage/material-symbols_login.svg') }}" alt="Login Icon">
                            <h1 class="font-poppins font-bold text-4xl text-white">Log In</h1>
                        </div>
                        <p class="font-quicksand text-white opacity-75">Sign in to your account</p>
                    </div>
                    <div class="w-[80%] mb-5">
                        <div class="flex flex-col w-full text-xs font-quicksand mb-3">
                            <label class="text-white ml-1 mb-1" for="username">Username</label>
                            <input class="py-2 px-3 rounded-md h-10" type="text" name="username" id="username" placeholder="Enter username">
                        </div>
                        <div class="flex flex-col w-full text-xs font-quicksand mb-3">
                            <label class="text-white ml-1 mb-1" for="username">Password</label>
                            <input class="py-2 px-3 rounded-md h-10" type="password" name="username" id="username" placeholder="Enter password">
                        </div>
                        <div class="text-white font-quicksand text-xs flex">
                            <input class="mr-2" type="checkbox" name="remember" id="remember">
                            <p>Remember me</p>
                        </div>
                    </div>
                    <input class="bg-neon-green font-quicksand w-[30%] h-9 text-white text-xs font-bold rounded-md cursor-pointer hover:bg-[#FFFFFF] hover:text-[#191E29] hover:scale-100 hover:translate-y-1 transition duration-300" type="submit" value="Sign In">
                </form>
            </div>
            <div class="mt-5 h-[10%] w-[68%]">
                <hr class="bg-white w-full size-[0.10rem] mb-3" />

                <div class="font-quicksand text-white text-sm flex flex-col justify-center items-center">
                    <p class="mb-1">Don't have an account?</p>
                    <p class="font-bold underline cursor-pointer hover:text-neon-green">Sign up</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>