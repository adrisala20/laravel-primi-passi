@extends('layouts.app')

@section('title', 'blog')

@section('content')
<main>
    <div class="container">
    <a href="home">back home</a>
        <h2>
            la mia cagnolina si chiama {{$data['name']}}
        </h2>
    </div>  
</main>

@endsection
