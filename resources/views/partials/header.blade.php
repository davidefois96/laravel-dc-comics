<header class="  bg-dark p-3">

    <div class="d-flex justify-content-between align-items-center ">

        <div class="d-flex  ">

            <img class="me-2 " src="{{Vite::asset('resources/img/Logo.png')}}" alt="boolflix">




            <h1 class=" text-secondary  ">Boolcomics</h1>


        </div>


       <div class="d-flex">

        <a class="{{ Route::currentRouteName() == 'home'   ? 'btn btn-dark border-1  border-secondary-subtle  me-2 active' : 'btn btn-dark border-1  border-secondary-subtle  me-2' }} " href="{{route('home')}}">Home</a>

        <a class="{{ Route::currentRouteName() == 'comics.index'   ? 'btn btn-dark border-1  border-secondary-subtle  me-2 active' : 'btn btn-dark border-1  border-secondary-subtle  me-2' }}" href="{{route('comics.index')}}">Lista volumi</a>

        <a class="{{ Route::currentRouteName() == 'comics.create'   ? 'btn btn-dark border-1  border-secondary-subtle  me-2 active' : 'btn btn-dark border-1  border-secondary-subtle  me-2' }}" href="{{route('comics.create')}}">Aggiungi</a>



       </div>




    </div>



    </header>
