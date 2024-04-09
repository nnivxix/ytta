<div class="p-6 border rounded-lg col-span-1 grid grid-cols-1 gap-3 items-center ">
    <div class="flex gap-3 self-start">
        <img src="/img/20220724_135405.jpg" class="w-10 h-10 rounded-full" alt="">
        <div>
            <h1>{{$post->user?->name}}</h1>
            <p class="text-gray-400 text-sm">{{$post->created_at->diffForHumans()}}</p>
        </div>
    </div>
    <a class="max-h-56 overflow-clip" href="/post/{{$post->id}}">
        <img src="{{$post->thumbnail}}" class="object-contain  place-self-center rounded-md" alt="">
    </a>
    <p class="mt-3 line-clamp-3 self-start">{{$post->content}}</p>
    <div class="flex gap-3 self-end">
        <x-icons.like />
        <a href="/post/{{$post->id}}">
            <x-icons.comment />
        </a>
    </div>
</div>