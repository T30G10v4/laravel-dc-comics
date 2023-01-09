@extends('layouts.app')
@section('content')
    <div class="container">

        <h2>lista comics</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th>Titolo</th>
                    <th>Descrizione</th>
                    <th>Immagine</th>
                    <th>Prezzo</th>
                    <th>Serie</th>
                    <th>Data di Vendita</th>
                    <th>Tipo</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td scope="row">{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->description }}</td>
                        <td><img src="{{ $comic->thumb }}" alt=""></td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('comics.show', $comic->id) }}">Mostra</a>
                            <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Cancella</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
