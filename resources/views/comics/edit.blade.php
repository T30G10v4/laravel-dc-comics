@extends('layouts.app')

@section('content')
    <div class="container">

        <h2>Modifica il Fumetto</h2>

        <div class="row justify-content-center">

            <div class="col-7">

                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div>
                        <label for="title">Titolo</label>
                        <input class="form-control" type="text" id="title" name="title" value="{{ $comic->title }}">
                    </div>
                    <div>
                        <label for="description">Descrizione</label>
                        <input class="form-control" type="text" id="description" name="description"
                            value="{{ $comic->description }}">
                    </div>
                    <div>
                        <label for="thumb">Immagine</label>
                        <input class="form-control" type="text" id="thumb" name="thumb"
                            value="{{ $comic->thumb }}">
                    </div>
                    <div>
                        <label for="price">Prezzo</label>
                        <input class="form-control" type="text" id="price" name="price"
                            value="{{ $comic->price }}">
                    </div>
                    <div>
                        <label for="series">Serie</label>
                        <input class="form-control" type="text" id="series" name="series"
                            value="{{ $comic->series }}">
                    </div>
                    <div>
                        <label for="sale_date">Data di vendita</label>
                        <input class="form-control" type="date" id="sale_date" name="sale_date"
                            value="{{ $comic->sale_date }}">
                    </div>
                    <div>
                        <label for="type">Tipo</label>
                        <input class="form-control" type="text" id="type" name="type"
                            value="{{ $comic->type }}">
                    </div>

                    <button class="btn btn-success" type="submit">Modifica</button>

                </form>

            </div>

        </div>
    </div>
@endsection
