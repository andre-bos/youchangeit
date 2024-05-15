<?php

print_r($petition);

?>

@extends('layouts.front')

@section('main')
    <div class="flex flex-col items-center justify-center w-screen h-screen">
        <x-h2-title text="Step 1 BIS" addClass="mb-3" />
        <x-form-locale />
    </div>
    
@endsection
