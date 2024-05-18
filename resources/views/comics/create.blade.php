@extends('layout.main')

@section('content')



<div class="container py-5 text-white">

    <h1 class="text-center ">Inserisci nuovo fumetto</h1>

    <form action="{{route('comics.store')}}" method="post">
        @csrf

        <div class="mb-3">

            <label for="title" class=" form-label fs-4">Title:</label>
            <input type="text" class="form-control  bg-dark opacity-75 text-white" id="title" name="title">


        </div>
        <div class="mb-3">

            <label for="thumb" class=" form-label fs-4">Thumb:</label>
            <input type="text" class="form-control bg-dark opacity-75 text-white" id="thumb" name="thumb">


        </div>

        <div class="mb-3">

            <label for="series" class=" form-label fs-4">Series:</label>
            <input type="text" class="form-control bg-dark opacity-75 text-white" id="series" name="series">


        </div>

        <div class="mb-3">

            <label for="type" class=" form-label fs-4">Type:</label>
            <input type="text" class="form-control bg-dark opacity-75 text-white" id="type" name="type">


        </div>
        <div class="mb-3">

            <label for="artists" class=" form-label fs-4">Artists:</label>
            <input type="text" class="form-control bg-dark opacity-75 text-white" id="artists" name="artists">


        </div>
        <div class="mb-3">

            <label for="writers" class=" form-label fs-4">Writers:</label>
            <input type="text" class="form-control bg-dark opacity-75 text-white" id="writers" name="writers">


        </div>

        <div class="row row-cols-2 ">

            <div class="mb-3">

                <label for="price" class=" form-label fs-4">Price:</label>
                <input type="text" class="form-control bg-dark opacity-75 text-white" id="price" name="price">


            </div>
            <div class="mb-3">

                <label for="sale_date" class=" form-label fs-4">Sale date:</label>
                <input type="date" class="form-control bg-dark opacity-75 text-white" id="sale_date" name="sale_date">


            </div>


        </div>

        <div class="mb-5">

            <label for="description" class=" form-label fs-4">Description:</label>
            <textarea class="w-100 bg-dark opacity-75 text-white" name="description" id="description" ></textarea>


        </div>

        <button type="submit" class="btn border-1  border-secondary-subtle me-2 text-white">Send</button>
        <button type="reset" class="btn border-1  border-secondary-subtle me-2 text-white">reset</button>




    </form>



</div>



@endsection
