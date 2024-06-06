@extends('layouts.layout')

@section('content')
    <div class="w-full h-[95%] flex justify-center items-center overflow-y-scroll no-scrollbar px-20">
        <div class="h-full w-full flex flex-wrap justify-center items-center gap-10">
            @if($posts->isEmpty())
                <div class="h-[35%] w-[40%] rounded-xl shadow-lg flex flex-col justify-center items-center bg-[#123558]">
                    <p class="font-poppins text-4xl mb-3">No posts found.</p>
                    <p>Click <a class="text-neon-green underline" href="/create-post">here</a> to create your first post.</p>
                </div>
            @else
                @foreach($posts as $post)
                    <a href="{{ route('posts.show', $post->id) }}" class="w-[25%]">
                        @component('components.card')
                            @slot('image')
                                {{ $post->image }}
                            @endslot
                            @slot('title')
                                {{ $post->title }}
                            @endslot
                            @slot('description')
                                {{ $post->description }}
                            @endslot
                            @slot('author')
                                {{ $post->user->name }}
                            @endslot
                            @slot('date')
                                {{ $post->created_at->format('F d, Y') }}
                            @endslot
                        @endcomponent
                    </a>
                @endforeach
            @endif
        </div>
    </div>
@endsection
