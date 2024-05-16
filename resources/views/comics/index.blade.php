@extends('layout.main')



@section('content')


<div class="container mt-5">

    <div class="row row-cols-2 ">



        @foreach ($comics as $comic )

        <div class="col d-flex  justify-content-center ">

            <div class="card mb-5 w-50 bg-dark text-center p-2  text-white  border-1 border-danger ">



                <img class="card-img-top" src="{{$comic->thumb}}" alt="{{$comic->title}}">




                <div class="card-body">
                    <h4 class="mb-3">{{ $comic->title}}</h4>
                    <h6 class="mb-4">Series: {{ $comic->series }}</h6>
                    <p>Type: {{ $comic->type}}</p>
                    <p>Date: {{ $comic->sale_date}}</p>
                    <p>Price: {{ $comic->sale_date}}</p>
                    <p class="mb-2">Date: {{$comic->sale_date}}</p>


                    <a href="{{route('comics.show', $comic)}}" class="btn btn-danger ">Details</a>

                </div>


            </div>
        </div>

        @endforeach




    </div>






</div>


@endsection

