@extends('layouts.layout')

@section('content')
<div class="w-full h-full pr-20 flex pt-10">
    <div class="h-full w-[77%] pr-14 flex flex-col items-center">
        <div class="w-[85%] font-poppins text-5xl pb-10 leading-relaxed text-left font-bold">
            <h1>Welcome, <span class="text-neon-green">{{ Auth::user()->name }}</span> <br /> <span class="text-4xl font-kumbh-sans font-semibold"><span class="text-neon-green">Track Your Tech Adventure:</span> Share your projects, monitor your progress, and continue your journey today!</span></h1>
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
        <div class="h-full w-full overflow-y-scroll no-scrollbar pb-20">
            @php
                $latestPosts = auth()->user()->userPosts()->latest()->take(2)->get();
            @endphp
    
            @forelse ($latestPosts as $post)
                <div>
                    <div class="mb-3">
                        <img class="object-fill w-full" src="{{ asset($post->image) }}" alt="">
                    </div>
                    <div>
                        <div class="mb-2">
                            <h1 class="text-2xl font-bold font-poppins">{{ $post->title }}</h1>
                        </div>
                        <div class="mb-2">
                            <p class="text-sm opacity-80">{{ $post->description }}</p>
                        </div>
                        <div class="flex gap-3 text-sm text-neon-green items-center justify-end">
                            <div>
                                <img class="h-5 w-5" src="{{ asset('storage/codicon_account.svg') }}" alt="Thumbnail">
                            </div>
                            <div>
                                <p>{{ Auth::user()->name }}</p>
                            </div>
                            <div class="h-[1.2em] min-h-[1em] w-0.5 self-stretch bg-neon-green"></div>
                            <div>
                                <p>{{ $post->created_at->format('M d, Y') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @unless ($loop->last)
                    <hr class="opacity-70 my-5" />
                @endunless
            @empty
                <p>No posts found.</p>
            @endforelse
        </div>
    </div>
</div>
@endsection