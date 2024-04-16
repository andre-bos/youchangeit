<div class="grid col-span-2 border border-green-500">
    <div class="border-b border-gray-600 col-span-3">
        <p class="pl-3 font-bold text-sm text-black mt-3 mb-3 hover:underline">Indirizzata a: {{$decMakerNome}} {{$decMakerCognome}}</p>
    </div>
    <h3 class="pl-3 mt-4 col-span-2 font-bold text-lg text-black hover:underline">{{$titolo}}</h3>
    <p class="pl-3 col-span-2 text-gray-600">
        {{ strlen($descrizione) > 360 ? substr($descrizione, 0, 360) . '...' : $descrizione }}
    </p>
    <div class="row-start-2 row-end-5 col-start-3 max-h-[250px]">
        <img src="{{$imgUrl}}" alt="" class="h-full w-full object-cover">
    </div>

    <div class="pl-3 col-span-2 self-center">
        <span>Aut</span>
        <span>{{$userNome}}</span>
        <span>{{$userCognome}}</span>
    </div>
    </div>
</div>