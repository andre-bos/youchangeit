<div class="grid col-span-2 border border-gray-800 rounded">
    <div class="border-b border-gray-600 col-span-3">
        <p class="pl-3 font-bold text-sm text-black mt-3 mb-3">Indirizzata a: <a href="" class="hover:underline">{{$decMakerNome}} {{$decMakerCognome}}</a></p>
    </div>
    <h3 class="pl-3 mt-4 col-span-2 font-bold text-lg text-black hover:underline"><a href="/petitions/detail/{{$petitionId}}">{{$titolo}}</a></h3>
    <p class="pl-3 col-span-2 text-gray-600">
        {{ strlen($descrizione) > 260 ? substr($descrizione, 0, 260) . '...' : $descrizione }}
    </p>
    <div class="row-start-2 row-end-5 col-start-3 max-h-[250px]">
        <img src="{{$imgPetition}}" alt="" class="h-full w-full object-cover">
    </div>

    <div class="pl-3 col-span-2 self-center">
        <div class="grid grid-cols-8">
            <img src="{{$imgAutore}}" alt="Avatar di {{$userNome}}" class="col-start-1 col-end-2 max-h-[50px] max-w-[50px] rounded-full inline-block justify-self-stretch">
            <span class="col-start-2 col-span-2 self-center hover:underline"><a href="">{{$userNome}} {{$userCognome}}</a></span>
            <span class="col-start-5 col-end-6 self-center hover:underline"><a href="">{{$categoria}}</a></span>
            <span class="col-start-7 col-end-9 self-center">
                {{ $contoFirme }} {{ $contoFirme != 1 ? 'firme' : 'firma' }}
            </span>
        </div>
    </div>
</div>