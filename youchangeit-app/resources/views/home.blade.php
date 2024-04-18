@extends('layouts.front')

    @section('header')
    @endsection

    @section('main')

        <!-- Start Component -->
       <x-hero-section />
       <!-- End Component -->
       
        <!-- Start Component -->
        <x-petition-section :petitions="$petitions" />
        <!-- End Component -->
    @endsection