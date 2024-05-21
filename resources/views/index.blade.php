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
        <header class="flex justify-between items-center h-[11%] border-b-[1px] px-20">
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
                    <img class="h-8 w-8" src="{{ asset('storage/codicon_account.svg') }}" alt="">
                </a>
            </div>
        </header>
    </div>
</body>
</html>