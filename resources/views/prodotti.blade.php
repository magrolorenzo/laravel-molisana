@extends('layouts.app')

@section("content")
    <section id="prodotti-section">

        <div class="container">
            @foreach ($pasta as $prodotto)
                <div class="card-prodotto">
                    {{-- Immagine prodotto --}}
                    <img src="{{$prodotto["src"]}}" alt="{{$prodotto["titolo"]}}">
                    {{-- Descrizione che compare in hover --}}
                    <div class="overlay">
                        <h2>
                            {{$prodotto["titolo"]}}
                        </h2>
                        <div class="description-container">
                            <p>
                                {{$prodotto["descrizione"]}}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </section>
@endsection
