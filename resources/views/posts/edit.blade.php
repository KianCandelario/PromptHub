@extends('layouts.layout')

@section('content')
<div class="w-full h-full flex justify-center items-center">
    <div class="bg-dark-blue w-[60%] h-[80%] rounded-2xl">
        <div class="h-full w-full">
            <div class="h-[11%] w-full border-b-2 flex items-center">
                <h1 class="ml-5 font-poppins text-neon-green text-2xl font-bold">
                    Edit Post
                </h1>
            </div>
            <form class="w-full h-[89%] flex flex-col justify-center items-center" action="/edit-post/{{$post->id}}" method="POST" enctype="multipart/form-data" >
                @csrf
                @method('PUT')
                <div class="w-[95%] h-[37%] border-[1px] rounded-xl mb-5 flex px-5 py-3 font-quicksand">
                    <div class="w-[40%] h-[90%] pr-5">
                        <div class="mb-3 h-[50%]">
                            <h3 class="text-sm font-bold mb-1">TITLE</h3>
                            <input class="rounded-md border-[1px] border-white bg-[#123558] h-11 w-full px-3" type="text" name="title" id="title" value="{{$post->title}}">
                        </div>
                        <div class="h-[50%]">
                            <h3 class="text-sm font-bold mb-1">CHANGE IMAGE</h3>
                            <input class="text-xs rounded-md border-[1px] border-white bg-[#123558] py-2 px-2 cursor-pointer" type="file" name="image" id="image">
                        </div>
                    </div>
                    <div class="w-[60%] h-[80%]">
                        <h3 class="text-sm font-bold mb-1">SHORT DESCRIPTION</h3>
                        <textarea class="rounded-md w-full h-full bg-[#123558] border-[1px] border-white text-xs px-3 py-3" name="description" id="description">{{$post->description}}</textarea>
                    </div>
                </div>
                <div class="w-[95%] h-[40%] border-[1px] rounded-xl mb-4 flex justify-center items-center">
                    <div class="w-[95%] h-[90%] font-quicksand">
                        <h3 class="text-sm font-bold mb-1">CONTENTS</h3>
                        <textarea class="rounded-md w-full h-[80%] bg-[#123558] border-[1px] border-white text-xs px-3 py-3" name="body" id="body">{{$post->body}}</textarea>
                    </div>
                </div>
                <input class="bg-neon-green font-quicksand w-[10%] h-9 text-white text-xs font-bold rounded-md cursor-pointer hover:bg-[#FFFFFF] hover:text-[#191E29] hover:scale-100 hover:translate-x-1 transition-all" type="submit" value="Save Changes">
            </form>
        </div>
    </div>
</div>
@endsection