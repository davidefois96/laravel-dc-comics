@extends('layout.main')



@section('content')






<div class="container py-5">

    @if (session('cancel'))

        <div class="alert alert-success mb-3 " role="alert">
        {{session('cancel')}}
        </div>

    @endif



    <table class="table  table-dark opacity-75 mb-5">
        <thead>
          <tr class="text-center fs-5">
            <th scope="col" class="ps-4">Id</th>
            <th scope="col" class="px-5">Immagine</th>
            <th scope="col" class="px-5">Titolo</th>
            <th scope="col" class="px-5">Tipo</th>
            <th scope="col" class="px-5">Serie</th>
            <th scope="col" class="px-5">Prezzo</th>
            <th scope="col" class="px-5">Uscita</th>
            <th scope="col" class="px-5">Comandi</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic )

              <tr class="py-3 align-middle text-center">
                <th class="fs-4 ps-4" scope="row">{{$comic->id}}</th>
                <td><img style="width: 80px" src="{{$comic->thumb}}" alt="{{$comic->title}}"></td>
                <td >{{$comic->title}}</td>
                <td>{{$comic->type}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->sale_date}}</td>

                <td class="py-2">
                    <div class="d-flex ">


                        <div><a href="{{route('comics.show', $comic)}}" class="btn border-1  border-secondary-subtle me-2 text-white"><i class="fa-solid fa-eye"></i></a></div>


                        <a href="{{route('comics.edit', $comic)}}" class="btn  border-1  border-secondary-subtle me-2 text-white"><i class="fa-solid fa-pencil"></i></a>

                        <form action="{{route('comics.destroy', $comic)}}" method="post" onsubmit="return confirm('Sei sicuro di voler eliminare {{$comic->title}}?')">
                            @csrf
                            @method('DELETE')


                            <button type="submit" class="btn border-1  border-secondary-subtle text-white "><i class="fa-solid fa-trash"></i></button>

                        </form>


                    </div>

                </td>
              </tr>

            @endforeach


        </tbody>
    </table>







</div>


@endsection

