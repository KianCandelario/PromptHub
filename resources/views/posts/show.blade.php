@extends('layouts.layout')

@section('content')
    <div class="w-full h-[95%] flex justify-center items-center overflow-y-scroll no-scrollbar px-20">
        <div class="max-w-2xl h-full mx-auto bg-dark-grey rounded-lg shadow-md p-4 my-4">
            <h1 class="text-4xl font-poppins font-bold text-white mb-4">"{{ $post->title }}"</h1>
            <p class="font-quicksand text-xl opacity-70">{{ $post->description }}</p>
            <div class="w-full flex items-center justify-between">
                <div class="flex items-center mt-3 font-quicksand text-sm text-neon-green">
                    <img class="h-6 w-6 mr-2" src="{{ asset('storage/codicon_account.svg') }}" alt="">
                    <span>{{ $post->user->name }}</span>
                    <div class="inline-block h-[1.3em] min-h-[1em] w-[1px] self-stretch bg-neon-green mx-3"></div>
                    <span>{{ $post->created_at->format('F d, Y') }}</span>
                </div>
                <div class="flex">
                    <a class="mr-3" href="/edit-post/{{$post->id}}">
                        <img class="h-5 w-5" src="{{ asset('storage/lucide_edit.svg') }}" alt="Edit">
                    </a>
                    <form action="/delete-post/{{$post->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>
                            <img class="h-5 w-5" src="{{ asset('storage/material-symbols_delete-outline.svg') }}" alt="Delete">
                        </button>
                    </form>
                </div>
            </div>
            <hr class="my-5 opacity-75" />
            @if ($post->image)
                <img class="object-fill w-full h-72 mb-4" src="{{ asset($post->image) }}" alt="">
            @endif
            <div class="mt-4 font-quicksand">{{ $post->body }}</div>
        </div>
    </div>
@endsection