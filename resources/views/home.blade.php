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
                    <li><a class="relative w-fit block after:block after:content-[''] after:absolute after:h-[1.5px] after:bg-neon-green after:w-full after:scale-x-0 after:hover:scale-x-100 hover:text-neon-green after:transition after:duration-300 after:origin-left" href="">Home</a></li>
                    <li><a class="relative w-fit block after:block after:content-[''] after:absolute after:h-[1.5px] after:bg-neon-green after:w-full after:scale-x-0 after:hover:scale-x-100 hover:text-neon-green  after:transition after:duration-300 after:origin-center" href="">Your Blogs</a></li>
                    <li><a class="relative w-fit block after:block after:content-[''] after:absolute after:h-[1.5px] after:bg-neon-green after:w-full after:scale-x-0 after:hover:scale-x-100 hover:text-neon-green  after:transition after:duration-300 after:origin-right" href="">About</a></li>
                </ul>
            </div>

            <div class="flex items-center">
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
        <div class="h-[89%] w-full pr-20 flex pt-10">
            <div class="h-full w-[77%] pr-14 flex flex-col items-center">
                <div class="w-[85%] font-poppins text-5xl pb-10 leading-relaxed text-left font-bold">
                    <h1>Welcome, <span class="text-neon-green">UserName</span>! <br /> <span class="text-4xl font-semibold"><span class="text-neon-green">Track Your Tech Adventure</span>: Share your projects, monitor your progress, and continue your journey today!</span></h1>
                </div>
                <div class="flex gap-14 ml-7">
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
            </div>
            <div class="h-[93%] w-[23%] text-right font-quicksand opacity-60 hover:opacity-100 hover:-translate-x-7 transition-all ease-in-out cursor-pointer overflow-hidden">
                <div class="mb-4 sticky">
                    <p class="mb-1">Your Latest Posts</p>
                    <hr class="opacity-70" />
                </div>
                <div class="h-full w-full overflow-y-scroll no-scrollbar pb-5">
                    <div>
                        <div class="mb-3">
                            <img src="{{ asset('storage/sample pic.jpg') }}" alt="Thumbnail">
                        </div>
                        <div>
                            <div class="mb-2">
                                <h1 class="text-2xl font-bold font-poppins">"How can I pull a baddie?"</h1>
                            </div>
                            <div class="mb-2">
                                <p class="text-sm opacity-80">Tips and tricks from the reincarnation of God and the master himself.</p>
                            </div>
                            <div class="flex gap-3 text-sm text-neon-green items-center justify-end">
                                <div>
                                    <img class="h-5 w-5" src="{{ asset('storage/codicon_account.svg') }}" alt="Thumbnail">
                                </div>
                                <div>
                                    <p>Kian Candelario</p>
                                </div>
                                <div class="min-h-[.5em] w-px self-stretch bg-gradient-to-tr from-transparent bg-neon-green to-transparent opacity-25"></div>
                                <div>
                                    <p>May 23, 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="opacity-70 my-5" />
                    <div class="mb-14">
                        <div class="mb-3">
                            <img src="{{ asset('storage/sample pic.jpg') }}" alt="Thumbnail">
                        </div>
                        <div>
                            <div class="mb-2">
                                <h1 class="text-2xl font-bold font-poppins">"How can I pull a baddie?"</h1>
                            </div>
                            <div class="mb-2">
                                <p class="text-sm opacity-80">Tips and tricks from the reincarnation of God and the master himself.</p>
                            </div>
                            <div class="flex gap-3 text-sm text-neon-green items-center justify-end">
                                <div>
                                    <img class="h-5 w-5" src="{{ asset('storage/codicon_account.svg') }}" alt="Thumbnail">
                                </div>
                                <div>
                                    <p>Kian Candelario</p>
                                </div>
                                <div class="min-h-[.5em] w-px self-stretch bg-gradient-to-tr from-transparent bg-neon-green to-transparent opacity-25"></div>
                                <div>
                                    <p>May 23, 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>