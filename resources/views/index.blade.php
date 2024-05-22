<!DOCTYPE html>
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
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Pages</a></li>
                    <li><a href="">Blogs</a></li>
                    <li><a href="">Features</a></li>
                </ul>
            </div>

            <div class="flex items-center">
                <form class="flex items-center h-8" action="">
                    <input class="h-full text-xs font-quicksand p-2 px-3 bg-transparent border-2 border-neon-green border-r-0 text-black rounded-tl-xl rounded-bl-xl" type="text" placeholder="Search...">
                    <button class="flex justify-center items-center h-full border-neon-green border-2 p-2 px-3 border-l-0 rounded-tr-xl rounded-br-xl" type="submit">
                        <img class="h-5 w-5" src="{{ asset('storage/heroicons_magnifying-glass-20-solid.svg') }}" alt="Search">
                    </button>
                </form>

                <a class="ml-14" href="">
                    <img class="h-8 w-8" src="{{ asset('storage/codicon_account.svg') }}" alt="Login">
                </a>
            </div>
        </header>
        <div class="h-[89%] w-full px-20 flex flex-col items-center">
            <div class="font-poppins text-5xl pt-7 pb-11 leading-relaxed text-center font-bold">
                <h1>Empowering Your <span class="text-neon-green">Tech Journey</span>: <br />In-Depth Insights, Unbiased Reviews, <br /> and the Latest Innovations.</h1>
            </div>
            <div class="flex gap-14">
                <div class="w-36 h-32 bg-dark-blue flex justify-center items-center rounded-xl border-2 border-neon-green shadow-lg shadow-slate-500 hover:scale-125 hover:shadow-lg hover:shadow-neon-green transition-all">
                   <img class="h-20 w-20" src="{{ asset('storage/laravel.svg') }}" alt="Laravel">
                </div>
                <div class="top-7 relative w-36 h-32 bg-dark-blue flex justify-center items-center rounded-xl border-2 border-neon-green shadow-lg shadow-slate-500  hover:scale-125 hover:shadow-lg hover:shadow-neon-green transition">
                   <img class="h-20 w-20" src="{{ asset('storage/tailwind.svg') }}" alt="Laravel">
                </div>
                <div class="w-36 h-32 bg-dark-blue flex justify-center items-center rounded-xl border-2 border-neon-green shadow-lg shadow-slate-500  hover:scale-125 hover:shadow-lg hover:shadow-neon-green transition">
                   <img class="h-20 w-20" src="{{ asset('storage/vue.svg') }}" alt="Laravel">
                </div>
                <div class="top-7 relative w-36 h-32 bg-dark-blue flex justify-center items-center rounded-xl border-2 border-neon-green shadow-lg shadow-slate-500 hover:scale-125 hover:shadow-lg hover:shadow-neon-green transition">
                   <img class="h-20 w-20" src="{{ asset('storage/php.svg') }}" alt="Laravel">
                </div>
                <div class="w-36 h-32 bg-dark-blue flex justify-center items-center rounded-xl border-2 border-neon-green shadow-lg shadow-slate-500  hover:scale-125 hover:shadow-lg hover:shadow-neon-green transition">
                   <img class="h-20 w-20" src="{{ asset('storage/git.svg') }}" alt="Laravel">
                </div>
            </div>
            <div></div>
        </div>
    </div>
</body>
</html>