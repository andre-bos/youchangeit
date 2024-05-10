<?php
    print_r($petition);
?>

@extends('layouts.front')

@section('main')
    <div class="flex flex-col items-center justify-center w-screen h-screen">
        <x-h2-title text="Qual è il tema che più si adatta alla tua petizione?" />

        <x-form-radio-inputs-categories :formData="$petition->category_id" :categories="$categories" />
        </div>
    </div>
@endsection
