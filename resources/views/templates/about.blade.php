@extends('layouts.layout')

@section('content')
    <div class="w-full h-full px-20 no-scrollbar flex flex-col  items-center">
        <div class="w-full h-[50%] flex flex-col items-center justify-center">
            <h1 class="w-[50%] text-5xl font-poppins font-bold text-center mb-10">Navigating technology with <br /> insight <span class="text-neon-green">and</span> integrity</h1>
            <p class="font-kumbh-sans text-center w-[40%]">We believe that by offering a platform for writing down knowledge and insights, PromptHub empowers individuals and organizations to stay ahead of the curve, foster innovation, and cultivate a more informed tech community.</p>
        </div>
        <div class="w-[50%] h-[35%] flex flex-col items-center justify-center">
            <p class="font-poppins font-bold mb-3 ml-1">Our Members</p>
            <div class="w-full h-full border-neon-green border-2 bg-[#123558] shadow-lg rounded-xl flex justify-between p-10">
                <div class="w-24 h-24 bg-dark-blue flex justify-center items-center rounded-xl border-2 cursor-pointer border-neon-green shadow-lg shadow-slate-500 hover:scale-125 hover:shadow-lg hover:shadow-neon-green transition-all">
                    <a href="https://github.com/cusrussel">
                        <img class="h-14 w-14 rounded-full" src="{{ asset('storage/Russ.jpg') }}" alt="Russel Custodio">
                    </a>
                </div>
                <div class="top-7 relative w-24 h-24 bg-dark-blue flex justify-center items-center rounded-xl border-2 border-neon-green shadow-lg shadow-slate-500 cursor-pointer hover:scale-125 hover:shadow-lg hover:shadow-neon-green transition">
                    <a href="https://github.com/KianCandelario">
                        <img class="h-14 w-14 rounded-full" src="{{ asset('storage/formal-pic.jpg') }}" alt="Kian Candelario">
                    </a>
                </div>
                <div class="w-24 h-24 bg-dark-blue flex justify-center items-center rounded-xl border-2 border-neon-green shadow-lg shadow-slate-500 cursor-pointer hover:scale-125 hover:shadow-lg hover:shadow-neon-green transition">
                    <a href="https://github.com/VincentMaiwat">
                        <img class="h-14 w-14 rounded-full" src="{{ asset('storage/Vince.jpg') }}" alt="Vincent Maiwat">
                    </a>
                </div>
                <div class="top-7 relative w-24 h-24 bg-dark-blue flex justify-center items-center rounded-xl border-2 border-neon-green shadow-lg shadow-slate-500 cursor-pointer hover:scale-125 hover:shadow-lg hover:shadow-neon-green transition">
                    <a href="https://github.com/MelZedricFaustino">
                        <img class="h-14 w-14 rounded-full" src="{{ asset('storage/Mel.jpg') }}" alt="Mel Zedric Faustino">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full h-[60vh] flex justify-between items-center px-20 mt-20 pb-20">
        <div class="w-[45%] h-full ml-10">
            <h3 class="font-poppins text-neon-green">HOW IT STARTED</h3>
            <h1 class="font-poppins font-bold text-4xl text-neon-green my-5">Born from ideas, <br /> driven by curiosity.</h1>
            <p class="font-kumbh-sans">Before PromptHub, our founder, Kian, recognized a gap in the tech community: there was no comprehensive platform for sharing insights and experiences about the technology journey. He envisioned a dedicated space where tech enthusiasts could create posts, track their progress, and write down valuable knowledge. PromptHub was born from this vision, offering a diary-like web app to document and share the evolving tech journeys of its users.</p>
        </div>
        <div class="w-[45%] flex justify-end items-center h-full mr-10">
            <div class="bg-neon-green w-[80%] rounded-xl flex flex-col justify-center p-7">
                <h3 class="font-poppins">OUR MISSION</h3>
                <h1 class="font-poppins font-bold text-5xl my-5">To ignite tech passion through insightful discovery.</h1>
                <img class="h-20 w-20" src="{{ asset('storage/mdi_flame.svg') }}" alt="">
            </div>
        </div>
    </div>
@endsection