@extends('public.layout')

@section('content')

    IT leltározási rendszer!

    <hr>

    <a href="{{ route('login') }}">
        Belépés
    </a>
    <a href="{{ route('register') }}">
        Regisztráció
    </a>

@endsection
