@extends('layout.main')

@section('content')



<div class="container py-5 text-white">

    <h1 class="text-center ">Inserisci nuovo fumetto</h1>

    <form action="{{route('comics.store')}}" method="post">
        @csrf

        <div class="mb-3">

            <label for="title" class=" form-label fs-4">Titolo:</label>
            <input type="text" class="form-control  bg-dark opacity-75 text-white" id="title" name="title">


        </div>
        <div class="mb-3">

            <label for="thumb" class=" form-label fs-4">Thumb:</label>
            <input type="text" class="form-control bg-dark opacity-75 text-white" id="thumb" name="thumb">


        </div>

        <div class="mb-3">

            <label for="series" class=" form-label fs-4">Serie:</label>
            <input type="text" class="form-control bg-dark opacity-75 text-white" id="series" name="series">


        </div>

        <div class="mb-3">

            <label for="type" class=" form-label fs-4">Tipo:</label>
            <input type="text" class="form-control bg-dark opacity-75 text-white" id="type" name="type">


        </div>
        <div class="mb-3">

            <label for="artists" class=" form-label fs-4">Artisti:</label>
            <input type="text" class="form-control bg-dark opacity-75 text-white" id="artists" name="artists">


        </div>
        <div class="mb-3">

            <label for="writers" class=" form-label fs-4">Scrittori:</label>
            <input type="text" class="form-control bg-dark opacity-75 text-white" id="writers" name="writers">


        </div>

        <div class="row row-cols-2 ">

            <div class="mb-3">

                <label for="price" class=" form-label fs-4">Prezzo:</label>
                <input type="text" class="form-control bg-dark opacity-75 text-white" id="price" name="price">


            </div>
            <div class="mb-3">

                <label for="sale_date" class=" form-label fs-4">Uscita:</label>
                <input type="date" class="form-control bg-dark opacity-75 text-white" id="sale_date" name="sale_date">


            </div>


        </div>

        <div class="mb-5">

            <label for="description" class=" form-label fs-4">Descrizione:</label>
            <textarea class="w-100 bg-dark opacity-75 text-white" name="description" id="description" ></textarea>


        </div>

        <button type="submit" class="btn border-1  border-secondary-subtle me-2 text-white">Invia</button>
        <button type="reset" class="btn border-1  border-secondary-subtle me-2 text-white">Reset</button>




    </form>



</div>



@endsection
