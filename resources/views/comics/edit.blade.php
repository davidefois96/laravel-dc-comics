@extends('layout.main')

@section('content')



<div class="container py-5 text-white">

    <h1 class="text-center">Modifica il fumetto {{$comic->title}}</h1>

    <form action="{{route('comics.update',$comic)}}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">

            <label for="title" class=" form-label fs-4">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">


        </div>
        <div class="mb-3">

            <label for="thumb" class=" form-label fs-4">Thumb:</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">


        </div>
        <div class="mb-3">

            <label for="series" class=" form-label fs-4 ">Series:</label>
            <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">


        </div>
        <div class="mb-3">

            <label for="type" class=" form-label fs-4">Type:</label>
            <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">


        </div>
        <div class="mb-3">

            <label for="artists" class=" form-label fs-4">Artists:</label>
            <input type="text" class="form-control" id="artists" name="artists" value="{{$comic->artists}}">


        </div>
        <div class="mb-3">

            <label for="writers" class=" form-label">Writers:</label>
            <input type="text" class="form-control" id="writers" name="writers" value="{{$comic->writers}}">


        </div>
        <div class="row row-cols-2 ">

            <div class="mb-3">

                <label for="price" class=" form-label fs-4">Price:</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}">


            </div>
            <div class="mb-3">

                <label for="sale_date" class=" form-label fs-4">Sale date:</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">


            </div>


        </div>

        <div class="mb-3">

            <label for="description" class=" form-label fs-4">Description:</label>
            <textarea class="w-100" name="description" id="description">{{$comic->description}}</textarea>


        </div>

        <button type="submit" class="btn btn-success me-3">Send</button>
        <button type="reset" class="btn btn-warning ">reset</button>




    </form>



</div>



@endsection
