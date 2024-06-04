<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        @vite('resources/css/app.css')

        <title>PromptHub</title>
    </head>
    <body>
        <div class="w-screen h-screen bg-dark-grey text-white">
            <header class="flex justify-between items-center h-[11%] w-full px-20">
                <a href="" class="font-poppins font-extrabold text-neon-green text-xl">Prompt<span class="text-white">Hub</span></a>

                <div>
                    <ul class="flex gap-11 font-poppins font-medium text-sm">
                        <li><a class="relative w-fit block after:block after:content-[''] after:absolute after:h-[1.5px] after:bg-neon-green after:w-full after:scale-x-0 after:hover:scale-x-100 hover:text-neon-green after:transition after:duration-300 after:origin-left" href="{{ route('home') }}">Home</a></li>
                        <li><a class="relative w-fit block after:block after:content-[''] after:absolute after:h-[1.5px] after:bg-neon-green after:w-full after:scale-x-0 after:hover:scale-x-100 hover:text-neon-green  after:transition after:duration-300 after:origin-center" href="">Your Posts</a></li>
                        <li><a class="relative w-fit block after:block after:content-[''] after:absolute after:h-[1.5px] after:bg-neon-green after:w-full after:scale-x-0 after:hover:scale-x-100 hover:text-neon-green  after:transition after:duration-300 after:origin-right" href="{{ route('create-post') }}">Create Post</a></li>
                    </ul>
                </div>

                <div class="flex items-center mt-3">
                    <form class="flex items-center h-8" action="">
                        <input class="h-full text-xs font-quicksand p-2 px-3 bg-transparent border-2 border-neon-green border-r-0 text-white rounded-tl-xl rounded-bl-xl" type="text" placeholder="Search...">
                        <button class="flex justify-center items-center h-full border-neon-green border-2 p-2 px-3 border-l-0 rounded-tr-xl rounded-br-xl" type="submit">
                            <img class="h-5 w-5" src="{{ asset('storage/heroicons_magnifying-glass-20-solid.svg') }}" alt="Search">
                        </button>
                    </form>

                    <form action="/logout" method="POST">
                        @csrf
                        <input class="ml-5 bg-neon-green font-quicksand px-4 py-2 text-white text-xs font-bold rounded-md cursor-pointer hover:bg-rose-500 transition duration-300" type="submit" value="Log out">
                    </form>
                </div>
            </header>
            <main class="h-[89%] w-full flex">
                @yield('content')
            </main>
        </div>
    </body>
</html>