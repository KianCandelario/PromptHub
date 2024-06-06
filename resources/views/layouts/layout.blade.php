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

                <div>
                    <ul class="flex gap-11 font-poppins font-medium text-sm">
                        <li><a class="relative w-fit block after:block after:content-[''] after:absolute after:h-[1.5px] after:bg-neon-green after:w-full after:scale-x-0 after:hover:scale-x-100 hover:text-neon-green after:transition after:duration-300 after:origin-left {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                        <li><a class="relative w-fit block after:block after:content-[''] after:absolute after:h-[1.5px] after:bg-neon-green after:w-full after:scale-x-0 after:hover:scale-x-100 hover:text-neon-green  after:transition after:duration-300 after:origin-center {{ request()->routeIs('posts', 'posts.*') ? 'active' : '' }}" href="{{ route('posts') }}">Your Posts</a></li>
                        <li><a class="relative w-fit block after:block after:content-[''] after:absolute after:h-[1.5px] after:bg-neon-green after:w-full after:scale-x-0 after:hover:scale-x-100 hover:text-neon-green  after:transition after:duration-300 after:origin-center {{ request()->routeIs('create-post') ? 'active' : '' }}" href="{{ route('create-post') }}">Create Post</a></li>
                        <li><a class="relative w-fit block after:block after:content-[''] after:absolute after:h-[1.5px] after:bg-neon-green after:w-full after:scale-x-0 after:hover:scale-x-100 hover:text-neon-green  after:transition after:duration-300 after:origin-right {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
                    </ul>
                </div>

                <div class="flex items-center mt-3">
                    
                    <form action="/logout" method="POST">
                        @csrf
                        <input class="ml-5 bg-neon-green font-quicksand px-4 py-2 text-white text-xs font-bold rounded-md cursor-pointer hover:bg-rose-500 transition duration-300" type="submit" value="Log out">
                    </form>
                </div>
            </header>
            <main class="h-[89%] w-full no-scrollbar">
                @yield('content')
            </main>
        </div>
    </body>
</html>