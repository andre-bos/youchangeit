<?php
    // print_r($petition->signatures_count);
?>

@extends('layouts.front')

@section('main')
    <x-h2-title text="{{$petition->titolo}}" addClass="text-center" />
    <section class="grid grid-cols-custom-small md:grid-cols-custom-medium main-template gap-x-[2em]">
       <div class="col-start-2 col-end-4">
            <img src="{{$petition->img_url}}" alt="{{$petition->title}}" class="object-fit block align-self-center max-w-[100%] h-[300px] mb-3">
            <div class="flex mb-5">
                <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 self-baseline"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" /></svg></span>
                <span class="ml-1 self-baseline">{{ \Carbon\Carbon::parse($petition->created_at)->isoFormat('D MMMM YYYY') }}</span>
                <span class="ml-2 self-baseline mr-2">|</span>
                <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 self-baseline"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" /></svg></span>
                <span class="ml-1 self-baseline">{{$petition->citta_interesse}},</span>
                <span class="ml-1 self-baseline">{{$petition->provincia_interesse}},</span>
                <span class="ml-1 self-baseline">{{$petition->paese_interesse}}</span>
            </div>
            <h3 class="font-bold text-2xl text-black mb-3">Perché è importante la tua firma?</h3>
            <div class="">{{$petition->descrizione}}</div>
            <div class="rounded-lg bg-green-100 py-5 pl-2 mt-5 mb-5">
                <p class="font-bold text-lg text-green-700">Indirizzata a: <a href="/decmakers/{{$petition->dec_maker_id}}">{{$petition->decMaker->nome}} {{$petition->decMaker->cognome}}</a><span class="ml-2 mr-2">|</span> Promossa da: <a href="/users/{{$petition->user_id}}">{{$petition->user->nome}} {{$petition->user->cognome}}</a></p>
            </div>

            <div class="mt-3">
                <h3 class="font-bold text-2xl text-black mb-2">Commenti</h3>
                @if($petition->comments->count() > 0)
                    <ul>
                        @foreach ($petition->comments as $comment)
                            <li>
                                <x-comment-card
                                :imgAutore="$comment->user->img_url"
                                :userNome="$comment->user->nome"
                                :commento="$comment->contenuto"
                                :dataCreazione="$comment->created_at"
                                />
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="font-bold text-large text-black text-center">Non ci sono ancora commenti</p>
                @endif
            </div>
       </div>


        <div class="col-start-4 col-end-5 row-start-1 row-end-4">
            <div class="mb-4 flex h-2 overflow-hidden rounded bg-gray-100 text-xs">
                <div style="width: {{ ($petition->signatures_count / $petition->obiettivo_firme) * 100 }}%" class="bg-green-700"></div>
            </div>

            <div class="grid grid-cols-2">
                <div class="font-bold text-lg text-green-700">
                    <span class="block text-3xl">{{$petition->signatures_count}}</span>
                    <span>{{ $petition->signatures_count != 1 ? 'firme' : 'firma' }}</span>
                </div>

                <div class="justify-self-end font-bold text-lg text-gray-500">
                    <span class="block text-end text-3xl">{{$petition->obiettivo_firme}}</span>
                    <span>obiettivo</span>
                </div>
            </div>

            @auth
                @php
                    $hasSigned = \App\Models\Signature::where('user_id', auth()->id())->where('petition_id', $petition->id)->exists();
                @endphp

                @if (session('success'))
                    <x-success-alert :text="session('success')" />
                @elseif($hasSigned)
                    <x-danger-alert :boldText="'Attenzione!'" :text="'Hai già firmato questa petizione'" />
                @endif

                @if(!$hasSigned)
                    <h3 class="font-bold text-xl text-black mt-3 tracking-wide">Firma questa petizione</h3>
                    <div class="flex my-5">
                        <img src="{{ auth()->user()->img_url }}" alt="Avatar di {{ auth()->user()->nome }}" class="h-[50px] w-[50px] object-cover rounded-full inline-block justify-self-start self-start">
                        <span class="self-center ml-3 font-bold text-xs">{{ auth()->user()->nome }} {{ auth()->user()->cognome }}</span>
                    </div>

                    <h3 class="text-xs font-bold mb-2">Sto firmando perché… (opzionale)</h3>

                    <form action="/signatures" method="POST">
                        @csrf
                        <textarea class="form-textarea rounded-lg" name="commento" cols="25" rows="5"></textarea>
                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                        <input type="hidden" name="petition_id" value="{{ $petition->id }}">
                        <input type="submit" value="Firma la petizione ora" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800 mt-3">
                    </form>
                @endif
            @endauth

            @guest
                <x-call-to-action-button link="{{ route('login', ['redirect_to' => '/petitions/' . $petition->id]) }}" text="Accedi per firmare" class="mt-5" />
            @endguest
        </div>


    </section>
@endsection

