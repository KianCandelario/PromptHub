<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')

    <title>PromptHub</title>
</head>
<body>
    <div class="h-screen w-screen bg-dark-grey text-white flex justify-center items-center">
        <div class="h-full w-[60%] flex flex-col justify-center items-center">
            <div class="w-full flex justify-center items-start mb-10">
                <h1 class="font-poppins text-6xl font-black mr-3">
                    <span class="text-neon-green">Prompt</span>Hub
                </h1>
                <a href="/about-out">
                    <img class="h-7 w-7" src="{{ asset('storage/question-mark.svg') }}" title="Go to About page" alt="Question Mark">
                </a>
            </div>
            <div class="w-full">
                <h2 class="font-quicksand text-4xl text-center"><span class="font-bold">Empowering Your Tech Journey:</span> <br /> In-Depth Insights, Unbiased Reviews, and <br /> the Latest Innovations</h2>
            </div>
            <hr class="w-[50%] my-10 opacity-30" />
            <div class="w-full flex justify-center items-center font-poppins">
                <a class="mr-10 border-neon-green border-2 bg-neon-green px-10 py-2 rounded-md hover:bg-dark-blue transition-all" href="{{url('/login')}}">Login</a>
                <a class="bg-dark-grey border-neon-green border-2 px-10 py-2 rounded-md hover:bg-dark-blue transition-all" href="{{url('/register')}}">Sign Up</a>
            </div>
        </div>
    </div>
</body>
</html>