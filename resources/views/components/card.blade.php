<div class="max-w-sm w-full h-[50%] bg-[#122840] border border-neon-green rounded-lg shadow-lg shadow-slate-500 hover:scale-110 hover:shadow-lg hover:shadow-neon-green transition">
    <img class="object-fill rounded-t-lg w-full h-[50%]" src="{{ $image }}" alt="" />
    <div class="h-[50%] p-5">
        <h5 class="text-2xl font-bold tracking-tight text-white font-poppins" style="max-height: 3rem; overflow: hidden; text-overflow: ellipsis;">{{ $title }}</h5>
        <p class="font-normal text-gray-400 font-quicksand" style="max-height: 1.5rem; overflow: hidden; text-overflow: ellipsis;">{{ $description }}</p>
        <div class="flex items-center mt-4 h-[50%]">
            <img class="w-10 h-10 rounded-full mr-4" src="{{ asset('storage/codicon_account.svg') }}" alt="Avatar">
            <div class="text-sm text-neon-green font-quicksand">
                <p class="leading-none">{{ $author }}</p>
                <p>{{ $date }}</p>
            </div>
        </div>
    </div>
</div>
