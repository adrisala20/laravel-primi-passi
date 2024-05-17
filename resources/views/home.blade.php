@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <div class="container">
        <a href="blog">blog</a>
        <h2> Questa é la mia home page, io sono
        {{ $data['name']}} {{$data ['surname']}}</h2>
    </div>
</main>

@endsection
