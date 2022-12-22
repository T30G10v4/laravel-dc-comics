@extends('layouts.app')

@section('content')
    <div class="container">

        <h2>{{ $comic->title }}</h2>
        <img src="{{ $comic->thumb }}" alt="">

    </div>
@endsection
