<?php
    // print_r($petition->signatures_count);
    
    print_r($petition->obiettivo_firme);
?>

@extends('layouts.front')

@section('main')
    <section class="grid gap-x-6 gap-y-8 md:grid-cols-3 md:grid-flow-row-dense w-9/10 md:w-3/4 py-10 mx-auto">
        <x-h2-title text="{{$petition->titolo}}" addClass="col-start-2 text-center" />
        <img src="{{$petition->img_url}}" alt="{{$petition->title}}" class="object-fit block align-self-center max-w-[100%] h-[300px] col-span-2 row-start-2">
        <div class="col-span-2 row-start-3 flex">
            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 self-baseline"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" /></svg></span>
            <span class="ml-1 self-baseline">{{ \Carbon\Carbon::parse($petition->created_at)->isoFormat('D MMMM YYYY') }}</span>
            <span class="ml-2 self-baseline mr-2">|</span>
            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 self-baseline"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" /></svg></span>
            <span class="ml-1 self-baseline">{{$petition->citta_interesse}},</span>
            <span class="ml-1 self-baseline">{{$petition->provincia_interesse}},</span>
            <span class="ml-1 self-baseline">{{$petition->paese_interesse}}</span>
        </div>
        <h3 class="col-span-2 row-start-4 font-bold text-2xl text-black">Perché è importante la tua firma?</h3>
        <div class="col-span-2 row-start-5">{{$petition->descrizione}}</div>
        <div class="col-span-2 row-start-6 rounded-lg bg-green-100 py-5 pl-2">
            <p class="font-bold text-lg text-green-700">Indirizzata a: <a href="/decmakers/{{$petition->dec_maker_id}}">{{$petition->decMaker->nome}} {{$petition->decMaker->cognome}}</a><span class="ml-2 mr-2">|</span> Promossa da: <a href="/users/{{$petition->user_id}}">{{$petition->user->nome}} {{$petition->user->cognome}}</a></p>
        </div>


        <div class="border border-gray-800 rounded col-start-3 row-start-2 self-start">
            <div class="grid grid-cols-2">
                <div class="col-span-2">
                    <div class="relative mb-5 pt-1">
                        <div class="mb-4 flex h-2 overflow-hidden rounded bg-gray-100 text-xs">
                        <div style="width: {{ ($petition->signatures_count / $petition->obiettivo_firme) * 100 }}%" class="bg-green-500"></div>
                    </div>
                    <div class="mb-2 flex items-center justify-between text-xs">
                        <div class="text-gray-600">{{$petition->signatures_count}}</div>
                        <div class="text-gray-600">{{$petition->obiettivo_firme}}</div>
                    </div>
                </div>
                </div>
            </div>
        </div>


    </section>
@endsection