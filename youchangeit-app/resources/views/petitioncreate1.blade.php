<?php

print_r($petition);

?>

@extends('layouts.front')

@section('main')
    <div class="flex flex-col items-center justify-center w-screen h-screen">
        <x-h2-title text="Fai il primo passo verso il cambiamento" addClass="mb-3" />
        <p class="text-gray-600 text-lg mb-6">Seleziona la portata della tua petizione:</p>
        <x-form-radio-inputs-location :formData="$petition->area_interesse ?? ''" />
    </div>
@endsection
