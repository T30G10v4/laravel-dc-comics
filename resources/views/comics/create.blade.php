@extends('layouts.app')

@section('content')
    <div class="container">

        <h2>crea un nuovo comics</h2>

        <div class="row justify-content-center">

            <div class="col-7">

                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div>
                        <label for="title">Titolo</label>
                        <input class="form-control" type="text" id="title" name="title">
                    </div>
                    <div>
                        <label for="title">Descrizione</label>
                        <input class="form-control" type="text" id="description" name="description">
                    </div>
                    <div>
                        <label for="title">Immagine</label>
                        <input class="form-control" type="text" id="thumb" name="thumb">
                    </div>
                    <div>
                        <label for="title">Prezzo</label>
                        <input class="form-control" type="text" id="price" name="price">
                    </div>
                    <div>
                        <label for="title">Serie</label>
                        <input class="form-control" type="text" id="series" name="series">
                    </div>
                    <div>
                        <label for="title">Data di vendita</label>
                        <input class="form-control" type="date" id="sale_date" name="sale_date">
                    </div>
                    <div>
                        <label for="title">Tipo</label>
                        <input class="form-control" type="text" id="type" name="type">
                    </div>

                    <button class="btn btn-success" type="submit">Inserisci</button>

                </form>

            </div>

        </div>
    </div>
@endsection
