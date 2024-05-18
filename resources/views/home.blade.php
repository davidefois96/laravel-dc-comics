@extends('layout.main')

@section('content')

<div class="container py-5 text-center text-white">

    <h1>Benvenuto utente</h1>

    <h2 class="my-5 ">Abbiamo {{ $comicsNumber }} volumi disponibili.</h2>

    <div class="d-flex justify-content-around  align-items-center mb-5">
        <h3 class="w-50  text-center">
            Da questa sezione ti sarà possibile consultare una lista sggiornata dei nostri nuovi volumi DC disponibili.

        </h3>


        <a class="btn btn-dark border-1 border-secondary-subtle me-2" href="{{ route('comics.index') }}">Vai alla lista dei volumi</a>


    </div>
    <div class="d-flex justify-content-around  align-items-center mb-5">

        <h3 class="w-50 text-white text-center">
            Da questa sezione sarà possibile aggiornare la lista aggiungendo un volume.
        </h3>



        <a class="btn btn-dark border-1 border-secondary-subtle me-2" href="{{ route('comics.create') }}">Aggiungi un volume</a>

    </div>

    <h3 class="my-5 text-center ">Dalla voce Comandi all' interno della lista sarà possibile interagire col singolo volume andando a visualizzarne i dettagli, modificarne il contenuto e se necessario cancellarlo definitivamente.</h3>






</div>

@endsection

