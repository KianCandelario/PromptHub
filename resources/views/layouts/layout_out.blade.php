<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        @vite('resources/css/app.css')

        <title>PromptHub</title>
    </head>
    <body class="bg-dark-grey no-scrollbar overflow-x-hidden">
        <div class="w-screen h-screen bg-dark-grey text-white no-scrollbar">
            <header class="flex justify-between items-center h-[11%] w-full px-20">
                <a href="" class="font-poppins font-extrabold text-neon-green text-xl">Prompt<span class="text-white">Hub</span></a>

                <div class="flex justify-center items-center font-poppins">
                    <a class="mr-5 text-xs border-neon-green border-2 bg-neon-green px-5 py-2 rounded-md hover:bg-dark-blue transition-all" href="{{url('/login')}}">Login</a>
                    <a class="bg-dark-grey text-xs border-neon-green border-2 px-5 py-2 rounded-md hover:bg-dark-blue transition-all" href="{{url('/register')}}">Sign Up</a>
                </div>                
            </header>
            <main class="h-[89%] w-full no-scrollbar">
                @yield('sign_out_content')
            </main>
        </div>
    </body>
</html>