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
            <div class="w-[30%] h-[80%] bg-[#132D46] rounded-2xl p-5">
                <div class="flex justify-center items-center">
                    <img class="h-36 w-36" src="{{ asset('storage/logo.png') }}" alt="Logo">
                    <div>
                        <h1 class="font-bold text-[2.4rem]">Sign up</h1>
                        <h3>Create an account</h3>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>