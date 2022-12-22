@extends('layouts.app')
@section('content')
    <div class="container">

        <h2>lista comics</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->title }}</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><a class="btn btn-primary" href="{{ route('comics.show', $comic->id) }}">go</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
