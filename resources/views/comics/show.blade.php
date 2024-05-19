@extends('layout.main')



@section('content')


<div class="d-flex justify-content-around p-5  text-white ">

    <div class=" w-50">

     <h1 class="mb-5 text-center ">Copertina:</h1>

     <img src="{{$comic->thumb}}" alt="{{$comic->title}}">


    </div>


    <div class=" w-25">


      <h1 class="mb-5 text-center">Dettagli:</h1>


      <div class="d-flex justify-content-between ">

        <h2 class="mb-5 w-75 ">{{ $comic->title}}</h2>

        <div class="mb-5" >

            <a href="{{route('comics.edit', $comic)}}" class="btn border-1  border-secondary-subtle text-white "><i class="fa-solid fa-pencil"></i></a>

            <form action="{{route('comics.destroy', $comic)}}" method="post" onsubmit="return confirm('Sei sicuro di voler eliminare {{$comic->title}}?')">
                @csrf
                @method('DELETE')


                <button type="submit" class="btn border-1  border-secondary-subtle my-2  text-white"><i class="fa-solid fa-trash"></i></button>

            </form>

            <a href="{{route('comics.index', $comic)}}" class="btn border-1  border-secondary-subtle text-white mb-2 "><i class="fa-solid fa-list"></i></a>



        </div>



      </div>


      <div class="d-flex justify-content-between ">
        <div>
            <h3>Serie:</h3>
            <p class="mb-5">{{ $comic->series}}</p>
        </div>
        <div>

            <h3>Tipo:</h3>
            <p class="mb-5">{{ $comic->type}}</p>

        </div>


      </div>

      <h3>Descrizione:</h3>
      <p class="mb-5">{{$comic->description}}</p>
      <div class="d-flex justify-content-between ">

        <div>
            <h3>Prezzo:</h3>
            <p class="mb-5">{{ $comic->price}}</p>

        </div>

        <div>
            <h3>Uscita:</h3>
            <p class="mb-5">{{$comic->sale_date}}</p>

        </div>



      </div>


      @php
          $artists=explode(', ', $comic->artists);
          $writers=explode(', ', $comic->writers);
      @endphp


      <div class="d-flex justify-content-between ">
        <div>
            <h3>Artisti:</h3>
            <ul>
                @foreach ($artists as $artist)
                    <li>{{ $artist }}</li>
                @endforeach
            </ul>
        </div>
        <div>
            <h3>Scrittori:</h3>
            <ul>
                @foreach ($writers as $writer)
                    <li>{{ $writer }}</li>
                @endforeach
            </ul>
        </div>
      </div>

    </div>


</div>






@endsection

