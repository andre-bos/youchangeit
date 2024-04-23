<div class="grid col-span-2 border border-gray-800 rounded my-4 p-3">
    <div class="flex items-center mb-2">
        <img src="{{$imgAutore}}" alt="Avatar di {{$userNome}}" class="h-[50px] w-[50px] object-cover rounded-full inline-block justify-self-start self-start mr-3">
        <div>
            <span class="font-bold text-sm block"><a href="/dashboard">{{$userNome}}</a></span>
            <span class="text-sm gray-600">{{$dataCreazione}}</span>
        </div>
    </div>

    <p class="text-gray-600">{{$commento}}</p>
</div>