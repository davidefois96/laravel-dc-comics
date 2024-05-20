@extends('layout.main')

@section('content')



<div class="container py-5 text-white">

    <h1 class="text-center ">Inserisci nuovo fumetto</h1>

    <form action="{{$route}}" method="POST">
        @csrf
        @method($method)

        <div class="mb-3">

            <label for="title" class=" form-label fs-4">Titolo: *</label>
            <input type="text" class="form-control  bg-dark opacity-75 text-white @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title',$comic?->title)}}">

            @error('title')

                <small class="text-white">

                    {{$message}}

                </small>

            @enderror


        </div>
        <div class="mb-3">

            <label for="thumb" class=" form-label fs-4">Thumb: *</label>
            <input type="text" class="form-control bg-dark opacity-75 text-white @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{old('thumb',$comic?->thumb)}}">

            @error('thumb')

                <small class="text-white">

                    {{$message}}

                </small>

            @enderror


        </div>

        <div class="mb-3">

            <label for="series" class=" form-label fs-4">Serie: *</label>
            <input type="text" class="form-control bg-dark opacity-75 text-white @error('series') is-invalid @enderror" id="series" name="series" value="{{old('series',$comic?->series)}}">

            @error('series')

                <small class="text-white">

                    {{$message}}

                </small>

            @enderror


        </div>

        <div class="mb-3">

            <label for="type" class=" form-label fs-4">Tipo: *</label>
            <input type="text" class="form-control bg-dark opacity-75 text-white @error('type') is-invalid @enderror" id="type" name="type" value="{{old('type',$comic?->type)}}">

            @error('type')

                <small class="text-white">

                    {{$message}}

                </small>

            @enderror


        </div>
        <div class="mb-3">

            <label for="artists" class=" form-label fs-4">Artisti: *</label>
            <input type="text" class="form-control bg-dark opacity-75 text-white @error('artists') is-invalid @enderror" id="artists" name="artists" value="{{old('artists',$comic?->artists)}}">

            @error('artists')

                <small class="text-white">

                    {{$message}}

                </small>

            @enderror


        </div>
        <div class="mb-3">

            <label for="writers" class=" form-label fs-4">Scrittori:</label>
            <input type="text" class="form-control bg-dark opacity-75 text-white @error('writers') is-invalid @enderror" id="writers" name="writers" value="{{old('writers',$comic?->writers)}}">

            @error('writers')

                <small class="text-white">

                    {{$message}}

                </small>

            @enderror


        </div>

        <div class="row row-cols-2 ">

            <div class="mb-3">

                <label for="price" class=" form-label fs-4">Prezzo: *</label>
                <input type="text" class="form-control bg-dark opacity-75 text-white @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price',$comic?->price)}}">

                @error('price')

                    <small class="text-white">

                        {{$message}}

                    </small>

                @enderror


            </div>
            <div class="mb-3">

                <label for="sale_date" class=" form-label fs-4">Uscita *:</label>
                <input type="date" class="form-control bg-dark opacity-75 text-white @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{old('sale_date',$comic?->sale_date)}}">

                @error('sale_date')

                    <small class="text-white">

                        {{$message}}

                    </small>

                @enderror


            </div>


        </div>

        <div class="mb-5">

            <label for="description" class=" form-label fs-4">Descrizione:</label>
            <textarea class="w-100 bg-dark opacity-75 text-white" name="description" id="description" >{{old('description',$comic?->description)}}</textarea>


        </div>

        <button type="submit" class="btn border-1  border-secondary-subtle me-2 text-white">Invia</button>
        <button type="reset" class="btn border-1  border-secondary-subtle me-2 text-white">Reset</button>




    </form>



</div>



@endsection
