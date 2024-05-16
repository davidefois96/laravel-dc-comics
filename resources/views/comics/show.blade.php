@extends('layout.main')



@section('content')


<div class="d-flex justify-content-center my-5">

    <div class="card mb-5 w-25 bg-dark text-center p-2  text-white  border-1 border-danger ">



        <img class="card-img-top" src="{{$comic->thumb}}" alt="{{$comic->title}}">




        <div class="card-body">
            <h4 class="mb-3">{{ $comic->title}}</h4>
            <h6 class="mb-4">Series: {{ $comic->series }}</h6>
            <p>Type: {{ $comic->type}}</p>
            <p>Date: {{ $comic->sale_date}}</p>
            <p>Price: {{ $comic->sale_date}}</p>
            <p class="mb-2">Date: {{$comic->sale_date}}</p>


            {{-- <a href="{{route('movieDetails',['id' => $movie['id']])}}" class="btn btn-danger ">Details</a> --}}

        </div>


    </div>



</div>


@endsection

